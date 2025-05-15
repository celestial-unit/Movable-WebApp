package Controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;
import Models.Office;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import Services.OfficeService;
import utils.myConnection;

import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class OfficeController {

    @FXML
    private Button addButton;

    @FXML
    private Button deleteButton;

    @FXML
    private Button goToAgentsForm;

    @FXML
    private TextField locationField;

    @FXML
    private TextField numAgentsField;

    @FXML
    private TextField officeNameField;

    @FXML
    private HBox officesBox;

    @FXML
    private TextField phoneField;

    @FXML
    private Button updateButton;

    private OfficeService officeService;
    private Office selectedOffice;

    public OfficeController() {
        officeService = new OfficeService();
    }

    @FXML
    public void initialize() {
        loadOffices();
        loadOfficesFromDatabase();  // Load office IDs for the ComboBox
    }

    private void loadOfficesFromDatabase() {
        Connection conn = null;
        PreparedStatement pstmt = null;
        ResultSet rs = null;

        try {
            // Get the connection from the singleton class
            conn = myConnection.getInstance().getConnection();

            // SQL query to fetch office ids
            String query = "SELECT id, name FROM office";  // Include name for display
            pstmt = conn.prepareStatement(query);
            rs = pstmt.executeQuery();


            ObservableList<String> officeList = FXCollections.observableArrayList();


            while (rs.next()) {
                String office = "ID: " + rs.getString("id") + ", Name: " + rs.getString("name");
                officeList.add(office);
            }


        } catch (SQLException e) {
            System.out.println("Error fetching office data: " + e.getMessage());
            e.printStackTrace();
        }
    }

    private void loadOffices() {
        List<Office> officesList = new ArrayList<>();
        try {
            // Fetch all offices from the service
            officesList = officeService.readAll();

            // Clear existing office cards
            officesBox.getChildren().clear();

            // Create a card for each office and add it to the display
            for (Office office : officesList) {
                VBox card = createOfficeCard(office);  // Create a card for the office
                officesBox.getChildren().add(card);  // Add each office card to the HBox
            }
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error loading offices: " + e.getMessage());
        }
    }



    private VBox createOfficeCard(Office office) {
        VBox card = new VBox();
        card.setSpacing(10);
        card.setStyle("-fx-border-color: #ccc; -fx-border-radius: 5; -fx-padding: 10; -fx-background-color: #f9f9f9;");

        Label nameLabel = new Label("Office Name: " + office.getName());
        nameLabel.setStyle("-fx-font-weight: bold;");
        card.getChildren().add(nameLabel);

        Label locationLabel = new Label("Location: " + office.getLocation());
        card.getChildren().add(locationLabel);

        Label numAgentsLabel = new Label("Number of Agents: " + office.getAgents1());
        card.getChildren().add(numAgentsLabel);

        Label phoneLabel = new Label("Phone: " + office.getPhone());
        card.getChildren().add(phoneLabel);

        // Set click event to fill fields
        card.setOnMouseClicked(event -> {
            selectedOffice = office;
            officeNameField.setText(office.getName());
            locationField.setText(office.getLocation());
            numAgentsField.setText(String.valueOf(office.getAgents1()));
            phoneField.setText(String.valueOf(office.getPhone()));
        });

        return card;
    }

    // Populate the fields when a card/button is clicked
    private void populateFields(Office office) {
        selectedOffice = office; // Store the selected office

        // Populate the text fields with the office data
        officeNameField.setText(office.getName());
        locationField.setText(office.getLocation());
        phoneField.setText(String.valueOf(office.getPhone()));
        numAgentsField.setText(String.valueOf(office.getAgents1()));
    }


    @FXML
    void addOffice(ActionEvent event) {
        String name = officeNameField.getText().trim();
        String location = locationField.getText().trim();
        String phoneText = phoneField.getText().trim();
        String numAgentsText = numAgentsField.getText().trim();

        // Validate inputs
        if (!validateOfficeInputs(name, location, phoneText, numAgentsText)) {
            return; // Stop execution if validation fails
        }

        // Convert phone and numAgents to integers
        int phone = Integer.parseInt(phoneText);
        int numAgents = Integer.parseInt(numAgentsText);

        // Create Office object
        Office office = new Office(name, location, numAgents, phone);

        try {
            if (officeService.create(office)) {
                officesBox.getChildren().clear(); // Clear the HBox
                loadOffices(); // Reload the offices after adding
                showAlert(Alert.AlertType.INFORMATION, "Success", "Office added successfully.");
            }
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while adding office: " + e.getMessage());
        }
    }

    // Update office method
    @FXML
    void updateOffice(ActionEvent event) {
        if (selectedOffice == null) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please select an office to update.");
            return;
        }

        String name = officeNameField.getText().trim();
        String location = locationField.getText().trim();
        String phoneText = phoneField.getText().trim();
        String numAgentsText = numAgentsField.getText().trim();

        // Validate inputs
        if (!validateOfficeInputs(name, location, phoneText, numAgentsText)) {
            return; // Stop execution if validation fails
        }


        int phone = Integer.parseInt(phoneText);
        int numAgents = Integer.parseInt(numAgentsText);


        selectedOffice.setName(name);
        selectedOffice.setLocation(location);
        selectedOffice.setPhone(phone);
        selectedOffice.setAgents1(numAgents);

        try {
            officeService.update(selectedOffice);
            officesBox.getChildren().clear(); // Clear the HBox
            loadOffices(); // Reload the offices after updating
            showAlert(Alert.AlertType.INFORMATION, "Success", "Office updated successfully.");
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while updating office: " + e.getMessage());
        }
    }

    // Helper function for validation
    private boolean validateOfficeInputs(String name, String location, String phone, String numAgents) {
        if (name.isEmpty() ) {
            showAlert(Alert.AlertType.ERROR, "Invalid Name", "Name must contain only letters and cannot be empty.");
            return false;
        }

        if (location.isEmpty() || !location.matches("[a-zA-Z0-9 ]+")) {
            showAlert(Alert.AlertType.ERROR, "Invalid Location", "Location must contain only letters, numbers, and spaces.");
            return false;
        }

        // Validate phone (Must have exactly `_` digits, replace `_` with required length)
        int requiredPhoneLength = 8;  // Set your required phone length here
        if (!phone.matches("\\d{" + requiredPhoneLength + "}")) {
            showAlert(Alert.AlertType.ERROR, "Invalid Phone", "Phone number must have exactly " + requiredPhoneLength + " digits.");
            return false;
        }

        if (!numAgents.matches("\\d+") || Integer.parseInt(numAgents) <= 0) {
            showAlert(Alert.AlertType.ERROR, "Invalid Number of Agents", "Number of agents must be a positive integer.");
            return false;
        }

        return true;
    }



    @FXML
    void deleteOffice(ActionEvent event) {
        if (selectedOffice == null) {
            showAlert(Alert.AlertType.ERROR, "Validation Error", "Please select an office to delete.");
            return;
        }

        try {
            officeService.delete(selectedOffice.getId());
            officesBox.getChildren().clear(); // Clear the HBox
            loadOffices(); // Reload the offices after deletion
            showAlert(Alert.AlertType.INFORMATION, "Success", "Office deleted successfully.");
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while deleting office: " + e.getMessage());
        }
    }

    // Navigate to agents form (functionality to be implemented)
    @FXML
    void goToAgentsForm(ActionEvent event) {
        {
            try {
                // Load the FXML file for the new scene (agents form)
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/AssistantAdmin.fxml"));
                Scene scene = new Scene(loader.load());

                // Get the current stage (window) and set the new scene
                Stage stage = (Stage) ((Button) event.getSource()).getScene().getWindow();
                stage.setScene(scene);
                stage.show();
            } catch (IOException e) {
                // Handle potential errors while loading the new scene
                showAlert(Alert.AlertType.ERROR, "Error", "Unable to load the agent form.");
            }
        }
    }

    // Show alert messages
    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }
}





