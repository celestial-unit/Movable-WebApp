package Controllers;

import Models.Destination;
import javafx.fxml.FXML;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

public class FavoriteCard {

    @FXML
    private ImageView cardImage;
    @FXML private Label cardTitle;
    @FXML private Label cardLocation;

    public void setData(Destination destination) {
        cardImage.setImage(destination.getImageUrl());
        cardTitle.setText(destination.getName());
        cardLocation.setText(destination.getLocation());
    }
}
