package main;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.net.URL;

public class MainApp extends Application {

    @Override
    public void start(Stage stage) throws Exception {
        // Debug: Check the location of the FXML file



        // Load the FXML file
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("/DestiationManagement.fxml"));
        Parent root = fxmlLoader.load();

        // Create the scene and set it on the stage
        Scene scene = new Scene(root);
        stage.setTitle("Event Management"); // Title of the window
        stage.setScene(scene);
        stage.show();
    }

    public static void main(String[] args) {
        // Launch the JavaFX application
        launch(args);
    }
}
