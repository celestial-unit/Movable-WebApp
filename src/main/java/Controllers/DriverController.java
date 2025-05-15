package Controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.stage.Stage;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;

public class DriverController implements Initializable {
    
    private Stage stage;
    private Scene scene;
    
    @FXML private TextField destinationTextField;
    @FXML private ListView<Driver> driverListView;
    @FXML private TextField nameField;
    @FXML private TextField licenceField;
    @FXML private Button btnSave;
    @FXML private Button btnUpdate;
    @FXML private Button btnDelete;
    @FXML private Button btnSwitchToTransport;
    
    private ObservableList<Driver> driverList = FXCollections.observableArrayList();
    private Driver selectedDriver;
    
    // Driver data model class
    public static class Driver {
        private int id;
        private String name;
        private String licence;
        
        public Driver(int id, String name, String licence) {
            this.id = id;
            this.name = name;
            this.licence = licence;
        }
        
        public int getId() {
            return id;
        }
        
        public String getName() {
            return name;
        }
        
        public void setName(String name) {
            this.name = name;
        }
        
        public String getLicence() {
            return licence;
        }
        
        public void setLicence(String licence) {
            this.licence = licence;
        }
        
        @Override
        public String toString() {
            return name + " | License: " + licence;
        }
    }
    
    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        // Configure the list view
        driverListView.setItems(driverList);
        
        // Add selection listener to populate form fields when a driver is selected
        driverListView.getSelectionModel().selectedItemProperty().addListener((obs, oldSelection, newSelection) -> {
            if (newSelection != null) {
                selectedDriver = newSelection;
                populateForm(selectedDriver);
            }
        });
        
        // Load sample data
        loadDriverData();
    }
    
    private void loadDriverData() {
        // In a real application, this would fetch data from a database
        driverList.clear();
        try {
            // Add some sample data
            driverList.add(new Driver(1, "John Doe", "DL12345"));
            driverList.add(new Driver(2, "Jane Smith", "DL67890"));
            driverList.add(new Driver(3, "Robert Johnson", "DL54321"));
        } catch (Exception e) {
            showAlert("Error", "Failed to load driver data: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    
    private void populateForm(Driver driver) {
        nameField.setText(driver.getName());
        licenceField.setText(driver.getLicence());
    }
    
    @FXML
    public void create(ActionEvent event) {
        try {
            String name = nameField.getText();
            String licence = licenceField.getText();
            
            if (name.isEmpty() || licence.isEmpty()) {
                showAlert("Error", "Name and licence fields cannot be empty", Alert.AlertType.ERROR);
                return;
            }
            
            // In a real app, this would create a record in the database
            Driver newDriver = new Driver(driverList.size() + 1, name, licence);
            driverList.add(newDriver);
            
            clearForm();
            showAlert("Success", "Driver added successfully!", Alert.AlertType.INFORMATION);
        } catch (Exception e) {
            showAlert("Error", "Failed to create driver: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    
    @FXML
    public void update(ActionEvent event) {
        if (selectedDriver == null) {
            showAlert("Error", "Please select a driver to update", Alert.AlertType.ERROR);
            return;
        }
        
        try {
            String name = nameField.getText();
            String licence = licenceField.getText();
            
            if (name.isEmpty() || licence.isEmpty()) {
                showAlert("Error", "Name and licence fields cannot be empty", Alert.AlertType.ERROR);
                return;
            }
            
            // Update driver properties
            selectedDriver.setName(name);
            selectedDriver.setLicence(licence);
            
            // Refresh list view
            driverListView.refresh();
            
            showAlert("Success", "Driver updated successfully!", Alert.AlertType.INFORMATION);
        } catch (Exception e) {
            showAlert("Error", "Failed to update driver: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    
    @FXML
    public void delete(ActionEvent event) {
        if (selectedDriver == null) {
            showAlert("Error", "Please select a driver to delete", Alert.AlertType.ERROR);
            return;
        }
        
        try {
            // Remove from list
            driverList.remove(selectedDriver);
            
            clearForm();
            selectedDriver = null;
            
            showAlert("Success", "Driver deleted successfully!", Alert.AlertType.INFORMATION);
        } catch (Exception e) {
            showAlert("Error", "Failed to delete driver: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    
    private void clearForm() {
        nameField.clear();
        licenceField.clear();
    }
    
    @FXML
    public void switchToTransport(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("/transport.fxml"));
        stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        scene = new Scene(root);
        stage.setScene(scene);
        stage.show();
    }
    
    private void showAlert(String title, String message, Alert.AlertType type) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}

