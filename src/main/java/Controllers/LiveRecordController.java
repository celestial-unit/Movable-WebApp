package Controller;
import javafx.application.Application;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.event.ActionEvent;

import java.awt.Desktop;
import java.io.IOException;
import java.net.URI;
import java.net.URL;

public class LiveRecordController  extends Application {
    @FXML
    private Button openBrowserButton;

    @FXML
    private Button backButton;  // Ensure this is properly annotated

    @Override
    public void start(Stage primaryStage) throws Exception {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("livestream.fxml"));
        AnchorPane root = loader.load();

        Scene scene = new Scene(root, 800, 600);
        primaryStage.setTitle("Live Stream");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    @FXML
    private void openInBrowser() {
        // Open the live stream in browser
        try {
            Desktop.getDesktop().browse(new URI("https://vdo.ninja/?view=qVXmwu4"));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void navigateBack(ActionEvent event) {
        try {
            // Use getResource() with a leading slash and the full path
            URL weatherFXML = getClass().getResource("/driver.fxml");

            if (weatherFXML == null) {
                showErrorAlert("Fichier FXML GestionRecord introuvable");
                return;
            }

            Parent root = FXMLLoader.load(weatherFXML);
            Stage stage = (Stage) ((Button)event.getSource()).getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            showErrorAlert("Impossible de charger la page GestionRecord: " + e.getMessage());
            e.printStackTrace(); // Log the full stack trace for debugging
        }
    }

    // Method to show an error alert
    private void showErrorAlert(String message) {
        Alert alert = new Alert(AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText("Une erreur est survenue");
        alert.setContentText(message);
        alert.showAndWait();
    }

    public static void main(String[] args) {
        launch(args);
    }
}