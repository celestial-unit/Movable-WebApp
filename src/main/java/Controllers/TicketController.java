package Controllers;

import com.stripe.Stripe;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ListView;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import Models.Ticket;
import Services.TicketService;
import javafx.scene.control.MenuButton;
import javafx.scene.control.MenuItem;


import java.io.IOException;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Comparator;
import java.util.List;

public class TicketController {

    @FXML
    private ListView<Ticket> ticketListView;
    @FXML
    private TextField searchField;
    @FXML
    private TextField nameField;
    @FXML
    private TextField paymentmodefield;
    @FXML
    private TextField destinationField;
    @FXML
    private TextField dateField;
    @FXML
    private TextField priceField;
    @FXML
    private Button sortByPriceButton;
    @FXML
    private Button sortByDateButton;
    @FXML
    private MenuButton filterByTransportButton;
    @FXML
    private Button payButton;


    private ObservableList<Ticket> tickets;
    private List<Ticket> allTickets;

    private final TicketService ticketService = new TicketService();
    private static final String STRIPE_SECRET_KEY = "sk_test_51QvgNPGMD19Kg6VCVL485yVimtdatsGmGxK9Irvo2lYHHHBQCi4JoVh2NQuz7osTIOJr1wJ8OYdDZbAEd7hYRfBI0066anPyYA";
    @FXML
    public void initialize() {
        Stripe.apiKey = STRIPE_SECRET_KEY;

        loadTickets();

        // Add a selection listener to the ListView
        ticketListView.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> {
                    if (newValue != null) {
                        // Update the TextFields with the selected ticket's data
                        paymentmodefield.setText(newValue.getPaymentMode());
                        destinationField.setText(newValue.getDestination());
                        dateField.setText(newValue.getBookingDate().toString());
                        priceField.setText(String.valueOf(newValue.getPrice()));
                        payButton.setVisible("Card".equalsIgnoreCase(newValue.getPaymentMode()));
                    }
                }
        );
    }

    private void loadTickets() {
        try {
            allTickets = ticketService.read(); // Load all tickets from the database
            tickets = FXCollections.observableArrayList(allTickets); // Initialize the observable list
            ticketListView.setItems(tickets); // Set the ListView items
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to load tickets: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    public void searchTicket(ActionEvent event) {
        String email = searchField.getText().trim();
        if (email.isEmpty()) {
            showAlert("Error", "Please enter your email to search for tickets.", Alert.AlertType.ERROR);
            return;
        }

        try {
            List<Ticket> filteredTickets = ticketService.searchTicketsByEmail(email);
            tickets = FXCollections.observableArrayList(filteredTickets);
            ticketListView.setItems(tickets);
        } catch (SQLException e) {
            showAlert("Error", "Failed to search tickets: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    public void sortByPrice(ActionEvent event) {
        tickets.sort(Comparator.comparingDouble(Ticket::getPrice));
        ticketListView.setItems(tickets);
    }

    @FXML
    public void sortByDate(ActionEvent event) {
        tickets.sort(Comparator.comparing(Ticket::getBookingDate));
        ticketListView.setItems(tickets);
    }

    @FXML
    public void filterByTransport(ActionEvent event) {
        // Get the selected transport type from the MenuItem
        MenuItem selectedItem = (MenuItem) event.getSource();
        String transportType = selectedItem.getText();

        // Filter the tickets by the selected transport type
        tickets = FXCollections.observableArrayList(tickets.filtered(ticket -> ticket.getTransport().equalsIgnoreCase(transportType)));
        ticketListView.setItems(tickets);
    }


    @FXML
    public void saveTicket() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Reservation.fxml"));
            Stage stage = (Stage) nameField.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
            stage.setTitle("Reservation");
            stage.show();
        } catch (IOException e) {
            showAlert("Error", "Failed to redirect to Reservation: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    @FXML
    public void deleteTicket() {
        Ticket selectedTicket = ticketListView.getSelectionModel().getSelectedItem();
        if (selectedTicket != null) {
            try {
                ticketService.delete(selectedTicket.getId());
                tickets.remove(selectedTicket);
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    @FXML
    public void updateTicket(ActionEvent actionEvent) {
        Ticket selectedTicket = ticketListView.getSelectionModel().getSelectedItem();

        if (selectedTicket != null) {
            try {
                selectedTicket.setPaymentMode(paymentmodefield.getText());
                selectedTicket.setDestination(destinationField.getText());
                selectedTicket.setBookingDate(LocalDate.parse(dateField.getText()));
                selectedTicket.setPrice(Double.parseDouble(priceField.getText()));

                ticketService.update(selectedTicket);
                loadTickets();
                showAlert("Success", "Ticket updated successfully!", Alert.AlertType.INFORMATION);
            } catch (SQLException e) {
                e.printStackTrace();
                showAlert("Error", "Failed to update ticket: " + e.getMessage(), Alert.AlertType.ERROR);
            } catch (Exception e) {
                e.printStackTrace();
                showAlert("Error", "Invalid input: " + e.getMessage(), Alert.AlertType.ERROR);
            }
        } else {
            showAlert("No Selection", "Please select a ticket to update.", Alert.AlertType.WARNING);
        }
    }
    @FXML
    public void clearFilter(ActionEvent event) {
        // Reset the ticket list to the original list (all tickets)
        tickets = FXCollections.observableArrayList(allTickets);
        ticketListView.setItems(tickets);
    }
    @FXML
    void handlePayButton(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/PaymentInterface.fxml"));
            Stage stage = (Stage) nameField.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
            stage.setTitle("Payment");
            stage.show();
        } catch (IOException e) {
            showAlert("Error", "Failed to redirect to Payment Interface: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    private void showAlert(String title, String content, Alert.AlertType alertType) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(content);
        alert.showAndWait();
    }
}