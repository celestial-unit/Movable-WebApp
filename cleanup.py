#!/usr/bin/env python3
"""
cleanup.py - Script to properly release resources (like webcam) used by the facial recognition system

This script ensures all system resources (webcam, windows, etc.) are properly released.
"""

import os
import sys
import cv2
import logging

# Configure logging
logging.basicConfig(
    level=logging.INFO,
    format='%(asctime)s - %(name)s - %(levelname)s - %(message)s'
)
logger = logging.getLogger(__name__)

def release_webcam(webcam_id=0):
    """
    Release the webcam resource.
    
    Args:
        webcam_id (int): ID of the webcam to release, defaults to 0 for the default camera
        
    Returns:
        bool: True if successfully released, False otherwise
    """
    try:
        # Try to open the webcam
        cap = cv2.VideoCapture(webcam_id)
        
        # Check if the webcam is opened
        if cap.isOpened():
            # Release the webcam
            cap.release()
            logger.info(f"Webcam {webcam_id} successfully released")
            return True
        else:
            logger.warning(f"Webcam {webcam_id} was not open")
            return False
    except Exception as e:
        logger.error(f"Error releasing webcam {webcam_id}: {str(e)}")
        return False

def main():
    """
    Main function to handle command line arguments and release resources.
    """
    # Default webcam ID
    webcam_id = 0
    
    # Check if webcam ID is provided as command-line argument
    if len(sys.argv) > 1:
        try:
            webcam_id = int(sys.argv[1])
        except ValueError:
            logger.error(f"Invalid webcam ID: {sys.argv[1]}. Using default (0).")
    
    # Release the webcam
    success = release_webcam(webcam_id)
    
    # Exit with appropriate status code
    sys.exit(0 if success else 1)

if __name__ == "__main__":
    main()
