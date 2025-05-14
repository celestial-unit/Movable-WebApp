package Controllers;

import Models.Reclamation;
import Models.User;
import Services.ReclamationService;
import Services.UsersService;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import java.util.List;

import javafx.scene.Parent;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import utils.SharedContext;

import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;

public class NormalUserDashboardController implements Initializable {

    @FXML
    private ListView<String> reservationsListView; // Referenced in navigation methods
    
    @FXML
    private ListView<String> recentActivityListView; // Added to match FXML
    
    @FXML
    private Label userNameLabel;
    
    @FXML
    private Label userEmailLabel;
    
    @FXML
    private Label userRoleLabel;
    
    @FXML
    private Label faceIdStatusLabel;
    
    @FXML
    private Button faceIdToggleButton;
    
    @FXML
    private ImageView userProfileImage;
    
    @FXML
    private Label userIdLabel;
    
    @FXML
    private Label joinDateLabel;
    
    @FXML
    private Label userStatusLabel;
    
    @FXML
    private Button editProfileButton;
    
    @FXML
    private Button viewEventsButton;
    
    @FXML
    private Button addReclamationButton;
    
    @FXML
    private Button bookRideButton;
    
    @FXML
    private Button viewHistoryButton;
    
    @FXML
    private Hyperlink privacySettingsLink;
    
    @FXML
    private Hyperlink helpCenterLink;
    
    @FXML
    private Hyperlink contactSupportLink;
    
    private User currentUser;
    private UsersService usersService;
    private ReclamationService reclamationService;

    /**
     * Initializes the controller.
     * This method is automatically called after the FXML has been loaded.
     */
    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        usersService = new UsersService();
        reclamationService = new ReclamationService();
        
        try {
            // Load user information from SharedContext
            loadUserInformation();
            
            // Populate the recent activity list with user's actual reclamations
            loadUserReclamations();
            
            // Set placeholder text for the activity list in case it's empty
            if (recentActivityListView != null) {
                recentActivityListView.setPlaceholder(new Label("No recent activity to display"));
            }
        } catch (Exception e) {
            System.err.println("Error initializing dashboard: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Error", "Dashboard Initialization Error", 
                    "There was a problem loading the dashboard. Please try again later.");
        }
    }
    
    /**
     * Loads user reclamations and displays them as activities
     */
    private void loadUserReclamations() {
        if (recentActivityListView == null) {
            System.err.println("Recent activity list view not found in FXML");
            return;
        }
        
        try {
            // Get the current user ID from SharedContext
            int userId = SharedContext.getLoggedInUserId();
            
            // Fetch user's reclamations from the database
            List<Reclamation> userReclamations = reclamationService.readByUserId(userId);
            
            // Create a list of activity items based on user's reclamations
            ObservableList<String> activities = FXCollections.observableArrayList();
            
            // Add generic login activity
            activities.add(getFormattedActivity("Logged in to the system", 
                    LocalDateTime.now().format(DateTimeFormatter.ofPattern("MMM dd, yyyy HH:mm"))));
            
            // Add reclamations as activities
            if (userReclamations != null && !userReclamations.isEmpty()) {
                for (Reclamation reclamation : userReclamations) {
                    String activityDesc = "Reclamation: " + reclamation.getTitle() + " - Status: " + reclamation.getStatus();
                    String timeDesc = "ID: " + reclamation.getId(); // Using ID as a proxy for time since we don't have timestamps
                    
                    activities.add(getFormattedActivity(activityDesc, timeDesc));
                }
            } else {
                // If no reclamations, add an activity indicating that
                activities.add(getFormattedActivity("No reclamations submitted yet", 
                        "Create your first reclamation using the Add Reclamation button"));
            }
            
            // Set the items to the ListView
            recentActivityListView.setItems(activities);
            
        } catch (SQLException e) {
            System.err.println("Error loading user reclamations: " + e.getMessage());
            e.printStackTrace();
            
            // Display error in the list view
            ObservableList<String> errorList = FXCollections.observableArrayList(
                getFormattedActivity("Error loading activities", "Please try refreshing the dashboard")
            );
            recentActivityListView.setItems(errorList);
        }
    }
    
    /**
     * Helper method to format activity entries with a consistent style
     */
    private String getFormattedActivity(String activity, String time) {
        return activity + " - " + time;
    }
    
    /**
     * Loads the user information from the database using the ID stored in SharedContext
     */
    private void loadUserInformation() {
        System.out.println("========== DEBUG: loadUserInformation() started ==========");
        try {
            int userId = SharedContext.getLoggedInUserId();
            System.out.println("DEBUG: User ID from SharedContext: " + userId);
            
            // Check if user ID is 0 or negative (invalid)
            if (userId <= 0) {
                System.out.println("DEBUG: Invalid user ID detected: " + userId);
                System.out.println("DEBUG: This might mean the user is not properly logged in or session was lost");
                showAlert(Alert.AlertType.ERROR, "Error", "Invalid User ID", 
                        "Your user session appears to be invalid. Please log out and log in again.");
                return;
            }
            
            System.out.println("DEBUG: Attempting to find user by ID: " + userId);
            currentUser = usersService.findById(userId);
            System.out.println("DEBUG: findById call completed. Result: " + (currentUser != null ? "User found" : "User not found"));
            
            if (currentUser != null) {
                System.out.println("DEBUG: User found with details:");
                System.out.println("DEBUG: - ID: " + currentUser.getId());
                System.out.println("DEBUG: - Name: " + currentUser.getFirstName() + " " + currentUser.getLastName());
                System.out.println("DEBUG: - Email: " + currentUser.getEmail());
                System.out.println("DEBUG: - Role: " + currentUser.getRole());
                System.out.println("DEBUG: - FaceID Enabled: " + currentUser.isFaceIdEnabled());
                
                // Update UI with user information
                System.out.println("DEBUG: Updating UI display with user information...");
                updateUserInfoDisplay();
                System.out.println("DEBUG: UI display update completed");
            } else {
                System.err.println("DEBUG: Failed to load user information. User not found for ID: " + userId);
                showAlert(Alert.AlertType.ERROR, "Error", "User Not Found", 
                        "Unable to load your user profile. Please log out and log in again.");
            }
        } catch (SQLException e) {
            System.err.println("DEBUG: SQL Exception in loadUserInformation(): " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Database Error", "Unable to Load Profile", 
                    "A database error occurred while loading your profile. Please try again later.");
        } catch (Exception e) {
            System.err.println("DEBUG: Unexpected Exception in loadUserInformation(): " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Unexpected Error", "Unable to Load Profile", 
                    "An unexpected error occurred while loading your profile. Please try again later.");
        }
        System.out.println("========== DEBUG: loadUserInformation() finished ==========");
    }
    
    /**
     * Updates the UI elements with the current user's information
     */
    private void updateUserInfoDisplay() {
        try {
            // Set user information in the UI
            if (userNameLabel != null) {
                userNameLabel.setText(currentUser.getFirstName() + " " + currentUser.getLastName());
            } else {
                System.err.println("Warning: userNameLabel is null");
            }
            
            if (userEmailLabel != null) {
                userEmailLabel.setText(currentUser.getEmail());
            } else {
                System.err.println("Warning: userEmailLabel is null");
            }
            
            if (userRoleLabel != null) {
                // Format the role for better readability
                String formattedRole = currentUser.getRole();
                // Convert to title case if it's in all caps
                if (formattedRole.equals(formattedRole.toUpperCase())) {
                    formattedRole = formattedRole.charAt(0) + formattedRole.substring(1).toLowerCase();
                }
                userRoleLabel.setText(formattedRole);
            } else {
                System.err.println("Warning: userRoleLabel is null");
            }
            
            // Update Face ID status
            String faceIdStatus = currentUser.isFaceIdEnabled() ? "Enabled" : "Disabled";
            if (faceIdStatusLabel != null) {
                faceIdStatusLabel.setText(faceIdStatus);
            } else {
                System.err.println("Warning: faceIdStatusLabel is null");
            }
            
            // Update Face ID toggle button text
            if (faceIdToggleButton != null) {
                faceIdToggleButton.setText(currentUser.isFaceIdEnabled() ? "Disable Face ID" : "Enable Face ID");
            } else {
                System.err.println("Warning: faceIdToggleButton is null");
            }
            
            // Update additional user information
            if (userIdLabel != null) {
                userIdLabel.setText(String.valueOf(currentUser.getId()));
            } else {
                System.err.println("Warning: userIdLabel is null");
            }
            
            if (joinDateLabel != null) {
                // Generate a join date based on the user ID (lower IDs = earlier join dates)
                // In a real app, you would store and retrieve the actual join date from database
                LocalDateTime estimatedJoinDate = LocalDateTime.now().minusDays(30 + currentUser.getId() * 2);
                joinDateLabel.setText(estimatedJoinDate.format(DateTimeFormatter.ofPattern("MMM dd, yyyy")));
            } else {
                System.err.println("Warning: joinDateLabel is null");
            }
            
            if (userStatusLabel != null) {
                userStatusLabel.setText("Active"); // This could be a real status from database in the future
            } else {
                System.err.println("Warning: userStatusLabel is null");
            }
        } catch (Exception e) {
            System.err.println("Error updating user display: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Display Error", "Profile Display Error", 
                    "There was a problem displaying your profile information.");
        }
    }
    
    /**
     * Toggles the Face ID status for the current user
     */
    @FXML
    private void toggleFaceId() {
        boolean newStatus = false;
        try {
            newStatus = !currentUser.isFaceIdEnabled();
            currentUser.setFaceIdEnabled(newStatus);

            // Update user in the database
            usersService.update(currentUser);

            // Update UI to reflect the change - assuming success if no exception is thrown
            faceIdStatusLabel.setText(newStatus ? "Enabled" : "Disabled");
            faceIdToggleButton.setText(newStatus ? "Disable Face ID" : "Enable Face ID");

            // Show success message
            showAlert(Alert.AlertType.INFORMATION, "Face ID", "Face ID Status Updated",
                    "Face ID has been " + (newStatus ? "enabled" : "disabled") + " successfully.");
        } catch (SQLException e) {
            // If SQL update failed, revert the change in memory
            currentUser.setFaceIdEnabled(!newStatus);

            System.err.println("SQL error toggling Face ID: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Database Error", "Face ID Update Failed",
                    "Failed to update Face ID status in the database. Please try again later.");
        } catch (Exception e) {
            // Handle any other exceptions
            System.err.println("Error toggling Face ID: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Error", "Face ID Toggle Error",
                    "An error occurred while updating Face ID status.");
        }
    }
    
    /**
     * Handles creating a new reservation
     */
    @FXML
    private void handleNewReservation() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/new_reservation.fxml"));
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The New Reservation feature is coming soon!");
            e.printStackTrace();
        }
    }
    /**
     * Handles navigation to the reclamation page
     */
    @FXML
    private void handleReclamation() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Reclamation.fxml"));
            // Use userNameLabel for navigation since reservationsListView might be null
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Navigation Error", "Cannot Navigate", 
                    "Cannot open reclamation page. Please try again later.");
        }
    }

    @FXML
    private void handleLogOut() {
        try {
            // Clear the logged-in user from SharedContext
                SharedContext.clearLoggedInUserData();
            
            // Load the login screen
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
    /**
     * Refreshes the current dashboard
     */
    @FXML
    private void handleHome() {
        // Refresh the current dashboard
        loadUserInformation();
        System.out.println("Dashboard refreshed.");
    }
    
    /**
     * Navigates to the reservations page
     */
    @FXML
    private void handleReservations() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/reservations.fxml"));
            // Use userNameLabel for navigation to avoid null pointer issues
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Reservations feature is coming soon!");
            e.printStackTrace();
        }
    }
    /**
     * Opens the edit profile page
     */
    @FXML
    private void handleEditProfile() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/edit_profile.fxml"));
            // Use userNameLabel for navigation to avoid null pointer issues
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Edit Profile feature is coming soon!");
            e.printStackTrace();
        }
    }
    /**
     * Navigates to the events page
     */
    @FXML
    private void handleViewEvents() {
        try {
            // Load the user_view.fxml file instead of event_registration.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_view.fxml"));
            
            // First load the FXML file
            Parent root = loader.load();
            
            // After loading, get the controller instance that was created by FXMLLoader
            UserController userController = loader.getController();
            
            // Pass the current user ID to the UserController
            int userId = SharedContext.getLoggedInUserId();
            userController.setUserId(userId);
            
            // Use userNameLabel for navigation to avoid null pointer issues
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Events feature is coming soon!");
            e.printStackTrace();
        }
    }
    /**
     * Opens the book ride page
     */
    @FXML
    private void handleBookRide() {
        try {
            // Load the user_destinations.fxml file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_destinations.fxml"));
            
            // First load the FXML file
            Parent root = loader.load();
            
            // After loading, get the controller instance that was created by FXMLLoader
            UserDestinationController destinationController = loader.getController();
            
            // Pass the current user ID to the UserDestinationController
            int userId = SharedContext.getLoggedInUserId();
            
            // Set the user ID in SharedContext to ensure it's accessible in UserSession
            // This ensures the favorites will be loaded for the correct user
            UserSession.setCurrentUserId(userId);
            
            // Set the scene
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(root));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Book Ride feature is coming soon!");
            e.printStackTrace();
        }
    }
    
    /**
     * Navigates to the history page
     */
    @FXML
    private void handleViewHistory() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/history.fxml"));
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The History feature is coming soon!");
            e.printStackTrace();
        }
    }
    
    /**
     * Opens the privacy settings page
     */
    @FXML
    private void handlePrivacySettings() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/privacy_settings.fxml"));
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Privacy Settings feature is coming soon!");
            e.printStackTrace();
        }
    }
    
    /**
     * Opens the help center page
     */
    @FXML
    private void handleHelpCenter() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/help_center.fxml"));
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Help Center feature is coming soon!");
            e.printStackTrace();
        }
    }
    
    /**
     * Opens the contact support page
     */
    @FXML
    private void handleContactSupport() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/contact_support.fxml"));
            Stage stage = (Stage) userNameLabel.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Contact Support feature is coming soon!");
            e.printStackTrace();
        }
    }
    
    /**
     * Helper method to show alerts
     * @param alertType the type of alert to show
     * @param title the title of the alert
     * @param header the header text of the alert (can be null)
     * @param content the content text of the alert
     */
    private void showAlert(Alert.AlertType alertType, String title, String header, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(header);
        alert.setContentText(content);
        alert.showAndWait();
    }
}
