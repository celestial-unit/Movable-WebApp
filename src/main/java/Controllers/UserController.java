package Controllers;

import Models.Event;
import javafx.application.Platform;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.text.Text;
import javafx.stage.Stage;
import Services.EventService;
import javafx.collections.FXCollections;

import java.io.IOException;
import java.time.Duration;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeParseException;
import java.util.Comparator;
import java.util.List;
import java.util.stream.Collectors;
import javafx.concurrent.Task;
import java.net.URLEncoder;
import java.net.URL;
import java.net.HttpURLConnection;
import java.nio.charset.StandardCharsets;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.function.Consumer;
import org.json.JSONArray;
import org.json.JSONObject;

public class UserController {
    @FXML private ListView<Event> eventListView;
    @FXML private TextField searchField;
    @FXML private ComboBox<String> locationFilter;
    @FXML private ComboBox<String> typeFilter;
    
    private int userId; // Field to store the user ID

    @FXML private Text weatherText;
    @FXML private Label closestEventLabel;
    @FXML private ListView<Event> pastEventsListView;
    @FXML
    private Button timeRemainingButton;

    private final EventService eventService = new EventService();

    @FXML
    public void initialize() {
        setupFilters();
        refreshListView();  // Initialize all data

        pastEventsListView.setCellFactory(param -> new ListCell<Event>() {
            @Override
            protected void updateItem(Event event, boolean empty) {
                super.updateItem(event, empty);
                if (empty || event == null) {
                    setText(null);
                    setGraphic(null);
                    setStyle("");
                } else {
                    // Create a formatted string without ID
                    String displayText = String.format(
                            "Title: %s\nDate: %s | Location: %s",
                            event.getTitle(),
                            event.getDateEvent(),
                            event.getStatus()
                    );

                    // Use Text control for multi-line formatting
                    Text text = new Text(displayText);
                    text.setStyle("-fx-fill: #666; -fx-font-style: italic;");

                    // Clear any existing content
                    setText(null);
                    setGraphic(text);
                }
            }
        });

        loadEvents();
        setupEventSelection();
    }


    private void loadEvents() {
        List<Event> events = eventService.getAllEvents();
        eventListView.setItems(FXCollections.observableArrayList(events));
    }

    private void setupFilters() {
        locationFilter.getItems().addAll(
                "Ariana", "Béja", "Ben Arous", "Bizerte", "Gabès", "Gafsa", "Jendouba",
                "Kairouan", "Kasserine", "Kébili", "Kef", "Mahdia", "Manouba", "Medenine",
                "Monastir", "Nabeul", "Sfax", "Sidi Bouzid", "Siliana", "Sousse",
                "Tataouine", "Tozeur", "Tunis", "Zaghouan"
        );

        typeFilter.getItems().addAll("20", "30", "50", "100", "150", "200");

        // Add listeners for filters
        locationFilter.valueProperty().addListener((obs, oldVal, newVal) -> applyFilters());
        typeFilter.valueProperty().addListener((obs, oldVal, newVal) -> applyFilters());
        searchField.textProperty().addListener((obs, oldVal, newVal) -> applyFilters());
    }

    private void applyFilters() {
        List<Event> filtered = eventService.getAllEvents().stream()
                .filter(e -> matchesSearch(e))
                .filter(e -> matchesLocation(e))
                .filter(e -> matchesType(e))
                .collect(Collectors.toList());

        eventListView.setItems(FXCollections.observableArrayList(filtered));
    }

    private boolean matchesSearch(Event event) {
        String search = searchField.getText().toLowerCase();
        return search.isEmpty() ||
                String.valueOf(event.getId()).contains(search) ||
                event.getTitle().toLowerCase().contains(search) ||
                event.getDescription().toLowerCase().contains(search) ||
                event.getDateEvent().toLowerCase().contains(search) ||
                event.getStartEvent().toLowerCase().contains(search) ||
                String.valueOf(event.getDuration()).contains(search) ||
                event.getStatus().toLowerCase().contains(search);
    }




    private boolean matchesLocation(Event event) {
        String selected = locationFilter.getValue();
        return selected == null || selected.equals(event.getStatus());
    }

    private boolean matchesType(Event event) {
        String selected = typeFilter.getValue();
        return selected == null || selected.equals(String.valueOf(event.getType()));
    }

    private void setupEventSelection() {
        eventListView.getSelectionModel().selectedItemProperty().addListener((obs, oldVal, newVal) -> {
            if (newVal != null) {
                showEventDetails(newVal);
            }
        });
    }

    private void showEventDetails(Event event) {
        String details = String.format(
                "Title: %s\nDate: %s\nTime: %s\nDuration: %d mins\nLocation: %s\nDescription: %s",
                event.getTitle(),
                event.getDateEvent(),
                event.getStartEvent(),
                event.getDuration(),
                event.getStatus(),
                event.getDescription()
        );
        weatherText.setText(details); // Reuse weatherText for display
    }

    @FXML
    private void handleCheckWeather() {
        Event selected = eventListView.getSelectionModel().getSelectedItem();
        if (selected != null) {
            String weather = eventService.getWeatherForEventLocation(selected);
            String currentText = weatherText.getText();
            weatherText.setText(currentText + "\nWeather: " + weather);
        }
    }

    @FXML
    private void handleShowOnMap() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/map_view.fxml"));
            Parent root = loader.load();
            Stage stage = new Stage();
            stage.setTitle("Event Map");
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void handleOpenRegistration(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user/user_event_registration.fxml"));
            Parent root = loader.load();
            
            // Get the controller and pass the user ID
            UserEventRegistrationController controller = loader.getController();
            controller.setUserId(userId);
            
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
    @FXML
    public void openCalendarView(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/calendar_view.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // Set the new scene on the same stage
            stage.setScene(new Scene(root, 800, 600));
            stage.show();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    private Event getClosestUpcomingEvent(List<Event> events) {
        LocalDateTime now = LocalDateTime.now();
        return events.stream()
                .filter(e -> parseEventDateTime(e).isAfter(now))
                .min(Comparator.comparing(e -> Duration.between(now, parseEventDateTime(e))))
                .orElse(null);
    }

    private List<Event> getPastEvents(List<Event> events) {
        LocalDateTime now = LocalDateTime.now();
        return events.stream()
                .filter(e -> parseEventDateTime(e).isBefore(now))
                .collect(Collectors.toList());
    }

    private LocalDateTime parseEventDateTime(Event event) {
        try {
            LocalDate date = LocalDate.parse(event.getDateEvent());
            LocalTime time = LocalTime.parse(event.getStartEvent());
            return LocalDateTime.of(date, time);
        } catch (DateTimeParseException e) {
            System.err.println("Error parsing date/time for event " + event.getId());
            return LocalDateTime.MIN;
        }
    }

    private void updateClosestEventDisplay(Event event) {
        if (event != null) {
            String displayText = String.format(
                    "%s\nDate: %s\nTime: %s\nLocation: %s",
                    event.getTitle(),
                    event.getDateEvent(),
                    event.getStartEvent(),
                    event.getStatus()
            );
            closestEventLabel.setText(displayText);
        } else {
            closestEventLabel.setText("No upcoming events");
        }
    }
    void refreshListView() {
        List<Event> allEvents = eventService.getAllEvents();

        // Update main list view


        // Find closest upcoming event
        Event closest = getClosestUpcomingEvent(allEvents);
        updateClosestEventDisplay(closest);

        // Update past events list
        List<Event> pastEvents = getPastEvents(allEvents);
        pastEventsListView.getItems().setAll(pastEvents);
    }
    @FXML
    private void handleShowRemainingTime() {
        Event selectedEvent = eventListView.getSelectionModel().getSelectedItem();
        if (selectedEvent == null) {
            showAlert("Selection Error", "Please select an event first.");
            return;
        }

        try {
            LocalDateTime eventDateTime = parseEventDateTime(selectedEvent);
            LocalDateTime now = LocalDateTime.now();

            if (eventDateTime.isBefore(now)) {
                showAlert("Event Status", "This event has already completed!");
                return;
            }

            Duration duration = Duration.between(now, eventDateTime);
            long days = duration.toDays();
            long hours = duration.toHours() % 24;
            long minutes = duration.toMinutes() % 60;

            String message = String.format("Time until '%s':%n%n%d days %d hours %d minutes",
                    selectedEvent.getTitle(),
                    days,
                    hours,
                    minutes);

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Event Countdown");
            alert.setHeaderText(null);
            alert.setContentText(message);
            alert.showAndWait();

        } catch (DateTimeParseException e) {
            showAlert("Error", "Could not parse event date/time: " + e.getMessage());
        }
    }
    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    @FXML
    private void handleShowCoordinates() {
        Event selectedEvent = eventListView.getSelectionModel().getSelectedItem(); // Changed from listView to eventListView
        if (selectedEvent == null) {
            showAlert("Selection Error", "Please select an event first.");
            return;
        }

        String city = selectedEvent.getStatus();
        fetchCoordinates(city, coordinates -> {
            Platform.runLater(() -> {
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("Location Coordinates");
                alert.setHeaderText("Coordinates for " + city);
                alert.setContentText(coordinates);
                alert.showAndWait();
            });
        });
    }

    private void fetchCoordinates(String city, Consumer<String> callback) {
        Task<String> task = new Task<>() {
            @Override
            protected String call() throws Exception {
                try {
                    String encodedCity = URLEncoder.encode(city, StandardCharsets.UTF_8);
                    URL url = new URL("https://api.api-ninjas.com/v1/geocoding?city=" + encodedCity);
                    HttpURLConnection connection = (HttpURLConnection) url.openConnection();
                    connection.setRequestProperty("X-Api-Key", "7MZ8I1rg6OPvkwKNycgUcQ==qCkRzAayzDJ26Nj3");

                    if (connection.getResponseCode() == HttpURLConnection.HTTP_OK) {
                        BufferedReader reader = new BufferedReader(
                                new InputStreamReader(connection.getInputStream()));
                        StringBuilder response = new StringBuilder();
                        String line;
                        while ((line = reader.readLine()) != null) {
                            response.append(line);
                        }
                        reader.close();

                        JSONArray jsonArray = new JSONArray(response.toString());
                        if (jsonArray.length() > 0) {
                            JSONObject location = jsonArray.getJSONObject(0);
                            return String.format("Latitude: %.4f\nLongitude: %.4f\nCountry: %s\nState: %s",
                                    location.getDouble("latitude"),
                                    location.getDouble("longitude"),
                                    location.getString("country"),
                                    location.getString("state"));
                        }
                        return "No coordinates found for " + city;
                    }
                    return "API Error: " + connection.getResponseCode();
                } catch (Exception e) {
                    return "Error fetching coordinates: " + e.getMessage();
                }
            }
        };

        task.setOnSucceeded(e -> callback.accept(task.getValue()));
        new Thread(task).start();
    }
    
    /**
     * Sets the user ID for this controller.
     * This method should be called before initializing the view.
     * 
     * @param userId The ID of the current user
     */
    public void setUserId(int userId) {
        this.userId = userId;
        System.out.println("User ID set in UserController: " + userId);
    }
    
    /**
     * Handles the Back to Dashboard button click.
     * Navigates the user back to the normal user dashboard.
     * 
     * @param event The action event triggered by the button click
     */
    @FXML
    public void handleBackToDashboard(ActionEvent event) {
        try {
            // Load the normal_user_dashboard.fxml file
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Parent root = loader.load();
            
            // Get the controller and pass the user ID if necessary
            NormalUserDashboardController dashboardController = loader.getController();
            
            // Set the scene
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Navigation Error", "Could not navigate back to dashboard: " + e.getMessage());
        }
    }
}

