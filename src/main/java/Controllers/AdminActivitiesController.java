
package Controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.FileChooser;
import javafx.stage.Stage;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.net.URL;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Optional;
import java.util.ResourceBundle;

public class AdminActivitiesController implements Initializable {

    @FXML
    private Button backButton;

    @FXML
    private Button refreshButton;

    @FXML
    private Button exportButton;

    @FXML
    private Button clearButton;

    @FXML
    private TableView<UserActivity> activitiesTable;

    @FXML
    private TableColumn<UserActivity, String> timestampColumn;

    @FXML
    private TableColumn<UserActivity, Integer> userIdColumn;

    @FXML
    private TableColumn<UserActivity, String> userNameColumn;

    @FXML
    private TableColumn<UserActivity, String> actionColumn;

    @FXML
    private TableColumn<UserActivity, String> detailsColumn;

    private ObservableList<UserActivity> activitiesList = FXCollections.observableArrayList();

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        // Set up the table columns
        timestampColumn.setCellValueFactory(new PropertyValueFactory<>("timestamp"));
        userIdColumn.setCellValueFactory(new PropertyValueFactory<>("userId"));
        userNameColumn.setCellValueFactory(new PropertyValueFactory<>("userName"));
        actionColumn.setCellValueFactory(new PropertyValueFactory<>("action"));
        detailsColumn.setCellValueFactory(new PropertyValueFactory<>("details"));

        // Load sample data (this would be replaced with actual data in a real application)
        loadSampleData();

        // Set the items to the table
        activitiesTable.setItems(activitiesList);
    }

    private void loadSampleData() {
        // Sample data - in a real application, this would be fetched from a database
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(1), 1, "John Doe", "Login", "User logged in successfully"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(2), 2, "Jane Smith", "Profile Update", "Updated profile picture"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(3), 3, "Mike Johnson", "Booking", "Booked a ride to Downtown"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(4), 1, "John Doe", "Payment", "Paid $25.50 for ride #1234"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(5), 4, "Sarah Williams", "Registration", "New user registered"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(6), 2, "Jane Smith", "Logout", "User logged out"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(7), 5, "Robert Brown", "Support Request", "Submitted ticket #5678"));
        activitiesList.add(new UserActivity(LocalDateTime.now().minusHours(8), 3, "Mike Johnson", "Rating", "Rated driver 5 stars"));
    }

    @FXML
    private void handleBack(ActionEvent event) {
        try {
            // Load the admin dashboard view
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            
            // Get the current stage
            Stage stage = (Stage) backButton.getScene().getWindow();
            
            // Create a new scene with the dashboard view
            Scene scene = new Scene(root);
            
            // Set the scene on the stage
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Error loading admin dashboard: " + e.getMessage());
        }
    }

    @FXML
    private void handleRefresh(ActionEvent event) {
        // In a real application, this would refresh data from the database
        showInformation("Activities refreshed successfully.");
        
        // For demo purposes, we'll just add a new activity to simulate refreshing
        activitiesList.add(0, new UserActivity(LocalDateTime.now(), 6, "Alex Davis", "App Access", "Viewed activities page"));
    }

    @FXML
    private void handleExport(ActionEvent event) {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Export Activities");
        fileChooser.getExtensionFilters().add(
                new FileChooser.ExtensionFilter("CSV Files", "*.csv"));
        fileChooser.setInitialFileName("user_activities.csv");
        
        // Show the file save dialog
        File file = fileChooser.showSaveDialog(exportButton.getScene().getWindow());
        
        if (file != null) {
            try (FileWriter writer = new FileWriter(file)) {
                // Write header
                writer.write("Timestamp,User ID,User Name,Action,Details\n");
                
                // Write data
                for (UserActivity activity : activitiesList) {
                    writer.write(String.format("%s,%d,%s,%s,%s\n",
                            activity.getTimestamp(),
                            activity.getUserId(),
                            activity.getUserName(),
                            activity.getAction(),
                            activity.getDetails()));
                }
                
                showInformation("Activities exported successfully to " + file.getAbsolutePath());
            } catch (IOException e) {
                showError("Error exporting activities: " + e.getMessage());
            }
        }
    }

    @FXML
    private void handleClear(ActionEvent event) {
        // Confirm before clearing
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Clear Activities");
        alert.setHeaderText("Clear All Activity Records");
        alert.setContentText("Are you sure you want to clear all activity records? This action cannot be undone.");
        
        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            // Clear the list
            activitiesList.clear();
            showInformation("All activities have been cleared.");
        }
    }
    
    private void showInformation(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    
    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Model class for User Activity
    public static class UserActivity {
        private final LocalDateTime dateTime;
        private final int userId;
        private final String userName;
        private final String action;
        private final String details;

        public UserActivity(LocalDateTime dateTime, int userId, String userName, String action, String details) {
            this.dateTime = dateTime;
            this.userId = userId;
            this.userName = userName;
            this.action = action;
            this.details = details;
        }

        public String getTimestamp() {
            return dateTime.format(DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm:ss"));
        }

        public int getUserId() {
            return userId;
        }

        public String getUserName() {
            return userName;
        }

        public String getAction() {
            return action;
        }

        public String getDetails() {
            return details;
        }
    }
}

