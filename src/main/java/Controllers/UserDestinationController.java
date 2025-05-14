package Controllers;

import Models.Destination;
import Services.DestinationService;
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
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;


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

        // Initialize split pane state
        if (splitPane != null) {
            splitPane.setDividerPosition(0, 0); // Fully collapse left pane
        }

        loadDestinationCards();  // Changed from list view to cards
    }

    private void loadDestinationCards() {
        try {
            destinationsContainer.getChildren().clear();
            for (Destination destination : destinationService.readAll()) {
                addDestinationCard(destination);
            }
        } catch (SQLException e) {
            showAlert("Error", "Failed to load destinations");
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
        }
    }

    private void showDestinationDetails(Destination destination) {
        // Ensure splitPane exists
        if (splitPane == null) return;
        // Show the detail section
        detailSection.setVisible(true);
        detailSection.setManaged(true);

        // Update content
        destinationName.setText(destination.getName());

        selectedDestination = destination;
        destinationName.setText(destination.getName());
        destinationDescription.setText(destination.getDescription());

        // Adjust split pane divider
        splitPane.setDividerPosition(0, 0.3);

        String imageUrl = destination.getImage();
        if (imageUrl == null || imageUrl.isBlank()) {
            destinationImage.setImage(getPlaceholder());
        } else {
            try {
                destinationImage.setImage(new Image(imageUrl));
            } catch (IllegalArgumentException e) {
                destinationImage.setImage(getPlaceholder());
            }
        }
    }

    private Image getPlaceholder() {
        try {
            return new Image(getClass().getResourceAsStream("/placeholder.png"));
        } catch (Exception e) {
            return null; // No image if placeholder missing
        }
    }
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
            // Toggle button visibility
            showFavoritesButton.setVisible(false);
            backButton.setVisible(true);
            // Create an instance of FavoriteManagement
            FavoriteManagement favoriteService = new FavoriteManagement();

            // Call the instance method
            List<Destination> favorites = favoriteService.getUserFavorites(UserSession.getCurrentUserId());

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
            // Load the normal_user_dashboard.fxml file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Parent root = loader.load();
            
            // Get the current stage and set the new scene
            Stage stage = (Stage) destinationsContainer.getScene().getWindow();
            stage.setScene(new Scene(root));
        } catch (IOException e) {
            showAlert("Navigation Error", "Could not return to dashboard: " + e.getMessage());
            e.printStackTrace();
        }
    }
}
