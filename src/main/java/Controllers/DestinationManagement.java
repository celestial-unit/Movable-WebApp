package Controllers;

import Models.Destination;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.control.Alert;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import Services.DestinationService;

import java.io.File;
import java.io.IOException;
import java.sql.SQLException;
import java.util.List;

public class DestinationManagement {

    // Add these constants at the top
    private static final String NAME_REGEX = "^[a-zA-Z\\s'-]+$";
    private static final String LOCATION_REGEX = "^[-+]?\\d{1,3}(\\.\\d+)?,\\s*[-+]?\\d{1,3}(\\.\\d+)?$";
    private static final String GENERAL_REGEX = "^[a-zA-Z\\s]+$";
    private static final String CONTACT_REGEX = "^[+]?[0-9\\s-]{8,}$";

    private DestinationService destinationService;
    public DestinationManagement() {
        this.destinationService = new DestinationService();
    }
    @FXML private ListView<Destination> destinationList;

    @FXML private Label nameError;
    @FXML private Label locationError;
    @FXML private Label categoryError;
    @FXML private Label statusError;
    @FXML private Label routesError;
    @FXML private Label contactError;
    @FXML private Label ratingError;


    @FXML
    private TextField idField, nameField, locationField, categoryField, statusField, routesField, contactField, ratingField;

    @FXML
    private TextArea descriptionArea;

    @FXML
    private ImageView imageView;

    @FXML
    private Button addButton, updateButton, deleteButton, clearButton;

   private ObservableList<Destination> destinations = FXCollections.observableArrayList();


    @FXML
    void initialize() {
        // Initialize input validation
        setupValidation();

        try {
            // Configure ListView appearance and behavior
            configureListView();

            // Load data from database
            List<Destination> destinations = destinationService.readAll();

            // Populate ListView with data
            destinationList.setItems(FXCollections.observableArrayList(destinations));

            // Set up selection listener
            destinationList.getSelectionModel().selectedItemProperty().addListener((obs, oldSelection, newSelection) -> {
                if (newSelection != null) {
                    populateFields(newSelection);
                    showLocationOnMap(newSelection.getLocation());
                }
            });

        } catch (Exception e) {
            // Error handling
            // Show error alert if initialization fails
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Error");
            alert.setHeaderText("Error in initialize() method");
            alert.setContentText(e.getMessage());
            alert.showAndWait();
        }
    }
    private void configureListView() {
        destinationList.setCellFactory(param -> new ListCell<Destination>() {
            private final ImageView imageView = new ImageView();
            private final Label nameLabel = new Label();
            private final Label detailsLabel = new Label();
            private final HBox content = new HBox(10, imageView, new VBox(5, nameLabel, detailsLabel));

            {
                imageView.setFitWidth(60);
                imageView.setFitHeight(60);
                nameLabel.getStyleClass().add("bold-text"); // Apply CSS class instead of inline style
            }

            @Override
            protected void updateItem(Destination destination, boolean empty) {
                super.updateItem(destination, empty);
                if (empty || destination == null) {
                    setGraphic(null);
                } else {
                    try {
                        imageView.setImage(destination.getImage() != null ?
                                new Image(destination.getImage()) : null);
                    } catch (Exception e) {
                        imageView.setImage(null);
                    }
                    nameLabel.setText(destination.getName());
                    detailsLabel.setText(String.format(
                            "%s | %s | ★%d",
                            destination.getLocation(),
                            destination.getCategory(),
                            destination.getRating()
                    ));
                    setGraphic(content);
                }
            }
        });
    }




    private void setupValidation() {
            // Name validation
            addValidation(nameField, nameError, NAME_REGEX,
                    "Only letters, spaces, apostrophes and hyphens allowed");

            // Location validation
            addValidation(locationField, locationError, LOCATION_REGEX,
                    "Only letters, spaces, commas and hyphens allowed");

            // Category validation
            addValidation(categoryField, categoryError, GENERAL_REGEX,
                    "Only letters and spaces allowed");

            // Status validation
            addValidation(statusField, statusError, GENERAL_REGEX,
                    "Only letters and spaces allowed");

            // Routes validation
            addValidation(routesField, routesError, GENERAL_REGEX,
                    "Only letters and spaces allowed");

            // Contact validation
            addValidation(contactField, contactError, CONTACT_REGEX,
                    "Invalid phone number format (e.g., +123 456-789)");

            // Rating validation
            ratingField.textProperty().addListener((obs, oldVal, newVal) -> {
                if (!newVal.matches("\\d*") || newVal.isEmpty()) {
                    ratingError.setText("Numbers only (1-5)");
                    ratingField.getStyleClass().add("error");  // Add error style
                } else if (newVal.matches("[6-9]|10")) {
                    ratingError.setText("Rating must be 1-5");
                    ratingField.getStyleClass().add("error");  // Add error style
                } else {
                    ratingError.setText("");
                    ratingField.getStyleClass().add("valid");
                }
            });
        }

    // Method addValidation
    private void addValidation(TextField field, Label errorLabel, String regex, String errorMessage) {
        field.textProperty().addListener((obs, oldVal, newVal) -> {
            if (!newVal.matches(regex)) {
                errorLabel.setText(errorMessage);
                errorLabel.setVisible(true); // Ensure it's visible
                field.getStyleClass().add("error");
            } else {
                errorLabel.setText("");
                errorLabel.setVisible(false); // Hide when valid
                field.getStyleClass().add("valid");
            }
        });
    }


    private boolean validateForm() {
        boolean isValid = true;

        // Required fields validation
        if (nameField.getText().trim().isEmpty()) {
            nameField.getStyleClass().add("error"); // Add error style class
            isValid = false;
        }
        if (locationField.getText().trim().isEmpty()) {
            locationField.getStyleClass().add("error"); // Add error style class
            isValid = false;
        }
        if (categoryField.getText().trim().isEmpty()) {
            categoryField.getStyleClass().add("error"); // Add error style class
            isValid = false;
        }
        if (statusField.getText().trim().isEmpty()) {
            statusField.getStyleClass().add("error"); // Add error style class
            isValid = false;
        }

        // Rating validation
        if (!isValidRating(ratingField.getText())) {
            ratingField.getStyleClass().add("error"); // Add error style class
            isValid = false;
        }

        // Contact information validation
        if (!isValidContactInfo(contactField.getText())) {
            contactField.getStyleClass().add("error"); // Add error style class
            isValid = false;
        }

    /* Image validation
    if (!isValidImage(imageView.getImage())) {
        showAlert(Alert.AlertType.ERROR, "Invalid Image", "Please select a valid image");
        isValid = false;
    }*/

        return isValid;
    }



    private boolean isValidRating(String input) {
        try {
            int rating = Integer.parseInt(input);
            return rating >= 1 && rating <= 5;
        } catch (NumberFormatException e) {
            return false;
        }
    }

    private boolean isValidContactInfo(String contact) {
        // Basic email or phone number validation
        return contact.matches("^[\\w-.]+@([\\w-]+\\.)+[\\w-]{2,4}$") ||
                contact.matches("^\\+?[0-9\\s-]{8,}$");
    }

    private boolean isFormValid() {
        boolean isValid = true;

        if (!nameField.getText().matches(NAME_REGEX)) {
            nameError.setText("Invalid name format!");
            isValid = false;
        }

        if (!locationField.getText().matches(LOCATION_REGEX)) {
            locationError.setText("Invalid location format!");
            isValid = false;
        }

        // Add checks for other fields

        return isValid;
    }


 /*  @FXML
   private void saveDestination(ActionEvent event) {
       String imagePath = (imageView.getImage() != null) ? imageView.getImage().getUrl() : "";
        //related to input control

       if (!isFormValid()) {
           showAlert(Alert.AlertType.ERROR, "Validation Error",
                   "Please correct the invalid fields");
           return;
       }
       try {
           // Create a new Destination object using input fields
           Destination destination = new Destination(
                   nameField.getText(),
                   locationField.getText(),
                   categoryField.getText(),
                   statusField.getText(),
                   routesField.getText(),
                   contactField.getText(),
                   imagePath,
                   descriptionArea.getText(),
                   Integer.parseInt(ratingField.getText())
           );

           // Save destination using service
           destinationService.create(destination);

           destinations.add(destination);

           // Refresh listView to reflect the new destination

           destinations.setAll(destinationService.readAll()); // Reload the list from the database
           destinationList.setItems(null);
          destinationList.setItems(destinations);


           showAlert(Alert.AlertType.INFORMATION, "Success", "Destination saved successfully!");

           clearFields();
       } catch (Exception e) {
           showAlert(Alert.AlertType.ERROR, "Error", "Save failed: " + e.getMessage());
       }
   }*/
 @FXML
 private void saveDestination(ActionEvent event) {
     String imagePath = (imageView.getImage() != null) ? imageView.getImage().getUrl() : "";

     if (!isFormValid()) {
         showAlert(Alert.AlertType.ERROR, "Validation Error", "Please correct the invalid fields");
         return;
     }

     try {
         // Create a new Destination object using input fields
         Destination destination = new Destination(
                 nameField.getText(),
                 locationField.getText(),
                 categoryField.getText(),
                 statusField.getText(),
                 routesField.getText(),
                 contactField.getText(),
                 imagePath,
                 descriptionArea.getText(),
                 Integer.parseInt(ratingField.getText())
         );

         // Save destination using service
         destinationService.create(destination);
         destinations.add(destination);

         // Refresh list from the database
         List<Destination> updatedList = destinationService.readAll();
         destinations.setAll(updatedList);
         destinationList.setItems(destinations);
         destinationList.refresh(); // Ensure UI updates correctly

         showAlert(Alert.AlertType.INFORMATION, "Success", "Destination saved successfully!");
         clearFields();
     } catch (Exception e) {
         showAlert(Alert.AlertType.ERROR, "Error", "Save failed: " + e.getMessage());
     }
 }



    private void populateFields(Destination destination) {
       nameField.setText(destination.getName());
       locationField.setText(destination.getLocation());
       categoryField.setText(destination.getCategory());
       statusField.setText(destination.getStatus());
       routesField.setText(destination.getRoutes());
       contactField.setText(destination.getContact_information());
       descriptionArea.setText(destination.getDescription());
       ratingField.setText(String.valueOf(destination.getRating()));

       if (destination.getImage() != null && !destination.getImage().isEmpty()) {
           try {
               imageView.setImage(new Image(destination.getImage()));
           } catch (Exception e) {
               imageView.setImage(null); // Fallback to no image
               System.err.println("Error loading image: " + e.getMessage());
           }
       } else {
           imageView.setImage(null);
       }
   }
@FXML

    private void updateDestination(ActionEvent event) {
        Destination selected = destinationList.getSelectionModel().getSelectedItem();

        String newImagePath = (imageView.getImage() != null) ?
                imageView.getImage().getUrl() :
                selected.getImage();

        if (selected != null) {
            try {
                // Create a copy of the original destination
                Destination updatedDestination = new Destination(
                        selected.getLocation(),
                        selected.getName(),
                        selected.getId_destination(),
                        selected.getCategory(),
                        selected.getStatus(),
                        selected.getRoutes(),
                        selected.getContact_information(),
                        selected.getImage(),
                        selected.getDescription(),
                        selected.getRating()
                );

                // Update only modified fields
                if (!nameField.getText().isEmpty()) {
                    updatedDestination.setName(nameField.getText());
                }
                if (!locationField.getText().isEmpty()) {
                    updatedDestination.setLocation(locationField.getText());
                }
                if (!categoryField.getText().isEmpty()) {
                    updatedDestination.setCategory(categoryField.getText());
                }
                if (!statusField.getText().isEmpty()) {
                    updatedDestination.setStatus(statusField.getText());
                }
                if (!routesField.getText().isEmpty()) {
                    updatedDestination.setRoutes(routesField.getText());
                }
                if (!contactField.getText().isEmpty()) {
                    updatedDestination.setContact_information(contactField.getText());
                }
                if (!descriptionArea.getText().isEmpty()) {
                    updatedDestination.setDescription(descriptionArea.getText());
                }
                if (!ratingField.getText().isEmpty()) {
                    updatedDestination.setRating(Integer.parseInt(ratingField.getText()));
                }

                // Update image only if new image was loaded
                updatedDestination.setImage(newImagePath);

                // Save changes to database
                destinationService.update(updatedDestination);

    // Refresh the list
                destinations.setAll(destinationService.readAll()); // Reload the list from the database
                destinationList.setItems(destinations);


                // Clear fields
                clearFields();

                // Show success message
                showAlert(Alert.AlertType.INFORMATION, "Success", "Destination updated successfully!");

            } catch (Exception e) {
                showAlert(Alert.AlertType.ERROR, "Error", "Update failed: " + e.getMessage());
            }
        } else {
            showAlert(Alert.AlertType.WARNING, "Warning", "No Destination Selected");        }

    }

    // Helper method for alerts
    private void showAlert(Alert.AlertType type, String title, String content) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    @FXML
   private void deleteDestination() {
       Destination selected = destinationList.getSelectionModel().getSelectedItem();

       if (selected != null) {
           try {
               // Delete from database first
               destinationService.delete(selected);

               // Refresh the observable list from the database
               destinations.setAll(destinationService.readAll());

               // Force UI refresh
               destinationList.setItems(null);
               destinationList.setItems(destinations);

               // Clear input fields
               clearFields();

               // Show success message
               Alert alert = new Alert(Alert.AlertType.INFORMATION);
               alert.setTitle("Success");
               alert.setHeaderText(null);
               alert.setContentText("Destination deleted successfully!");
               alert.showAndWait();

           } catch (SQLException e) {
               // Show error message if deletion fails
               Alert alert = new Alert(Alert.AlertType.ERROR);
               alert.setTitle("Error");
               alert.setHeaderText("Deletion Failed");
               alert.setContentText("Failed to delete destination: " + e.getMessage());
               alert.showAndWait();
           }
       } else {
           // Show warning if no selection
           Alert alert = new Alert(Alert.AlertType.WARNING);
           alert.setTitle("Warning");
           alert.setHeaderText("No Selection");
           alert.setContentText("Please select a destination to delete.");
           alert.showAndWait();
       }
   }


    //handle image
   @FXML
   private void handleImageUpload(ActionEvent event) {
       FileChooser fileChooser = new FileChooser();
       fileChooser.setTitle("Select Destination Image");
       fileChooser.getExtensionFilters().addAll(
               new FileChooser.ExtensionFilter("Image Files", "*.png", "*.jpg", "*.jpeg")
       );
       File file = fileChooser.showOpenDialog(null);
       if (file != null) {
           try {
               Image image = new Image(file.toURI().toString());
               imageView.setImage(image);
           } catch (Exception e) {
               showAlert(Alert.AlertType.ERROR, "Invalid Image", "Could not load selected image");
           }
       }
   }

   //to navigate to the parking management
   @FXML
   private void goToParking(ActionEvent event) {
       try {
           FXMLLoader loader = new FXMLLoader(getClass().getResource("/ParkingManagement.fxml"));
           Parent parkingRoot = loader.load();

           Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
           Scene parkingScene = new Scene(parkingRoot);
           stage.setScene(parkingScene);
           stage.show();
       } catch (IOException e) {
           e.printStackTrace();
           showAlert(Alert.AlertType.ERROR, "Navigation Error", "Failed to load Parking Management.");
       }
   }

    @FXML
    private void openMapView(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AdminMapView.fxml"));
            Parent root = loader.load();

            AdminMapView mapController = loader.getController();
            mapController.setCoordinatesCallback(coords -> {
                // Update location field on JavaFX thread
                Platform.runLater(() -> {
                    locationField.setText(coords);

                    // Optional: Close the map window automatically
                    ((Stage) root.getScene().getWindow()).close();
                });
            });

            Stage mapStage = new Stage();
            mapStage.setScene(new Scene(root, 800, 600));
            mapStage.setTitle("Admin Map View");
            mapStage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }


    @FXML
    private void clearFields() {
        nameField.clear();
        locationField.clear();
        categoryField.clear();
        statusField.clear();
        routesField.clear();
        contactField.clear();
        descriptionArea.clear();
        ratingField.clear();
        imageView.setImage(null);

        // Clear validation styles
        nameField.setStyle("");
        locationField.setStyle("");
        categoryField.setStyle("");
        routesField.setStyle("");
        statusField.setStyle("");
        contactField.setStyle("");
        ratingField.setStyle("");

        // Clear validation error messages
        nameError.setText("");
        locationError.setText("");
        categoryError.setText("");
        statusError.setText("");
        routesError.setText("");
        contactError.setText("");
        ratingError.setText("");
    }
    private void showLocationOnMap(String coordinates) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AdminMapView.fxml"));
            Parent root = loader.load();

            AdminMapView mapController = loader.getController();
            mapController.setInitialCoordinates(coordinates);
            mapController.setCoordinatesCallback(coords -> {
                // Optional: Update location if user clicks new position
                Platform.runLater(() -> {
                    locationField.setText(coords);
                    ((Stage) root.getScene().getWindow()).close();
                });
            });

            Stage mapStage = new Stage();
            mapStage.setScene(new Scene(root, 800, 600));
            mapStage.setTitle("Destination Location");
            mapStage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    /**
     * Navigate back to the normal user dashboard
     */
    @FXML
    public void backToDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Parent root = loader.load();
            
            // Get the current stage from the event source
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            
            // Set the new scene
            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Navigation Error", 
                     "Unable to return to dashboard. Please try again.");
        }
    }
}
