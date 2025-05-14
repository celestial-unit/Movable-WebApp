package Controllers;

import Services.FaceRecognition;
import Services.UsersService;
import Models.User;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.StackPane;
import javafx.scene.control.Hyperlink;
import javafx.stage.Stage;
import javafx.util.Duration;
import org.mindrot.jbcrypt.BCrypt;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDateTime;
import java.util.ResourceBundle;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class UserSignUpController implements Initializable {

    @FXML
    private TextField fullNameTf;
    
    @FXML
    private TextField emailTf;
    
    @FXML
    private PasswordField passwordTf;
    
    @FXML
    private PasswordField confirmPasswordTf;
    
    @FXML
    private ComboBox<String> roleCb;
    
    @FXML
    private Button registerButton;
    
    @FXML
    private Button captureBtn;
    
    @FXML
    private Button backToLoginBtn;
    
    @FXML
    private CheckBox enableFaceIdCb;
    
    @FXML
    private Label errorLabel;
    
    @FXML
    private ImageView facePreviewImage;
    
    @FXML
    private StackPane rootPane;
    
    private final UsersService usersService = new UsersService();
    private final FaceRecognition faceRecognition = new FaceRecognition();
    private boolean faceHasBeenCaptured = false;
    
    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        // Initialize combo box with roles
        roleCb.getItems().addAll("USER", "ADMIN");
        roleCb.setValue("USER"); // Default role
        
        // Initially hide error label
        errorLabel.setVisible(false);
        
        // Initialize face recognition components
        captureBtn.setDisable(true);
        enableFaceIdCb.selectedProperty().addListener((obs, oldVal, newVal) -> {
            captureBtn.setDisable(!newVal);
            if (!newVal) {
                faceHasBeenCaptured = false;
                facePreviewImage.setImage(null);
            }
        });
        
        // Initialize the FaceRecognition service
        try {
            // You can add any additional setup for the FaceRecognition service here
            System.out.println("Face recognition service initialized");
            faceRecognition.initialize();
        } catch (Exception e) {
            System.err.println("Failed to initialize face recognition: " + e.getMessage());
            e.printStackTrace();
        }
    }
    
    @FXML
    private void handleCaptureFace(ActionEvent event) {
        String email = emailTf.getText().trim();
        
        // Validate email before capturing face
        if (!isValidEmail(email)) {
            showError("Please enter a valid email before capturing face");
            return;
        }
        
        try {
            // Create a temporary user object for registration
            User tempUser = new User();
            tempUser.setEmail(email);
            
            // Display a message while capturing
            showInfo("Capturing face, please wait...");
            captureBtn.setDisable(true);
            
            // Register face with email and user object as temporary ID
            // This returns a CompletableFuture<Boolean>, not a direct boolean
            faceRecognition.registerFaceWithEmail(email, tempUser)
                .thenAccept(success -> {
                    // This code runs after the future completes
                    javafx.application.Platform.runLater(() -> {
                        captureBtn.setDisable(false);
                        
                        if (success) {
                            faceHasBeenCaptured = true;
                            showSuccess("Face captured successfully!");
                            
                            // The captured face preview is handled by the FaceRecognition service
                            // No need to call getLastCapturedFaceImage as it doesn't exist
                        } else {
                            showError("Failed to capture face. Please try again.");
                        }
                    });
                })
                .exceptionally(ex -> {
                    // Handle any exceptions that occur during the future's execution
                    javafx.application.Platform.runLater(() -> {
                        captureBtn.setDisable(false);
                        ex.printStackTrace();
                        showError("Error during face capture: " + ex.getMessage());
                    });
                    return null;
                });
        } catch (Exception e) {
            captureBtn.setDisable(false);
            e.printStackTrace();
            showError("Error initiating face capture: " + e.getMessage());
        }
    }
    
    @FXML
    private void saveUser(ActionEvent event) {
        // Reset error state
        errorLabel.setVisible(false);
        
        try {
            if (validateInputs()) {
                processSignUp();
            }
        } catch (Exception e) {
            e.printStackTrace();
            showError("An unexpected error occurred: " + e.getMessage());
        }
    }
    
    private void processSignUp() {
        String fullName = fullNameTf.getText().trim();
        String email = emailTf.getText().trim();
        String password = passwordTf.getText();
        String role = roleCb.getValue();
        boolean enableFaceId = enableFaceIdCb.isSelected() && faceHasBeenCaptured;
        
        // Split full name into first and last name
        String[] nameParts = fullName.split("\\s+", 2);
        String firstName = nameParts[0];
        String lastName = nameParts.length > 1 ? nameParts[1] : "";
        
        // Hash the password
        String hashedPassword = BCrypt.hashpw(password, BCrypt.gensalt());
        
        // Create user object
        User newUser = new User();
        newUser.setFirstName(firstName);
        newUser.setLastName(lastName);
        newUser.setEmail(email);
        newUser.setPassword(hashedPassword);
        newUser.setRole(role);
        // The setCreatedAt method is not needed as it's handled by the database
        newUser.setFaceIdEnabled(enableFaceId);
        
        try {
            // Create user in database and get the ID
            int userId = usersService.createAndGetId(newUser);
            
            if (userId > 0) {
                // Set the id in the user object
                newUser.setId(userId);
                
                // If face ID is enabled, update the face recognition with user ID
                if (enableFaceId) {
                    faceRecognition.updateFaceIdAfterSignup(email, userId)
                        .thenAccept(faceUpdateSuccess -> {
                            if (!faceUpdateSuccess) {
                                System.err.println("Warning: Failed to update face recognition ID. Face recognition may not work properly.");
                            }
                        })
                        .exceptionally(ex -> {
                            System.err.println("Error updating face ID: " + ex.getMessage());
                            ex.printStackTrace();
                            return null;
                        });
                }
                
                showSuccess("User registered successfully!");
                
                // Navigate to login screen after short delay
                new Thread(() -> {
                    try {
                        Thread.sleep(1500);
                        navigateToLogin();
                    } catch (InterruptedException e) {
                        e.printStackTrace();
                    }
                }).start();
            } else {
                showError("Failed to create user account.");
            }
        } catch (SQLException e) {
            e.printStackTrace();
            // Provide specific error message based on SQL exception
            if (e.getMessage().contains("Duplicate entry") && e.getMessage().contains("email")) {
                showError("This email is already registered. Please use a different email.");
            } else {
                showError("Database error: " + e.getMessage());
            }
        } catch (Exception e) {
            e.printStackTrace();
            showError("Error: " + e.getMessage());
        }
    }
    
    private boolean validateInputs() {
        String fullName = fullNameTf.getText().trim();
        String email = emailTf.getText().trim();
        String password = passwordTf.getText();
        String confirmPassword = confirmPasswordTf.getText();
        
        // Validate full name
        if (fullName.isEmpty()) {
            showError("Please enter your full name");
            return false;
        }
        
        // Validate email
        if (!isValidEmail(email)) {
            showError("Please enter a valid email address");
            return false;
        }
        
        // Check for duplicate email before proceeding
        try {
            if (usersService.isEmailTaken(email)) {
                showError("This email is already registered. Please use a different email.");
                return false;
            }
        } catch (SQLException e) {
            e.printStackTrace();
            showError("Error checking email: " + e.getMessage());
            return false;
        }
        
        // Validate password
        if (password.length() < 6) {
            showError("Password must be at least 6 characters long");
            return false;
        }
        
        // Confirm passwords match
        if (!password.equals(confirmPassword)) {
            showError("Passwords do not match");
            return false;
        }
        
        // Validate face capture if enabled
        if (enableFaceIdCb.isSelected() && !faceHasBeenCaptured) {
            showError("Please capture your face or disable face ID");
            return false;
        }
        
        return true;
    }
    
    private boolean isValidEmail(String email) {
        if (email == null || email.isEmpty()) {
            return false;
        }
        
        // Simple email validation regex
        String emailRegex = "^[a-zA-Z0-9_+&*-]+(?:\\.[a-zA-Z0-9_+&*-]+)*@(?:[a-zA-Z0-9-]+\\.)+[a-zA-Z]{2,7}$";
        Pattern pattern = Pattern.compile(emailRegex);
        Matcher matcher = pattern.matcher(email);
        return matcher.matches();
    }
    
    private void showError(String message) {
        errorLabel.setText(message);
        errorLabel.setStyle("-fx-text-fill: red;");
        errorLabel.setVisible(true);
    }
    
    private void showInfo(String message) {
        errorLabel.setText(message);
        errorLabel.setStyle("-fx-text-fill: blue;");
        errorLabel.setVisible(true);
    }
    
    private void showSuccess(String message) {
        errorLabel.setText(message);
        errorLabel.setStyle("-fx-text-fill: green;");
        errorLabel.setVisible(true);
    }
    
    @FXML
    private void handleBackToLogin(ActionEvent event) {
        navigateToLogin();
    }
    
    private void navigateToLogin() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            
            Stage stage = (Stage) rootPane.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showError("Navigation error: " + e.getMessage());
        }
    }

    /**
     * Handles image capture action from the UI, delegates to handleCaptureFace method
     * @param event The ActionEvent that triggered this handler
     */
    @FXML
    public void captureImage(ActionEvent event) {
        handleCaptureFace(event);
    }

    /**
     * Handles button hover effect - applies a drop shadow when mouse enters button
     * @param event The MouseEvent that triggered this handler
     */
    @FXML
    public void handleButtonHover(javafx.scene.input.MouseEvent event) {
        if (event.getSource() instanceof Button) {
            Button button = (Button) event.getSource();
            
            // Create a drop shadow effect
            javafx.scene.effect.DropShadow shadow = new javafx.scene.effect.DropShadow();
            shadow.setRadius(10.0);
            shadow.setColor(javafx.scene.paint.Color.color(0.4, 0.5, 0.9, 0.6)); // Blue shadow color
            
            // Apply the effect to the button
            button.setEffect(shadow);
            
            // Scale the button slightly
            button.setScaleX(1.05);
            button.setScaleY(1.05);
        }
    }
    
    /**
     * Handles button exit effect - removes effects when mouse exits button
     * @param event The MouseEvent that triggered this handler
     */
    @FXML
    public void handleButtonExit(javafx.scene.input.MouseEvent event) {
        if (event.getSource() instanceof Button) {
            Button button = (Button) event.getSource();
            
            // Remove the effect
            button.setEffect(null);
            
            // Reset the scale
            button.setScaleX(1.0);
            button.setScaleY(1.0);
        }
    }
    
    /**
     * Handles link hover effect - changes text color when mouse enters hyperlink
     * @param event The MouseEvent that triggered this handler
     */
    @FXML
    public void handleLinkHover(javafx.scene.input.MouseEvent event) {
        if (event.getSource() instanceof Hyperlink) {
            Hyperlink link = (Hyperlink) event.getSource();
            
            // Store the original text fill if not already stored
            if (!link.getProperties().containsKey("originalTextFill")) {
                link.getProperties().put("originalTextFill", link.getTextFill());
            }
            
            // Change text color to orange (accent color)
            link.setTextFill(javafx.scene.paint.Color.web("#FF8C00"));
            
            // Add an underline
            link.setUnderline(true);
        } else if (event.getSource() instanceof Label && ((Label) event.getSource()).getStyleClass().contains("clickable")) {
            Label label = (Label) event.getSource();
            
            // Store the original text fill if not already stored
            if (!label.getProperties().containsKey("originalTextFill")) {
                label.getProperties().put("originalTextFill", label.getTextFill());
            }
            
            // Change text color to orange (accent color)
            label.setTextFill(javafx.scene.paint.Color.web("#FF8C00"));
        }
    }
    
    /**
     * Handles link exit effect - restores text color when mouse exits hyperlink
     * @param event The MouseEvent that triggered this handler
     */
    @FXML
    public void handleLinkExit(javafx.scene.input.MouseEvent event) {
        if (event.getSource() instanceof Hyperlink) {
            Hyperlink link = (Hyperlink) event.getSource();
            
            // Restore the original text fill
            if (link.getProperties().containsKey("originalTextFill")) {
                link.setTextFill((javafx.scene.paint.Color) link.getProperties().get("originalTextFill"));
            }
            
            // Remove underline
            link.setUnderline(false);
        } else if (event.getSource() instanceof Label && ((Label) event.getSource()).getStyleClass().contains("clickable")) {
            Label label = (Label) event.getSource();
            
            // Restore the original text fill
            if (label.getProperties().containsKey("originalTextFill")) {
                label.setTextFill((javafx.scene.paint.Color) label.getProperties().get("originalTextFill"));
            }
        }
    }

    /**
     * Switches from the sign-up page to the login page
     * This method is called when a user clicks on a label or link to go to login page
     * @param event The MouseEvent that triggered this handler
     */
    @FXML
    public void switchToLoginPage(javafx.scene.input.MouseEvent event) {
        try {
            // Load the login FXML file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Parent root = loader.load();
            
            // Create a new scene
            Scene scene = new Scene(root);
            
            // Apply CSS if available
            scene.getStylesheets().addAll(rootPane.getScene().getStylesheets());
            
            // Get the current stage
            Stage stage = (Stage) rootPane.getScene().getWindow();
            
            // Set the new scene to the stage
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showError("Failed to navigate to login page: " + e.getMessage());
        }
    }
}
