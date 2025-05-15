package Controller;

import Models.FaceRecognitionModel;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import org.json.JSONObject;

import java.io.File;
import java.io.IOException;

public class FaceRecognitionController {
    private final FaceRecognitionModel faceRecognitionModel;
    private File selectedImageFile;

    @FXML
    private Label resultLabel;
    @FXML
    private ImageView imageView;

    public FaceRecognitionController() {
        this.faceRecognitionModel = new FaceRecognitionModel();
    }

    // 📌 Sélectionner une image depuis l'ordinateur
    @FXML
    public void handleImageSelection(ActionEvent actionEvent) {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Sélectionner une image");
        fileChooser.getExtensionFilters().add(new FileChooser.ExtensionFilter("Images", "*.png", "*.jpg", "*.jpeg"));

        Stage stage = (Stage) resultLabel.getScene().getWindow();
        selectedImageFile = fileChooser.showOpenDialog(stage);

        if (selectedImageFile != null) {
            Image image = new Image(selectedImageFile.toURI().toString());
            imageView.setImage(image);
            resultLabel.setText("Image chargée. Cliquez sur 'Analyser'.");
        } else {
            resultLabel.setText("Aucune image sélectionnée.");
        }
    }

    // 📌 Analyser l'image avec Face++
    @FXML
    public void analyzeFace(ActionEvent actionEvent) {
        if (selectedImageFile != null) {
            try {
                // Utilisation de l'image sélectionnée pour l'analyse
                String response = faceRecognitionModel.detectFaces(selectedImageFile.getAbsolutePath());
                System.out.println("Réponse API : " + response);
                int faceCount = faceRecognitionModel.getFaceCount(response);
                boolean isSatisfied = isPersonSatisfied(response);

                // Affichage des résultats
                if (faceCount > 0) {
                    resultLabel.setText("Visages détectés : " + faceCount + "\nSatisfaction : " + (isSatisfied ? "Oui 😃" : "Non 😐"));
                } else {
                    resultLabel.setText("Aucun visage détecté.");
                }
            } catch (IOException e) {
                resultLabel.setText("Erreur lors de l'analyse de l'image.");
                e.printStackTrace();
            }
        } else {
            resultLabel.setText("Veuillez sélectionner une image d'abord !");
        }
    }

    // 📌 Vérifier si une personne est satisfaite
    private boolean isPersonSatisfied(String jsonResponse) {
        JSONObject jsonObject = new JSONObject(jsonResponse);
        if (!jsonObject.has("faces") || jsonObject.getJSONArray("faces").isEmpty()) {
            return false;
        }

        JSONObject faceAttributes = jsonObject.getJSONArray("faces").getJSONObject(0).getJSONObject("attributes");
        if (faceAttributes.has("emotion")) {
            double happiness = faceAttributes.getJSONObject("emotion").getDouble("happiness");
            return happiness > 50.0;
        }
        return false;
    }
}
