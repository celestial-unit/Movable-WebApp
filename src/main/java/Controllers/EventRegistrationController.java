package Controllers;

import com.itextpdf.kernel.pdf.PdfDocument;
import com.itextpdf.kernel.pdf.PdfWriter;
import com.itextpdf.layout.Document;
import com.itextpdf.layout.element.Paragraph;
import Models.EventRegistration;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import Services.EventRegistrationService;
import Services.UsersService;

import java.awt.*;
import java.sql.Timestamp;
import java.time.LocalDateTime;
import java.util.List;

import com.itextpdf.layout.element.Table;
import com.itextpdf.layout.element.Cell;
import com.itextpdf.layout.borders.SolidBorder;
import com.itextpdf.kernel.colors.DeviceRgb;
import com.itextpdf.layout.element.Tab;
import com.itextpdf.layout.element.Text;

public class EventRegistrationController {
    @FXML private Label firstPlaceLabel;
    @FXML private Label firstPlaceCount;
    @FXML private Label secondPlaceLabel;
    @FXML private Label secondPlaceCount;
    @FXML private Label thirdPlaceLabel;
    @FXML private Label thirdPlaceCount;
    @FXML private TextField eventIdField;
    @FXML private TextField registrationDateField;
    @FXML private ComboBox<String> statusComboBox;
    @FXML private ComboBox<String> titleComboBox;
    @FXML private ListView<EventRegistration> eventListView;
    @FXML private TextField searchField;

    private final EventRegistrationService service = new EventRegistrationService();
    private final UsersService userService = new UsersService();
    private final ObservableList<EventRegistration> registrations = FXCollections.observableArrayList();
    private int userId; // Store the user ID passed from the UserController or SharedContext

    @FXML
    public void initialize() {
        initializeComponents();
        setupListView();
        setupEventHandlers();
        
        // Always initialize userId from SharedContext
        this.userId = utils.SharedContext.getLoggedInUserId();
        
        loadInitialData();
        updatePodium();
        searchField.textProperty().addListener((observable, oldValue, newValue) -> handleSearch(newValue));
    }

    private void initializeComponents() {
        // Status ComboBox setup
        statusComboBox.setItems(FXCollections.observableArrayList(
                "Pending", "Confirmed", "Canceled"
        ));

        // Title ComboBox setup
        titleComboBox.setItems(FXCollections.observableArrayList(
                service.getAllEventTitles()
        ));

        // Date field setup
        registrationDateField.setText(
                Timestamp.valueOf(LocalDateTime.now()).toString()
        );
        registrationDateField.setDisable(true);
    }

    private void setupListView() {
        eventListView.setCellFactory(param -> new ListCell<EventRegistration>() {
            @Override
            protected void updateItem(EventRegistration registration, boolean empty) {
                super.updateItem(registration, empty);
                if (empty || registration == null) {
                    setText(null);
                    setStyle("");
                    setGraphic(null);
                } else {
                    String title = service.getEventTitleById(registration.getEventId());
                    int userId = registration.getUserId();
                    String userName = "";
                    
                    try {
                        // Attempt to get the user's name if possible using the correct method name
                        userName = userService.findById(userId).getFirstName() + " " + 
                                   userService.findById(userId).getLastName();
                    } catch (Exception e) {
                        // If we can't get the name, just use the ID
                        userName = "ID: " + userId;
                        System.out.println("Error fetching user data: " + e.getMessage());
                    }
                    
                    // Create a properly formatted text string with clear field separation
                    String displayText = String.format(
                            "Event: %-20s | User: %-20s | Date: %-20s | Status: %-10s",
                            title.length() > 18 ? title.substring(0, 15) + "..." : title,
                            userName.length() > 18 ? userName.substring(0, 15) + "..." : userName,
                            registration.getRegistrationDate().toString().substring(0, 16), // Trim timestamp for readability
                            registration.getStatus()
                    );
                    
                    setText(displayText);
                    
                    // Apply styling based on status
                    String status = registration.getStatus();
                    String baseStyle = "-fx-font-family: 'Arial'; -fx-font-size: 12px; -fx-padding: 5px; ";
                    String statusStyle = "";
                    
                    if ("Confirmed".equalsIgnoreCase(status) || "Approved".equalsIgnoreCase(status)) {
                        statusStyle = "-fx-background-color: #e6ffe6; -fx-border-color: #99cc99; -fx-border-width: 0 0 1 5;"; // Green with left border
                    } else if ("Pending".equalsIgnoreCase(status)) {
                        statusStyle = "-fx-background-color: #fff8e6; -fx-border-color: #ffcc80; -fx-border-width: 0 0 1 5;"; // Yellow with left border
                    } else if ("Canceled".equalsIgnoreCase(status) || "Rejected".equalsIgnoreCase(status)) {
                        statusStyle = "-fx-background-color: #ffe6e6; -fx-border-color: #ff9999; -fx-border-width: 0 0 1 5;"; // Red with left border
                    }
                    
                    setStyle(baseStyle + statusStyle);
                }
            }
        });
        
        // Set a bit more height for each cell for better readability
        eventListView.setFixedCellSize(40);
    }

    private void setupEventHandlers() {
        // ListView selection listener
        eventListView.getSelectionModel().selectedItemProperty().addListener(
                (observable, oldValue, newValue) -> handleSelection(newValue)
        );

        // ComboBox selection listener
        titleComboBox.setOnAction(e -> handleTitleSelection());
    }

    private void loadInitialData() {
        // If we have a valid userId, show only that user's registrations
        if (userId > 0) {
            registrations.setAll(service.getRegistrationsByUserId(userId));
        } else {
            // Otherwise show all registrations (admin view)
            registrations.setAll(service.getAllRegistrations());
        }
        eventListView.setItems(registrations);
    }

    private void handleSelection(EventRegistration selected) {
        if (selected != null) {
            eventIdField.setText(String.valueOf(selected.getEventId()));
            registrationDateField.setText(selected.getRegistrationDate().toString());
            statusComboBox.setValue(selected.getStatus());
            titleComboBox.setValue(service.getEventTitleById(selected.getEventId()));
        }
    }

    @FXML
    private void handleRegister() {
        if (!validateInput()) return;

        try {
            EventRegistration registration = createRegistrationFromInput();
            registration.setUserId(userId); // Set the user ID from the stored value
            service.addRegistration(registration);
            refreshListView();
            clearFields();

            // Call system notification
            showSystemNotification("Event registered successfully!");

        } catch (Exception e) {
            showAlert("Error", "Invalid input. Please check your fields.");
        }
    }

    @FXML
    private void handleUpdate() {
        EventRegistration selected = eventListView.getSelectionModel().getSelectedItem();
        if (selected == null) {
            showAlert("Error", "No registration selected.");
            return;
        }

        if (!validateInput()) return;

        try {
            updateRegistrationFromInput(selected);
            service.updateRegistration(selected);
            refreshListView();
            clearFields();
        } catch (Exception e) {
            showAlert("Error", "Invalid input. Please check your fields.");
        }
    }

    @FXML
    private void handleDelete() {
        EventRegistration selected = eventListView.getSelectionModel().getSelectedItem();
        if (selected == null) {
            showAlert("Error", "No registration selected.");
            return;
        }

        service.deleteRegistration(selected.getId());
        refreshListView();
        clearFields();
    }

    @FXML
    private void handleClear() {
        clearFields();
    }

    private void handleTitleSelection() {
        String selectedTitle = titleComboBox.getValue();
        if (selectedTitle != null) {
            int eventId = service.getEventIdByTitle(selectedTitle);
            eventIdField.setText(String.valueOf(eventId));
        }
    }

    private boolean validateInput() {
        if (titleComboBox.getValue() == null) {
            showAlert("Validation Error", "Please select an event title.");
            return false;
        }

        if (statusComboBox.getValue() == null) {
            showAlert("Validation Error", "Please select a status.");
            return false;
        }

        try {
            Timestamp.valueOf(registrationDateField.getText());
        } catch (IllegalArgumentException e) {
            showAlert("Validation Error", "Invalid date format.");
            return false;
        }

        return true;
    }

    private EventRegistration createRegistrationFromInput() {
        return new EventRegistration(
                Integer.parseInt(eventIdField.getText()),
                utils.SharedContext.getLoggedInUserId(), // Get user ID from SharedContext
                Timestamp.valueOf(registrationDateField.getText()),
                statusComboBox.getValue()
        );
    }

    private void updateRegistrationFromInput(EventRegistration registration) {
        registration.setEventId(Integer.parseInt(eventIdField.getText()));
        registration.setUserId(utils.SharedContext.getLoggedInUserId()); // Get user ID from SharedContext
        registration.setRegistrationDate(Timestamp.valueOf(registrationDateField.getText()));
        registration.setStatus(statusComboBox.getValue());
    }

    private void refreshListView() {
        // If we have a valid userId, show only that user's registrations
        if (userId > 0) {
            registrations.setAll(service.getRegistrationsByUserId(userId));
        } else {
            // Otherwise show all registrations (admin view)
            registrations.setAll(service.getAllRegistrations());
        }
        updatePodium();
    }
    private void clearFields() {
        eventIdField.clear();
        registrationDateField.setText(Timestamp.valueOf(LocalDateTime.now()).toString());
        statusComboBox.getSelectionModel().clearSelection();
        titleComboBox.getSelectionModel().clearSelection();
        eventListView.getSelectionModel().clearSelection();
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    @FXML
    private void showSystemNotification(String message) {
        if (!SystemTray.isSupported()) return;

        Platform.runLater(() -> {
            try {
                SystemTray tray = SystemTray.getSystemTray();
                Image image = Toolkit.getDefaultToolkit().createImage("icon.png");
                TrayIcon trayIcon = new TrayIcon(image, "Event Notification");
                trayIcon.setImageAutoSize(true);
                tray.add(trayIcon);
                trayIcon.displayMessage("Notification", message, TrayIcon.MessageType.INFO);
            } catch (Exception e) {
                e.printStackTrace();
            }
        });
    }
    @FXML
    private void generatePDF() {
        try {
            FileChooser fileChooser = new FileChooser();
            fileChooser.setTitle("Save PDF Ticket");
            fileChooser.getExtensionFilters().add(new FileChooser.ExtensionFilter("PDF Files", "*.pdf"));
            java.io.File file = fileChooser.showSaveDialog(null);

            if (file != null) {
                PdfWriter writer = new PdfWriter(file);
                PdfDocument pdfDoc = new PdfDocument(writer);
                Document document = new Document(pdfDoc);

                // Create main ticket table with border
                Table ticketTable = new Table(1);
                ticketTable.setWidth(400); // Fixed width for ticket format
                ticketTable.setMarginTop(20);

                // Add header section
                Cell headerCell = new Cell()
                        .add(new Paragraph("EVENT TICKET")
                                .setFontSize(24)
                                .setBold())
                        .setBackgroundColor(new DeviceRgb(23, 105, 170))
                        .setFontColor(DeviceRgb.WHITE)
                        .setPadding(15);
                ticketTable.addCell(headerCell);

                // Add event details
                Cell detailsCell = new Cell()
                        .setPadding(20)
                        .add(new Paragraph("Event Details").setBold().setFontSize(18).setMarginBottom(10))
                        .add(createDetailRow("TITLE:", titleComboBox.getValue()))
                        .add(createDetailRow("EVENT ID:", eventIdField.getText()))
                        .add(createDetailRow("DATE:", registrationDateField.getText()))
                        .add(createDetailRow("STATUS:", statusComboBox.getValue()))
                        .add(new Paragraph("\n"));
                ticketTable.addCell(detailsCell);

                // Add footer with barcode placeholder
                Cell footerCell = new Cell()
                        .add(new Paragraph("Ticket ID: #" + System.currentTimeMillis()).setItalic())
                        .add(new Paragraph("[BARCODE PLACEHOLDER]").setFontColor(DeviceRgb.WHITE))
                        .setPadding(15)
                        .setBorderTop(new SolidBorder(DeviceRgb.WHITE, 1));
                ticketTable.addCell(footerCell);

                // Add border to the entire ticket
                ticketTable.setBorder(new SolidBorder(DeviceRgb.BLACK, 2));

                document.add(ticketTable);

                // Add terms and conditions
                document.add(new Paragraph("\nTerms & Conditions:")
                        .add(new Paragraph("• This ticket is non-transferable"))
                        .add(new Paragraph("• Valid ID required for entry"))
                        .add(new Paragraph("• Subject to event terms"))
                        .setFontSize(10)
                        .setFontColor(DeviceRgb.WHITE));

                document.close();
                showAlert("Success", "PDF ticket generated successfully!");
            }
        } catch (Exception e) {
            e.printStackTrace();
            showAlert("Error", "Failed to generate PDF ticket.");
        }
    }

    // Helper method remains the same
    private Paragraph createDetailRow(String label, String value) {
        return new Paragraph()
                .add(new Text(label).setBold().setFontSize(12))
                .add(new Tab())
                .add(new Text(value).setFontSize(12))
                .setMarginBottom(5);
    }
    private void updatePodium() {
        List<EventRegistrationService.EventRegistrationCount> topEvents = service.getTopRegisteredEvents(3);

        Platform.runLater(() -> {
            // Reset all labels first
            resetPodiumLabels();

            if (!topEvents.isEmpty()) {
                firstPlaceLabel.setText(topEvents.get(0).getEventTitle());
                firstPlaceCount.setText(topEvents.get(0).getRegistrationCount() + " regs");
            }
            if (topEvents.size() > 1) {
                secondPlaceLabel.setText(topEvents.get(1).getEventTitle());
                secondPlaceCount.setText(topEvents.get(1).getRegistrationCount() + " regs");
            }
            if (topEvents.size() > 2) {
                thirdPlaceLabel.setText(topEvents.get(2).getEventTitle());
                thirdPlaceCount.setText(topEvents.get(2).getRegistrationCount() + " regs");
            }
        });
    }

    private void resetPodiumLabels() {
        firstPlaceLabel.setText("-");
        firstPlaceCount.setText("-");
        secondPlaceLabel.setText("-");
        secondPlaceCount.setText("-");
        thirdPlaceLabel.setText("-");
        thirdPlaceCount.setText("-");
    }
    private void handleSearch(String query) {
        if (query == null || query.trim().isEmpty()) {
            eventListView.setItems(registrations);
            return;
        }

        String lowerQuery = query.toLowerCase();
        ObservableList<EventRegistration> filteredList = registrations.filtered(registration -> {
            String regId = String.valueOf(registration.getId()); // Registration ID
            String eventId = String.valueOf(registration.getEventId()); // Event ID
            String title = service.getEventTitleById(registration.getEventId()).toLowerCase();
            String regDate = registration.getRegistrationDate().toString().toLowerCase();
            String status = registration.getStatus().toLowerCase();

            return regId.contains(lowerQuery) || eventId.contains(lowerQuery) ||
                    title.contains(lowerQuery) || regDate.contains(lowerQuery) ||
                    status.contains(lowerQuery);
        });

        eventListView.setItems(filteredList);
    }
    @FXML
    public void openevent1Form(ActionEvent event) {
        try {
            // 1. Load the new FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/event_view.fxml"));
            Parent root = loader.load();

            // 2. Get the current stage from any component (using the event source)
            Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // 3. Replace the scene content
            currentStage.setScene(new Scene(root));
            currentStage.setTitle("Event ");

            // Optional: Maintain window size/position
            currentStage.centerOnScreen();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    /**
     * Set the user ID for this registration session
     * @param userId The ID of the user making registrations
     */
    public void setUserId(int userId) {
        this.userId = userId;
        
        // Update the SharedContext for application-wide access
        utils.SharedContext.setLoggedInUserId(userId);
        
        // Refresh the view based on the user ID
        if (userId > 0) {
            // User view - show only this user's registrations
            registrations.setAll(service.getRegistrationsByUserId(userId));
            // Update UI to show we're in user mode
            updateUiForUserMode(true);
        } else {
            // Admin view - show all registrations
            registrations.setAll(service.getAllRegistrations());
            // Update UI to show we're in admin mode
            updateUiForUserMode(false);
        }
        
        updatePodium();
    }
    
    /**
     * Updates the UI components based on whether we're in user mode or admin mode
     *
     * @param isUserMode true if in user mode, false if in admin mode
     */
    private void updateUiForUserMode(boolean isUserMode) {
        // In user mode, users can only register but not change status
        statusComboBox.setDisable(isUserMode); 
        
        // You can add more UI customizations here depending on the mode
        // For example, showing/hiding buttons that are only for admins
    }
    
    /**
     * Get the current logged-in user ID
     * @return the ID of the currently logged-in user, or 0 if none
     */
    public int getCurrentUserId() {
        return utils.SharedContext.getLoggedInUserId();
    }
}

