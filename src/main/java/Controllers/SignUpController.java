package Controllers;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.Scene;
import javafx.scene.layout.VBox;
import javafx.scene.control.*;
import javafx.stage.Stage;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;

import java.io.IOException;

public class SignUpController {

    @FXML
    private TextField usernameTf;
    @FXML
    private PasswordField passwordTf;

    // Handle Sign Up button click
    @FXML
    private void handleSignUp(ActionEvent event) throws IOException {
        // Here you can add logic for sign-up, e.g., validation or saving to a database

        // After successful sign-up, load the UserCrudController view
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/UserCrud.fxml"));
        Parent root = loader.load();

        // Create a new scene for UserCrud and set it to the primary stage
        Scene userCrudScene = new Scene(root);
        Stage stage = (Stage) usernameTf.getScene().getWindow(); // Get the current stage
        stage.setScene(userCrudScene);
        stage.show();
    }
}
