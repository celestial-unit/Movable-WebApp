package Controllers;

import Models.Driver;
import Services.DriverService;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import javafx.event.ActionEvent;
import javafx.scene.Node;

import java.sql.SQLException;
import java.util.List;

public class DriverCrudController {

    @FXML
    private ImageView backgroundImage;        // Background image view
    @FXML
    private ListView<String> driversListView;  // To display list of drivers
    @FXML
    private TextField vehicleTypeTf;          // To input vehicle type
    @FXML
    private TextField licenseNumberTf;        // To input license number
    @FXML
    private ComboBox<String> availableStatusCb; // ComboBox for availability status
    @FXML
    private TextField userIdTf;               // To input the user ID (foreign key)
    @FXML
    private TextField searchField;            // Search field for drivers
    @FXML
    private Button saveDriverBtn;             // Button to save driver
    @FXML
    private Button updateDriverBtn;           // Button to update driver
    @FXML
    private Button deleteDriverBtn;           // Button to delete driver
    @FXML
    private Button goBackBtn;                 // Button to go back to UserCrud view

    // DriverService to interact with the database
    private DriverService driverService;

    // Initialize method to set up the UI components
    @FXML
    public void initialize() {
        driverService = new DriverService();

        // Set up the background image
        Platform.runLater(() -> {
            if (backgroundImage != null && backgroundImage.getScene() != null) {
                backgroundImage.fitWidthProperty().bind(backgroundImage.getScene().widthProperty());
                backgroundImage.fitHeightProperty().bind(backgroundImage.getScene().heightProperty());

                // Make the window full screen
                Stage stage = (Stage) backgroundImage.getScene().getWindow();
                stage.setMaximized(true);
            }
        });

        // Initialize the ComboBox
        availableStatusCb.getItems().addAll("Available", "Not Available");

        // Fetch drivers from the database
        refreshDriverList();

        // Add listener for ListView selection
        driversListView.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> {
                    if (newValue != null) {
                        populateFormWithSelectedDriver();
                    }
                }
        );

        // Add listener for search field
        if (searchField != null) {
            searchField.textProperty().addListener((observable, oldValue, newValue) -> {
                filterDriversList(newValue);
            });
        }
    }

    // Helper method to update the ListView with data from the database
    private void refreshDriverList() {
        try {
            List<Driver> drivers = driverService.read();
            driversListView.getItems().clear();
            for (Driver driver : drivers) {
                driversListView.getItems().add(driver.getVehicleType() + " - " + driver.getLicenseNumber());
            }
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Database Error", "Failed to fetch drivers from the database.");
        }
    }

    // Helper method to populate form with selected driver data
    private void populateFormWithSelectedDriver() {
        String selectedDriver = driversListView.getSelectionModel().getSelectedItem();
        if (selectedDriver != null) {
            try {
                List<Driver> drivers = driverService.read();
                for (Driver driver : drivers) {
                    String driverInfo = driver.getVehicleType() + " - " + driver.getLicenseNumber();
                    if (driverInfo.equals(selectedDriver)) {
                        userIdTf.setText(String.valueOf(driver.getUserId()));
                        vehicleTypeTf.setText(driver.getVehicleType());
                        licenseNumberTf.setText(driver.getLicenseNumber());
                        availableStatusCb.setValue(driver.isAvailableStatus() ? "Available" : "Not Available");
                        break;
                    }
                }
            } catch (SQLException e) {
                e.printStackTrace();
                showAlert("Database Error", "Failed to fetch driver details.");
            }
        }
    }

    // Filter drivers list based on search text
    private void filterDriversList(String searchText) {
        try {
            List<Driver> drivers = driverService.read();
            driversListView.getItems().clear();
            for (Driver driver : drivers) {
                if (driver.getVehicleType().toLowerCase().contains(searchText.toLowerCase()) ||
                        driver.getLicenseNumber().toLowerCase().contains(searchText.toLowerCase())) {
                    driversListView.getItems().add(driver.getVehicleType() + " - " + driver.getLicenseNumber());
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Database Error", "Failed to filter drivers.");
        }
    }

    // Save a new driver
    @FXML
    private void saveDriver() {
        try {
            int userId = Integer.parseInt(userIdTf.getText());
            String vehicleType = vehicleTypeTf.getText();
            String licenseNumber = licenseNumberTf.getText();
            boolean availableStatus = availableStatusCb.getValue().equals("Available");

            // Create and save new driver
            Driver newDriver = new Driver(0, userId, vehicleType, licenseNumber, availableStatus);
            driverService.create(newDriver);

            // Refresh the ListView
            refreshDriverList();
            clearForm();
        } catch (NumberFormatException e) {
            showAlert("Invalid Input", "Please enter a valid User ID number.");
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Database Error", "Failed to save driver.");
        }
    }

    // Update an existing driver
    @FXML
    private void updateDriver() {
        String selectedDriver = driversListView.getSelectionModel().getSelectedItem();
        if (selectedDriver != null) {
            try {
                List<Driver> drivers = driverService.read();
                for (Driver driver : drivers) {
                    String driverInfo = driver.getVehicleType() + " - " + driver.getLicenseNumber();
                    if (driverInfo.equals(selectedDriver)) {
                        // Update the driver's details
                        driver.setUserId(Integer.parseInt(userIdTf.getText()));
                        driver.setVehicleType(vehicleTypeTf.getText());
                        driver.setLicenseNumber(licenseNumberTf.getText());
                        driver.setAvailableStatus(availableStatusCb.getValue().equals("Available"));

                        // Save the updated driver to the database
                        driverService.update(driver);

                        // Refresh the ListView
                        refreshDriverList();
                        clearForm();
                        break;
                    }
                }
            } catch (SQLException e) {
                e.printStackTrace();
                showAlert("Database Error", "Failed to update driver.");
            }
        } else {
            showAlert("No Selection", "Please select a driver to update.");
        }
    }

    // Delete selected driver
    @FXML
    private void deleteDriver() {
        String selectedDriver = driversListView.getSelectionModel().getSelectedItem();
        if (selectedDriver != null) {
            try {
                List<Driver> drivers = driverService.read();
                for (Driver driver : drivers) {
                    String driverInfo = driver.getVehicleType() + " - " + driver.getLicenseNumber();
                    if (driverInfo.equals(selectedDriver)) {
                        // Delete the driver from the database
                        driverService.delete(driver.getId());

                        // Refresh the ListView
                        refreshDriverList();
                        clearForm();
                        break;
                    }
                }
            } catch (SQLException e) {
                e.printStackTrace();
                showAlert("Database Error", "Failed to delete driver.");
            }
        } else {
            showAlert("No Selection", "Please select a driver to delete.");
        }
    }

    // Clear the form fields
    private void clearForm() {
        userIdTf.clear();
        vehicleTypeTf.clear();
        licenseNumberTf.clear();
        availableStatusCb.getSelectionModel().clearSelection();
    }

    // Helper method to show alerts
    private void showAlert(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    // Handle "Go Back" button click
    @FXML
    private void goBackToUserCrud(ActionEvent event) {
        try {
            // Load the UserCrud view
            Parent userCrudView = FXMLLoader.load(getClass().getResource("/admin_dashboard.fxml"));
            Scene userCrudScene = new Scene(userCrudView);

            // Get the current stage
            Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // Set the new scene
            window.setScene(userCrudScene);
            window.show();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}