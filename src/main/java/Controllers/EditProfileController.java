package Controllers;

import Models.User;
import Services.UsersService;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import utils.SharedContext;

import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.regex.Pattern;
public class EditProfileController implements Initializable {

    @FXML
    private TextField nameField;
    
    @FXML
    private TextField emailField;
    
    @FXML
    private TextField phoneField;
    
    @FXML
    private TextField addressField;
    
    @FXML
    private PasswordField currentPasswordField;
    
    @FXML
    private PasswordField newPasswordField;
    
    @FXML
    private Button saveButton;
    
    @FXML
    private Button cancelButton;
    
    private User currentUser;
    private UsersService usersService;

    /**
     * Initializes the controller.
     * This method is automatically called after the FXML has been loaded.
     */
    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        usersService = new UsersService();
        
        // Load user information from SharedContext
        loadUserInformation();
    }
    
    /**
     * Loads the user information from the database using the ID stored in SharedContext
     */
    private void loadUserInformation() {
        try {
            int userId = SharedContext.getLoggedInUserId();
            currentUser = usersService.findById(userId);
            
            if (currentUser != null) {
                // Populate the form fields with current user data
                populateFormFields();
            } else {
                System.err.println("Failed to load user information. User not found.");
                showAlert(Alert.AlertType.ERROR, "Error", "User not found", 
                        "Failed to load your profile information. Please try logging in again.");
            }
        } catch (SQLException e) {
            System.err.println("Error loading user information: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Database Error", "Failed to load user data", 
                    "An error occurred while retrieving your profile: " + e.getMessage());
        }
    }
    
    /**
     * Populates the form fields with the current user's information
     */
    private void populateFormFields() {
        // Split full name into parts
        String fullName = currentUser.getFirstName() + " " + currentUser.getLastName();
        nameField.setText(fullName);
        emailField.setText(currentUser.getEmail());
        
        // If these fields exist in the User model, populate them
        // The User model doesn't have phoneNumber and address fields
        // We'll leave these fields empty in the form
        // These could be stored in a separate profile table or added to the User model in the future
        // Password fields are intentionally left blank for security reasons
    }
    
    /**
     * Handles the save button action.
     * Validates input and saves changes to the user's profile.
     */
    @FXML
    private void handleSave() {
        // Validate form inputs
        if (!validateFormInputs()) {
            return;
        }
        
        try {
            // Validate current password
            if (!validateCurrentPassword()) {
                showAlert(Alert.AlertType.ERROR, "Authentication Error", "Incorrect Password", 
                        "The current password you entered is incorrect.");
                return;
            }
            
            // Update user information
            updateUserInformation();
            
            // Show success message and return to dashboard
            showAlert(Alert.AlertType.INFORMATION, "Success", "Profile Updated", 
                    "Your profile has been successfully updated.");
            navigateToDashboard();
            
        } catch (SQLException e) {
            System.err.println("Error saving user information: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Database Error", "Failed to save changes", 
                    "An error occurred while saving your profile: " + e.getMessage());
        }
    }
    
    /**
     * Validates the form inputs
     * @return true if all inputs are valid, false otherwise
     */
    private boolean validateFormInputs() {
        // Validate name
        if (nameField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Name Required", 
                    "Please enter your full name.");
            return false;
        }
        
        // Validate email
        String email = emailField.getText().trim();
        if (email.isEmpty() || !Pattern.matches("[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}", email)) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Invalid Email", 
                    "Please enter a valid email address.");
            return false;
        }
        
        // Validate phone number (if required)
        String phone = phoneField.getText().trim();
        if (!phone.isEmpty() && !Pattern.matches("\\d{8,}", phone)) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Invalid Phone Number", 
                    "Please enter a valid phone number with at least 8 digits.");
            return false;
        }
        
        // Validate current password field is not empty
        if (currentPasswordField.getText().trim().isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Current Password Required", 
                    "Please enter your current password to save changes.");
            return false;
        }
        
        // Validate new password length if provided
        String newPassword = newPasswordField.getText().trim();
        if (!newPassword.isEmpty() && newPassword.length() < 6) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Invalid New Password", 
                    "New password must be at least 6 characters long.");
            return false;
        }
        
        return true;
    }
    
    /**
     * Validates the current password entered by the user
     * @return true if the password matches the stored password, false otherwise
     */
    private boolean validateCurrentPassword() throws SQLException {
        // In a real application, you would hash the entered password and compare it with the stored hash
        // For simplicity, we're assuming the UsersService has a method to validate passwords
        return usersService.validatePassword(currentUser.getId(), currentPasswordField.getText());
    }
    
    /**
     * Updates the user information in the database
     */
    private void updateUserInformation() throws SQLException {
        // Parse full name into first name and last name
        String[] nameParts = nameField.getText().split(" ", 2);
        String firstName = nameParts[0];
        String lastName = nameParts.length > 1 ? nameParts[1] : "";
        
        // Update user object
        currentUser.setFirstName(firstName);
        currentUser.setLastName(lastName);
        currentUser.setEmail(emailField.getText().trim());
        
        // Store phone and address in session or application context for future use
        // Since they're not in the User model, we don't set them on the user object
        
        // Update password if a new one is provided
        String newPassword = newPasswordField.getText().trim();
        String phone = phoneField.getText().trim();
        String address = addressField.getText().trim();
        
        // Use the new method that handles profile updates with optional fields
        usersService.updateUserProfile(currentUser, newPassword.isEmpty() ? null : newPassword, phone, address);
    }
    
    /**
     * Handles the cancel button action.
     * Returns to the user dashboard without saving changes.
     */
    @FXML
    private void handleCancel() {
        navigateToDashboard();
    }
    
    /**
     * Navigates back to the normal user dashboard
     */
    private void navigateToDashboard() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Stage stage = (Stage) cancelButton.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            System.err.println("Error navigating to dashboard: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Navigation Error", "Failed to Return to Dashboard", 
                    "An error occurred while returning to the dashboard. Please try again.");
        }
    }
    
    /**
     * Shows an alert dialog with the given parameters
     */
    private void showAlert(Alert.AlertType alertType, String title, String header, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(header);
        alert.setContentText(content);
        alert.showAndWait();
    }
    
    /**
     * Refreshes the current dashboard
     */
    @FXML
    private void handleHome() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Stage stage = (Stage) nameField.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Navigation Error", "Failed to Navigate", 
                    "An error occurred while navigating to Home.");
        }
    }
    
    /**
     * Navigates to the reservations page
     */
    @FXML
    private void handleReservations() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/reservations.fxml"));
            Stage stage = (Stage) nameField.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            // Show alert if page doesn't exist yet
            showAlert(Alert.AlertType.INFORMATION, "Coming Soon", null, 
                    "The Reservations feature is coming soon!");
            e.printStackTrace();
        }
    }
    
    /**
     * Navigates to the reclamation page
     */
    @FXML
    private void handleReclamation() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Reclamation.fxml"));
            Stage stage = (Stage) nameField.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, "Navigation Error", "Failed to Navigate", 
                    "An error occurred while navigating to Reclamation.");
            e.printStackTrace();
        }
    }
    
    /**
     * Handles the logout process
     */
    @FXML
    private void handleLogOut() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Stage stage = (Stage) nameField.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, "Navigation Error", "Failed to Log Out", 
                    "An error occurred while logging out. Please try again.");
            e.printStackTrace();
        }
    }
}

