package Controllers;

import Models.Event;
import Models.EventRegistration;
import Services.EventRegistrationService;
import Services.EventService;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import utils.SharedContext;

import java.io.IOException;
import java.sql.Timestamp;
import java.time.LocalDateTime;
import java.util.List;
import java.util.stream.Collectors;

/**
 * Controller for user event registration functionality.
 * This controller handles user registration for events with status always set to "Pending".
 */
public class UserEventRegistrationController {
    @FXML private TextField searchField;
    @FXML private ListView<Event> eventListView;
    @FXML private ComboBox<Event> eventComboBox;
    @FXML private TextField eventIdField;
    @FXML private TextField registrationDateField;
    @FXML private TextField statusField;
    @FXML private Button registerButton;
    @FXML private Button clearButton;
    @FXML private Button backButton;
    @FXML private ListView<EventRegistration> registeredEventsListView;
    private EventRegistrationService registrationService;
    private EventService eventService;
    private final ObservableList<Event> events = FXCollections.observableArrayList();
    private final ObservableList<EventRegistration> userRegistrations = FXCollections.observableArrayList();
    private int currentUserId;

    /**
     * Initializes the controller.
     * This method is automatically called after the FXML is loaded.
     */
    @FXML
    public void initialize() {
        // Get the current user ID from SharedContext
        currentUserId = SharedContext.getLoggedInUserId();
        
        // Initialize services
        registrationService = new EventRegistrationService();
        eventService = new EventService();
        
        // Setup initial UI state
        initializeUI();
        
        // Load events data
        loadEvents();
        
        // Setup event handlers
        setupEventHandlers();
    }

    /**
     * Initializes the UI components.
     */
    private void initializeUI() {
        // Set the registration date to current date/time (read-only)
        registrationDateField.setText(Timestamp.valueOf(LocalDateTime.now()).toString());
        registrationDateField.setEditable(false);
        
        // Status is always "Pending" for user registrations
        statusField.setText("Pending");
        statusField.setEditable(false);
        
        // Setup the event list view
        setupEventListView();
        
        // Setup the registered events list view
        setupRegisteredEventsListView();
    }

    /**
     * Configures the event list view with cell factory.
     */
    private void setupEventListView() {
        eventListView.setCellFactory(param -> new ListCell<Event>() {
            @Override
            protected void updateItem(Event event, boolean empty) {
                super.updateItem(event, empty);
                if (empty || event == null) {
                    setText(null);
                } else {
                    setText(String.format(
                            "ID: %-5d | Title: %-30s | Date: %s | Location: %s",
                            event.getId(),
                            event.getTitle(),
                            event.getDateEvent() + " " + event.getStartEvent(),
                            event.getStatus()
                    ));
                }
            }
        });
    }
    
    /**
     * Configures the registered events list view with cell factory.
     */
    /**
     * Configures the registered events list view with cell factory.
     */
    private void setupRegisteredEventsListView() {
        registeredEventsListView.setCellFactory(param -> new ListCell<EventRegistration>() {
            @Override
            protected void updateItem(EventRegistration registration, boolean empty) {
                super.updateItem(registration, empty);
                
                // Clear any previous styling
                setStyle("");
                setGraphic(null);
                
                if (empty || registration == null) {
                    setText(null);
                } else {
                    // Get event details using the event ID
                    Event event = eventService.getEventById(registration.getEventId());
                    String status = registration.getStatus();
                    
                    // Apply color-coding based on registration status
                    String backgroundColor;
                    String statusColor;
                    String borderColor;
                    
                    switch (status.toLowerCase()) {
                        case "pending":
                            backgroundColor = "#FFF9C4"; // yellow
                            statusColor = "#F57F17";     // dark orange
                            borderColor = "#FFD54F";     // amber
                            break;
                        case "confirmed":
                        case "approved":
                            backgroundColor = "#C8E6C9"; // light green
                            statusColor = "#2E7D32";     // dark green
                            borderColor = "#81C784";     // medium green
                            break;
                        case "cancelled":
                            backgroundColor = "#FFCDD2"; // light red
                            statusColor = "#C62828";     // dark red
                            borderColor = "#E57373";     // medium red
                            break;
                        case "rejected":
                            backgroundColor = "#EF9A9A"; // darker red
                            statusColor = "#B71C1C";     // very dark red
                            borderColor = "#EF5350";     // bright red
                            break;
                        default:
                            backgroundColor = "white";
                            statusColor = "black";
                            borderColor = "#E0E0E0";     // light gray
                            break;
                    }
                    
                    // Apply styled cell with padding, border, and better formatting
                    setStyle(
                        "-fx-background-color: " + backgroundColor + ";" +
                        "-fx-padding: 10px;" +
                        "-fx-border-color: " + borderColor + ";" +
                        "-fx-border-width: 0 0 0 4px;" +  // Left border only
                        "-fx-border-radius: 2px;" +
                        "-fx-background-radius: 2px;"
                    );
                    
                    // Create formatted text with event details
                    if (event != null) {
                        // Don't use setText, but create a formatted label instead
                        Label eventLabel = new Label();
                        
                        String eventDetails = 
                            "Event: " + event.getTitle() + "\n" +
                            "Date: " + event.getDateEvent() + " " + event.getStartEvent() + "\n" +
                            "Status: ";
                        
                        // Create the label with formatted text
                        eventLabel.setText(eventDetails);
                        
                        // Create status label with appropriate color
                        Label statusLabel = new Label(status);
                        statusLabel.setStyle(
                            "-fx-font-weight: bold;" +
                            "-fx-text-fill: " + statusColor + ";"
                        );
                        
                        // Use HBox for the last line to combine text and styled status
                        HBox statusBox = new HBox(5); // 5px spacing
                        statusBox.getChildren().addAll(new Label("Status: "), statusLabel);
                        
                        // Use VBox to display all content vertically
                        VBox vbox = new VBox(5); // 5px spacing
                        vbox.getChildren().addAll(
                            new Label("Event: " + event.getTitle()),
                            new Label("Date: " + event.getDateEvent() + " " + event.getStartEvent()),
                            statusBox
                        );
                        
                        setGraphic(vbox);
                    } else {
                        // Fallback if event is not found
                        Label fallbackLabel = new Label(
                            "Event ID: " + registration.getEventId() + "\n" +
                            "Status: " + status
                        );
                        
                        fallbackLabel.setStyle("-fx-font-weight: bold;");
                        setGraphic(fallbackLabel);
                    }
                    
                    // Set empty text since we're using graphic instead
                    setText(null);
                }
            }
        });
    }
    private void loadEvents() {
        // Get all events
        List<Event> allEvents = eventService.getAllEvents();
        events.setAll(allEvents);
        
        // Only populate the combo box with all events
        // The list view will only show registered events (populated in loadUserRegistrations)
        eventComboBox.setItems(FXCollections.observableArrayList(allEvents));
        
        // Set up the combo box to display Event objects
        eventComboBox.setCellFactory(param -> new ListCell<Event>() {
            @Override
            protected void updateItem(Event event, boolean empty) {
                super.updateItem(event, empty);
                if (empty || event == null) {
                    setText(null);
                } else {
                    setText(String.format(
                            "ID: %d | %s | %s | %s",
                            event.getId(),
                            event.getTitle(),
                            event.getDateEvent(),
                            event.getStatus()
                    ));
                }
            }
        });
        
        // Set the button cell to display the same information
        eventComboBox.setButtonCell(new ListCell<Event>() {
            @Override
            protected void updateItem(Event event, boolean empty) {
                super.updateItem(event, empty);
                if (empty || event == null) {
                    setText("Select Event");
                } else {
                    setText(String.format(
                            "ID: %d | %s | %s | %s",
                            event.getId(),
                            event.getTitle(),
                            event.getDateEvent(),
                            event.getStatus()
                    ));
                }
            }
        });
        
        // Load user registrations
        loadUserRegistrations();
    }
    
    /**
     * Loads user registrations from the database and populates the ListView.
     */
    private void loadUserRegistrations() {
        try {
            // Get all registrations for the current user
            List<EventRegistration> registrations = registrationService.getRegistrationsByUserId(currentUserId);
            userRegistrations.setAll(registrations);
            
            // Populate the registered events list view
            registeredEventsListView.setItems(userRegistrations);
            
            // Filter the events list to only show events the user has registered for
            List<Integer> registeredEventIds = registrations.stream()
                    .map(EventRegistration::getEventId)
                    .collect(Collectors.toList());
            
            // Create a filtered list of events that the user has registered for
            List<Event> registeredEvents = events.stream()
                    .filter(event -> registeredEventIds.contains(event.getId()))
                    .collect(Collectors.toList());
            
            // Update the main event list view to only show registered events
            eventListView.setItems(FXCollections.observableArrayList(registeredEvents));
        } catch (Exception e) {
            System.err.println("Error loading user registrations: " + e.getMessage());
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Error Loading Data", 
                    "An error occurred while loading your event registrations: " + e.getMessage());
        }
    }
    /**
     * Setup event handlers for UI components.
     */
    private void setupEventHandlers() {
        // Event list selection handler
        eventListView.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> {
                    if (newValue != null) {
                        eventIdField.setText(String.valueOf(newValue.getId()));
                        eventComboBox.setValue(newValue);
                    }
                }
        );
        
        // Event combobox selection handler
        eventComboBox.setOnAction(e -> {
            Event selectedEvent = eventComboBox.getValue();
            if (selectedEvent != null) {
                eventIdField.setText(String.valueOf(selectedEvent.getId()));
            }
        });
        
        // Search field handler
        searchField.textProperty().addListener((observable, oldValue, newValue) -> handleSearch(newValue));
    }

    /**
     * Handles the search functionality for the event list.
     * 
     * @param query The search query
     */
    private void handleSearch(String query) {
        if (query == null || query.trim().isEmpty()) {
            // Reload registered events instead of all events
            loadUserRegistrations();
            return;
        }
        
        String lowerQuery = query.toLowerCase();
        ObservableList<Event> filteredEvents = events.filtered(event -> 
                String.valueOf(event.getId()).contains(lowerQuery) ||
                event.getTitle().toLowerCase().contains(lowerQuery) ||
                event.getDescription().toLowerCase().contains(lowerQuery) ||
                event.getDateEvent().toLowerCase().contains(lowerQuery) ||
                event.getStatus().toLowerCase().contains(lowerQuery)
        );
        
        eventListView.setItems(filteredEvents);
    }

    /**
     * Handles the registration action when the user clicks the Register button.
     */
    @FXML
    public void handleRegister() {
        System.out.println("DEBUG: handleRegister method started");
        
        System.out.println("DEBUG: Before validation");
        if (!validateInput()) {
            System.out.println("DEBUG: Validation failed, returning");
            return;
        }
        System.out.println("DEBUG: After validation - passed");
        
        try {
            System.out.println("DEBUG: Before creating EventRegistration object");
            System.out.println("DEBUG: Event ID: " + eventIdField.getText());
            System.out.println("DEBUG: User ID: " + currentUserId);
            System.out.println("DEBUG: Registration Date: " + registrationDateField.getText());
            
            // Create a new event registration
            EventRegistration registration = new EventRegistration(
                    Integer.parseInt(eventIdField.getText()),
                    currentUserId,
                    Timestamp.valueOf(registrationDateField.getText()),
                    "Pending" // Status is always Pending for user registrations
            );
            System.out.println("DEBUG: After creating EventRegistration object");
            
            // Save the registration
            System.out.println("DEBUG: Before calling registrationService.addRegistration");
            boolean success = registrationService.addRegistration(registration);
            System.out.println("DEBUG: After calling registrationService.addRegistration, success: " + success);
            
            if (!success) {
                throw new Exception("Failed to register for the event. Please try again later.");
            }
            
            // Reload user registrations to refresh the list
            System.out.println("DEBUG: Before calling loadUserRegistrations");
            loadUserRegistrations();
            System.out.println("DEBUG: After calling loadUserRegistrations");
            
            // Show success message
            System.out.println("DEBUG: Before showing success alert");
            showAlert(Alert.AlertType.INFORMATION, "Registration Successful", 
                    "You have successfully registered for the event. Your registration status is Pending.");
            System.out.println("DEBUG: After showing success alert");
            
            // Clear the form
            System.out.println("DEBUG: Before calling handleClear");
            handleClear();
            System.out.println("DEBUG: After calling handleClear");
            
        } catch (Exception e) {
            System.out.println("DEBUG: Exception caught: " + e.getMessage());
            e.printStackTrace(); // Print stack trace for more detailed error information
            showAlert(Alert.AlertType.ERROR, "Registration Error", 
                    "An error occurred while registering for the event: " + e.getMessage());
        }
        System.out.println("DEBUG: handleRegister method completed");
    }

    /**
     * Validates the user input before registration.
     * 
     * @return true if input is valid, false otherwise
     */
    private boolean validateInput() {
        System.out.println("DEBUG: validateInput started");
        
        // Verify that an event is selected
        System.out.println("DEBUG: Checking if event is selected");
        System.out.println("DEBUG: eventComboBox.getValue(): " + eventComboBox.getValue());
        System.out.println("DEBUG: eventIdField.getText(): " + eventIdField.getText());
        
        if (eventComboBox.getValue() == null || eventIdField.getText().isEmpty()) {
            System.out.println("DEBUG: No event selected, showing alert");
            showAlert(Alert.AlertType.WARNING, "Input Error", "Please select an event.");
            return false;
        }
        
        // Verify that the event ID is valid
        System.out.println("DEBUG: Validating event ID");
        try {
            int eventId = Integer.parseInt(eventIdField.getText());
            System.out.println("DEBUG: Parsed event ID: " + eventId);
            if (eventId <= 0) {
                System.out.println("DEBUG: Invalid event ID (less than or equal to 0)");
                showAlert(Alert.AlertType.WARNING, "Input Error", "Invalid event ID.");
                return false;
            }
        } catch (NumberFormatException e) {
            System.out.println("DEBUG: NumberFormatException when parsing event ID: " + e.getMessage());
            showAlert(Alert.AlertType.WARNING, "Input Error", "Event ID must be a number.");
            return false;
        }
        
        // Check if user is already registered for this event
        System.out.println("DEBUG: Checking if user is already registered");
        System.out.println("DEBUG: Current user ID: " + currentUserId);
        List<EventRegistration> userRegistrations = registrationService.getRegistrationsByUserId(currentUserId);
        System.out.println("DEBUG: Retrieved " + userRegistrations.size() + " existing registrations");
        
        int eventId = Integer.parseInt(eventIdField.getText());
        boolean alreadyRegistered = userRegistrations.stream()
                .anyMatch(reg -> reg.getEventId() == eventId);
        
        System.out.println("DEBUG: Is already registered: " + alreadyRegistered);
        
        if (alreadyRegistered) {
            System.out.println("DEBUG: User already registered for this event, showing alert");
            showAlert(Alert.AlertType.WARNING, "Already Registered", 
                    "You are already registered for this event.");
            return false;
        }
        
        System.out.println("DEBUG: Validation passed");
        return true;
    }
    /**
     * Clears all form fields.
     */
    @FXML
    public void handleClear() {
        eventIdField.clear();
        eventComboBox.getSelectionModel().clearSelection();
        registrationDateField.setText(Timestamp.valueOf(LocalDateTime.now()).toString());
        eventListView.getSelectionModel().clearSelection();
    }

    /**
     * Handles navigation back to the user_view screen.
     */
    @FXML
    public void handleBack() {
        try {
            // Close any open database connections before navigating away
            if (eventService != null) {
                eventService.closeConnection();
            }
            if (registrationService != null) {
                registrationService.closeConnection();
            }
            
            // Load the user_view.fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user/user_view.fxml"));
            Parent root = loader.load();
            
            // Pass the user ID to the UserController
            UserController userController = loader.getController();
            userController.setUserId(currentUserId);
            
            // Get the current stage from the back button
            Stage stage = (Stage) backButton.getScene().getWindow();
            
            // Set the new scene
            stage.setScene(new Scene(root));
            stage.setTitle("User Dashboard");
            stage.show();
            
        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Navigation Error", 
                    "An error occurred while returning to the user dashboard: " + e.getMessage());
        }
    }

    /**
     * Shows an alert dialog with the specified information.
     * 
     * @param type The type of alert
     * @param title The alert title
     * @param message The alert message
     */
    private void showAlert(Alert.AlertType type, String title, String message) {
        System.out.println("DEBUG: showAlert method - type: " + type + ", title: \"" + title + "\", message: \"" + message + "\"");
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        System.out.println("DEBUG: About to show alert dialog");
        alert.showAndWait();
        System.out.println("DEBUG: Alert dialog closed");
    }
    /**
     * Sets the current user ID and updates the SharedContext.
     * This method is called from UserController when navigating to this view.
     * 
     * @param userId The ID of the current user
     */
    public void setUserId(int userId) {
        this.currentUserId = userId;
        SharedContext.setLoggedInUserId(userId);
    }
}

