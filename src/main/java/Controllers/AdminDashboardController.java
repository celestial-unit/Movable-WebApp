package Controllers;

import javafx.fxml.FXML;
import javafx.scene.control.Label;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.layout.VBox;
import javafx.scene.image.ImageView;
import javafx.scene.image.Image;
import javafx.scene.effect.DropShadow;
import javafx.scene.paint.Color;

import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;


public class AdminDashboardController {

    @FXML
    private VBox dashboardVBox;

    @FXML
    private Label totalUsersLabel;

    @FXML
    private Label activeDriversLabel;

    @FXML
    private Label pendingReservationsLabel;

    @FXML
    private ImageView backgroundImage;

    // This method simulates loading statistics (replace with actual backend calls)
    private void loadStatistics() {
        // Example data for now (replace with actual data fetching logic)
        totalUsersLabel.setText("2500"); // Example of total users
        activeDriversLabel.setText("120"); // Example of active drivers
        pendingReservationsLabel.setText("35"); // Example of pending reservations
    }

    // Method to handle the "Check Users" button click
    @FXML
    public void checkUsers() {
        try {
            // Attempt to load the FXML file for User Management
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UserCrud.fxml"));
            Parent root = loader.load();

            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();

            // Optionally, show a success message
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("User Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to User Management...");
            alert.showAndWait();

        } catch (Exception e) {
            // Print the stack trace for debugging
            e.printStackTrace();

            // Show a more detailed error message
            showError("Error navigating to user management: " + e.getMessage());
        }
    }

    // Method to handle the "View Statistics" button click
    @FXML
    public void viewStatistics() {
        try {
            // Load statistics details or another scene (if you want detailed statistics)
            System.out.println("Opening detailed statistics...");

            // Show an alert for demonstration
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("Statistics");
            alert.setHeaderText(null);
            alert.setContentText("Opening detailed statistics...");
            alert.showAndWait();
        } catch (Exception e) {
            showError("Error opening statistics.");
        }
    }

    // Method to handle the "Manage Drivers" button click
    @FXML
    public void manageDrivers() {
        try {
            // Load the Driver Management scene (replace with the correct FXML)
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DriverCrudView.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();

            // Show an alert for demonstration
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("Driver Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to Driver Management...");
            alert.showAndWait();
        } catch (Exception e) {
            showError("Error navigating to driver management.");
        }
    }

    // Method to handle the "Manage Users" button click
    @FXML
    public void manageUsers() {
        try {
            // Attempt to load the FXML file for User Management (new screen)
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UserCrud.fxml"));
            Parent root = loader.load();

            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();

            // Optionally, show a success message
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("User Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to User Management...");
            alert.showAndWait();

        } catch (Exception e) {
            // Print the stack trace for debugging
            e.printStackTrace();

            // Show a more detailed error message
            showError("Error navigating to user management: " + e.getMessage());
        }
    }

    // Helper method to show error messages
    private void showError(String message) {
        Alert alert = new Alert(AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    
    // Helper method to show information messages
    private void showInformation(String message) {
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Information");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Call loadStatistics method to simulate loading stats at initialization
    @FXML
    public void initialize() {
        loadStatistics();
    }
    @FXML
    public void logout() {
        try {
            // Load the login screen
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();

            // Set the new scene
            stage.setScene(new Scene(root));
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            // Handle the error (e.g., show an alert)
        }
    }
    @FXML
    public void handleReclamations() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_reclamation.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Reclamations Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to Reclamations Management...");
            alert.showAndWait();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to reclamations management: " + e.getMessage());
        }
    }

    // Method to reload the current admin dashboard view
    @FXML
    public void goToHome() {
        try {
            // Load the admin dashboard FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to home dashboard: " + e.getMessage());
        }
    }
    
    // Method to display help information
    @FXML
    public void goToHelp() {
        try {
            // Load the help FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_help.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to help section: " + e.getMessage());
        }
    }
    
    // Method to view all activities
    @FXML
    public void viewAllActivities() {
        try {
            // Load the activities FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_activities.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to activities section: " + e.getMessage());
        }
    }
    
    // Method to clear all alerts
    @FXML
    public void clearAllAlerts() {
        showInformation("Alert management feature coming soon!");
    }
    
    // Method to handle system updates
    @FXML
    public void handleSystemUpdate() {
        showInformation("System update feature coming soon!");
    }
    
    // Method to view new users
    @FXML
    public void viewNewUsers() {
        try {
            // Load the new users FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_new_users.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to new users section: " + e.getMessage());
        }
    }
    
    // Method to view database logs
    @FXML
    public void viewDatabaseLogs() {
        showInformation("Database logs feature coming soon!");
    }

    // Method to handle settings
    @FXML
    public void handleSettings() {
        try {
            // Load the settings FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_settings.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to settings section: " + e.getMessage());
        }
    }
    @FXML
    public void openDestinationManagement() {
        try {
            // Load the event view FXML directly
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/event_view.fxml"));
            Parent root = loader.load();

            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Event Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to Event View page...");
            alert.showAndWait();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error in event management: " + e.getMessage());
        }
    }
    @FXML
    public void openEventRegistration() {
        try {
            // Load the event view FXML directly
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/event_view.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
            
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Event Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to Event View page...");
            alert.showAndWait();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error in event management: " + e.getMessage());
        }
    }
    
    /**
     * Method for handling event registration statuses
     * Allows admin to view and change the status of event registrations
     */
    @FXML
    public void handleEventRegistrationStatuses() {
        try {
            // Load the user event registration management FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_event_registration.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
            
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Event Registration Status Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to Event Registration Status Management...");
            alert.showAndWait();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to event registration status management: " + e.getMessage());
        }
    }
    
    /**
     * Method for handling event registration management
     * Allows admin to view and manage all event registrations
     */
    @FXML
    public void handleEventRegistrationManagement() {
        try {
            // Load the admin event registration management FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_event_registration_management.fxml"));
            Parent root = loader.load();
            
            // Create and display the new scene
            Scene scene = new Scene(root);
            Stage stage = (Stage) dashboardVBox.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
            
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Event Registration Management");
            alert.setHeaderText(null);
            alert.setContentText("Navigating to Event Registration Management...");
            alert.showAndWait();
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error navigating to event registration management: " + e.getMessage());
        }
    }
}

