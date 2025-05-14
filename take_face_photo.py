#!/usr/bin/env python3

import cv2
import os
import time

def take_face_photo(user_id, output_dir="faces"):
    """
    Take a photo using the webcam and save it as a reference face for the specified user.
    """
    # Ensure the output directory exists
    os.makedirs(output_dir, exist_ok=True)
    
    # Open webcam
    print("Initializing webcam...")
    cap = cv2.VideoCapture(0)
    
    if not cap.isOpened():
        print("Error: Could not open webcam")
        return False
    
    print("Webcam initialized successfully")
    
    # Create output file path
    output_file = os.path.join(output_dir, f"{user_id}.jpg")
    
    # Countdown before taking photo
    for countdown in range(5, 0, -1):
        # Capture frame
        ret, frame = cap.read()
        
        if not ret:
            print("Error: Failed to capture frame")
            cap.release()
            return False
        
        # Add countdown text
        cv2.putText(
            frame,
            f"Taking photo in {countdown}...",
            (10, 30),
            cv2.FONT_HERSHEY_SIMPLEX,
            1,
            (0, 255, 255),
            2
        )
        
        # Add instructions
        cv2.putText(
            frame,
            "Position your face in the center",
            (10, frame.shape[0] - 60),
            cv2.FONT_HERSHEY_SIMPLEX,
            0.7,
            (255, 255, 255),
            2
        )
        
        cv2.putText(
            frame,
            "Press 'q' to cancel",
            (10, frame.shape[0] - 30),
            cv2.FONT_HERSHEY_SIMPLEX,
            0.7,
            (255, 255, 255),
            2
        )
        
        # Display the frame
        cv2.imshow("Take Face Photo", frame)
        
        # Break if 'q' is pressed
        if cv2.waitKey(1000) & 0xFF == ord('q'):
            print("Photo cancelled by user")
            cap.release()
            cv2.destroyAllWindows()
            return False
    
    # Capture final frame for the photo
    ret, frame = cap.read()
    
    if not ret:
        print("Error: Failed to capture frame")
        cap.release()
        cv2.destroyAllWindows()
        return False
    
    # Display "Smile!" message
    cv2.putText(
        frame,
        "Smile!",
        (int(frame.shape[1]/2) - 70, int(frame.shape[0]/2)),
        cv2.FONT_HERSHEY_SIMPLEX,
        1.5,
        (0, 255, 0),
        3
    )
    
    # Show the frame
    cv2.imshow("Take Face Photo", frame)
    cv2.waitKey(500)  # Show "Smile!" for 0.5 seconds
    
    # Capture the actual photo without text
    ret, frame = cap.read()
    
    if not ret:
        print("Error: Failed to capture frame")
        cap.release()
        cv2.destroyAllWindows()
        return False
    
    # Save the photo
    cv2.imwrite(output_file, frame)
    print(f"Photo saved as {output_file}")
    
    # Display the captured photo for confirmation
    cv2.putText(
        frame,
        "Photo captured!",
        (10, 30),
        cv2.FONT_HERSHEY_SIMPLEX,
        1,
        (0, 255, 0),
        2
    )
    
    cv2.imshow("Take Face Photo", frame)
    cv2.waitKey(2000)  # Show for 2 seconds
    
    # Release resources
    cap.release()
    cv2.destroyAllWindows()
    
    return True

if __name__ == "__main__":
    print("Welcome to Face Photo Capture")
    print("This will take a photo and save it as a reference for face recognition.")
    
    user_id = input("Enter your ID/name (e.g., 'john'): ").strip()
    
    if not user_id:
        print("Error: ID/name cannot be empty")
        exit(1)
    
    # Make sure the ID is valid for a filename
    user_id = "".join(c for c in user_id if c.isalnum() or c in "_-")
    
    if take_face_photo(user_id):
        print("Face photo captured successfully!")
        print("You can now run the face recognition script.")
    else:
        print("Failed to capture face photo.")
