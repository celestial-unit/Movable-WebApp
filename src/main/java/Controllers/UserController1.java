package Controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import Models.Reservation;
import Services.GoogleCalendarService;
import Services.ReservationService;
import com.google.api.services.calendar.model.Event;


import java.awt.*;
import java.io.IOException;
import java.net.URI;
import java.net.URISyntaxException;
import java.security.GeneralSecurityException;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.List;

public class UserController1 {
    @FXML
    private Label statusLabel;

    @FXML
    private TextField emailField;
    @FXML
    private Button redirectButton;
    @FXML
    private Button redirectButtonCalendar;
    @FXML
    private ListView<String> eventListView;

    private ReservationService reservationService = new ReservationService();
    private GoogleCalendarService googleCalendarService;
    @FXML
    public void initialize() {
        try {
            googleCalendarService = new GoogleCalendarService();
        } catch (IOException | GeneralSecurityException e) {
            showAlert("Error", "Failed to initialize Google Calendar service: " + e.getMessage(), Alert.AlertType.ERROR);
        }

    }
    @FXML
    private Label notificationLabel; // Ensure this is linked to the FXML

    private void showNotification(String message) {
        notificationLabel.setText(message);
    }

    @FXML
    private void checkStatus() {
        String email = emailField.getText().trim(); // Trim whitespace

        // Validate email input
        if (email.isEmpty()) {
            showAlert("Error", "Please enter your email.", Alert.AlertType.ERROR);
            return;
        }

        // Validate email format (basic check)
        if (!isValidEmail(email)) {
            showAlert("Error", "Please enter a valid email address.", Alert.AlertType.ERROR);
            return;
        }

        try {
            // Fetch the reservation status
            String status = reservationService.getReservationStatus(email);

            // Check if the status is valid
            if (status == null || status.isEmpty()) {
                statusLabel.setText("No reservation found for this email.");
                redirectButton.setVisible(false); // Hide the redirect button
                redirectButtonCalendar.setVisible(false);
                showNotification("No reservation found for this email."); // Show a notification
                return;
            }

            // Update the status label
            statusLabel.setText("Your reservation status: " + status);

            // Show the redirect button if the status is "accepted"
            if ("accepted".equalsIgnoreCase(status)) {
                redirectButton.setVisible(true);
                redirectButtonCalendar.setVisible(true);
                showNotification("Your reservation has been accepted! Click 'Proceed to Ticket' to continue or 'View Calendar'."); // Show a notification

                // Fetch and display calendar events
                loadCalendarEvents(email);
            } else {
                redirectButton.setVisible(false);
                redirectButtonCalendar.setVisible(false);
                showNotification("Your reservation status: " + status); // Show a notification
            }

        } catch (SQLException e) {
            showAlert("Error", "Failed to fetch reservation status: " + e.getMessage(), Alert.AlertType.ERROR);
        } catch (IOException e) {
            showAlert("Error", "Failed to fetch calendar events: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    private void loadCalendarEvents(String email) throws IOException {
        List<Event> events = googleCalendarService.getUpcomingEvents();
        ObservableList<String> eventDetails = FXCollections.observableArrayList();

        for (Event event : events) {
            String eventSummary = event.getSummary();
            String eventDate = event.getStart().getDateTime().toStringRfc3339();
            eventDetails.add(eventSummary + " - " + eventDate);
        }

        eventListView.setItems(eventDetails);
    }

    private boolean isValidEmail(String email) {
        // Basic email validation regex
        String emailRegex = "^[a-zA-Z0-9_+&*-]+(?:\\.[a-zA-Z0-9_+&*-]+)*@(?:[a-zA-Z0-9-]+\\.)+[a-zA-Z]{2,7}$";
        return email.matches(emailRegex);
    }

    private void showAlert(String title, String message, Alert.AlertType alertType) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(message);
        alert.showAndWait();
    }



    @FXML
    private void redirectToTicketInterface() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Ticket.fxml"));
            Stage stage = (Stage) emailField.getScene().getWindow(); // Get the current window
            stage.setScene(new Scene(loader.load()));
            stage.setTitle("Ticket Management");
            stage.show();
        } catch (IOException e) {
            showAlert("Error", "Failed to redirect to Ticket interface: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    private void redirectToCalendarInterface() {
        try {
            // Fetch the user's email from the email field
            String email = emailField.getText().trim();

            // Validate email input
            if (email.isEmpty() || !isValidEmail(email)) {
                showAlert("Error", "Please enter a valid email address.", Alert.AlertType.ERROR);
                return;
            }

            // Fetch the reservation details for the user
            Reservation reservation = reservationService.getReservationByEmail(email);

            // Check if the reservation exists
            if (reservation == null) {
                showAlert("Error", "No reservation found for this email.", Alert.AlertType.ERROR);
                return;
            }

            // Get the reservation date from the reservation object
            LocalDate reservationDate = reservation.getDate(); // Assuming getDate() returns LocalDate

            // Construct the Google Calendar URL dynamically
            String googleCalendarUrl = String.format(
                    "https://calendar.google.com/calendar/u/0/r/week/%d/%d/%d?pli=1",
                    reservationDate.getYear(),
                    reservationDate.getMonthValue(),
                    reservationDate.getDayOfMonth()
            );

            // Open the URL in the default browser
            if (Desktop.isDesktopSupported() && Desktop.getDesktop().isSupported(Desktop.Action.BROWSE)) {
                Desktop.getDesktop().browse(new URI(googleCalendarUrl));
            } else {
                showAlert("Error", "Unable to open browser. Please manually visit: " + googleCalendarUrl, Alert.AlertType.ERROR);
            }
        } catch (SQLException e) {
            showAlert("Error", "Failed to fetch reservation details: " + e.getMessage(), Alert.AlertType.ERROR);
        } catch (IOException | URISyntaxException e) {
            showAlert("Error", "Failed to redirect to Google Calendar: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    public void Back(ActionEvent actionEvent) {

        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Reservation.fxml"));
            Stage stage = (Stage) emailField.getScene().getWindow(); // Get the current window
            stage.setScene(new Scene(loader.load()));
            stage.setTitle("Ticket Management");
            stage.show();
        } catch (IOException e) {
            showAlert("Error", "Failed to redirect to reservation interface: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    private void sendConsoleNotification(String email, String message) {
        System.out.println("Notification sent to " + email + ": " + message);
    }
}