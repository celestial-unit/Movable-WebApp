package Controllers;

import Models.Destination;
import Services.FavoriteManagement;
import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ToggleButton;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.VBox;
import utils.UserSession;

import java.sql.SQLException;

public class DestinationCardController {
    @FXML private VBox cardRoot;
    @FXML private ImageView cardImage;
    @FXML private ToggleButton heartButton;
    @FXML private Label cardTitle;
    @FXML private Label cardLocation;

    private Destination destination;
    private final FavoriteManagement favoriteService = new FavoriteManagement();

    @FXML
    public void initialize() {
        try {
            // Verify all FXML components are properly injected
            if (cardRoot == null || cardImage == null || heartButton == null || 
                cardTitle == null || cardLocation == null) {
                throw new RuntimeException("FXML components not properly injected");
            }
            
            // Set default styles and placeholder image
            cardImage.setImage(new Image(getClass().getResourceAsStream("/background_image.jpg")));
            
        } catch (Exception e) {
            System.err.println("Error initializing DestinationCardController: " + e.getMessage());
            e.printStackTrace();
        }
    }

    public void setData(Destination destination) {
        try {
            System.out.println("Setting data for destination: " + destination.getName());
            this.destination = destination;
            
            // Set text content first
            cardTitle.setText(destination.getName());
            cardLocation.setText(destination.getLocation());
            
            // Load image with fallback
            loadDestinationImage();
            
            // Update heart button
            updateHeartAppearance();
            
        } catch (Exception e) {
            System.err.println("Error setting destination data: " + e.getMessage());
            e.printStackTrace();
        }
    }

    private void loadDestinationImage() {
        try {
            String imagePath = destination.getImage();
            System.out.println("Loading image from path: " + imagePath);
            
            Image image = null;
            
            // Try loading as resource first
            if (imagePath.startsWith("/")) {
                try {
                    image = new Image(getClass().getResourceAsStream(imagePath));
                    System.out.println("Loaded image as resource");
                } catch (Exception e) {
                    System.err.println("Failed to load image as resource: " + e.getMessage());
                }
            }
            
            // If resource loading failed or path doesn't start with /, try as file
            if (image == null || image.isError()) {
                try {
                    image = new Image("file:" + imagePath);
                    System.out.println("Loaded image as file");
                } catch (Exception e) {
                    System.err.println("Failed to load image as file: " + e.getMessage());
                }
            }
            
            // If both attempts failed, use placeholder
            if (image == null || image.isError()) {
                System.out.println("Using placeholder image");
                image = new Image(getClass().getResourceAsStream("/background_image.jpg"));
            }
            
            cardImage.setImage(image);
            
        } catch (Exception e) {
            System.err.println("Error loading destination image: " + e.getMessage());
            e.printStackTrace();
            // Try to load placeholder image
            try {
                cardImage.setImage(new Image(getClass().getResourceAsStream("/background_image.jpg")));
            } catch (Exception ex) {
                System.err.println("Failed to load placeholder image: " + ex.getMessage());
            }
        }
    }

    private void updateHeartAppearance() {
        try {
            boolean isFav = favoriteService.isFavorite(destination.getId_destination());
            heartButton.setSelected(isFav);
            heartButton.setText(isFav ? "♥" : "♡");
        } catch (SQLException e) {
            System.err.println("Error updating heart appearance: " + e.getMessage());
        }
    }

    @FXML
    private void handleHeartClick() {
        try {
            if (heartButton.isSelected()) {
                favoriteService.addFavorite(destination.getId_destination());
                heartButton.setText("♥");
            } else {
                favoriteService.removeFavorite(destination.getId_destination());
                heartButton.setText("♡");
            }
        } catch (SQLException e) {
            System.err.println("Error handling heart click: " + e.getMessage());
            // Revert the button state
            heartButton.setSelected(!heartButton.isSelected());
            heartButton.setText(heartButton.isSelected() ? "♥" : "♡");
        }
    }

    private void showError(String message) {
        System.err.println("Error: " + message);
        
        // Create and show an alert dialog
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.show();
        
        // Optional: Create a simple console log for debugging
        System.err.println("[DestinationCardController] " + message);
    }
}
