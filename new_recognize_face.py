#!/usr/bin/env python3

import cv2
import os
import time
import logging
from simple_facerec import SimpleFacerec

# Configure logging
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

def recognize_face():
    """Recognize a face using the webcam."""
    # Initialize the SimpleFacerec object
    log_message("Initializing face recognition...", "INFO")
    sfr = SimpleFacerec()
    
    # Check if faces directory exists
    faces_dir = "images"
    if not os.path.exists(faces_dir):
        log_message(f"Creating faces directory at {os.path.abspath(faces_dir)}", "INFO")
        os.makedirs(faces_dir)
        log_message("Directory created successfully", "INFO")
        return None
    
    # Load and encode known faces
    log_message("Loading face encodings...", "INFO")
    sfr.load_encoding_images(faces_dir)
    
    # Check if any faces were loaded
    if len(sfr.known_face_names) == 0:
        log_message("No known faces loaded. Please add face images to the 'images' directory.", "WARNING")
        return None
    
    log_message(f"Loaded {len(sfr.known_face_names)} known faces", "INFO")
    
    # Initialize webcam
    log_message("Initializing webcam...", "INFO")
    cap = cv2.VideoCapture(0)
    
    if not cap.isOpened():
        log_message("Error: Could not open webcam", "ERROR")
        return None
    
    log_message("Webcam initialized successfully", "INFO")
    
    # Variables to track recognition
    match_found = False
    matched_user_id = None
    last_matched_id = None
    consecutive_matches = 0
    consecutive_matches_required = 3  # Require 3 consecutive matches for confidence
    
    # Recognition loop parameters
    max_attempts = 120  # About 4 seconds at 30fps
    attempts = 0
    
    while not match_found and attempts < max_attempts:
        # Capture frame from webcam
        ret, frame = cap.read()
        
        if not ret:
            log_message("Error: Failed to capture frame", "ERROR")
            break
        
        # Detect faces
        face_locations, face_names = sfr.detect_known_faces(frame)
        
        log_message(f"Found {len(face_locations)} face(s)", "INFO")
        
        # Display frame with face rectangles
        for face_loc, name in zip(face_locations, face_names):
            y1, x2, y2, x1 = face_loc[0], face_loc[1], face_loc[2], face_loc[3]
            
            # Draw rectangle around face
            cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 255, 0), 2)
            
            # Display name above face
            cv2.putText(frame, name, (x1, y1 - 10), cv2.FONT_HERSHEY_DUPLEX, 0.8, (0, 255, 0), 2)
            
            # Track consecutive matches
            if name != "Unknown":
                if name == last_matched_id:
                    consecutive_matches += 1
                else:
                    consecutive_matches = 1
                
                last_matched_id = name
                
                # Require multiple consecutive matches for confidence
                if consecutive_matches >= consecutive_matches_required:
                    match_found = True
                    matched_user_id = name
                    break
        
        # Display status message
        if len(face_locations) == 0:
            status_text = "No face detected"
            status_color = (0, 0, 255)  # Red
        else:
            status_text = "Recognizing face..."
            status_color = (255, 165, 0)  # Orange
            
        cv2.putText(
            frame, 
            status_text, 
            (10, 30), 
            cv2.FONT_HERSHEY_SIMPLEX, 
            1, 
            status_color, 
            2
        )
        
        # Add progress bar
        # Resize display frame to be larger
        display_frame = cv2.resize(frame, (640, 480))
        
        # Add progress bar
        progress = int((attempts / max_attempts) * 100)
        cv2.rectangle(display_frame, (10, 60), (10 + int(620 * (progress/100)), 80), (0, 255, 0), -1)
        cv2.putText(
            display_frame,
            f"Time remaining: {int((max_attempts - attempts) / 30)} seconds", 
            (10, 100), 
            cv2.FONT_HERSHEY_SIMPLEX, 
            0.7, 
            (255, 255, 255), 
            2
        )
        
        # Show frame in a window that should appear on top
        cv2.imshow("Face Recognition", display_frame)
        cv2.setWindowProperty("Face Recognition", cv2.WND_PROP_TOPMOST, 1)
        
        # Break if 'q' is pressed
        if cv2.waitKey(1) & 0xFF == ord('q'):
            log_message("Recognition cancelled by user", "INFO")
            break
            
        attempts += 1
    
    # Display final status before closing
    if match_found:
        status_text = f"Recognized: {matched_user_id}"
        status_color = (0, 255, 0)  # Green
    else:
        status_text = "Not recognized"
        status_color = (0, 0, 255)  # Red
    
    # Show final message
    if ret:  # Only if we have a valid frame
        cv2.putText(
            frame, 
            status_text, 
            (10, 30), 
            cv2.FONT_HERSHEY_SIMPLEX, 
            1, 
            status_color, 
            2
        )
        
        # Resize display frame to be larger
        display_frame = cv2.resize(frame, (640, 480))
        
        cv2.imshow("Face Recognition", display_frame)
        cv2.setWindowProperty("Face Recognition", cv2.WND_PROP_TOPMOST, 1)
        cv2.waitKey(2000)  # Show result for 2 seconds
    
    # Release resources
    cap.release()
    cv2.destroyAllWindows()
    
    return matched_user_id

if __name__ == "__main__":
    # Interactive recognition
    log_message("Starting face recognition...")
    user_id = recognize_face()
    
    if user_id:
        log_message(f"User recognized: {user_id}")
    else:
        log_message("No user recognized")
