import os
import logging
import json
import numpy as np
import tensorflow as tf
import mediapipe as mp
from flask import Flask, request, jsonify
from flask_cors import CORS
from PIL import Image
import io
import cv2

# Configure logging
logging.basicConfig(
    level=logging.INFO,
    format='%(asctime)s - %(name)s - %(levelname)s - %(message)s',
    handlers=[
        logging.FileHandler('sign_language_service.log'),
        logging.StreamHandler()
    ]
)
logger = logging.getLogger(__name__)

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

# Global variables
MODEL_PATH = 'point_history_classifier.hdf5'
model = None
mp_holistic = mp.solutions.holistic
mp_drawing = mp.solutions.drawing_utils
holistic = mp_holistic.Holistic(
    static_image_mode=False,
    model_complexity=1,
    min_detection_confidence=0.5,
    min_tracking_confidence=0.5
)

# Map indices to gesture classes from the original model
GESTURE_CLASSES = {
    0: 'hello', 
    1: 'thanks', 
    2: 'iloveyou'
}

# Buffer to store frames for sequence-based prediction
frame_buffer = []
SEQUENCE_LENGTH = 30  # Must match frontend's SEQUENCE_LENGTH

def create_model():
    """Create a compatible model architecture that matches the original implementation."""
    try:
        # Create a model with the exact same architecture as the original
        # Using 1662 features (as in the original implementation)
        input_shape = (SEQUENCE_LENGTH, 1662)  # Full feature set: pose, face, left_hand, right_hand
        
        model = tf.keras.Sequential()
        model.add(tf.keras.layers.LSTM(64, return_sequences=True, activation='relu', input_shape=input_shape))
        model.add(tf.keras.layers.LSTM(128, return_sequences=True, activation='relu'))
        model.add(tf.keras.layers.LSTM(64, return_sequences=False, activation='relu'))
        model.add(tf.keras.layers.Dense(64, activation='relu'))
        model.add(tf.keras.layers.Dense(32, activation='relu'))
        model.add(tf.keras.layers.Dense(len(GESTURE_CLASSES), activation='softmax'))
        
        model.compile(
            optimizer=tf.keras.optimizers.Adam(learning_rate=0.0001),
            loss='categorical_crossentropy',
            metrics=['categorical_accuracy']
        )
        
        logger.info("Created model with architecture: 3 LSTM layers (64->128->64) and 3 Dense layers (64->32->output)")
        return model
    except Exception as e:
        logger.error(f"Error creating model: {str(e)}")
        return None

def load_model():
    """Load the TensorFlow LSTM model using a strategy similar to the original implementation."""
    global model
    try:
        if not os.path.exists(MODEL_PATH) and not os.path.exists('model_weights.h5'):
            logger.error(f"Neither {MODEL_PATH} nor model_weights.h5 found")
            return False
        
        # Create a new model with the correct architecture
        new_model = create_model()
        if new_model is None:
            return False
        
        # Try different approaches to load the weights
        loaded = False
        
        # Approach 1: Try loading weights directly from model_weights.h5
        if os.path.exists('model_weights.h5'):
            try:
                logger.info("Attempting to load weights from model_weights.h5")
                new_model.load_weights('model_weights.h5')
                logger.info("Successfully loaded weights from model_weights.h5")
                loaded = True
            except Exception as e:
                logger.warning(f"Failed to load weights from model_weights.h5: {str(e)}")
        
        # Approach 2: Try loading weights from the full model file
        if not loaded and os.path.exists(MODEL_PATH):
            try:
                logger.info(f"Attempting to load weights from {MODEL_PATH}")
                new_model.load_weights(MODEL_PATH)
                logger.info(f"Successfully loaded weights from {MODEL_PATH}")
                loaded = True
            except Exception as e:
                logger.warning(f"Failed to load weights directly from {MODEL_PATH}: {str(e)}")
        
        # Approach 3: Try loading the full model with custom_objects and transfer weights
        if not loaded and os.path.exists(MODEL_PATH):
            try:
                logger.info("Attempting to load full model and transfer weights")
                # Define custom objects to handle time_major parameter
                custom_objects = {'time_major': lambda x: x}
                original_model = tf.keras.models.load_model(
                    MODEL_PATH, 
                    compile=False,
                    custom_objects=custom_objects
                )
                
                # Transfer weights from original model to new model
                for i, layer in enumerate(original_model.layers):
                    if i < len(new_model.layers):
                        try:
                            new_model.layers[i].set_weights(layer.get_weights())
                            logger.info(f"Transferred weights for layer {i}")
                        except Exception as layer_error:
                            logger.warning(f"Could not transfer weights for layer {i}: {str(layer_error)}")
                
                logger.info("Model weights transferred from original model")
                loaded = True
            except Exception as e:
                logger.warning(f"Failed to transfer weights from original model: {str(e)}")
        
        if loaded:
            # Set the global model
            model = new_model
            
            # Verify the model by testing a prediction with a dummy input
            dummy_input = np.zeros((1, SEQUENCE_LENGTH, 1662))
            _ = model.predict(dummy_input, verbose=0)
            logger.info("Model verified with test prediction")
            return True
        else:
            logger.error("All weight loading approaches failed")
            return False
    except Exception as e:
        logger.error(f"Error in load_model: {str(e)}")
        return False

def mediapipe_detection(image):
    """Process an RGB image through the MediaPipe model."""
    image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
    image_rgb.flags.writeable = False  # Image is no longer writeable
    results = holistic.process(image_rgb)  # Make prediction
    return results

def extract_keypoints(results):
    """Extract keypoints from MediaPipe results following the original implementation."""
    # Extract pose landmarks (33 landmarks, 4 values each: x, y, z, visibility)
    pose = np.array([[res.x, res.y, res.z, res.visibility] for res in results.pose_landmarks.landmark]).flatten() if results.pose_landmarks else np.zeros(33*4)
    
    # Extract face landmarks (468 landmarks, 3 values each: x, y, z)
    face = np.array([[res.x, res.y, res.z] for res in results.face_landmarks.landmark]).flatten() if results.face_landmarks else np.zeros(468*3)
    
    # Extract left hand landmarks (21 landmarks, 3 values each: x, y, z)
    lh = np.array([[res.x, res.y, res.z] for res in results.left_hand_landmarks.landmark]).flatten() if results.left_hand_landmarks else np.zeros(21*3)
    
    # Extract right hand landmarks (21 landmarks, 3 values each: x, y, z)
    rh = np.array([[res.x, res.y, res.z] for res in results.right_hand_landmarks.landmark]).flatten() if results.right_hand_landmarks else np.zeros(21*3)
    
    # Combine all landmarks for a total of 1662 features
    return np.concatenate([pose, face, lh, rh])

def preprocess_features(features):
    """Prepare the extracted features for model input."""
    # Ensure we have the correct feature dimensions (1662)
    if len(features) != 1662:
        logger.warning(f"Feature length mismatch: got {len(features)}, expected 1662")
        # Pad or truncate if necessary
        if len(features) < 1662:
            features = np.pad(features, (0, 1662 - len(features)), 'constant')
        else:
            features = features[:1662]
    
    return features.reshape(1, 1662)  # Reshape for single frame input

def predict_gesture(feature_sequence):
    """Predict gesture based on a sequence of extracted features."""
    if model is None:
        logger.error("Model not loaded")
        return None, 0
    
    try:
        # Stack the sequence properly
        sequence_data = np.vstack([frame for frame in feature_sequence])
        
        # Make sure we have exactly SEQUENCE_LENGTH frames (pad or truncate if needed)
        if sequence_data.shape[0] < SEQUENCE_LENGTH:
            padding = np.zeros((SEQUENCE_LENGTH - sequence_data.shape[0], sequence_data.shape[1]))
            sequence_data = np.vstack([sequence_data, padding])
        elif sequence_data.shape[0] > SEQUENCE_LENGTH:
            sequence_data = sequence_data[:SEQUENCE_LENGTH]
        
        # Reshape to the model's expected input shape
        sequence_data = sequence_data.reshape(1, SEQUENCE_LENGTH, 1662)
        
        # Make prediction
        prediction = model.predict(sequence_data, verbose=0)
        predicted_class = np.argmax(prediction)
        confidence = float(prediction[0][predicted_class])
        
        if predicted_class in GESTURE_CLASSES:
            return GESTURE_CLASSES[predicted_class], confidence
        else:
            logger.warning(f"Predicted class {predicted_class} not in gesture classes")
            return None, 0
    except Exception as e:
        logger.error(f"Error in prediction: {str(e)}")
        return None, 0

@app.route('/health', methods=['GET'])
def health_check():
    """Health check endpoint."""
    if model is None:
        return jsonify({
            'status': 'error', 
            'message': 'Model not loaded'
        }), 500
    
    return jsonify({
        'status': 'ok', 
        'message': 'Service is running'
    })

@app.route('/predict-stream', methods=['POST'])
def predict_stream():
    """Endpoint to receive image frames and predict sign language gestures."""
    global frame_buffer
    
    try:
        if 'file' not in request.files:
            return jsonify({
                'status': 'error',
                'message': 'No file part in the request'
            }), 400
        
        file = request.files['file']
        
        # Open and process the image
        img = Image.open(io.BytesIO(file.read()))
        img_array = np.array(img)
        
        # Process with MediaPipe holistic model
        results = mediapipe_detection(img_array)
        
        # Extract keypoints (full feature set: pose, face, hands)
        keypoints = extract_keypoints(results)
        processed_features = preprocess_features(keypoints)
        
        # Add to buffer
        frame_buffer.append(processed_features)
        
        # Keep only the most recent frames
        if len(frame_buffer) > SEQUENCE_LENGTH:
            frame_buffer = frame_buffer[-SEQUENCE_LENGTH:]
        
        # Prepare response
        response = {
            'buffer_status': f'collecting ({len(frame_buffer)}/{SEQUENCE_LENGTH})'
        }
        
        # If buffer is full, make prediction
        if len(frame_buffer) == SEQUENCE_LENGTH:
            gesture, confidence = predict_gesture(frame_buffer)
            frame_buffer = []  # Clear buffer after prediction
            
            if gesture:
                response['gesture'] = gesture
                response['confidence'] = confidence
                response['buffer_status'] = 'ready'
        
        return jsonify(response)
    
    except Exception as e:
        logger.error(f"Error in predict_stream: {str(e)}")
        return jsonify({
            'status': 'error',
            'message': str(e)
        }), 500

if __name__ == '__main__':
    # Copy model_weights.h5 from the source directory if it doesn't exist in the current directory
    weights_file = 'model_weights.h5'
    if not os.path.exists(weights_file):
        source_weights = os.path.expanduser('~/Downloads/Realtime-Sign-Language-Detection-Using-LSTM-Model-main/model_weights.h5')
        if os.path.exists(source_weights):
            import shutil
            shutil.copy(source_weights, weights_file)
            logger.info(f"Copied weights file from {source_weights}")
    
    if load_model():
        logger.info("Starting Flask server on port 5000")
        app.run(host='0.0.0.0', port=5000, debug=False)
    else:
        logger.error("Failed to load model, service not started")

