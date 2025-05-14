package Controllers;

import Models.ParkingSpot;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.event.ActionEvent;
import javafx.scene.control.*;
import Services.ParkingService;

import java.sql.SQLException;
import java.util.List;


public class ParkingManagement {
    private static final String GENERAL_REGEX = "^[a-zA-Z0-9.,'\\- ]+$";

    private ParkingService parkingService;
    public ParkingManagement() {
        this.parkingService = new ParkingService();
    }

    @FXML
    private ListView<ParkingSpot> parkingSpotList;

    @FXML
    private Label idError,notesError,sizeError, availableError, accessibleError, spotNumberError, feesError;

    @FXML
    private TextField idField, sizeField, spotNumberField, feesField,notesArea;

    @FXML
    private CheckBox availableCheckBox, accessibleCheckBox;

    @FXML
    private Button addButton, updateButton, deleteButton, clearButton;

    private ObservableList<ParkingSpot> parkingSpots = FXCollections.observableArrayList();

    @FXML
    void initialize() {
        setupValidation();
        configureListView(); // Configure UI formatting
        loadParkingSpots(); // Load data from DB
        parkingSpotList.setItems(parkingSpots); // Set ListView once

        parkingSpotList.getSelectionModel().selectedItemProperty().addListener((obs, oldSelection, newSelection) -> {
            if (newSelection != null) {
                populateFields(newSelection);
            }
        });
    }

    private void loadParkingSpots() {
        try {
            List<ParkingSpot> spotsFromDB = parkingService.readAll(); // Call readAll() instead
            parkingSpots.setAll(spotsFromDB); // Replace current list with fetched data
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Failed to load parking spots: " + e.getMessage());
        }
    }


    private void configureListView() {
        parkingSpotList.setCellFactory(param -> new ListCell<ParkingSpot>() {
            private final Label label = new Label();
            @Override
            protected void updateItem(ParkingSpot spot, boolean empty) {
                super.updateItem(spot, empty);
                if (empty || spot == null) {
                    setGraphic(null);
                } else {
                    label.setText("The destination: " + spot.getId_parking() +
                            " | Destination ID: " + spot.getId_destination() +
                            " | Spot: " + spot.getSpot_number() +
                            " | Size: " + spot.getSize() +
                            " | Fees: $" + spot.getParking_fees() +
                            " | Available: " + (spot.isIs_available() ? "Yes" : "No") +
                            " | Accessible: " + (spot.isIs_accessible() ? "Yes" : "No"));
                    setGraphic(label);
                }
            }
        });
    }



    @FXML
    private void saveParkingSpot(ActionEvent event) {
        if (!isFormValid()) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please correct the invalid fields");
            return;
        }

        try {
            ParkingSpot parkingSpot = new ParkingSpot(
                    Integer.parseInt(idField.getText()), // Assuming ID is entered manually, or retrieved from DB
                    Integer.parseInt(sizeField.getText()),
                    availableCheckBox.isSelected(),
                    accessibleCheckBox.isSelected(),
                    spotNumberField.getText(),
                    notesArea.getText(),
                    Float.parseFloat(feesField.getText())
            );

            parkingService.create(parkingSpot);
            parkingSpots.add(parkingSpot);
            // Refresh the list
            parkingSpots.setAll(parkingService.readAll()); // Reload the list from the database
            parkingSpotList.setItems(null); // Force UI refresh
            parkingSpotList.setItems(parkingSpots);


            showAlert(Alert.AlertType.INFORMATION, "Success", "Parking spot saved successfully!");

            clearFields();
        } catch (Exception e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Save failed: " + e.getMessage());
        }
    }

    @FXML
    private void updateParkingSpot(ActionEvent event) {
        ParkingSpot selected = parkingSpotList.getSelectionModel().getSelectedItem();

        if (selected != null) {
            try {
                // Create a copy of the original ParkingSpot
                ParkingSpot updatedParkingSpot = new ParkingSpot(
                        selected.getId_parking(),
                        selected.getId_destination(),
                        selected.getSize(),
                        selected.isIs_available(),
                        selected.isIs_accessible(),
                        selected.getSpot_number(),
                        selected.getNotes(),
                        selected.getParking_fees()
                );

                // Update only modified fields
                if (!sizeField.getText().isEmpty()) {
                    updatedParkingSpot.setSize(Integer.parseInt(sizeField.getText()));
                }
                if (!spotNumberField.getText().isEmpty()) {
                    updatedParkingSpot.setSpot_number(spotNumberField.getText());
                }
                if (!notesArea.getText().isEmpty()) {
                    updatedParkingSpot.setNotes(notesArea.getText());
                }
                if (!feesField.getText().isEmpty()) {
                    updatedParkingSpot.setParking_fees(Float.parseFloat(feesField.getText()));
                }
                updatedParkingSpot.setIs_available(availableCheckBox.isSelected());
                updatedParkingSpot.setIs_accessible(accessibleCheckBox.isSelected());

                // Save changes to the database
                parkingService.update(updatedParkingSpot);

                // Refresh the list
                parkingSpots.setAll(parkingService.readAll()); // Reload the list from the database
                parkingSpotList.setItems(null); // Force UI refresh
                parkingSpotList.setItems(parkingSpots);

                // Clear fields
                clearFields();

                // Show success message
                showAlert(Alert.AlertType.INFORMATION, "Success", "Parking Spot updated successfully!");

            } catch (Exception e) {
                showAlert(Alert.AlertType.ERROR, "Error", "Update failed: " + e.getMessage());
            }
        } else {
            showAlert(Alert.AlertType.WARNING, "Warning", "No Parking Spot Selected");
        }
    }

    @FXML
    private void deleteParkingSpot() {
        ParkingSpot selected = parkingSpotList.getSelectionModel().getSelectedItem();

        if (selected != null) {
            try {
                // Delete from database first
                parkingService.delete(selected);

                // Refresh the observable list from the database
                parkingSpots.setAll(parkingService.readAll());

                // Force UI refresh
                parkingSpotList.setItems(null);
                parkingSpotList.setItems(parkingSpots);

                // Clear input fields
                clearFields();

                // Show success message
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("Success");
                alert.setHeaderText(null);
                alert.setContentText("Parking Spot deleted successfully!");
                alert.showAndWait();

            } catch (SQLException e) {
                // Show error message if deletion fails
                Alert alert = new Alert(Alert.AlertType.ERROR);
                alert.setTitle("Error");
                alert.setHeaderText("Deletion Failed");
                alert.setContentText("Failed to delete parking spot: " + e.getMessage());
                alert.showAndWait();
            }
        } else {
            // Show warning if no selection
            Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Warning");
            alert.setHeaderText("No Selection");
            alert.setContentText("Please select a parking spot to delete.");
            alert.showAndWait();
        }
    }


    private void setupValidation() {
        // Validate idField (assuming numeric input)
        addValidation(idField, idError, "^[0-9]+$", "ID should be a number");

        // Validate sizeField (assuming it's a positive integer)
        sizeField.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches("\\d+") || Integer.parseInt(newVal) <= 0) {
                sizeError.setText("Size must be a positive number");
                sizeField.getStyleClass().add("error");
            } else {
                sizeError.setText("");
                sizeField.getStyleClass().add("valid");
            }
        });

        // Validate spot number
        addValidation(spotNumberField, spotNumberError, GENERAL_REGEX, "Only letters, numbers, and spaces allowed");

        // Validate notes field
        addValidation(notesArea, notesError, GENERAL_REGEX, "Only letters, numbers, and spaces allowed");

        // Validate parking fees
        feesField.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches("\\d*\\.?\\d*") || newVal.isEmpty()) {
                feesError.setText("Valid number required (e.g., 5.50)");
                feesField.getStyleClass().add("error");
            } else {

                feesField.getStyleClass().add("valid");
            }
        });

        // Availability checkbox validation
        availableCheckBox.selectedProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal && !accessibleCheckBox.isSelected()) {
                availableError.setText("At least one must be selected");
            } else {
                availableError.setText("");
            }
        });

        // Accessibility checkbox validation
        accessibleCheckBox.selectedProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal && !availableCheckBox.isSelected()) {
                accessibleError.setText("At least one must be selected");
            } else {
                accessibleError.setText("");
            }
        });
    }



    private void addValidation(TextField field, Label errorLabel, String regex, String errorMessage) {
        field.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches(regex)) {
                errorLabel.setText(errorMessage);
                field.getStyleClass().add("error"); // Add error style
            } else {
                errorLabel.setText("");
                field.getStyleClass().add("valid");
            }
        });
    }


    private void populateFields(ParkingSpot spot) {
        idField.setText(String.valueOf(spot.getId_parking()));
        sizeField.setText(String.valueOf(spot.getSize()));
        spotNumberField.setText(spot.getSpot_number());
        notesArea.setText(spot.getNotes());
        feesField.setText(String.valueOf(spot.getParking_fees()));

        availableCheckBox.setSelected(spot.isIs_available());
        accessibleCheckBox.setSelected(spot.isIs_accessible());
    }

    private boolean isFormValid() {
        boolean isValid = true;

        // Size validation
        if (sizeField.getText().trim().isEmpty()) {
            sizeError.setText("This field is required");
            sizeField.getStyleClass().add("error");
            isValid = false;
        } else {
            sizeField.getStyleClass().add("valid");
        }

        // Spot number validation
        if (spotNumberField.getText().trim().isEmpty()) {
            spotNumberError.setText("This field is required");
            spotNumberField.getStyleClass().add("error");
            isValid = false;
        } else {
            spotNumberField.getStyleClass().add("valid");
        }

        // Fees validation
        if (feesField.getText().trim().isEmpty()) {
            feesError.setText("This field is required");
            feesField.getStyleClass().add("error");
            isValid = false;
        } else {

            feesField.getStyleClass().add("valid");
        }

        return isValid;
    }




    @FXML
    private void clearFields() {
        idField.clear();
        sizeField.clear();
        spotNumberField.clear();
        feesField.clear();
        notesArea.clear();
        availableCheckBox.setSelected(false);
        accessibleCheckBox.setSelected(false);
    }

    private void showAlert(Alert.AlertType type, String title, String content) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

}



