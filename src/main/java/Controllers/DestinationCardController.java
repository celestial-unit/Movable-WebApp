package Controllers;

import Models.Destination;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ToggleButton;
import javafx.scene.image.ImageView;
import javafx.scene.layout.VBox;
import java.sql.SQLException;

public class DestinationCardController {
    @FXML private VBox cardRoot;
    @FXML private ImageView cardImage;
    @FXML private ToggleButton heartButton;
    @FXML private Label cardTitle;
    @FXML private Label cardLocation;

    private Destination destination;
    private final FavoriteManagement favoriteService = new FavoriteManagement();

    public void setData(Destination destination) {
        this.destination = destination;
        updateHeartAppearance();
        loadCardContent();
    }

    private void loadCardContent() {
        cardImage.setImage(destination.getImageUrl());
        cardTitle.setText(destination.getName());
        cardLocation.setText(destination.getLocation());
    }

    private void updateHeartAppearance() {
        try {
            boolean isFav = favoriteService.isFavorite(destination.getId_destination());
            heartButton.setSelected(isFav);

        } catch (SQLException e) {
            showError("Error checking favorite status");
        }
    }

    @FXML
    private void handleHeartClick() {
        try {
            if (heartButton.isSelected()) {
                favoriteService.addFavorite(destination.getId_destination());
            } else {
                favoriteService.removeFavorite(destination.getId_destination());
            }
            updateHeartAppearance();
        } catch (SQLException e) {
            showError("Failed to update favorite");
            heartButton.setSelected(!heartButton.isSelected());
        }
    }

    private void showError(String message) {
        System.err.println("Error: " + message);
        // Implement your error display logic here
    }


}