package Controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.stage.Stage;
import Models.Reservation;
import Services.ReservationService;
import Services.TicketService;

import java.io.IOException;
import java.sql.SQLException;
import java.util.Comparator;
import java.util.List;

import javafx.scene.control.MenuItem;

public class ReservationAdd {
    private final ReservationService reservationService;
    private final TicketService ticketService;
    private Reservation reservationToUpdate; // Store the reservation to update

    public ReservationAdd() {
        this.reservationService = new ReservationService();
        this.ticketService = new TicketService();
    }

    @FXML
    private TextField ageTf;

    @FXML
    private TextField firstNameTf;

    @FXML
    private TextField lastNameTf;

    @FXML
    private ComboBox<String> agentTypeField;

    @FXML
    private ComboBox<String> paymentModeField;

    @FXML
    private ComboBox<String> transportField;

    @FXML
    private TextField emailField;

    @FXML
    private DatePicker dateField;

    @FXML
    private TextField locationField;

    @FXML
    private TextField seatsField;
    @FXML
    private TextField searchField;
    @FXML
    private ListView<Reservation> reservationListView;

    private ObservableList<Reservation> reservations;
    private List<Reservation> allreservation;




    @FXML
    public void initialize() {
        // Initialize ComboBoxes with options
        agentTypeField.setItems(FXCollections.observableArrayList("Medical Assistance Agent", "Normal Assistance Agent", "Pet"));
        paymentModeField.setItems(FXCollections.observableArrayList("Cash", "Card"));
        transportField.setItems(FXCollections.observableArrayList("Car", "Taxi", "Bus", "Train"));

        loadReservations(); // Load reservations when the controller is initialized

        // Set up the ListView to display reservation details
        reservationListView.setCellFactory(param -> new ListCell<Reservation>() {
            @Override
            protected void updateItem(Reservation reservation, boolean empty) {
                super.updateItem(reservation, empty);
                if (empty || reservation == null) {
                    setText(null);
                } else {
                    setText(reservation.toString()); // Customize this to display relevant details
                }
            }
        });
        reservationListView.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> {
                    if (newValue != null) {
                        firstNameTf.setText(newValue.getFirstName());
                        lastNameTf.setText(newValue.getLastName());
                        emailField.setText(newValue.getEmail());
                        dateField.setValue(newValue.getDate());
                        locationField.setText(newValue.getLocation());
                        agentTypeField.setValue(newValue.getAgentType());
                        paymentModeField.setValue(newValue.getPaymentMode());
                        transportField.setValue(newValue.getTransport());
                        ageTf.setText(String.valueOf(newValue.getAge()));
                        seatsField.setText(String.valueOf(newValue.getSeats()));

                    }
                }
        );
    }

    private void loadReservations() {
        try {
            allreservation = reservationService.read(); // Load all reservations from the database
            reservations = FXCollections.observableArrayList(allreservation); // Initialize the observable list
            reservationListView.setItems(reservations); // Set the ListView items
        } catch (SQLException e) {
            showAlert("Error", "Failed to load reservations: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    // Set the reservation to update
    public void setReservationToUpdate(Reservation reservation) {
        this.reservationToUpdate = reservation;
        populateForm(); // Populate the form with the reservation data
    }

    // Populate the form fields with the reservation data
    private void populateForm() {
        if (reservationToUpdate != null) {
            firstNameTf.setText(reservationToUpdate.getFirstName());
            lastNameTf.setText(reservationToUpdate.getLastName());
            emailField.setText(reservationToUpdate.getEmail());
            dateField.setValue(reservationToUpdate.getDate());
            locationField.setText(reservationToUpdate.getLocation());
            seatsField.setText(String.valueOf(reservationToUpdate.getSeats()));
            ageTf.setText(String.valueOf(reservationToUpdate.getAge()));
            agentTypeField.setValue(reservationToUpdate.getAgentType());
            paymentModeField.setValue(reservationToUpdate.getPaymentMode());
            transportField.setValue(reservationToUpdate.getTransport());
        }
    }


    @FXML
    void saveReservation(ActionEvent event) {
        try {
            // Validate fields before saving
            if (isValidInput()) {
                // Check if the email is valid
                if (!isValidEmail(emailField.getText())) {
                    showAlert("Invalid Email", "Please enter a valid email address.", Alert.AlertType.WARNING);
                    return; // Stop further execution if the email is invalid
                }

                Reservation reservation;
                if (reservationToUpdate == null) {
                    // Create a new reservation
                    reservation = new Reservation(
                            Integer.parseInt(ageTf.getText()),
                            firstNameTf.getText(),
                            lastNameTf.getText(),
                            emailField.getText(),
                            dateField.getValue(),
                            locationField.getText(), // Ensure location is set
                            Integer.parseInt(seatsField.getText()),
                            agentTypeField.getValue(),
                            paymentModeField.getValue(),
                            transportField.getValue()
                    );
                    reservationService.create(reservation);
                    showAlert("Success", "Reservation created successfully.", Alert.AlertType.INFORMATION);
                } else {
                    // Update the existing reservation
                    reservationToUpdate.setFirstName(firstNameTf.getText());
                    reservationToUpdate.setLastName(lastNameTf.getText());
                    reservationToUpdate.setEmail(emailField.getText());
                    reservationToUpdate.setDate(dateField.getValue());
                    reservationToUpdate.setLocation(locationField.getText()); // Ensure location is set
                    reservationToUpdate.setSeats(Integer.parseInt(seatsField.getText()));
                    reservationToUpdate.setAge(Integer.parseInt(ageTf.getText()));
                    reservationToUpdate.setAgentType(agentTypeField.getValue());
                    reservationToUpdate.setPaymentMode(paymentModeField.getValue());
                    reservationToUpdate.setTransport(transportField.getValue());

                    reservationService.update(reservationToUpdate);
                    showAlert("Success", "Reservation updated successfully.", Alert.AlertType.INFORMATION);
                    reservation = reservationToUpdate;
                }

                // Add the reservation to the waitlist
                reservationService.addToWaitlist(reservation);

                // Redirect to the User interface to show the status
                redirectToUserInterface();
            } else {
                showAlert("Invalid Input", "Please fill in all fields correctly", Alert.AlertType.WARNING);
            }
        } catch (NumberFormatException e) {
            showAlert("Input Error", "Age and seats must be valid numbers", Alert.AlertType.ERROR);
        } catch (Exception e) {
            showAlert("Error", "Error saving reservation: " + e.getMessage(), Alert.AlertType.ERROR);
        }

    }
    private void redirectToUserInterface() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/UserInterface.fxml"));
            Stage stage = (Stage) ageTf.getScene().getWindow(); // Get the current window
            stage.setScene(new Scene(loader.load()));
            stage.setTitle("Reservation Status");
            stage.show();
        } catch (IOException e) {
            showAlert("Error", "Failed to redirect to User interface: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }

    // Utility method to clear all input fields
    private void clearFields() {
        firstNameTf.clear();
        lastNameTf.clear();
        emailField.clear();
        dateField.setValue(null);
        locationField.clear();
        seatsField.clear();
        ageTf.clear();
        agentTypeField.setValue(null);
        paymentModeField.setValue(null);
        transportField.setValue(null);
        reservationToUpdate = null; // Reset the reservation to update
    }
    // Utility method to check if input is valid
    private boolean isValidInput() {
        return !firstNameTf.getText().isEmpty() &&
                !lastNameTf.getText().isEmpty() &&
                !emailField.getText().isEmpty() &&
                isValidEmail(emailField.getText()) && // Validate email format
                dateField.getValue() != null &&
                !locationField.getText().isEmpty() && // Ensure location is not empty
                !seatsField.getText().isEmpty() &&
                agentTypeField.getValue() != null &&
                paymentModeField.getValue() != null &&
                transportField.getValue() != null;
    }
    // Utility method to show alerts
    private void showAlert(String title, String content, Alert.AlertType alertType) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setContentText(content);
        alert.showAndWait();
    }


    public void updateReservation(ActionEvent actionEvent) {
        Reservation selectedReservation = reservationListView.getSelectionModel().getSelectedItem();

        if (selectedReservation != null) {
           try {
               selectedReservation.setAge(Integer.parseInt(ageTf.getText()));
               selectedReservation.setFirstName(firstNameTf.getText());
               selectedReservation.setLastName(lastNameTf.getText());
               selectedReservation.setEmail(emailField.getText());
               selectedReservation.setDate(dateField.getValue());
               selectedReservation.setLocation(locationField.getText());
               selectedReservation.setSeats(Integer.parseInt(seatsField.getText()));
               selectedReservation.setAgentType(agentTypeField.getValue());
               selectedReservation.setPaymentMode(paymentModeField.getValue());
               selectedReservation.setTransport(transportField.getValue());

               reservationService.update(selectedReservation);
               loadReservations();

               showAlert("Success", "Reservation updated successfully!", Alert.AlertType.INFORMATION);
           } catch (SQLException e) {
               e.printStackTrace();
               showAlert("Error", "Failed to update Reservation: " + e.getMessage(), Alert.AlertType.ERROR);
           } catch (Exception e) {
               e.printStackTrace();
               showAlert("Error", "Invalid input: " + e.getMessage(), Alert.AlertType.ERROR);
           }
        } else {
            showAlert("No Selection", "Please select a Reservation to update.", Alert.AlertType.WARNING);

           }
    }

    public void deleteReservation(ActionEvent actionEvent) {
        Reservation selectedReservation = reservationListView.getSelectionModel().getSelectedItem();
        if (selectedReservation != null) {
            try {
                // Delete the reservation from the database
                reservationService.delete(selectedReservation.getId());

                // Remove the reservation from the ListView
                reservationListView.getItems().remove(selectedReservation);

                showAlert("Success", "Reservation deleted successfully.", Alert.AlertType.INFORMATION);
            } catch (SQLException e) {
                showAlert("Error", "Failed to delete reservation: " + e.getMessage(), Alert.AlertType.ERROR);
            }
        } else {
            showAlert("Error", "No reservation selected.", Alert.AlertType.ERROR);
        }
    }

    @FXML
    public void searchreservation(ActionEvent actionEvent) {
        String email = searchField.getText().trim();
        if (email.isEmpty()) {
            showAlert("Error", "Please enter your email to search for reservations.", Alert.AlertType.ERROR);
            return;
        }
        try {
            List<Reservation> filteredReservations = reservationService.searchReservationsByEmail(email);
            reservations = FXCollections.observableArrayList(filteredReservations); // Update the observable list
            reservationListView.setItems(reservations); // Update the ListView
        } catch (Exception e) {
            showAlert("Error", "Failed to search reservations: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
    // Utility method to validate email format
    private boolean isValidEmail(String email) {
        // Regex pattern for a valid email address
        String emailRegex = "^[a-zA-Z0-9_+&*-]+(?:\\.[a-zA-Z0-9_+&*-]+)*@(?:[a-zA-Z0-9-]+\\.)+[a-zA-Z]{2,7}$";
        return email != null && email.matches(emailRegex);
    }


    @FXML
    public void clearFilter(ActionEvent actionEvent) {
        reservations = FXCollections.observableArrayList(allreservation); // Reset to all reservations
        reservationListView.setItems(reservations); // Update the ListView
    }
    @FXML
    public void sortByDate(ActionEvent actionEvent) {
        reservations.sort(Comparator.comparing(Reservation::getDate)); // Sort by date
        reservationListView.setItems(reservations); // Update the ListView
    }


    @FXML
    public void filterByTransport(ActionEvent actionEvent) {
        MenuItem selectedItem = (MenuItem) actionEvent.getSource();
        String transportType = selectedItem.getText();
        reservations = FXCollections.observableArrayList(allreservation.stream()
                .filter(reservation -> transportType.equalsIgnoreCase(reservation.getTransport()))
                .toList()); // Filter by transport
        reservationListView.setItems(reservations); // Update the ListView
    }

    @FXML
    public void filterByAgent(ActionEvent actionEvent) {
        MenuItem selectedItem = (MenuItem) actionEvent.getSource();
        String agentType = selectedItem.getText();
        reservations = FXCollections.observableArrayList(allreservation.stream()
                .filter(reservation -> agentType.equalsIgnoreCase(reservation.getAgentType()))
                .toList()); // Filter by agent type
        reservationListView.setItems(reservations); // Update the ListView
    }

    @FXML
    public void filterByPayment(ActionEvent actionEvent) {
        MenuItem selectedItem = (MenuItem) actionEvent.getSource();
        String paymentMode = selectedItem.getText();
        reservations = FXCollections.observableArrayList(allreservation.stream()
                .filter(reservation -> paymentMode.equalsIgnoreCase(reservation.getPaymentMode()))
                .toList()); // Filter by payment mode
        reservationListView.setItems(reservations); // Update the ListView
    }

    /**
     * Navigates back to the normal user dashboard
     */
    @FXML
    public void backToUserDashboard() {
        try {
            // Print debug info
            System.out.println("Attempting to navigate to dashboard...");
            
            // Get the resource URL and check if it exists
            var resourceUrl = getClass().getResource("/normal_user_dashboard.fxml");
            if (resourceUrl == null) {
                System.err.println("ERROR: Could not find normal_user_dashboard.fxml resource");
                showAlert("Resource Error", "Could not find dashboard FXML file. Please check application resources.", Alert.AlertType.ERROR);
                return;
            }
            
            System.out.println("Found dashboard resource at: " + resourceUrl);
            
            // Create the loader and load the FXML
            FXMLLoader loader = new FXMLLoader(resourceUrl);
            javafx.scene.Parent root = (javafx.scene.Parent) loader.load();
            
            // Get the stage and set the scene
            Stage stage = (Stage) firstNameTf.getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.setTitle("User Dashboard");
            stage.show();
            
            System.out.println("Successfully navigated to dashboard");
        } catch (IOException e) {
            System.err.println("Navigation error: " + e);
            e.printStackTrace();
            showAlert("Error", "Failed to navigate to dashboard: " + e.getMessage(), Alert.AlertType.ERROR);
        } catch (Exception e) {
            System.err.println("Unexpected error during navigation: " + e);
            e.printStackTrace();
            showAlert("Unexpected Error", "An unexpected error occurred: " + e.getMessage(), Alert.AlertType.ERROR);
        }
    }
}
