package Controllers;

import Models.Reclamation;
import utils.SharedContext;
import Services.ReclamationService;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.ListView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.event.ActionEvent;

import java.io.IOException;
import java.sql.SQLException;

public class ReclamationController {

    @FXML
    private TextField titleTf;

    @FXML
    private TextArea descriptionTf;

    @FXML
    private ListView<String> reclamationsListView;

    private ReclamationService reclamationService;

    public ReclamationController() {
        reclamationService = new ReclamationService();
    }

    @FXML
    public void initialize() {
        try {
            loadUserReclamations(); // Load only the logged-in user's reclamations
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void handleSubmitReclamation() {
        String title = titleTf.getText();
        String description = descriptionTf.getText();
        int userId = SharedContext.getLoggedInUserId(); // Get the logged-in user's ID

        if (!title.isEmpty() && !description.isEmpty()) {
            Reclamation reclamation = new Reclamation(title, description, "Pending", userId);
            try {
                // Create the new reclamation in the database
                reclamationService.create(reclamation);
                loadUserReclamations(); // Reload the user's reclamations
                titleTf.clear();
                descriptionTf.clear();
            } catch (SQLException e) {
                e.printStackTrace();
                // Optionally show an error message to the user
            }
        } else {
            // Optionally show a message that title or description cannot be empty
        }
    }

    private void loadUserReclamations() throws SQLException {
        ObservableList<String> reclamations = FXCollections.observableArrayList();
        int userId = SharedContext.getLoggedInUserId(); // Get the logged-in user's ID

        // Fetch only the reclamations related to the logged-in user
        for (Reclamation r : reclamationService.readByUserId(userId)) {
            reclamations.add(r.getTitle() + ": " + r.getDescription() + " (" + r.getStatus() + ")");
        }

        reclamationsListView.setItems(reclamations);
    }

    @FXML
    private void goBackToUserDashboard(ActionEvent event) {
        // Assuming you want to load the Normal User Dashboard view again
        try {
            // Load the Normal User Dashboard FXML file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Parent root = loader.load();

            // Get the current stage and set the new scene
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            // Optionally show an error message to the user
        }
    }
}
