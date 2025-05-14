"""
import cv2
from simple_facerec import SimpleFacerec

# Encode faces from a folder
sfr = SimpleFacerec()
sfr.load_encoding_images("images/")

# Load Camera
cap = cv2.VideoCapture(0)  # Essayez différents indices de périphérique (0, 1, 2, ...) si nécessaire

if not cap.isOpened():
    print("Erreur: Impossible d'ouvrir la webcam.")
else:
    print("Webcam ouverte avec succès.")

while True:
    ret, frame = cap.read()

    if not ret:
        print("Erreur: Impossible de lire le cadre depuis la webcam.")
        break

    # Detect Faces
    face_locations, face_names = sfr.detect_known_faces(frame)
    for face_loc, name in zip(face_locations, face_names):
        y1, x2, y2, x1 = face_loc[0], face_loc[1], face_loc[2], face_loc[3]

        cv2.putText(frame, name, (x1, y1 - 10), cv2.FONT_HERSHEY_DUPLEX, 1, (0, 0, 200), 2)
        cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 0, 200), 4)

    cv2.imshow("Frame", frame)

    key = cv2.waitKey(1)
    if key == 27 or key == ord('q') or key == ord('Q'):  # Quitter si la touche "Esc", "q", ou "Q" est enfoncée
        break
    elif cv2.getWindowProperty("Frame", cv2.WND_PROP_VISIBLE) < 1:  # Fermer la fenêtre si l'utilisateur appuie sur le bouton de fermeture
        break

cap.release()
cv2.destroyAllWindows()
"""
import sys
import cv2
from simple_facerec import SimpleFacerec

# Vérifiez si le chemin d'accès au dossier des images a été fourni en argument
if len(sys.argv) < 2:
    print("Veuillez spécifier le chemin d'accès au dossier des images.")
    sys.exit(1)

images_folder_path = sys.argv[1]

# Encode faces from a folder
sfr = SimpleFacerec()
sfr.load_encoding_images(images_folder_path)

# Load Camera
cap = cv2.VideoCapture(0)

while True:
    ret, frame = cap.read()

    if not ret:
        break

    # Detect Faces
    face_locations, face_names = sfr.detect_known_faces(frame)
    for face_loc, name in zip(face_locations, face_names):
        y1, x2, y2, x1 = face_loc[0], face_loc[1], face_loc[2], face_loc[3]
        cv2.putText(frame, name, (x1, y1 - 10), cv2.FONT_HERSHEY_DUPLEX, 1, (0, 0, 200), 2)
        cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 0, 200), 4)

    cv2.imshow("Reconnaissance faciale", frame)

    key = cv2.waitKey(1)
    if key == 27 or key == ord('q') or key == ord('Q'):  # Quitter si la touche "Esc", "q", ou "Q" est enfoncée
        break
    elif cv2.getWindowProperty("Reconnaissance faciale", cv2.WND_PROP_VISIBLE) < 1:  # Fermer la fenêtre si l'utilisateur appuie sur le bouton de fermeture
        break

# Release the camera when closing the window
cap.release()
cv2.destroyAllWindows()
