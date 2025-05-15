package Controllers;

import com.google.api.client.util.DateTime;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.ListView;
import Models.Reservation;
import Models.Ticket;
import Services.GoogleCalendarService;
import Services.NavigationService;
import Services.ReservationService;
import Services.TicketService;
import javafx.stage.Stage;
import utils.QRCodeUtil;
import utils.EmailUtil;

import java.io.IOException;
import java.security.GeneralSecurityException;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.time.format.DateTimeFormatter;
import java.util.List;

public class AdminController {
    @FXML
    private ListView<Reservation> waitlistListView;

    private final ReservationService reservationService = new ReservationService();
    private final TicketService ticketService = new TicketService();
    private final NavigationService navigationService = NavigationService.getInstance();

    @FXML
    public void initialize() {
        loadWaitlist();
    }

    private void loadWaitlist() {
        try {
            List<Reservation> waitlist = reservationService.getWaitlist();
            waitlistListView.getItems().setAll(waitlist);
        } catch (SQLException e) {
            showAlert("Error", "Failed to load waitlist: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    void acceptReservation(ActionEvent event) {
        Reservation selected = waitlistListView.getSelectionModel().getSelectedItem();
        if (selected != null) {
            try {
                reservationService.acceptReservation(selected);
                double price = calculatePrice(selected);

                Ticket ticket = new Ticket();
                ticket.setReservationId(selected.getId());
                ticket.setPaymentMode(selected.getPaymentMode());
                ticket.setTransport(selected.getTransport());
                ticket.setDestination(selected.getLocation());
                ticket.setBookingDate(LocalDate.now());
                ticket.setPrice(price);

                ticketService.create(ticket);

                String qrCodeText = String.format(
                        "Name: %s\nDestination: %s\nDate: %s\nPrice: %.2f\nPayment Mode: %s\nTransport: %s",
                        ticket.getDestination(),
                        ticket.getBookingDate(),
                        ticket.getPrice(),
                        ticket.getPaymentMode(),
                        ticket.getTransport()
                );

                java.nio.file.Path qrCodeDir = java.nio.file.Paths.get("qrcodes");
                if (!java.nio.file.Files.exists(qrCodeDir)) {
                    java.nio.file.Files.createDirectories(qrCodeDir);
                }

                String qrCodePath = "qrcodes/ticket_" + ticket.getId() + ".png";
                QRCodeUtil.generateQRCodeImage(qrCodeText, 200, 200, qrCodePath);
                System.out.println("Creating Google Calendar event...");
                createGoogleCalendarEvent(selected);

                notifyUser(selected.getEmail(), "The reservation has been accepted and a ticket has been issued!", qrCodePath);
                loadWaitlist();
            } catch (SQLException | IOException | com.google.zxing.WriterException e) {
                System.err.println("Error accepting reservation: " + e.getMessage());
                showAlert("Error", "Failed to accept reservation: " + e.getMessage(), Alert.AlertType.ERROR);
            } catch (GeneralSecurityException e) {
                System.err.println("Error creating Google Calendar event: " + e.getMessage());
                showAlert("Error", "Failed to create Google Calendar event: " + e.getMessage(), Alert.AlertType.ERROR);
            }
        } else {
            showAlert("No Selection", "Please select a reservation to accept.", Alert.AlertType.WARNING);
        }
    }
    private void createGoogleCalendarEvent(Reservation reservation) throws IOException, GeneralSecurityException {
        GoogleCalendarService calendarService = new GoogleCalendarService();

        // Convert LocalDate to ZonedDateTime with the system's default time zone
        ZonedDateTime startZonedDateTime = reservation.getDate().atStartOfDay(ZoneId.systemDefault());
        ZonedDateTime endZonedDateTime = startZonedDateTime.plusHours(1);

        // Format the date/time strings in RFC 3339 format
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd'T'HH:mm:ssXXX");
        String startDateTimeString = startZonedDateTime.format(formatter);
        String endDateTimeString = endZonedDateTime.format(formatter);

        // Log the date strings for debugging
        System.out.println("Start DateTime: " + startDateTimeString);
        System.out.println("End DateTime: " + endDateTimeString);

        // Create DateTime objects
        DateTime startDateTime = new DateTime(startDateTimeString);
        DateTime endDateTime = new DateTime(endDateTimeString);

        calendarService.createEvent(
                "Reservation for " + reservation.getFirstName() + " " + reservation.getLastName(),
                reservation.getLocation(),
                "Reservation Details",
                startDateTime,
                endDateTime,
                reservation.getEmail()
        );
    }

    @FXML
    void rejectReservation(ActionEvent event) {
        Reservation selected = waitlistListView.getSelectionModel().getSelectedItem();
        if (selected != null) {
            try {
                reservationService.rejectReservation(selected);
                notifyUser(selected.getEmail(), "The reservation has been rejected.","there is No Qr Codes available");
                loadWaitlist(); // Refresh the waitlist
            } catch (SQLException e) {
                showAlert("Error", "Failed to reject reservation: " + e.getMessage(), Alert.AlertType.ERROR);
            }
        } else {
            showAlert("No Selection", "Please select a reservation to reject.", Alert.AlertType.WARNING);
        }
    }

    private void showAlert(String title, String message, Alert.AlertType alertType) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private void notifyUser(String email, String message, String qrCodePath) {
        showAlert("Notification", message, Alert.AlertType.INFORMATION);
        EmailUtil.sendEmail(email, "Reservation Status Update", message, qrCodePath);
    }

    private double calculatePrice(Reservation reservation) {
        double basePrice = 50;
        double transportMultiplier = 1.0;
        double agentMultiplier = 1.0;

        switch (reservation.getTransport()) {
            case "Car":
                transportMultiplier = 1.5;
                break;
            case "Taxi":
                transportMultiplier = 1.2;
                break;
            case "Bus":
                transportMultiplier = 1.0;
                break;
            case "Train":
                transportMultiplier = 9;
                break;
            default:
                transportMultiplier = 1.0;
                break;
        }

        switch (reservation.getAgentType()) {
            case "Medical Assistance Agent":
                agentMultiplier = 2.0;
                break;
            case "Normal Assistance Agent":
                agentMultiplier = 1.5;
                break;
            case "Pet":
                agentMultiplier = 1.2;
                break;
            default:
                agentMultiplier = 1.0;
                break;
        }

        return reservation.getSeats() * basePrice * transportMultiplier * agentMultiplier;
    }
    
    @FXML
    void backToDashboard(ActionEvent event) {
        try {
            // Get the current stage from the event source
            Stage stage = (Stage) ((javafx.scene.Node) event.getSource()).getScene().getWindow();
            
            // Set the stage in NavigationService
            navigationService.setPrimaryStage(stage);
            
            // Navigate to admin dashboard
            navigationService.navigateToAdminDashboard();
        } catch (Exception e) {
            System.err.println("Error navigating to admin dashboard: " + e.getMessage());
            e.printStackTrace();
            
            // Show alert about the navigation error
            showAlert("Navigation Error", 
                      "Unable to navigate to the dashboard. Please try again.", 
                      Alert.AlertType.ERROR);
        }
    }
}
