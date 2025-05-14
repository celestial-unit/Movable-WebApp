package org.example;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import org.mindrot.jbcrypt.BCrypt;

public class MainUserCrudFx extends Application {

    @Override
    public void start(Stage primaryStage) throws Exception {
        try {
            // Load the Login FXML
            System.out.println("Attempting to load Login.fxml...");
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_destinations.fxml"));
            Pane root = loader.load();
            System.out.println("Login.fxml loaded successfully");

            // Create a scene and set it to the stage
            Scene scene = new Scene(root);
            
            // Add the CSS stylesheet to the scene
            String cssPath = "/styles/app.css";
            System.out.println("Attempting to load CSS from: " + cssPath);
            try {
                String cssUrl = getClass().getResource(cssPath).toExternalForm();
                scene.getStylesheets().add(cssUrl);
                System.out.println("CSS loaded successfully: " + cssUrl);
            } catch (Exception e) {
                System.err.println("Error loading CSS: " + e.getMessage());
                e.printStackTrace();
            }
            
            // Set the scene to the stage and show it
            primaryStage.setScene(scene);
            primaryStage.setTitle("Login");
            System.out.println("Login scene set to stage successfully");
            primaryStage.show();
            
            // Debug hash password sample
            String password = "1234";  // The password you want to hash
            String hashedPassword = BCrypt.hashpw(password, BCrypt.gensalt());  // Hash the password
            System.out.println("Hashed password: " + hashedPassword);
        } catch (Exception e) {
            System.err.println("Error loading application: " + e.getMessage());
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        launch(args);
    }
}
