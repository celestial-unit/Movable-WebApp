package Controllers;

import Model.Transport;
import Services.TransportService;
import javafx.application.Platform;
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
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;

public class TransportController implements Initializable {
    private Stage stage;
    private Scene scene;
    @FXML private Button btnSave, btnUpdate, btnDelete;
    @FXML private TextField capacity;
    @FXML private ComboBox<String> destination;
    @FXML private TextField disponibilty;
    @FXML private ComboBox<String> type;
    @FXML private ListView<Transport> transportListView;
    @FXML
    private TextField capacityTextField;



    @FXML
    private TextField destinationTextField;

    @FXML
    private Button btnShowStats;


    private final TransportService transportService = new TransportService();
    private ObservableList<Transport> transportList = FXCollections.observableArrayList();
    private Transport selectedTransport;
    private javafx.beans.value.ChangeListener<Transport> transportSelectionListener;

    private void cleanup() {
        // Remove listeners properly
        if (transportListView != null && transportSelectionListener != null) {
            transportListView.getSelectionModel().selectedItemProperty().removeListener(transportSelectionListener);
        }
        
        // Clear references
        selectedTransport = null;
        if (transportList != null) {
            transportList.clear();
        }
        
        // Clear form fields
        if (type != null) type.setValue(null);
        if (capacity != null) capacity.clear();
        if (disponibilty != null) disponibilty.clear();
        if (destination != null) destination.setValue(null);
    }
    
    private void closeResources() {
        try {
            transportService.close();
        } catch (SQLException e) {
            System.err.println("Error closing database connection: " + e.getMessage());
        }
    }
    
    private void initializeStage(Node node) {
        if (stage == null && node.getScene() != null) {
            stage = (Stage) node.getScene().getWindow();
            stage.setOnCloseRequest(event -> {
                cleanup();
                closeResources();
            });
        }
    }
    @FXML
    private void switchToDriver(ActionEvent event) throws IOException {
        try {
            System.out.println("DEBUG: Go to Driver button clicked");
            cleanup(); // Add cleanup before loading new view
            
            // Load FXML
            FXMLLoader loader = new FXMLLoader(getResource("/driver.fxml"));
            Parent root = loader.load();
            
            // Get the existing stage
            if (stage == null) {
                stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            }
            
            // Reuse existing scene if possible
            if (scene == null) {
                scene = new Scene(root);
                // Add CSS only once when creating new scene
                try {
                    URL cssLocation = getResource("/driver.css");
                    scene.getStylesheets().add(cssLocation.toExternalForm());
                    System.out.println("CSS loaded successfully");
                } catch (Exception e) {
                    System.err.println("Warning: Could not load CSS: " + e.getMessage());
                }
            } else {
                scene.setRoot(root);
            }
            
            stage.setScene(scene);
            stage.show();
            System.out.println("Driver view switched successfully");
            
        } catch (Exception e) {
            System.err.println("Error in switchToDriver: " + e.getMessage());
            e.printStackTrace();
            showAlert("Error", "Failed to load driver view: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    @FXML
    void create(ActionEvent event) {
        if (!validateInput()) {
            return;
        }
        try {
            String selectedType = type.getValue();
            int transportCapacity = Integer.parseInt(capacity.getText());
            boolean isAvailable = Boolean.parseBoolean(disponibilty.getText());
            String selectedDestination = destination.getValue();

            Transport transport = new Transport(0, selectedType, transportCapacity, isAvailable, selectedDestination);
            transportService.create(transport);
            showAlert("Success", "Transport added successfully!", Alert.AlertType.INFORMATION);
            loadTransportData();
        } catch (SQLException e) {
            System.err.println("Database error during create: " + e.getMessage());
            showAlert("Error", "Failed to create transport: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    void update(ActionEvent event) {
        if (selectedTransport == null) {
            showAlert("Error", "Please select a transport to update.", Alert.AlertType.ERROR);
            return;
        }
        if (!validateInput()) {
            return;
        }
        try {
            selectedTransport.setType(type.getValue());
            selectedTransport.setCapacity(Integer.parseInt(capacity.getText()));
            selectedTransport.setDisponibility(Boolean.parseBoolean(disponibilty.getText()));
            selectedTransport.setDestination(destination.getValue());

            transportService.update(selectedTransport);
            showAlert("Success", "Transport updated successfully!", Alert.AlertType.INFORMATION);
            loadTransportData();
        } catch (SQLException e) {
            System.err.println("Database error during update: " + e.getMessage());
            showAlert("Error", "Failed to update transport: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    void delete(ActionEvent event) {
        if (selectedTransport == null) {
            showAlert("Error", "Please select a transport to delete.", Alert.AlertType.ERROR);
            return;
        }
        try {
            transportService.delete(selectedTransport);
            showAlert("Success", "Transport deleted successfully!", Alert.AlertType.INFORMATION);
            loadTransportData();
        } catch (SQLException e) {
            showAlert("Error", "Database error!", Alert.AlertType.ERROR);
        }
    }

    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        // Initialize UI components first
        type.setItems(FXCollections.observableArrayList("Bus", "Car"));
        destination.setItems(FXCollections.observableArrayList("Paris", "London", "Berlin", "Rome"));
        transportList = FXCollections.observableArrayList();
        transportListView.setItems(transportList);

        // Initialize stage and scene as soon as possible
        Platform.runLater(() -> {
            if (transportListView.getScene() != null) {
                if (stage == null) {
                    stage = (Stage) transportListView.getScene().getWindow();
                    stage.setOnCloseRequest(event -> {
                        cleanup();
                        closeResources();
                    });
                }
                if (scene == null) {
                    scene = transportListView.getScene();
                }
            }
        });

        // Set up cell factory
        transportListView.setCellFactory(param -> new ListCell<>() {
            @Override
            protected void updateItem(Transport transport, boolean empty) {
                super.updateItem(transport, empty);
                setText((empty || transport == null) ? null :
                        transport.getType() + " | " + transport.getCapacity() + " | " +
                                (transport.isDisponibility() ? "Available" : "Unavailable") + " | " + transport.getDestination());
            }
        });

        // Set up selection listener
        transportSelectionListener = (obs, oldSelection, newSelection) -> {
            if (newSelection != null) {
                selectedTransport = newSelection;
                populateForm(selectedTransport);
            }
        };
        transportListView.getSelectionModel().selectedItemProperty().addListener(transportSelectionListener);

        // Load initial data
        try {
            loadTransportData();
        } catch (SQLException e) {
            System.err.println("Error loading transport data: " + e.getMessage());
            showAlert("Error", "Failed to load transport data: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    private boolean validateInput() {
        if (type.getValue() == null || destination.getValue() == null ||
                capacity.getText().isEmpty() || disponibilty.getText().isEmpty()) {
            showAlert("Error", "All fields must be filled!", Alert.AlertType.ERROR);
            return false;
        }
        try {
            int cap = Integer.parseInt(capacity.getText());
            if (cap <= 0) {
                showAlert("Error", "Capacity must be a positive number!", Alert.AlertType.ERROR);
                return false;
            }
        } catch (NumberFormatException e) {
            showAlert("Error", "Invalid capacity format!", Alert.AlertType.ERROR);
            return false;
        }
        if (!disponibilty.getText().equalsIgnoreCase("true") && !disponibilty.getText().equalsIgnoreCase("false")) {
            showAlert("Error", "Disponibility must be 'true' or 'false'!", Alert.AlertType.ERROR);
            return false;
        }
        return true;
    }


    private void loadTransportData() throws SQLException {
        transportList.clear();
        List<Transport> transports = transportService.getAll();
        transportList.addAll(transports);
    }

    private void populateForm(Transport transport) {
        type.setValue(transport.getType());
        capacity.setText(String.valueOf(transport.getCapacity()));
        disponibilty.setText(String.valueOf(transport.isDisponibility()));
        destination.setValue(transport.getDestination());
    }

    private void showAlert(String title, String message, Alert.AlertType type) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private URL getResource(String path) {
        URL resource = getClass().getResource(path);
        if (resource == null) {
            throw new RuntimeException("Could not find resource: " + path);
        }
        return resource;
    }


    @FXML
    private void filterTransport() {
        try {
            String capacityText = capacityTextField.getText().trim();
            String destinationText = destinationTextField.getText().trim();
            
            // If both fields are empty, load all data
            if (capacityText.isEmpty() && destinationText.isEmpty()) {
                loadTransportData();
                return;
            }
            
            int minCapacity = capacityText.isEmpty() ? 0 : Integer.parseInt(capacityText);
            List<Transport> filteredList = transportService.filterByCapacityAndDestination(minCapacity, destinationText);
            
            // Clear and add items while preserving the list instance
            transportList.clear();
            transportList.addAll(filteredList);
        } catch (NumberFormatException e) {
            showAlert("Error", "Please enter a valid capacity number!", Alert.AlertType.ERROR);
        } catch (SQLException e) {
            System.err.println("Database error during filtering: " + e.getMessage());
            showAlert("Error", "Failed to filter transports: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    @FXML
    public void showStats() throws IOException {
        try {
            System.out.println("Loading statistics view...");
            cleanup(); // Add cleanup before loading new view
            FXMLLoader loader = new FXMLLoader(getResource("/statistics_view.fxml"));
            Parent root = loader.load();
            
            if (stage == null) {
                stage = (Stage) btnShowStats.getScene().getWindow();
            }
            
            if (scene == null) {
                scene = new Scene(root);
            } else {
                scene.setRoot(root);
            }
            
            stage.setScene(scene);
            stage.show();
            System.out.println("Statistics view loaded successfully");
        } catch (Exception e) {
            System.err.println("Error loading statistics view: " + e.getMessage());
            e.printStackTrace();
            showAlert("Error", "Failed to load statistics view: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    private void backToDashboard(ActionEvent event) throws IOException {
        try {
            System.out.println("Loading dashboard view...");
            cleanup(); // Add cleanup before loading new view
            FXMLLoader loader = new FXMLLoader(getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            
            if (stage == null) {
                stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            }
            
            if (scene == null) {
                scene = new Scene(root);
            } else {
                scene.setRoot(root);
            }
            
            stage.setScene(scene);
            stage.show();
            System.out.println("Dashboard view loaded successfully");
        } catch (Exception e) {
            System.err.println("Error loading dashboard view: " + e.getMessage());
            e.printStackTrace();
            showAlert("Error", "Failed to load dashboard view: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }


}

