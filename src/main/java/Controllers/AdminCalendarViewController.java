package Controllers;

import Models.Event;
import Models.EventRegistration;
import Services.EventRegistrationService;
import Services.EventService;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import javafx.scene.input.MouseButton;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.util.Callback;

import java.time.LocalDate;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Optional;

public class AdminCalendarViewController extends CalendarViewController {
    
    private EventRegistrationService registrationService = new EventRegistrationService();
    private Map<Integer, List<EventRegistration>> registrationsByEventId = new HashMap<>();
    
    @FXML
    @Override
    public void initialize() {
        loadEventRegistrations();
        super.initialize();
    }
    
    private void loadEventRegistrations() {
        // Get all registrations and group them by event ID for quick access
        List<EventRegistration> allRegistrations = registrationService.getAllRegistrations();
        
        // Group registrations by event ID
        for (EventRegistration registration : allRegistrations) {
            int eventId = registration.getEventId();
            registrationsByEventId.computeIfAbsent(eventId, k -> new java.util.ArrayList<>())
                                 .add(registration);
        }
    }
    
    protected VBox createDayCell(LocalDate date) {
        VBox cell = new VBox(3);
        cell.getStyleClass().add("day-cell");

        // Add weekend styling
        if (date.getDayOfWeek().getValue() >= 6) {
            cell.getStyleClass().add("weekend-day");
        }

        // Highlight current day
        if (date.equals(LocalDate.now())) {
            cell.getStyleClass().add("current-day");
        }

        // Add day number
        Label dayNumber = new Label(String.valueOf(date.getDayOfMonth()));
        dayNumber.getStyleClass().add("day-number");
        cell.getChildren().add(dayNumber);

        // Add events with status-specific styling
        List<Event> daysEvents = getEventsForDate(date);
        
        for (Event event : daysEvents) {
            Label eventLabel = new Label(event.getTitle());
            eventLabel.getStyleClass().add("event-label");
            
            // Store the event in the user data for context menu
            eventLabel.setUserData(event);

            // Add event type specific styling
            String typeClass = "event-type-" + getTypeName(event.getType()).toLowerCase();
            eventLabel.getStyleClass().add(typeClass);
            
            // Apply color coding based on registration status
            styleEventLabelByStatus(eventLabel, event);
            
            // Add tooltip with details
            Tooltip tooltip = new Tooltip(
                    String.format("%s\nDuration: %d mins\nLocation: %s\nStatus: %s",
                            event.getDescription(),
                            event.getDuration(),
                            event.getStatus(),
                            getEventApprovalStatus(event.getId()))
            );
            eventLabel.setTooltip(tooltip);
            
            // Add context menu for approving/rejecting event registrations
            setupContextMenu(eventLabel, event);
            
            cell.getChildren().add(eventLabel);
        }

        // Add busy day indicator if more than 3 events
        if (daysEvents.size() > 3) {
            cell.getStyleClass().add("busy-day");
        }

        return cell;
    }
    
    private void styleEventLabelByStatus(Label eventLabel, Event event) {
        String status = getEventApprovalStatus(event.getId());
        
        switch (status.toLowerCase()) {
            case "approved":
                eventLabel.setStyle("-fx-background-color: #4CAF50; -fx-text-fill: white;");
                break;
            case "pending":
                eventLabel.setStyle("-fx-background-color: #FFC107; -fx-text-fill: black;");
                break;
            case "rejected":
                eventLabel.setStyle("-fx-background-color: #F44336; -fx-text-fill: white;");
                break;
            default:
                // Default styling
                eventLabel.setStyle("-fx-background-color: #2196F3; -fx-text-fill: white;");
                break;
        }
    }
    
    private String getEventApprovalStatus(int eventId) {
        // Check if there are any registrations for this event
        List<EventRegistration> registrations = registrationsByEventId.get(eventId);
        
        if (registrations == null || registrations.isEmpty()) {
            return "No Registrations";
        }
        
        // Count statuses
        int pendingCount = 0;
        int approvedCount = 0;
        int rejectedCount = 0;
        
        for (EventRegistration reg : registrations) {
            switch (reg.getStatus().toLowerCase()) {
                case "pending":
                    pendingCount++;
                    break;
                case "approved":
                    approvedCount++;
                    break;
                case "rejected":
                    rejectedCount++;
                    break;
            }
        }
        
        // Determine overall status
        if (approvedCount > 0 && rejectedCount == 0 && pendingCount == 0) {
            return "Approved";
        } else if (rejectedCount > 0 && approvedCount == 0 && pendingCount == 0) {
            return "Rejected";
        } else if (pendingCount > 0) {
            return "Pending";
        } else {
            return "Mixed";
        }
    }
    
    private void setupContextMenu(Label eventLabel, Event event) {
        ContextMenu contextMenu = new ContextMenu();
        
        MenuItem viewDetails = new MenuItem("View Details");
        viewDetails.setOnAction(e -> showEventDetails(event));
        
        MenuItem approveAll = new MenuItem("Approve All Registrations");
        approveAll.setOnAction(e -> updateAllRegistrations(event.getId(), "Approved"));
        
        MenuItem rejectAll = new MenuItem("Reject All Registrations");
        rejectAll.setOnAction(e -> updateAllRegistrations(event.getId(), "Rejected"));
        
        MenuItem manageRegistrations = new MenuItem("Manage Individual Registrations");
        manageRegistrations.setOnAction(e -> showRegistrationManager(event));
        
        contextMenu.getItems().addAll(viewDetails, new SeparatorMenuItem(), 
                                      approveAll, rejectAll, new SeparatorMenuItem(),
                                      manageRegistrations);
        
        // Add context menu to event label
        eventLabel.setOnMouseClicked(mouseEvent -> {
            if (mouseEvent.getButton() == MouseButton.SECONDARY) {
                contextMenu.show(eventLabel, mouseEvent.getScreenX(), mouseEvent.getScreenY());
            } else if (mouseEvent.getButton() == MouseButton.PRIMARY && mouseEvent.getClickCount() == 2) {
                showEventDetails((Event) eventLabel.getUserData());
            }
        });
    }
    
    private void showEventDetails(Event event) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Event Details");
        alert.setHeaderText(event.getTitle());
        
        String status = getEventApprovalStatus(event.getId());
        
        VBox content = new VBox(10);
        content.getChildren().addAll(
            new Label("Description: " + event.getDescription()),
            new Label("Date: " + event.getDateEvent()),
            new Label("Duration: " + event.getDuration() + " minutes"),
            new Label("Location: " + event.getStatus()),
            new Label("Type: " + getTypeName(event.getType())),
            new Label("Registration Status: " + status)
        );
        
        // Add registrations info
        List<EventRegistration> registrations = registrationsByEventId.get(event.getId());
        if (registrations != null && !registrations.isEmpty()) {
            Label regHeader = new Label("Registrations:");
            regHeader.setStyle("-fx-font-weight: bold;");
            content.getChildren().add(regHeader);
            
            for (EventRegistration reg : registrations) {
                String userName = "User #" + reg.getUserId(); // Ideally replace with actual username
                Label regLabel = new Label(userName + " - " + reg.getStatus() + 
                                          " (" + reg.getRegistrationDate() + ")");
                content.getChildren().add(regLabel);
            }
        } else {
            content.getChildren().add(new Label("No registrations for this event"));
        }
        
        alert.getDialogPane().setContent(content);
        alert.showAndWait();
    }
    
    private void updateAllRegistrations(int eventId, String newStatus) {
        List<EventRegistration> registrations = registrationsByEventId.get(eventId);
        
        if (registrations == null || registrations.isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("No Registrations");
            alert.setHeaderText(null);
            alert.setContentText("There are no registrations for this event to update.");
            alert.showAndWait();
            return;
        }
        
        // Confirm the update
        Alert confirmation = new Alert(Alert.AlertType.CONFIRMATION);
        confirmation.setTitle("Confirm Status Update");
        confirmation.setHeaderText("Update All Registrations");
        confirmation.setContentText("Are you sure you want to mark all registrations as " + newStatus + "?");
        
        Optional<ButtonType> result = confirmation.showAndWait();
        if (result.isPresent() && result.get() == ButtonType.OK) {
            // Update all registrations
            for (EventRegistration reg : registrations) {
                reg.setStatus(newStatus);
                registrationService.updateRegistration(reg);
            }
            
            // Refresh the calendar view
            loadEventRegistrations();
            buildCalendar();
            
            // Show success message
            Alert success = new Alert(Alert.AlertType.INFORMATION);
            success.setTitle("Status Updated");
            success.setHeaderText(null);
            success.setContentText("All registrations have been updated to " + newStatus);
            success.showAndWait();
        }
    }
    
    private void showRegistrationManager(Event event) {
        List<EventRegistration> registrations = registrationsByEventId.get(event.getId());
        
        if (registrations == null || registrations.isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("No Registrations");
            alert.setHeaderText(null);
            alert.setContentText("There are no registrations for this event to manage.");
            alert.showAndWait();
            return;
        }
        
        // Create a dialog for managing registrations
        Dialog<Void> dialog = new Dialog<>();
        dialog.setTitle("Manage Event Registrations");
        dialog.setHeaderText("Registration Management for: " + event.getTitle());
        
        // Set the button types
        dialog.getDialogPane().getButtonTypes().addAll(ButtonType.OK, ButtonType.CANCEL);
        
        // Create a grid for the registrations
        VBox content = new VBox(10);
        
        for (EventRegistration reg : registrations) {
            String userName = "User #" + reg.getUserId(); // Replace with actual username lookup
            
            // Create ComboBox for status selection
            ComboBox<String> statusCombo = new ComboBox<>();
            statusCombo.getItems().addAll("Pending", "Approved", "Rejected");
            statusCombo.setValue(reg.getStatus());
            statusCombo.setUserData(reg); // Store the registration object
            
            // Create HBox for each registration
            javafx.scene.layout.HBox registrationRow = new javafx.scene.layout.HBox(10);
            registrationRow.getChildren().addAll(
                new Label(userName),
                new Label(reg.getRegistrationDate().toString()),
                statusCombo
            );
            
            content.getChildren().add(registrationRow);
        }
        
        dialog.getDialogPane().setContent(content);
        
        // Save changes when OK is clicked
        dialog.setResultConverter(dialogButton -> {
            if (dialogButton == ButtonType.OK) {
                boolean changes = false;
                
                // Update all registrations with new statuses
                for (javafx.scene.Node node : content.getChildren()) {
                    if (node instanceof javafx.scene.layout.HBox) {
                        javafx.scene.layout.HBox row = (javafx.scene.layout.HBox) node;
                        
                        for (javafx.scene.Node rowNode : row.getChildren()) {
                            if (rowNode instanceof ComboBox) {
                                @SuppressWarnings("unchecked")
                                ComboBox<String> statusCombo = (ComboBox<String>) rowNode;
                                EventRegistration reg = (EventRegistration) statusCombo.getUserData();
                                
                                String newStatus = statusCombo.getValue();
                                if (!reg.getStatus().equals(newStatus)) {
                                    reg.setStatus(newStatus);
                                    registrationService.updateRegistration(reg);
                                    changes = true;
                                }
                            }
                        }
                    }
                }
                
                if (changes) {
                    // Refresh calendar
                    loadEventRegistrations();
                    buildCalendar();
                    
                    // Show success message
                    Alert success = new Alert(Alert.AlertType.INFORMATION);
                    success.setTitle("Status Updated");
                    success.setHeaderText(null);
                    success.setContentText("Registration statuses have been updated");
                    success.showAndWait();
                }
            }
            return null;
        });
        
        dialog.showAndWait();
    }
    
    // Add a legend to explain the color coding
    @FXML
    private void addStatusLegend() {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Calendar Status Legend");
        alert.setHeaderText("Event Registration Status Colors");
        
        VBox content = new VBox(10);
        
        Label approvedLabel = new Label("■ Approved");
        approvedLabel.setTextFill(Color.valueOf("#4CAF50"));
        approvedLabel.setStyle("-fx-font-weight: bold;");
        
        Label pendingLabel = new Label("■ Pending");
        pendingLabel.setTextFill(Color.valueOf("#FFC107"));
        pendingLabel.setStyle("-fx-font-weight: bold;");
        
        Label rejectedLabel = new Label("■ Rejected");
        rejectedLabel.setTextFill(Color.valueOf("#F44336"));
        rejectedLabel.setStyle("-fx-font-weight: bold;");
        
        Label defaultLabel = new Label("■ No Registrations");
        defaultLabel.setTextFill(Color.valueOf("#2196F3"));
        defaultLabel.setStyle("-fx-font-weight: bold;");
        
        content.getChildren().addAll(
            approvedLabel,
            pendingLabel,
            rejectedLabel,
            defaultLabel,
            new Label("Click on an event to see details, or right-click for management options.")
        );
        
        alert.getDialogPane().setContent(content);
        alert.showAndWait();
    }
    
    @FXML
    private void handleReturnToDashboard(ActionEvent event) {
        try {
            // Get the current stage
            javafx.stage.Stage stage = (javafx.stage.Stage) calendarGrid.getScene().getWindow();
            
            // Load the admin dashboard
            javafx.fxml.FXMLLoader loader = new javafx.fxml.FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            javafx.scene.Parent root = loader.load();
            
            // Set the new scene
            javafx.scene.Scene scene = new javafx.scene.Scene(root);
            stage.setScene(scene);
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
            showErrorAlert("Navigation Error", "Could not return to dashboard: " + e.getMessage());
        }
    }
    
    private void showErrorAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    
    @FXML
    private void refreshCalendar() {
        loadEventRegistrations();
        buildCalendar();
    }
}
