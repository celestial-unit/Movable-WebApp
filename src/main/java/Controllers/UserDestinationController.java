package Controllers;

import Models.Destination;
import Services.DestinationService;
import Services.FavoriteManagement;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.FlowPane;
import javafx.scene.layout.VBox;
import javafx.scene.text.Text;
import javafx.stage.Stage;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.SQLException;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import utils.MyConnection;
import utils.UserSession;


public class UserDestinationController implements Initializable {

    // Updated Fields matching new FXML
    @FXML private FlowPane destinationsContainer;
    @FXML private VBox detailSection;
    @FXML private ImageView destinationImage;
    @FXML private Label destinationName;
    @FXML private Text destinationDescription;

    @FXML private SplitPane splitPane;

    private Destination selectedDestination;
    private final DestinationService destinationService = new DestinationService();

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        try {
            System.out.println("Initializing UserDestinationController...");
            
            // Verify user session without preventing destination loading
            int userId = UserSession.getCurrentUserId();
            if (userId <= 0) {
                System.err.println("No active user session detected (userId: " + userId + ")");
                // Disable user-specific features but continue loading destinations
                disableUserSpecificFeatures();
            } else {
                System.out.println("User session verified. User ID: " + userId);
                // Enable user-specific features 
                enableUserSpecificFeatures();
            }
            
            // Test database connection
            Connection conn = MyConnection.getInstance().getConnection();
            if (conn == null || conn.isClosed()) {
                System.err.println("Database connection failed or is closed");
                showAlert("Database Error", "Could not connect to database. Please check your connection settings.");
                return;
            }
            System.out.println("Database connection successful!");
            
            // Initialize split pane state
            if (splitPane != null) {
                splitPane.setDividerPosition(0, 0); // Fully collapse left pane
                System.out.println("Split pane initialized");
            } else {
                System.err.println("Warning: Split pane is null");
            }

            // Load destination cards
            System.out.println("Starting to load destination cards...");
            loadDestinationCards();
            
        } catch (SQLException e) {
            System.err.println("Database error during initialization: " + e.getMessage());
            e.printStackTrace();
            showAlert("Database Error", "Failed to initialize: " + e.getMessage());
        } catch (Exception e) {
            System.err.println("Unexpected error during initialization: " + e.getMessage());
            e.printStackTrace();
            showAlert("Error", "Unexpected error during initialization: " + e.getMessage());
        }
    }

    private void loadDestinationCards() {
        try {
            System.out.println("Starting to load destination cards...");
            showLoadingIndicator(true);
            
            // Clear existing cards
            destinationsContainer.getChildren().clear();
            
            // Load destinations - this should work with or without a session
            List<Destination> destinations = destinationService.readAll();
            
            System.out.println("Found " + destinations.size() + " destinations");
            
            if (destinations.isEmpty()) {
                System.out.println("No destinations found, showing empty message");
                showNoDestinationsMessage();
            } else {
                System.out.println("Adding destination cards to container");
                for (Destination destination : destinations) {
                    System.out.println("Processing destination: " + destination.getName() + 
                                     ", image path: " + destination.getImage());
                    addDestinationCard(destination);
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
            System.err.println("Database error while loading destinations: " + e.getMessage());
            showErrorWithRetry("Failed to load destinations", e.getMessage(), this::loadDestinationCards);
        } catch (Exception e) {
            e.printStackTrace();
            System.err.println("Unexpected error while loading destinations: " + e.getMessage());
            showErrorWithRetry("Failed to load destinations", "An unexpected error occurred", this::loadDestinationCards);
        } finally {
            showLoadingIndicator(false);
        }
    }
    
    private void showLoadingIndicator(boolean show) {
        // Show/hide loading indicator
        if (show) {
            Label loadingLabel = new Label("Loading destinations...");
            loadingLabel.setId("loading-label");
            loadingLabel.setStyle("-fx-text-fill: #3498db; -fx-font-size: 16px; -fx-font-weight: bold;");
            destinationsContainer.getChildren().add(loadingLabel);
        } else {
            destinationsContainer.getChildren().removeIf(node -> node.getId() != null && node.getId().equals("loading-label"));
        }
    }
    
    private void showNoDestinationsMessage() {
        Label noDataLabel = new Label("No destinations found");
        noDataLabel.setStyle("-fx-text-fill: #666; -fx-font-size: 14px;");
        destinationsContainer.getChildren().add(noDataLabel);
    }
    
    private void showErrorWithRetry(String title, String message, Runnable retryAction) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        
        ButtonType retryButton = new ButtonType("Retry");
        alert.getButtonTypes().add(retryButton);
        
        Optional<ButtonType> result = alert.showAndWait();
        if (result.isPresent() && result.get() == retryButton) {
            retryAction.run();
        }
    }

    private void addDestinationCard(Destination destination) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DestinationCard.fxml"));
            VBox card = loader.load();
            DestinationCardController controller = loader.getController();
            controller.setData(destination); // Simplified call

            card.setOnMouseClicked(e -> showDestinationDetails(destination));
            destinationsContainer.getChildren().add(card);
        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to load destination card: " + e.getMessage());
        }
    }

    private void showDestinationDetails(Destination destination) {
        // Ensure splitPane exists
        if (splitPane == null) return;
        
        // Show the detail section
        detailSection.setVisible(true);
        detailSection.setManaged(true);

        // Update content
        selectedDestination = destination;
        destinationName.setText(destination.getName());
        destinationDescription.setText(destination.getDescription());

        // Adjust split pane divider
        splitPane.setDividerPosition(0, 0.3);

        // Use the robust image loading method
        String imageUrl = destination.getImage();
        destinationImage.setImage(loadDestinationImage(imageUrl));
    }
    
    /**
     * Loads a destination image with multiple fallback options
     * @param imagePath the path to the image
     * @return the loaded image or a placeholder if loading fails
     */
    private Image loadDestinationImage(String imagePath) {
        try {
            if (imagePath == null || imagePath.isEmpty()) {
                return loadPlaceholderImage();
            }
            
            System.out.println("Attempting to load image: " + imagePath);
            
            // If the path starts with 'file:', use it directly
            if (imagePath.startsWith("file:")) {
                System.out.println("Loading as file URL: " + imagePath);
                return new Image(imagePath);
            }
            
            // If the path starts with '/', load from resources
            if (imagePath.startsWith("/")) {
                System.out.println("Loading as resource: " + imagePath);
                return new Image(getClass().getResourceAsStream(imagePath));
            }
            
            // Default to trying as a regular file path with file: prefix
            System.out.println("Loading as regular path with file: prefix: " + imagePath);
            return new Image("file:" + imagePath);
        } catch (Exception e) {
            System.err.println("Failed to load image: " + imagePath + ", Error: " + e.getMessage());
            return loadPlaceholderImage();
        }
    }
    
    /**
     * Loads a placeholder image with fallback options
     * @return the placeholder image or null if loading fails
     */
    private Image loadPlaceholderImage() {
        try {
            // Try multiple possible placeholder paths
            String[] possiblePaths = {
                "/placeholder.jpg",
                "/background_image.jpg",
                "/images/placeholder.jpg",
                "/images/background_image.jpg"
            };
            
            for (String path : possiblePaths) {
                try {
                    System.out.println("Trying placeholder path: " + path);
                    Image img = new Image(getClass().getResourceAsStream(path));
                    if (img != null && !img.isError()) {
                        System.out.println("Successfully loaded placeholder: " + path);
                        return img;
                    }
                } catch (Exception e) {
                    continue;
                }
            }
            
            System.err.println("No placeholder images found in resources");
            return null;
        } catch (Exception e) {
            System.err.println("Failed to load any placeholder image: " + e.getMessage());
            return null;
        }
    }

    // This method is replaced by loadPlaceholderImage()
    @FXML
    private void handleCheckParkingSpots() {
        if (selectedDestination != null) {
            // Your existing navigation code
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_parking.fxml"));
                Parent root = loader.load();
                UserParkingController controller = loader.getController();
                controller.initializeWithDestination(selectedDestination);

                Stage stage = (Stage) destinationsContainer.getScene().getWindow();
                stage.setScene(new Scene(root));
            } catch (IOException e) {
                showAlert("Navigation Error", "Could not load parking view");
            }
        }
    }

    // Add this method if missing
    private void showAlert(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    //handle favorite part


    @FXML
    private void handleShowFavorites() {
        try {
            // Check if user session is active before showing favorites
            int userId = UserSession.getCurrentUserId();
            if (userId <= 0) {
                showAlert("Session Required", "Please log in to view your favorites.");
                return;
            }
            
            // Toggle button visibility
            showFavoritesButton.setVisible(false);
            backButton.setVisible(true);
            // Create an instance of FavoriteManagement
            FavoriteManagement favoriteService = new FavoriteManagement();

            // Call the instance method
            List<Destination> favorites = favoriteService.getUserFavorites(userId);

            destinationsContainer.getChildren().clear();
            for (Destination fav : favorites) {
                addFavoriteCard(fav);
            }
        } catch (SQLException e) {
            showAlert("Error", "Failed to load favorites: " + e.getMessage());
        }
    }

    private void addFavoriteCard(Destination destination) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/favoritecard.fxml"));
            VBox card = loader.load();
            FavoriteCard controller = loader.getController();
            controller.setData(destination);

            card.setOnMouseClicked(e -> showParkingForDestination(destination));
            destinationsContainer.getChildren().add(card);
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private void showParkingForDestination(Destination destination) {
        // Your existing parking spot navigation logic
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_parking.fxml"));
            Parent root = loader.load();
            UserParkingController controller = loader.getController();
            controller.initializeWithDestination(destination);

            Stage stage = (Stage) destinationsContainer.getScene().getWindow();
            stage.setScene(new Scene(root));
        } catch (IOException e) {
            showAlert("Navigation Error", "Could not load parking view");
        }
    }

    @FXML
    private Button showFavoritesButton;

    @FXML
    private VBox favoritesSection;

    @FXML
    private FlowPane favoritesContainer;


    @FXML
    private Button backButton;

    @FXML
    private Button backToDashboardButton;


    @FXML
    private void handleBack() {
        // Show destinations and hide favorites
        showFavoritesButton.setVisible(true);
        showFavoritesButton.setManaged(true);
        favoritesSection.setVisible(false);
        favoritesSection.setManaged(false);
        destinationsContainer.setVisible(true);
        destinationsContainer.setManaged(true);
    }



    @FXML
    private void handleShowAllDestinations() {
        // Toggle button visibility
        showFavoritesButton.setVisible(true);
        backButton.setVisible(false);

        // Reload all destinations
        loadDestinationCards();
    }

    @FXML
    private TextField searchField;

    @FXML
    private void handleSearch(KeyEvent event) {
        String searchQuery = searchField.getText().trim();
        filterDestinations(searchQuery);  // Call method to filter destinations based on search query
    }
    private void filterDestinations(String searchQuery) {
        try {
            List<Destination> filteredDestinations = destinationService.getDestinationsBySearch(searchQuery);

            // Clear the current displayed destinations
            destinationsContainer.getChildren().clear();

            // Add the filtered destinations as cards to the FlowPane
            for (Destination destination : filteredDestinations) {
                addDestinationCard(destination);
            }
        } catch (SQLException e) {
            showAlert("Error", "Failed to search destinations: " + e.getMessage());
        }
    }


    /**
     * Handle navigation back to the normal user dashboard
     */
    @FXML
    private void handleBackToDashboard() {
        try {
            System.out.println("Navigating back to dashboard...");
            
            // Load the normal_user_dashboard.fxml file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Parent root = loader.load();
            System.out.println("Dashboard FXML loaded successfully");
            
            // Get the current stage and set the new scene
            if (destinationsContainer == null || destinationsContainer.getScene() == null) {
                throw new RuntimeException("Invalid UI state: container or scene is null");
            }
            
            Stage stage = (Stage) destinationsContainer.getScene().getWindow();
            if (stage != null) {
                // Set new scene
                Scene scene = new Scene(root);
                stage.setScene(scene);
                stage.show();
                System.out.println("Successfully navigated to dashboard");
            } else {
                throw new RuntimeException("Could not get current stage");
            }
        } catch (IOException e) {
            System.err.println("IO error during navigation: " + e.getMessage());
            showAlert("Navigation Error", "Could not return to dashboard: " + e.getMessage());
            e.printStackTrace();
        } catch (Exception e) {
            System.err.println("Unexpected error during navigation: " + e.getMessage());
            showAlert("Navigation Error", "Could not return to dashboard: " + e.getMessage());
            e.printStackTrace();
        }
    }
    
    /**
     * Disable user-specific features when no user session is active
     */
    private void disableUserSpecificFeatures() {
        // Hide or disable buttons that require user authentication
        if (showFavoritesButton != null) {
            showFavoritesButton.setDisable(true);
            showFavoritesButton.setTooltip(new Tooltip("Please log in to access favorites"));
        }
        
        // Add a banner notification about limited functionality
        Label sessionWarning = new Label("Limited functionality: Please log in for full access");
        sessionWarning.setStyle("-fx-text-fill: #e74c3c; -fx-font-weight: bold; -fx-padding: 5;");
        
        // Add to the top of the destinations container
        if (destinationsContainer != null && !destinationsContainer.getChildren().isEmpty()) {
            destinationsContainer.getChildren().add(0, sessionWarning);
        }
    }
    
    /**
     * Enable user-specific features when user session is active
     */
    private void enableUserSpecificFeatures() {
        // Enable buttons that require user authentication
        if (showFavoritesButton != null) {
            showFavoritesButton.setDisable(false);
            showFavoritesButton.setTooltip(null);
        }
    }
}
