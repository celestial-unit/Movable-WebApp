#!/usr/bin/env python3
"""
Test script to check if face_recognition can be imported and access its dependencies.
"""
import sys
import os
import platform
import subprocess
import pkg_resources

print(f"Python version: {sys.version}")
print(f"Python executable: {sys.executable}")
print(f"Platform: {platform.platform()}")
print(f"Python path: {sys.path}")

# Print environment variables that might affect Python
print("\nRelevant Environment Variables:")
for env_var in ['PYTHONPATH', 'PYTHONHOME', 'LD_LIBRARY_PATH', 'PATH']:
    print(f"{env_var}: {os.environ.get(env_var, 'Not set')}")

# Get pip list information
print("\nInstalled Packages:")
try:
    pip_list = subprocess.check_output([sys.executable, '-m', 'pip', 'list']).decode('utf-8')
    print(pip_list)
except Exception as e:
    print(f"Error getting pip list: {e}")

# Additional package information
print("\nDetailed Package Information:")
for package_name in ['face_recognition', 'face_recognition_models', 'opencv-python', 'numpy', 'dlib']:
    try:
        package = pkg_resources.get_distribution(package_name)
        print(f"{package_name}:")
        print(f"  Version: {package.version}")
        print(f"  Location: {package.location}")
        
        # Get dependencies
        try:
            dependencies = [str(r) for r in package.requires()]
            print(f"  Dependencies: {dependencies}")
        except Exception:
            print("  Dependencies: Unable to retrieve")
        
        # For face_recognition, check if it has the expected modules
        if package_name == 'face_recognition':
            try:
                import face_recognition
                print(f"  Module Path: {face_recognition.__file__}")
                print(f"  Module Directory: {os.path.dirname(face_recognition.__file__)}")
                print("  Submodules:", dir(face_recognition))
            except Exception as e:
                print(f"  Error inspecting module: {e}")
    except pkg_resources.DistributionNotFound:
        print(f"{package_name}: Not installed")
    except Exception as e:
        print(f"{package_name}: Error getting info - {e}")
try:
    print("Attempting to import face_recognition...")
    import face_recognition
    print("✅ face_recognition imported successfully")
    
    # Try to access the models directory path
    print("\nChecking for face_recognition_models...")
    
    if hasattr(face_recognition, 'api'):
        print("✅ face_recognition.api exists")
    else:
        print("❌ face_recognition.api not found")
    
    # Try to access a function that uses the models
    try:
        # Create a small test array that resembles an image
        import numpy as np
        test_image = np.zeros((10, 10, 3), dtype=np.uint8)
        
        # Try using a function that would need the models
        print("\nTesting face_recognition functionality...")
        face_recognition.face_encodings(test_image)
        print("✅ face_recognition.face_encodings works with test image")
    except Exception as e:
        print(f"❌ Error when using face_recognition functionality: {e}")
    
    # Try to explicitly import face_recognition_models
    try:
        print("\nAttempting to import face_recognition_models directly...")
        import face_recognition_models
        print(f"✅ face_recognition_models imported successfully from {face_recognition_models.__file__}")
    except ImportError as e:
        print(f"❌ Failed to import face_recognition_models directly: {e}")
    
    # Check the path where face_recognition_models should be installed
    import os
    import site
    print("\nChecking potential locations for face_recognition_models:")
    
    # Check in site-packages
    for site_dir in site.getsitepackages():
        model_path = os.path.join(site_dir, "face_recognition_models")
        if os.path.exists(model_path):
            print(f"✅ Found models at: {model_path}")
        else:
            print(f"❌ Not found at: {model_path}")
    
    # Check for dlib and its functionality
    print("\nChecking dlib installation (required by face_recognition):")
    try:
        import dlib
        print(f"✅ dlib version {dlib.__version__} found at {dlib.__file__}")
        
        # Test basic dlib functionality
        try:
            detector = dlib.get_frontal_face_detector()
            print("✅ Successfully created dlib face detector")
        except Exception as e:
            print(f"❌ Error creating dlib face detector: {e}")
            
    except ImportError as e:
        print(f"❌ Failed to import dlib: {e}")
    except Exception as e:
        print(f"❌ Error with dlib: {e}")
    
    # Try to find the actual model files
    print("\nSearching for actual model files:")
    model_file_paths = [
        "shape_predictor_68_face_landmarks.dat",
        "shape_predictor_5_face_landmarks.dat",
        "dlib_face_recognition_resnet_model_v1.dat"
    ]
    
    for site_dir in site.getsitepackages():
        for root, dirs, files in os.walk(site_dir):
            for model_file in model_file_paths:
                if model_file in files:
                    print(f"✅ Found model file: {os.path.join(root, model_file)}")
    
except ImportError as e:
    print(f"❌ Failed to import face_recognition: {e}")
except Exception as e:
    print(f"❌ An unexpected error occurred: {e}")

