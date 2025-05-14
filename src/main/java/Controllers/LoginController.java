package Controllers;

import Models.User;
import Services.GoogleAuth;
import Services.UsersService;
import Services.FaceRecognition;
import com.google.api.client.auth.oauth2.Credential;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.control.ProgressIndicator;
import javafx.scene.effect.DropShadow;
import javafx.scene.layout.StackPane;
import javafx.scene.paint.Color;
import javafx.stage.Modality;
import javafx.stage.StageStyle;
import javafx.stage.Stage;
import utils.SharedContext;
import org.mindrot.jbcrypt.BCrypt;  // Importing BCrypt for password hashing

import java.io.IOException;
import java.sql.SQLException;

public class LoginController {

    @FXML
    private TextField emailTf;

    @FXML
    private PasswordField passwordTf;
    
    @FXML
    private Button signInButton;
    
    @FXML
    private Button googleSignInButton;
    
    @FXML
    private Button faceIdButton;
    
    @FXML
    private Hyperlink signUpLink;

    private UsersService usersService;
    private FaceRecognition faceRecognition;
    private Stage loadingStage;
    private boolean faceRecognitionInitialized = false;

    public LoginController() {
        // Initialize the UsersService to handle database interactions
        usersService = new UsersService();
        // Initialize the FaceRecognition service
        faceRecognition = new FaceRecognition();
        
        // Initialize face recognition system with proper tracking
        faceRecognition.initialize().thenAccept(success -> {
            faceRecognitionInitialized = success;
            if (!success) {
                System.err.println("Failed to initialize face recognition system");
            } else {
                System.out.println("Face recognition system initialized successfully");
            }
        });
    }

    @FXML
    private void handleSignIn() {
        String email = emailTf.getText().trim();  // Trim input to remove any extra spaces
        String password = passwordTf.getText().trim();

        // Input validation
        if (email.isEmpty() || password.isEmpty()) {
            showAlert("Error", "Please fill out both email and password fields.");
            return;
        }

        // Check user credentials using the existing findByEmailAndPassword method
        User user = usersService.findByEmail(email);

        if (user != null) {
            // Check if the password matches (assuming passwords are hashed)
            String storedHash = user.getPassword();
            // Convert $2y$ to $2a$ if necessary (for Symfony compatibility)
            String compatibleHash = storedHash.startsWith("$2y$") 
                ? "$2a$" + storedHash.substring(4) 
                : storedHash;
            
            try {
                if (BCrypt.checkpw(password, compatibleHash)) {
                    // Password matched
                SharedContext.setLoggedInUserId(user.getId());
                SharedContext.setLoggedInUserRole(user.getRole());

                // Navigate based on user role
                navigateToView(user.getRole());
                } else {
                    // Invalid password
                    showAlert("Error", "Invalid email or password.");
                }
            } catch (IllegalArgumentException e) {
                // Handle hash format errors
                System.err.println("Error verifying password: " + e.getMessage());
                showAlert("Error", "Invalid email or password format.");
            }
        } else {
            // Invalid email
            showAlert("Error", "Invalid email or password.");
        }

    }

    @FXML
    private void handleSignUp() {
        // Switch to sign-up screen
        switchToSignUp();
    }

    private void switchToSignUp() {
        try {
            // Load the signup form
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SignUp.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            
            // Add CSS stylesheet to the scene
            String cssPath = "/styles/app.css";
            scene.getStylesheets().add(getClass().getResource(cssPath).toExternalForm());
            
            Stage stage = (Stage) emailTf.getScene().getWindow();
            stage.setTitle("Sign Up");
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to load signup page: " + e.getMessage());
        }
    }

    private void navigateToView(String role) {
        try {
            String fxmlPath = "";
            switch (role.toLowerCase()) {
                case "admin":
                    fxmlPath = "/admin_dashboard.fxml";
                    break;
                case "driver":
                    fxmlPath = "/driver_dashboard.fxml";
                    break;
                default:
                    fxmlPath = "/normal_user_dashboard.fxml";
                    break;
            }
            FXMLLoader loader = new FXMLLoader(getClass().getResource(fxmlPath));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) emailTf.getScene().getWindow();
            
            // Add CSS stylesheet to the scene
            String cssPath = "/styles/app.css";
            scene.getStylesheets().add(getClass().getResource(cssPath).toExternalForm());
            
            // Set the title based on user role
            switch (role.toLowerCase()) {
                case "admin":
                    stage.setTitle("Admin Dashboard");
                    break;
                case "driver":
                    stage.setTitle("Driver Dashboard");
                    break;
                default:
                    stage.setTitle("User Dashboard");
                    break;
            }
            
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to load user dashboard: " + e.getMessage());
        }
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setContentText(message);
        alert.showAndWait();
    }

    @FXML
    private void handleGoogleSignIn() {
        try {
            // Get Google credentials
            Credential credential = GoogleAuth.getCredentials();

            // Get the user's email from Google
            String userEmail = GoogleAuth.getEmailFromGoogle(credential);

            if (userEmail == null) {
                showAlert("Error", "Failed to retrieve email from Google.");
                return;
            }

            System.out.println("User authenticated with Google: " + userEmail);

            // Check if the user exists in the database
            User user = usersService.findByEmail(userEmail);

            if (user != null) {
                // User exists, log them in based on their role
                                SharedContext.setLoggedInUserId(user.getId());
                                SharedContext.setLoggedInUserRole(user.getRole());

                // Navigate based on user role
                navigateToView(user.getRole());
            } else {
                // User doesn't exist, ask if they want to create an account
                Alert confirmAlert = new Alert(Alert.AlertType.CONFIRMATION);
                confirmAlert.setTitle("New User");
                confirmAlert.setHeaderText(null);
                confirmAlert.setContentText("No account found for " + userEmail + ". Would you like to create a new account?");

                confirmAlert.showAndWait().ifPresent(response -> {
                    if (response == javafx.scene.control.ButtonType.OK) {
                        try {
                            // Create new user with default role
                            User newUser = new User();
                            newUser.setEmail(userEmail);
                            newUser.setFirstName("Google");
                            newUser.setLastName("User");

                            // Generate a random password for the account
                            String randomPassword = generateRandomPassword();
                            newUser.setPassword(randomPassword);
                            newUser.setRole("USER");

                            // Create the new user
                            usersService.create(newUser);

                            // Log in the new user
                            User createdUser = usersService.findByEmail(userEmail);
                            if (createdUser != null) {
                                SharedContext.setLoggedInUserId(createdUser.getId());
                                SharedContext.setLoggedInUserRole(createdUser.getRole());
                                navigateToView(createdUser.getRole());
                            } else {
                                showAlert("Error", "Failed to create new user account.");
                            }
                        } catch (SQLException | RuntimeException e) {
                            e.printStackTrace();
                            showAlert("Error", "Failed to create account: " + e.getMessage());
                        }
                    }
                });
            }
        } catch (Exception e) {
            e.printStackTrace();
            showAlert("Error", "Google Sign-In Failed: " + e.getMessage());
        }
    }

    /**
     * Handles Face ID login by initiating the facial recognition process.
     * This method:
     * 1. Shows a loading indicator during the recognition process
     * 2. Attempts to identify the user through facial recognition
     * 3. If successful, logs the user in and navigates to the appropriate dashboard
     * 4. If unsuccessful, displays an appropriate error message
     */
    @FXML
    private void handleFaceIdLogin() {
        try {
            // Check if face recognition is initialized
            if (!faceRecognitionInitialized) {
                showAlert("Face Recognition Not Ready", "The face recognition system is not ready yet. Please try again in a moment or use your credentials to log in.");
                return;
            }
            
            // Show a loading indicator or message
            showLoadingMessage();
            
            // Add a timeout for the facial recognition process (30 seconds)
            java.util.concurrent.CompletableFuture<Void> timeoutFuture = java.util.concurrent.CompletableFuture
                .runAsync(() -> {
                    try {
                        Thread.sleep(30000); // 30 seconds timeout
                        javafx.application.Platform.runLater(() -> {
                            hideLoadingMessage();
                            showAlert("Face ID Timeout", "The facial recognition process took too long. Please try again.");
                        });
                    } catch (InterruptedException e) {
                        // Timeout was canceled, which is fine
                    }
                });
            
            // Attempt to recognize the user using facial recognition, which returns a CompletableFuture
            faceRecognition.recognizeFace()
                .thenAccept(recognizedUserId -> {
                    // Cancel the timeout since we got a response
                    timeoutFuture.cancel(true);
                    
                    // This code runs when the CompletableFuture completes normally
                    javafx.application.Platform.runLater(() -> {
                        hideLoadingMessage();
                        
                        try {
                            if (recognizedUserId != null && !recognizedUserId.isEmpty()) {
                                try {
                                    // Parse the recognized ID as an integer since it's a user ID, not an email
                                    int userId = Integer.parseInt(recognizedUserId);
                                    
                                    // User recognized, fetch their information by ID
                                    User user = usersService.findById(userId);
                                    
                                    if (user != null && user.isFaceIdEnabled()) {
                                    // User found and face ID is enabled for this user
                                    System.out.println("User authenticated with Face ID: " + user.getEmail());
                                    
                                    // Set the logged-in user information
                                    SharedContext.setLoggedInUserId(user.getId());
                                    SharedContext.setLoggedInUserRole(user.getRole());
                                    
                                    // Navigate based on user role
                                    navigateToView(user.getRole());
                                } else {
                                    // User not found or face ID not enabled
                                    showAlert("Face ID Error", "Face ID login is not enabled for this user or user not found.");
                                }
                                } catch (NumberFormatException e) {
                                    // This means the ID returned from facial recognition is not a valid number
                                    e.printStackTrace();
                                    showAlert("Face ID Error", "Invalid user ID format returned by face recognition.");
                                }
                            } else {
                                // No user recognized
                                showAlert("Face ID Error", "Face not recognized or no matching user found.");
                            }
                        } catch (Exception e) {
                            e.printStackTrace();
                            showAlert("Face ID Error", "Face ID authentication failed: " + e.getMessage());
                        }
                    });
                })
                .exceptionally(ex -> {
                    // Cancel the timeout since we got a response (even if it's an error)
                    timeoutFuture.cancel(true);
                    
                    // This code runs when the CompletableFuture completes exceptionally
                    javafx.application.Platform.runLater(() -> {
                        hideLoadingMessage();
                        ex.printStackTrace();
                        showAlert("Face ID Error", "Face ID authentication failed: " + ex.getMessage());
                    });
                    return null;
                });
        } catch (Exception e) {
            hideLoadingMessage();
            e.printStackTrace();
            showAlert("Face ID Error", "Failed to start face recognition: " + e.getMessage());
        }
    }

    /**
     * Enables Face ID for the currently logged-in user.
     * This method:
     * 1. Retrieves the current user's information
     * 2. Captures the user's face and registers it in the system
     * 3. Updates the user's profile to enable Face ID login
     * 4. Provides feedback on success or failure
     */
    @FXML
    private void enableFaceIdForCurrentUser() {
        try {
            // Get the currently logged-in user ID
            int userId = SharedContext.getLoggedInUserId();
            User user = usersService.findById(userId);
            
            if (user != null) {
                // Show loading message during face registration
                showLoadingMessage();
                
                // Check if face recognition is initialized
                if (!faceRecognitionInitialized) {
                    showAlert("Face Recognition Not Ready", "The face recognition system is not ready yet. Please try again in a moment.");
                    return;
                }
                
                // Capture the user's face and associate it with their ID
                faceRecognition.registerFace(user)
                    .thenAccept(success -> {
                        javafx.application.Platform.runLater(() -> {
                            hideLoadingMessage();
                            
                            if (success) {
                    // Update the user's record to enable face ID
                    user.setFaceIdEnabled(true);
                    try {
                        usersService.update(user);
                        
                        Alert alert = new Alert(Alert.AlertType.INFORMATION);
                        alert.setTitle("Success");
                        alert.setContentText("Face ID has been successfully enabled for your account.");
                        alert.showAndWait();
                    } catch (SQLException e) {
                        e.printStackTrace();
                        showAlert("Error", "Failed to update user: " + e.getMessage());
                    }
                            } else {
                                showAlert("Error", "Failed to register face. Please try again.");
                            }
                        });
                    })
                    .exceptionally(ex -> {
                        javafx.application.Platform.runLater(() -> {
                            hideLoadingMessage();
                            ex.printStackTrace();
                            showAlert("Error", "Failed to register face: " + ex.getMessage());
                        });
                        return null;
                    });
            } else {
                showAlert("Error", "Cannot find user information. Please log in again.");
            }
        } catch (Exception e) {
            hideLoadingMessage();
            e.printStackTrace();
            showAlert("Error", "Failed to enable Face ID: " + e.getMessage());
        }
    }

    // Helper method to open Google sign-in page
    private void openGoogleSignInPage() {
        try {
            // Open the default web browser to the Google login page
            java.awt.Desktop.getDesktop().browse(java.net.URI.create("https://accounts.google.com/"));
        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to open Google sign-in page: " + e.getMessage());
        }
    }




    // Helper method to generate a random password
    private String generateRandomPassword() {
        String chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
        StringBuilder sb = new StringBuilder(16);
        for (int i = 0; i < 16; i++) {
            int index = (int) (chars.length() * Math.random());
            sb.append(chars.charAt(index));
        }
        return sb.toString();
    }
    
    /**
     * Shows a loading message during facial recognition process.
     * Displays a modal dialog with a progress indicator and message.
     */
    private void showLoadingMessage() {
        javafx.application.Platform.runLater(() -> {
            try {
                // Create a progress indicator
                ProgressIndicator progressIndicator = new ProgressIndicator();
                progressIndicator.setMaxSize(100, 100);
                
                // Create a label for the loading message
                javafx.scene.control.Label messageLabel = new javafx.scene.control.Label("Facial recognition in progress...");
                messageLabel.setStyle("-fx-font-size: 14px; -fx-font-weight: bold; -fx-padding: 10 0 0 0;");
                
                // Create a container for the progress indicator and message
                javafx.scene.layout.VBox vbox = new javafx.scene.layout.VBox(10);
                vbox.setAlignment(javafx.geometry.Pos.CENTER);
                vbox.setPadding(new javafx.geometry.Insets(20));
                vbox.getChildren().addAll(progressIndicator, messageLabel);
                
                // Create a stack pane as the root
                StackPane root = new StackPane(vbox);
                root.setStyle("-fx-background-color: white;");
                
                // Create a new stage for the loading dialog
                loadingStage = new Stage();
                loadingStage.initModality(Modality.APPLICATION_MODAL);
                loadingStage.initStyle(StageStyle.UNDECORATED);
                loadingStage.setScene(new Scene(root, 250, 150));
                
                // Center the loading stage on the primary stage
                if (emailTf.getScene() != null && emailTf.getScene().getWindow() != null) {
                    Stage primaryStage = (Stage) emailTf.getScene().getWindow();
                    loadingStage.setX(primaryStage.getX() + (primaryStage.getWidth() - 250) / 2);
                    loadingStage.setY(primaryStage.getY() + (primaryStage.getHeight() - 150) / 2);
                }
                
                loadingStage.show();
            } catch (Exception e) {
                e.printStackTrace();
            }
        });
    }
    
    /**
     * Hides the loading message dialog.
     * This method should be called when facial recognition process completes.
     */
    private void hideLoadingMessage() {
        javafx.application.Platform.runLater(() -> {
            if (loadingStage != null) {
                loadingStage.close();
                loadingStage = null;
            }
        });
    }
    
    /**
     * Checks if Face ID is available on the system.
     * This method verifies that all the required libraries and dependencies
     * for facial recognition are present and working.
     * 
     * @return true if Face ID functionality is available, false otherwise
     */
    public boolean isFaceIdAvailable() {
        return faceRecognition.isSystemAvailable() && faceRecognitionInitialized;
    }
    
    /**
     * Disables Face ID for the currently logged-in user.
     * This removes the facial recognition data and updates the user's profile.
     */
    @FXML
    private void disableFaceIdForCurrentUser() {
        try {
            // Get the currently logged-in user ID
            int userId = SharedContext.getLoggedInUserId();
            User user = usersService.findById(userId);
            
            if (user != null && user.isFaceIdEnabled()) {
                // Show loading message
                showLoadingMessage();
                
                // Remove the user's face data asynchronously
                // Check if face recognition is initialized
                if (!faceRecognitionInitialized) {
                    showAlert("Face Recognition Not Ready", "The face recognition system is not ready yet. Please try again in a moment.");
                    return;
                }
                
                faceRecognition.removeFaceData(user.getId())
                    .thenAccept(success -> {
                        javafx.application.Platform.runLater(() -> {
                            hideLoadingMessage();
                            
                            if (success) {
                                // Update the user's record to disable face ID
                                user.setFaceIdEnabled(false);
                                try {
                                    usersService.update(user);
                                    
                                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
                                    alert.setTitle("Success");
                                    alert.setContentText("Face ID has been successfully disabled for your account.");
                                    alert.showAndWait();
                                } catch (SQLException e) {
                                    e.printStackTrace();
                                    showAlert("Error", "Failed to update user: " + e.getMessage());
                                }
                            } else {
                                showAlert("Error", "Failed to remove face data. Please try again.");
                            }
                        });
                    })
                    .exceptionally(ex -> {
                        javafx.application.Platform.runLater(() -> {
                            hideLoadingMessage();
                            ex.printStackTrace();
                            showAlert("Error", "Failed to remove face data: " + ex.getMessage());
                        });
                        return null;
                    });
            } else {
                showAlert("Error", "Face ID is not enabled for this user or user not found.");
            }
        } catch (Exception e) {
            hideLoadingMessage();
            e.printStackTrace();
            showAlert("Error", "Failed to disable Face ID: " + e.getMessage());
        }
    }
    
    /**
     * Handles button hover effect - applies a drop shadow when mouse enters button
     * @param button The button that triggered the event
     */
    @FXML
    public void handleButtonHover(javafx.scene.input.MouseEvent event) {
        if (event.getSource() instanceof Button) {
            Button button = (Button) event.getSource();
            
            // Create a drop shadow effect
            DropShadow shadow = new DropShadow();
            shadow.setRadius(10.0);
            shadow.setColor(Color.color(0.4, 0.5, 0.9, 0.6)); // Blue shadow color
            
            // Apply the effect to the button
            button.setEffect(shadow);
            
            // Scale the button slightly
            button.setScaleX(1.05);
            button.setScaleY(1.05);
        }
    }
    
    /**
     * Handles button exit effect - removes effects when mouse exits button
     * @param button The button that triggered the event
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
     * @param link The hyperlink that triggered the event
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
            link.setTextFill(Color.web("#FF8C00"));
            
            // Add an underline
            link.setUnderline(true);
        } else if (event.getSource() instanceof Label && ((Label) event.getSource()).getStyleClass().contains("clickable")) {
            Label label = (Label) event.getSource();
            
            // Store the original text fill if not already stored
            if (!label.getProperties().containsKey("originalTextFill")) {
                label.getProperties().put("originalTextFill", label.getTextFill());
            }
            
            // Change text color to orange (accent color)
            label.setTextFill(Color.web("#FF8C00"));
        }
    }
    
    /**
     * Handles link exit effect - restores text color when mouse exits hyperlink
     * @param link The hyperlink that triggered the event
     */
    @FXML
    public void handleLinkExit(javafx.scene.input.MouseEvent event) {
        if (event.getSource() instanceof Hyperlink) {
            Hyperlink link = (Hyperlink) event.getSource();
            
            // Restore the original text fill
            if (link.getProperties().containsKey("originalTextFill")) {
                link.setTextFill((Color) link.getProperties().get("originalTextFill"));
            }
            
            // Remove underline
            link.setUnderline(false);
        } else if (event.getSource() instanceof Label && ((Label) event.getSource()).getStyleClass().contains("clickable")) {
            Label label = (Label) event.getSource();
            
            // Restore the original text fill
            if (label.getProperties().containsKey("originalTextFill")) {
                label.setTextFill((Color) label.getProperties().get("originalTextFill"));
            }
        }
    }
}
