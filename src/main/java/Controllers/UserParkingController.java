package Controllers;

import Models.Destination;
import Models.ParkingSpot;
import Services.ParkingService;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;

import java.io.IOException;
import java.sql.SQLException;

public class UserParkingController {

    @FXML private ListView<ParkingSpot> parkingList;
    @FXML private Label titleLabel;
    private final ParkingService parkingService = new ParkingService();
    @FXML
    private Slider feeSlider;
    @FXML
    private Label feeLabel;

    public void initializeWithDestination(Destination destination) {
        selectedDestination = destination;  // Set the selected destination
        loadParkingSpots();  // Load the parking spots for that destination
        titleLabel.setText("Available Parking at " + destination.getName());
        loadParkingSpots(destination.getId_destination());
        feeSlider.valueProperty().addListener((obs, oldVal, newVal) -> {
            feeLabel.setText("Max Fee: $" + String.format("%.2f", newVal));
            filterParkingByFee(destination.getId_destination(), newVal.floatValue());
        });
    }

    private void loadParkingSpots() {
        // Assuming the parking spots are displayed in a ListView or similar UI component
        try {
            parkingList.getItems().setAll(parkingService.getParkingByDestination(selectedDestination.getId_destination()));  // Load parking spots for the selected destination
        } catch (SQLException e) {
            showAlert("Error", "Failed to load parking spots: " + e.getMessage());
        }
    }
    private void loadParkingSpots(int destinationId) {
        try {
            parkingList.getItems().setAll(parkingService.getParkingByDestination(destinationId));
            parkingList.setCellFactory(param -> new ListCell<>() {
                private final HBox content = new HBox(15);
                private final Label spotLabel = new Label();
                private final Label detailsLabel = new Label();

                {
                    spotLabel.setStyle("-fx-font-weight: bold; -fx-font-size: 16;");
                    detailsLabel.setStyle("-fx-text-fill: #666;");
                    content.getChildren().addAll(spotLabel, detailsLabel);
                }

                @Override
                protected void updateItem(ParkingSpot spot, boolean empty) {
                    super.updateItem(spot, empty);
                    if (empty || spot == null) {
                        setGraphic(null);
                    } else {
                        spotLabel.setText("Spot #" + spot.getSpot_number());
                        String details = String.format("Size: %s | Fees: $%.2f | %s",
                                spot.getSize(),
                                spot.getParking_fees(),
                                spot.isIs_available() ? "Available ✅" : "Occupied ❌");
                        detailsLabel.setText(details);
                        setGraphic(content);
                    }
                }
            });
        } catch (SQLException e) {
            showAlert("Error", "Failed to load parking spots");
        }
    }

    @FXML
    private void goBackToDestinations() throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("/user_destinations.fxml"));
        Stage stage = (Stage) parkingList.getScene().getWindow();
        stage.setScene(new Scene(root));
    }

    private void showAlert(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }


    private void filterParkingByFee(int destinationId, float maxFee) {
        try {
            // Call the adjusted service method with both destinationId and maxFee
            parkingList.getItems().setAll(parkingService.getParkingByDestinationAndMaxFee(destinationId, maxFee));
        } catch (SQLException e) {
            showAlert("Error", "Failed to filter parking spots: " + e.getMessage());
        }
    }

    @FXML
    private CheckBox availabilityFilter;  // Checkbox to filter available spots

    private Destination selectedDestination;  // The currently selected destination

    @FXML
    private void handleFilterAvailability() {
        if (selectedDestination != null) {
            boolean isAvailable = availabilityFilter.isSelected();  // Get the state of the checkbox
            filterParkingByAvailability(isAvailable, selectedDestination.getId_destination());  // Call the method to filter based on availability and the selected destination
        }
    }

    private void filterParkingByAvailability(boolean isAvailable, int destinationId) {
        try {
            parkingList.getItems().setAll(parkingService.getParkingByAvailabilityAndDestination(isAvailable, destinationId));  // Update the list with filtered parking spots for the selected destination
        } catch (SQLException e) {
            showAlert("Error", "Failed to filter parking spots: " + e.getMessage());
        }
    }



}