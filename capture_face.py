#!/usr/bin/env python3
import cv2
import sys
import os
import time
import argparse
import numpy as np
import logging
from pathlib import Path

def setup_logging():
    """Configure logging for the application."""
    logging.basicConfig(
        level=logging.INFO,
        format='%(asctime)s - %(levelname)s - %(message)s',
        datefmt='%Y-%m-%d %H:%M:%S'
    )

def log_message(message, level="INFO"):
    """Log a message with the specified level."""
    if level == "INFO":
        logging.info(message)
    elif level == "WARNING":
        logging.warning(message)
    elif level == "ERROR":
        logging.error(message)
    elif level == "DEBUG":
        logging.debug(message)
    else:
        logging.info(message)

def create_parser():
    parser = argparse.ArgumentParser(description='Capture a face image and save it for facial recognition')
    parser.add_argument('user_id', help='User ID for which to capture the face')
    return parser

def ensure_directory_exists(directory_path):
    """Ensure the specified directory exists, create it if it doesn't."""
    try:
        Path(directory_path).mkdir(parents=True, exist_ok=True)
        log_message(f"Directory confirmed: {directory_path}", "INFO")
        return True
    except Exception as e:
        log_message(f"Error creating directory {directory_path}: {str(e)}", "ERROR")
        return False

def main():
    try:
        # Set up logging
        setup_logging()
        
        # Parse command line arguments
        parser = create_parser()
        args = parser.parse_args()
        user_id = args.user_id
        
        log_message(f"Starting face capture for user ID: {user_id}", "INFO")
        
        # Ensure the images directory exists - use the same path as in new_recognize_face.py
        script_dir = os.path.dirname(os.path.abspath(__file__))
        images_dir = os.path.join(script_dir, "images")
        
        if not ensure_directory_exists(images_dir):
            log_message("Failed to create/verify images directory, exiting", "ERROR")
            return 1
        
        # Initialize the webcam
        cap = cv2.VideoCapture(0)
        
        if not cap.isOpened():
            log_message("Error: Could not open webcam", "ERROR")
            return 1
    
        # Load the face cascade classifier
        face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
        
        if face_cascade.empty():
            log_message("Error: Could not load face cascade classifier", "ERROR")
            cap.release()
            return 1
        
        log_message(f"Capturing face for user ID: {user_id}", "INFO")
        log_message("Please look at the camera and stay still...", "INFO")
    
        # Initialize variables
        face_detected = False
        countdown_started = False
        countdown_time = 3  # seconds
        start_time = 0
        
        while True:
            # Read a frame from the webcam
            ret, frame = cap.read()
            
            if not ret:
                print("Error: Failed to capture frame")
                break
                
            # Create a copy of the frame for display
            display_frame = frame.copy()
            
            # Convert to grayscale for face detection
            gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
            
            # Detect faces
            faces = face_cascade.detectMultiScale(
                gray,
                scaleFactor=1.1,
                minNeighbors=5,
                minSize=(30, 30)
            )
            
            # If face is detected
            if len(faces) > 0:
                if not face_detected:
                    face_detected = True
                    print("Face detected! Hold still...")
                
                # Draw a rectangle around the detected face
                for (x, y, w, h) in faces:
                    cv2.rectangle(display_frame, (x, y), (x+w, y+h), (0, 255, 0), 2)
                
                # Start countdown if not already started
                if not countdown_started:
                    start_time = time.time()
                    countdown_started = True
                    
                # Calculate remaining time
                elapsed_time = time.time() - start_time
                remaining_time = max(0, countdown_time - int(elapsed_time))
                
                # Show countdown on screen
                if remaining_time > 0:
                    cv2.putText(
                        display_frame, 
                        f"Capturing in: {remaining_time}", 
                        (10, 30), 
                        cv2.FONT_HERSHEY_SIMPLEX, 
                        1, 
                        (0, 255, 255), 
                        2
                    )
                else:
                    # Time's up, capture the face
                    # Take the largest face if multiple faces are detected
                    largest_face = max(faces, key=lambda rect: rect[2] * rect[3])
                    x, y, w, h = largest_face
                    
                    # Extract face region with some margin
                    margin = int(0.2 * max(w, h))
                    face_img = frame[
                        max(0, y - margin):min(frame.shape[0], y + h + margin),
                        max(0, x - margin):min(frame.shape[1], x + w + margin)
                    ]
                    
                    if face_img.size > 0:  # Ensure the face image is not empty
                        # Save the face image
                        try:
                            # Save the face image - make sure it's a high-quality image
                            image_path = os.path.join(images_dir, f"{user_id}.jpg")
                            success = cv2.imwrite(image_path, face_img, [cv2.IMWRITE_JPEG_QUALITY, 100])
                            
                            if success:
                                log_message(f"Face captured and saved as {image_path}", "INFO")
                                # Verify the saved image can be loaded and contains a face
                                test_img = cv2.imread(image_path)
                                if test_img is not None:
                                    test_gray = cv2.cvtColor(test_img, cv2.COLOR_BGR2GRAY)
                                    test_faces = face_cascade.detectMultiScale(test_gray, 1.1, 5)
                                    if len(test_faces) > 0:
                                        log_message("Face verification successful!", "INFO")
                                        # End the capture process after successful capture
                                        break
                                    else:
                                        log_message("Warning: Saved image verification found no faces", "WARNING")
                                else:
                                    log_message("Warning: Could not verify saved image", "WARNING")
                            else:
                                log_message("Error: Failed to save image", "ERROR")
                                break
                        except Exception as e:
                            log_message(f"Error saving face image: {str(e)}", "ERROR")
                            break
                    else:
                        log_message("Error: Could not extract face image", "ERROR")
                        break
            else:
                if face_detected:
                    face_detected = False
                    countdown_started = False
                    print("Face lost. Please stay still...")
                
            # Display instructions on screen
            if not face_detected:
                cv2.putText(
                    display_frame, 
                    "No face detected. Please look at the camera.", 
                    (10, 30), 
                    cv2.FONT_HERSHEY_SIMPLEX, 
                    0.7, 
                    (0, 0, 255), 
                    2
                )
            
            # Show the frame
            cv2.imshow("Capture Face", display_frame)
            
            # Break the loop if 'q' is pressed
            if cv2.waitKey(1) & 0xFF == ord('q'):
                print("Capture cancelled by user")
                break

        # Release resources
        cap.release()
        cv2.destroyAllWindows()
        
        # Return success if we reached this point
        return 0
        
    except Exception as e:
        log_message(f"Error during face capture: {str(e)}", "ERROR")
        return 1
    finally:
        # Ensure resources are released even if an exception occurs
        if 'cap' in locals() and cap is not None:
            cap.release()
        cv2.destroyAllWindows()

if __name__ == "__main__":
    try:
        exit_code = main()
        sys.exit(exit_code)
    except Exception as e:
        logging.error(f"Unhandled exception: {str(e)}")
        sys.exit(1)
