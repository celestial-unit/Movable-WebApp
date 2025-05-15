package Controllers;

import Models.Reclamation;
import Models.User;
import Services.ReclamationService;
import Services.UsersService;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import utils.SharedContext;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.List;
import java.util.ResourceBundle;
import java.util.function.Predicate;
import java.util.stream.Collectors;

public class AdminReclamationController implements Initializable {

    private final ReclamationService reclamationService;
    private final UsersService usersService;
    private ObservableList<Reclamation> reclamationsList;
    private FilteredList<Reclamation> filteredReclamations;
    private Reclamation selectedReclamation;

    // Navigation buttons
    @FXML private Button homeButton;
    @FXML private Button usersButton;
    @FXML private Button driversButton;
    @FXML private Button logoutButton;
    @FXML private Button dashboardButton;
    @FXML private Button reclamationsButton;
    @FXML private Button ridesButton;
    @FXML private Button settingsButton;
    
    // Table components
    @FXML private TableView<Reclamation> reclamationsTable;
    @FXML private TableColumn<Reclamation, Integer> idColumn;
    @FXML private TableColumn<Reclamation, String> userColumn;
    @FXML private TableColumn<Reclamation, String> titleColumn;
    @FXML private TableColumn<Reclamation, String> dateColumn;
    @FXML private TableColumn<Reclamation, String> statusColumn;
    @FXML private TableColumn<Reclamation, String> priorityColumn;
    @FXML private TableColumn<Reclamation, String> actionsColumn;
    @FXML private Label totalReclamationsLabel;
    
    // Filter components
    @FXML private ComboBox<String> statusFilter;
    @FXML private DatePicker dateFilter;
    @FXML private TextField searchField;
    @FXML private Button searchButton;
    @FXML private Button refreshButton;
    
    // Detail view components
    @FXML private VBox reclamationDetailContainer;
    @FXML private Label detailIdLabel;
    @FXML private Label detailUserLabel;
    @FXML private Label detailDateLabel;
    @FXML private Label detailStatusLabel;
    @FXML private Label detailTitleLabel;
    @FXML private TextArea detailDescriptionArea;
    @FXML private TextArea responseTextArea;
    @FXML private Button rejectButton;
    @FXML private Button approveButton;
    @FXML private Button sendResponseButton;
    @FXML private Button closeDetailButton;

    public AdminReclamationController() {
        this.reclamationService = new ReclamationService();
        this.usersService = new UsersService();
    }

    // Initialize method: load the reclamation data into the table and set up event listeners
    @Override
    public void initialize(URL location, ResourceBundle resources) {
        try {
            // Initialize table columns
            idColumn.setCellValueFactory(new PropertyValueFactory<>("id"));
            titleColumn.setCellValueFactory(new PropertyValueFactory<>("title"));
            statusColumn.setCellValueFactory(new PropertyValueFactory<>("status"));
            
            // Custom cell factories for user, date and priority columns
            userColumn.setCellValueFactory(cellData -> {
                try {
                    int userId = cellData.getValue().getUserId();
                    User user = usersService.findById(userId);
                    if (user != null) {
                        return new javafx.beans.property.SimpleStringProperty(
                            user.getFirstName() + " " + user.getLastName()
                        );
                    }
                    return new javafx.beans.property.SimpleStringProperty("Unknown User");
                } catch (SQLException e) {
                    return new javafx.beans.property.SimpleStringProperty("Error");
                }
            });
            
            dateColumn.setCellValueFactory(cellData -> 
                new javafx.beans.property.SimpleStringProperty("N/A"));  // Would need to add date field to Reclamation model
            
            priorityColumn.setCellValueFactory(cellData -> {
                String status = cellData.getValue().getStatus();
                String priority = "Medium";
                if ("Pending".equals(status)) {
                    priority = "High";
                } else if ("Resolved".equals(status)) {
                    priority = "Low";
                }
                return new javafx.beans.property.SimpleStringProperty(priority);
            });
            
            // Set up actions column with buttons
            actionsColumn.setCellFactory(col -> new TableCell<Reclamation, String>() {
                private final Button viewBtn = new Button("View");
                {
                    viewBtn.getStyleClass().add("action-button");
                    viewBtn.setOnAction(event -> {
                        Reclamation reclamation = getTableView().getItems().get(getIndex());
                        showReclamationDetails(reclamation);
                    });
                }
                
                @Override
                protected void updateItem(String item, boolean empty) {
                    super.updateItem(item, empty);
                    if (empty) {
                        setGraphic(null);
                    } else {
                        setGraphic(viewBtn);
                    }
                }
            });

            // Fetch all reclamations from the database
            List<Reclamation> reclamations = reclamationService.read();
            reclamationsList = FXCollections.observableArrayList(reclamations);
            filteredReclamations = new FilteredList<>(reclamationsList, p -> true);
            reclamationsTable.setItems(filteredReclamations);
            
            // Update total count label
            updateTotalReclamationsLabel();
            
            // Add listener for table row selection
            reclamationsTable.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> {
                    selectedReclamation = newValue;
                }
            );
            
            // Hide the detail view by default
            reclamationDetailContainer.setVisible(false);
            reclamationDetailContainer.setManaged(false);

        } catch (SQLException e) {
            showError("Error", "Unable to fetch reclamations: " + e.getMessage());
            e.printStackTrace();
        }
    }

    // FILTER HANDLING METHODS
    
    @FXML
    private void handleStatusFilter() {
        applyFilters();
    }
    
    @FXML
    private void handleDateFilter() {
        applyFilters();
    }
    
    @FXML
    private void handleSearch() {
        applyFilters();
    }
    
    @FXML
    private void handleRefresh() {
        try {
            // Clear filters
            statusFilter.setValue("All");
            dateFilter.setValue(null);
            searchField.clear();
            
            // Reload reclamations from database
            List<Reclamation> reclamations = reclamationService.read();
            reclamationsList.setAll(reclamations);
            
            // Reset filter
            filteredReclamations.setPredicate(p -> true);
            
            // Update total count
            updateTotalReclamationsLabel();
            
            showInformation("Refresh Complete", "Reclamation list has been refreshed.");
        } catch (SQLException e) {
            showError("Error", "Unable to refresh reclamations: " + e.getMessage());
        }
    }
    
    private void applyFilters() {
        String statusValue = statusFilter.getValue();
        LocalDate dateValue = dateFilter.getValue();
        String searchValue = searchField.getText().toLowerCase().trim();
        
        Predicate<Reclamation> statusPredicate = reclamation -> 
            statusValue == null || "All".equals(statusValue) || 
            reclamation.getStatus().equals(statusValue);
            
        Predicate<Reclamation> searchPredicate = reclamation ->
            searchValue.isEmpty() || 
            reclamation.getTitle().toLowerCase().contains(searchValue) ||
            reclamation.getDescription().toLowerCase().contains(searchValue);
            
        // Combined predicate
        filteredReclamations.setPredicate(statusPredicate.and(searchPredicate));
        
        // Update total count
        updateTotalReclamationsLabel();
    }
    
    private void updateTotalReclamationsLabel() {
        totalReclamationsLabel.setText("Total: " + filteredReclamations.size() + " reclamations");
    }
    
    // RECLAMATION DETAIL METHODS
    
    private void showReclamationDetails(Reclamation reclamation) {
        if (reclamation == null) {
            return;
        }

        selectedReclamation = reclamation;

        detailIdLabel.setText(String.valueOf(reclamation.getId()));
        try {
            User user = usersService.findById(reclamation.getUserId());
            detailUserLabel.setText(user != null ?
                user.getFirstName() + " " + user.getLastName() : "Unknown User");
        } catch (SQLException e) {
            detailUserLabel.setText("Error loading user");
        }

        detailDateLabel.setText("N/A"); // Would need to add date to Reclamation model
        detailStatusLabel.setText(reclamation.getStatus());
        detailTitleLabel.setText(reclamation.getTitle());
        detailDescriptionArea.setText(reclamation.getDescription());

        // Clear response field
        responseTextArea.clear();

        // Enable/disable buttons based on reclamation status
        boolean isPending = "Pending".equals(reclamation.getStatus());
        approveButton.setDisable(!isPending);
        rejectButton.setDisable(!isPending);
        sendResponseButton.setDisable(false);

        // Show the detail container
        reclamationDetailContainer.setVisible(true);
        reclamationDetailContainer.setManaged(true);
    }
    
    @FXML
    private void closeReclamationDetails() {
        reclamationDetailContainer.setVisible(false);
        reclamationDetailContainer.setManaged(false);
        selectedReclamation = null;
    }

    @FXML
    private void approveReclamation() {
        if (selectedReclamation == null) {
            showError("Error", "No reclamation selected");
            return;
        }

        try {
            // Validate current status
            String currentStatus = selectedReclamation.getStatus();
            if (!"Pending".equals(currentStatus)) {
                showError("Invalid Operation", "Only pending reclamations can be approved");
                return;
            }

            // Update status in the model
            selectedReclamation.setStatus("Approved");
            
            // Update in database
            boolean updated = reclamationService.update(selectedReclamation);
            
            if (!updated) {
                throw new SQLException("Failed to update reclamation status in database");
            }

            // Update UI elements
            detailStatusLabel.setText("Approved");
            approveButton.setDisable(true);
            rejectButton.setDisable(true);

            // Refresh the table
            refreshTable();

            showInformation("Success", "Reclamation has been approved successfully.");
        } catch (SQLException e) {
            // Revert status in model if database update failed
            selectedReclamation.setStatus("Pending");
            showError("Database Error", "Failed to approve reclamation: " + e.getMessage());
        } catch (Exception e) {
            showError("System Error", "An unexpected error occurred: " + e.getMessage());
        }
    }

    @FXML
    private void rejectReclamation() {
        if (selectedReclamation == null) {
            showError("Error", "No reclamation selected");
            return;
        }

        try {
            // Validate current status
            String currentStatus = selectedReclamation.getStatus();
            if (!"Pending".equals(currentStatus)) {
                showError("Invalid Operation", "Only pending reclamations can be rejected");
                return;
            }

            // Update status in the model
            selectedReclamation.setStatus("Rejected");
            
            // Update in database
            boolean updated = reclamationService.update(selectedReclamation);
            
            if (!updated) {
                throw new SQLException("Failed to update reclamation status in database");
            }

            // Update UI elements
            detailStatusLabel.setText("Rejected");
            approveButton.setDisable(true);
            rejectButton.setDisable(true);

            // Refresh the table
            refreshTable();

            showInformation("Success", "Reclamation has been rejected successfully.");
        } catch (SQLException e) {
            // Revert status in model if database update failed
            selectedReclamation.setStatus("Pending");
            showError("Database Error", "Failed to reject reclamation: " + e.getMessage());
        } catch (Exception e) {
            showError("System Error", "An unexpected error occurred: " + e.getMessage());
        }
    }

    @FXML
    private void sendResponse() {
        if (selectedReclamation == null) {
            showError("Error", "No reclamation selected");
            return;
        }

        String response = responseTextArea.getText().trim();
        if (response.isEmpty()) {
            showError("Error", "Please enter a response message");
            return;
        }

        try {
            // Update reclamation with response
            // Note: You would need to add a response field to the Reclamation model
            // selectedReclamation.setResponse(response);
            // For now, we'll just update the status to "Responded"
            selectedReclamation.setStatus("Responded");
            reclamationService.update(selectedReclamation);

            // Update UI
            detailStatusLabel.setText("Responded");
            responseTextArea.clear();

            // Refresh the table
            refreshTable();

            showInformation("Success", "Response has been sent successfully.");
        } catch (SQLException e) {
            showError("Error", "Failed to send response: " + e.getMessage());
        }
    }

    private void refreshTable() {
        try {
            List<Reclamation> reclamations = reclamationService.read();
            reclamationsList.setAll(reclamations);
            applyFilters();
        } catch (SQLException e) {
            showError("Error", "Failed to refresh table: " + e.getMessage());
        }
    }
    
    /**
     * Validates whether a status transition is allowed
     * @param currentStatus The current status of the reclamation
     * @param newStatus The proposed new status
     * @return true if the transition is valid, false otherwise
     */
    private boolean isValidStatusTransition(String currentStatus, String newStatus) {
        // Only allow transitions from Pending to Approved/Rejected
        if ("Pending".equals(currentStatus)) {
            return "Approved".equals(newStatus) || "Rejected".equals(newStatus);
        }
        return false;
    }

    // NAVIGATION METHODS

    @FXML
    private void handleDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Navigation Error", "Failed to load admin dashboard: " + e.getMessage());
        }
    }

    @FXML
    private void handleUsers(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UserCrudView.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Navigation Error", "Failed to load users view: " + e.getMessage());
        }
    }

    @FXML
    private void handleDrivers(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/DriverCrudView.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Navigation Error", "Failed to load drivers view: " + e.getMessage());
        }
    }

    @FXML
    private void handleRides(ActionEvent event) {
        showInformation("Coming Soon", "Ride management functionality is coming soon.");
    }

    @FXML
    private void handleSettings(ActionEvent event) {
        showInformation("Coming Soon", "Settings functionality is coming soon.");
    }

    @FXML
    private void handleHome(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Navigation Error", "Failed to load home view: " + e.getMessage());
        }
    }

    @FXML
    private void handleLogout(ActionEvent event) {
        try {
            // Clear the logged-in user
            SharedContext.clearLoggedInUserData();

            // Navigate back to login screen
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Logout Error", "Failed to logout: " + e.getMessage());
        }
    }

    // Action to handle going back to the admin dashboard
    @FXML
    private void goBackToAdminDashboard(ActionEvent event) {
        try {
            // Load the Admin Dashboard FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml")); // Correct path
            Parent root = loader.load();

            // Get the current stage and set the new scene
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(new Scene(root));
        } catch (IOException e) {
            e.printStackTrace();
            showError("Error", "Unable to load the Admin Dashboard.");
        }
    }

    @FXML
    private void handleReclamations(ActionEvent event) {
        // Already on the reclamations page, refresh the data
        refreshTable();
    }

    @FXML
    private void goToHome(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            Scene scene = new Scene(root);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Navigation Error", "Failed to load home view: " + e.getMessage());
        }
    }

    @FXML
    private void goToHelp(ActionEvent event) {
        showInformation("Coming Soon", "Help functionality is coming soon.");
    }

    @FXML
    private void viewAllActivities(ActionEvent event) {
        showInformation("Coming Soon", "Activity log functionality is coming soon.");
    }

    @FXML
    private void clearAllAlerts(ActionEvent event) {
        showInformation("Coming Soon", "Alert management functionality is coming soon.");
    }

    @FXML
    private void handleSystemUpdate(ActionEvent event) {
        showInformation("Coming Soon", "System update functionality is coming soon.");
    }

    @FXML
    private void viewNewUsers(ActionEvent event) {
        showInformation("Coming Soon", "New users view functionality is coming soon.");
    }

    @FXML
    private void viewDatabaseLogs(ActionEvent event) {
        showInformation("Coming Soon", "Database logs functionality is coming soon.");
    }
    
    @FXML
    private void handleLogOut(ActionEvent event) {
        // Delegate to the existing handleLogout method for consistency
        handleLogout(event);
    }

    @FXML
    private void handleCloseDetail(ActionEvent event) {
        // Delegate to the existing closeReclamationDetails method
        closeReclamationDetails();
    }

    @FXML
    private void handleReject(ActionEvent event) {
        // Delegate to the existing rejectReclamation method
        rejectReclamation();
    }

    @FXML
    private void handleApprove(ActionEvent event) {
        // Delegate to the existing approveReclamation method
        approveReclamation();
    }

    @FXML
    private void handleSendResponse(ActionEvent event) {
        // Delegate to the existing sendResponse method
        sendResponse();
    }

    // Utility method to show error messages in an Alert dialog
    private void showError(String title, String message) {
        Alert alert = new Alert(AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Utility method to show information messages in an Alert dialog
    private void showInformation(String title, String message) {
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}
