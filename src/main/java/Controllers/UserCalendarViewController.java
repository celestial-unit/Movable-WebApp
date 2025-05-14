package Controllers;

import Models.Event;
import Models.EventRegistration;
import Services.EventRegistrationService;
import Services.EventService;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Label;
import javafx.scene.control.Tooltip;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.stage.StageStyle;

import java.io.IOException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;

public class UserCalendarViewController extends CalendarViewController {
    private EventRegistrationService registrationService = new EventRegistrationService();
    private EventService eventService = new EventService();
    private Map<Integer, String> eventStatusMap; // Map to store event status
    private int userId; // ID of the user whose calendar is being displayed
    /**
     * Set the user ID to filter events for
     * @param userId The ID of the user
     */
    public void setUserId(int userId) {
        this.userId = userId;
        // Reload events for this specific user
        loadEvents();
        buildCalendar();
    }

    /**
     * Overridden method to load only the events that the current user
     * has registered for
     */
    @Override
    protected void loadEvents() {
        if (userId <= 0) {
            // No valid user ID set yet
            eventsByDate = new HashMap<>();
            return;
        }

        // Get all registrations for this user
        List<EventRegistration> userRegistrations = registrationService.getRegistrationsByUserId(userId);
        
        // Extract the event IDs
        List<Integer> userEventIds = userRegistrations.stream()
                .map(EventRegistration::getEventId)
                .collect(Collectors.toList());
        
        // Get all events
        List<Event> allEvents = eventService.getAllEvents();
        
        // Filter to only include events this user has registered for
        List<Event> userEvents = allEvents.stream()
                .filter(event -> userEventIds.contains(event.getId()))
                .collect(Collectors.toList());
        
        // Create a map with registration status for enhancing the events
        // Create a map with registration status for enhancing the events
        this.eventStatusMap = userRegistrations.stream()
                .collect(Collectors.toMap(
                    EventRegistration::getEventId,
                    EventRegistration::getStatus
                ));
        // Group the filtered events by date
        eventsByDate = userEvents.stream()
                .collect(Collectors.groupingBy(
                        e -> LocalDate.parse(e.getDateEvent())
                ));
    }
    
    /**
     * Navigate back to the user dashboard
     */
    @FXML
    public void backToUserDashboard(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_view.fxml"));
            Parent root = loader.load();
            
            // Get the controller and set the user ID
            UserController controller = loader.getController();
            controller.setUserId(userId);
            
            // Switch to the user dashboard scene
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.setTitle("User Dashboard");
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    
    /**
     * Get the status of an event from user registrations
     * @param eventId The ID of the event
     * @return The status of the event, or null if not found
     */
    private String getEventStatus(int eventId) {
        return eventStatusMap != null ? eventStatusMap.getOrDefault(eventId, "Pending") : "Pending";
    }
    
    /**
     * Override the createDayCell method to show event status with colors
     * - Green (#4CAF50) for Approved/Confirmed events
     * - Yellow (#FFC107) for Pending events
     * - Red (#F44336) for Rejected/Canceled events
     */
    @Override
    protected VBox createDayCell(LocalDate date) {
        VBox cell = new VBox(3);
        cell.getStyleClass().add("day-cell");
        cell.setPadding(new Insets(5));

        // Add weekend styling
        if (date.getDayOfWeek() == java.time.DayOfWeek.SATURDAY || date.getDayOfWeek() == java.time.DayOfWeek.SUNDAY) {
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

        // Add events with status-specific coloring
        List<Event> daysEvents = eventsByDate.getOrDefault(date, List.of());
        for (Event event : daysEvents) {
            Label eventLabel = new Label(event.getTitle());
            eventLabel.getStyleClass().add("event-label");
            
            // Get event status and set color accordingly
            String status = getEventStatus(event.getId());
            
            // Set background color based on status
            if ("Confirmed".equalsIgnoreCase(status) || "Approved".equalsIgnoreCase(status)) {
                eventLabel.setStyle("-fx-background-color: #4CAF50;"); // Green for approved
            } else if ("Pending".equalsIgnoreCase(status)) {
                eventLabel.setStyle("-fx-background-color: #FFC107;"); // Yellow for pending
            } else if ("Canceled".equalsIgnoreCase(status) || "Rejected".equalsIgnoreCase(status)) {
                eventLabel.setStyle("-fx-background-color: #F44336;"); // Red for rejected
            }
            
            // Add tooltip with details
            Tooltip tooltip = new Tooltip(
                    String.format("%s\nStatus: %s\nDate: %s\nLocation: %s",
                            event.getDescription(),
                            status,
                            event.getDateEvent(),
                            event.getStatus())
            );
            eventLabel.setTooltip(tooltip);
            
            // Add click handler for event details
            eventLabel.setOnMouseClicked(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent mouseEvent) {
                    showEventDetails(event, status);
                }
            });
            
            cell.getChildren().add(eventLabel);
        }

        // Add busy day indicator if more than 3 events
        if (daysEvents.size() > 3) {
            cell.getStyleClass().add("busy-day");
        }

        return cell;
    }
    
    /**
     * Override to only return events for the current user
     * @param date The date to get events for
     * @return List of events on that date for the current user
     */
    @Override
    protected List<Event> getEventsForDate(LocalDate date) {
        // If no valid user ID is set, return an empty list
        if (userId <= 0) {
            return List.of();
        }
        
        // Check if the date exists in the eventsByDate map and return its events
        // or an empty list if no events exist for that date
        return eventsByDate.getOrDefault(date, List.of());
    }
    
    /**
     * Show a dialog with event details when a user clicks on an event
     * @param status The status of the event registration
     */
    private void showEventDetails(Event event, String status) {
        try {
            // Create a dialog
            Stage dialog = new Stage();
            dialog.initModality(Modality.APPLICATION_MODAL);
            dialog.initStyle(StageStyle.DECORATED);
            dialog.setTitle("Event Details");
            dialog.setMinWidth(400);
            dialog.setMinHeight(300);
            
            VBox dialogVbox = new VBox(10);
            dialogVbox.setPadding(new Insets(20));
            
            // Add event details
            Label titleLabel = new Label("Event: " + event.getTitle());
            titleLabel.setStyle("-fx-font-size: 18px; -fx-font-weight: bold;");
            
            Label statusLabel = new Label("Status: " + status);
            // Set status label color based on status
            if ("Confirmed".equalsIgnoreCase(status) || "Approved".equalsIgnoreCase(status)) {
                statusLabel.setTextFill(Color.web("#4CAF50")); // Green for approved
            } else if ("Pending".equalsIgnoreCase(status)) {
                statusLabel.setTextFill(Color.web("#FFC107")); // Yellow for pending
            } else if ("Canceled".equalsIgnoreCase(status) || "Rejected".equalsIgnoreCase(status)) {
                statusLabel.setTextFill(Color.web("#F44336")); // Red for rejected
            }
            
            Label descriptionLabel = new Label("Description: " + event.getDescription());
            descriptionLabel.setWrapText(true);
            
            Label dateLabel = new Label("Date: " + event.getDateEvent());
            Label locationLabel = new Label("Location: " + event.getStatus());
            Label typeLabel = new Label("Type: " + getTypeName(event.getType()));
            Label durationLabel = new Label("Duration: " + event.getDuration() + " minutes");
            
            dialogVbox.getChildren().addAll(
                titleLabel, statusLabel, descriptionLabel, 
                dateLabel, locationLabel, typeLabel, durationLabel
            );
            
            Scene dialogScene = new Scene(dialogVbox);
            dialog.setScene(dialogScene);
            dialog.show();
        } catch (Exception e) {
            e.printStackTrace();
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Error");
            alert.setHeaderText("Could not display event details");
            alert.setContentText("An error occurred: " + e.getMessage());
            alert.showAndWait();
        }
    }
    
    /**
     * Helper method to get type name (copied from CalendarViewController)
     */
    String getTypeName(int type) {
        return switch (type) {
            case 1 -> "Workshop";
            case 2 -> "Seminar";
            case 3 -> "Conference";
            case 4 -> "Meeting";
            default -> "Other";
        };
    }
}
