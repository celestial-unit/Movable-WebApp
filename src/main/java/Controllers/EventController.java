package Controllers;

import Models.Event;
import javafx.animation.PauseTransition;
import javafx.application.Platform;
import javafx.beans.value.ChangeListener;
import javafx.concurrent.Task;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.text.Text;
import javafx.stage.Stage;
import org.json.JSONArray;
import org.json.JSONObject;
import Services.EventService;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

import java.io.*;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLEncoder;
import java.nio.charset.StandardCharsets;
import java.time.Duration;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeParseException;
import java.util.*;
import java.util.function.Consumer;
import java.util.stream.Collectors;

import javafx.scene.chart.BarChart;
import javafx.scene.chart.XYChart;

import java.io.BufferedReader;
import java.io.InputStreamReader;


public class EventController {
    @FXML
    private TextField searchField;
    @FXML
    private ListView<Event> listView;

    @FXML
    private TextField titleField, descriptionField;
    @FXML
    private Spinner<Integer> durationSpinner;
    @FXML
    private DatePicker dateEventPicker;
    @FXML
    private ComboBox<String> statusComboBox;
    @FXML
    private ComboBox<String> typeComboBox;
    @FXML
    private Button addButton, updateButton, deleteButton;
    @FXML
    private ComboBox<String> timeComboBox;

    private EventService eventService;
    @FXML
    private BarChart<String, Number> priceChart;
    @FXML
    private Text weatherText;
    @FXML private Label closestEventLabel;
    @FXML private ListView<Event> pastEventsListView;
    @FXML
    private Button timeRemainingButton;
    @FXML
    private Button showCoordinatesButton;
    @FXML
    private Button mapViewButton;
    protected ChangeListener<Event> selectionListener;
    @FXML private Label aiSuggestionLabel;
// Should match fx:id in FXML

    public EventController() {
        eventService = new EventService();
    }

    @FXML
    public void initialize() {
        durationSpinner.setValueFactory(new SpinnerValueFactory.IntegerSpinnerValueFactory(1, 1440, 30));


        // Status ComboBox
        statusComboBox.getItems().addAll( "Ariana", "Béja", "Ben Arous", "Bizerte", "Gabès", "Gafsa", "Jendouba",
                "Kairouan", "Kasserine", "Kébili", "Kef", "Mahdia", "Manouba", "Medenine",
                "Monastir", "Nabeul", "Sfax", "Sidi Bouzid", "Siliana", "Sousse",
                "Tataouine", "Tozeur", "Tunis", "Zaghouan");

        // Type ComboBox (Integer values mapped to names)

        ObservableList<String> eventTypes = FXCollections.observableArrayList(
                "20","30","50", "100", "150", "200"
        );
        typeComboBox.setItems(eventTypes);

        List<String> timeSlots = new ArrayList<>();
        for (int h = 0; h < 24; h++) {
            for (int m = 0; m < 60; m += 30) {
                timeSlots.add(String.format("%02d:%02d", h, m));
            }
        }
        timeComboBox.getItems().addAll(timeSlots);  // Adds time slots to the ComboBox

        // Set the CellFactory for the ListView to display events in a more organized manner
        listView.setItems(FXCollections.observableArrayList(eventService.getAllEvents()));

        searchField.textProperty().addListener((observable, oldValue, newValue) -> {
            filterEvents(newValue);
        });
        refreshListView();

        // When a list item is selected, populate the fields for update
        listView.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue != null) {
                titleField.setText(newValue.getTitle());
                descriptionField.setText(newValue.getDescription());
                durationSpinner.getValueFactory().setValue(newValue.getDuration());
                typeComboBox.setValue(newValue.getType() + " - " + getTypeName(newValue.getType()));
                statusComboBox.setValue(newValue.getStatus());
                dateEventPicker.setValue(LocalDate.parse(newValue.getDateEvent()));
                timeComboBox.setValue(newValue.getStartEvent());
            }
        });
        pastEventsListView.setCellFactory(param -> new ListCell<Event>() {
            @Override
            protected void updateItem(Event event, boolean empty) {
                super.updateItem(event, empty);
                if (empty || event == null) {
                    setText(null);
                    setStyle("");
                } else {
                    setText(String.format("%s - %s", event.getTitle(), event.getDateEvent()));
                    setStyle("-fx-text-fill: #666; -fx-font-style: italic;");
                }
            }
        });
        setupProfanityFilter();
        setupPriceChart();
        refreshListView();
    }

    private boolean validateInput() {
        // Validation logic for input fields
        String title = titleField.getText().trim();
        if (title.isEmpty() || title.length() < 3 || title.length() > 100) {
            showAlert("Validation Error", "Title must be between 3 and 100 characters.");
            return false;
        }
        if (title.matches("\\d+")) {
            showAlert("Validation Error", "Title cannot be a number.");
            return false;
        }
        if (title.contains("*")) {
            showAlert("Invalid Title", "Title cannot contain bad workds (*)");
            return false;
        }



        String description = descriptionField.getText().trim();
        if (description.isEmpty() || description.length() < 10 || description.length() > 500) {
            showAlert("Validation Error", "Description must be between 10 and 500 characters.");
            return false;
        }
        if (description.matches("\\d+")) {
            showAlert("Validation Error", "Description cannot be a number.");
            return false;
        }
        if (description.contains("*")) {
            showAlert("Invalid Description", "Description cannot contain bad words");
            return false;
        }

        if (typeComboBox.getValue() == null) {
            showAlert("Validation Error", "Please select an event type.");
            return false;
        }

        if (statusComboBox.getValue() == null) {
            showAlert("Validation Error", "Please select a status.");
            return false;
        }

        if (dateEventPicker.getValue() == null || dateEventPicker.getValue().isBefore(LocalDate.now())) {
            showAlert("Validation Error", "Please select a valid future date.");
            return false;
        }

        int duration = durationSpinner.getValue();
        if (duration < 1 || duration > 1440) {
            showAlert("Validation Error", "Duration must be between 1 and 1440 minutes.");
            return false;
        }

        return true;
    }

    @FXML
    private void addEvent() {
        if (!validateInput()) return;

        int typeValue = Integer.parseInt(typeComboBox.getValue().split(" - ")[0]);

        // Create the new event
        Event newEvent = new Event(
                titleField.getText(),
                descriptionField.getText(),
                durationSpinner.getValue(),
                typeValue,
                statusComboBox.getValue(),
                dateEventPicker.getValue().toString(),
                timeComboBox.getValue()
        );

        // Check for duplicate event
        for (Event event : eventService.getAllEvents()) {
            if (event.getTitle().equalsIgnoreCase(newEvent.getTitle()) ) {
                showAlert("Duplicate Event", "An event with the same title  exists.");
                return;  // Prevent adding the event
            }
        }

        // Add the event if no duplicates are found
        eventService.addEvent(newEvent);
        refreshListView();
        updateStatistics(); // Update chart

    }

    @FXML
    private void updateEvent() {
        Event selectedEvent = listView.getSelectionModel().getSelectedItem();
        if (selectedEvent == null) {
            showAlert("Selection Error", "No event selected for update.");
            return;
        }
        if (!validateInput()) return;

        int typeValue = Integer.parseInt(typeComboBox.getValue().split(" - ")[0]);

        selectedEvent.setTitle(titleField.getText());
        selectedEvent.setDescription(descriptionField.getText());
        selectedEvent.setDuration(durationSpinner.getValue());
        selectedEvent.setType(typeValue);
        selectedEvent.setStatus(statusComboBox.getValue());
        selectedEvent.setDateEvent(dateEventPicker.getValue().toString());
        selectedEvent.setStartEvent(timeComboBox.getValue());

        eventService.updateEvent(selectedEvent);
        refreshListView();
        updateStatistics(); // Update chart

    }

    @FXML
    private void deleteEvent() {
        Event selectedEvent = listView.getSelectionModel().getSelectedItem();
        if (selectedEvent == null) {
            showAlert("Selection Error", "No event selected for deletion.");
            return;
        }
        eventService.deleteEvent(selectedEvent.getId());
        refreshListView();
        updateStatistics(); // Update chart

    }


    void refreshListView() {
        List<Event> allEvents = eventService.getAllEvents();

        // Update main list view
        listView.getItems().setAll(allEvents);

        // Find closest upcoming event
        Event closest = getClosestUpcomingEvent(allEvents);
        updateClosestEventDisplay(closest);

        // Update past events list
        List<Event> pastEvents = getPastEvents(allEvents);
        pastEventsListView.getItems().setAll(pastEvents);
    }

    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private String getTypeName(int type) {
        return switch (type) {
            case 1 -> "Workshop";
            case 2 -> "Seminar";
            case 3 -> "Conference";
            case 4 -> "Meeting";
            default -> "Unknown";
        };
    }

    @FXML
    public void openRegistrationForm(ActionEvent event) {
        try {
            // 1. Load the new FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/event_registration.fxml"));
            Parent root = loader.load();

            // 2. Get the current stage from any component (using the event source)
            Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // 3. Replace the scene content
            currentStage.setScene(new Scene(root));
            currentStage.setTitle("Event Registration");

            // Optional: Maintain window size/position
            currentStage.centerOnScreen();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    void setupPriceChart() {
        priceChart.getData().clear();

        // Retrieve price data
        List<Event> events = eventService.getAllEvents();

        // Count occurrences of each price
        Map<String, Integer> priceCount = new HashMap<>();
        for (Event event : events) {
            String price = String.valueOf(event.getType());
            priceCount.put(price, priceCount.getOrDefault(price, 0) + 1);
        }

        // Populate chart
        XYChart.Series<String, Number> series = new XYChart.Series<>();
        series.setName("Event Price Frequency");

        for (Map.Entry<String, Integer> entry : priceCount.entrySet()) {
            series.getData().add(new XYChart.Data<>(entry.getKey(), entry.getValue()));
        }

        priceChart.getData().add(series);
    }
    private void updateStatistics() {
        setupPriceChart();
    }
    private void filterEvents(String searchQuery) {
        ObservableList<Event> filteredEvents = FXCollections.observableArrayList();

        // Loop through all events and check if any field contains the search query
        for (Event event : eventService.getAllEvents()) {
            boolean matches = false;

            // Check if the ID contains the search query (convert ID to string)
            if (String.valueOf(event.getId()).contains(searchQuery)) {
                matches = true;
            }
            // Check if the title, description, status, date, and other fields contain the search query
            else if (event.getTitle().toLowerCase().contains(searchQuery.toLowerCase())) {
                matches = true;
            } else if (event.getDescription().toLowerCase().contains(searchQuery.toLowerCase())) {
                matches = true;
            } else if (event.getStatus().toLowerCase().contains(searchQuery.toLowerCase())) {
                matches = true;
            } else if (event.getDateEvent().toLowerCase().contains(searchQuery.toLowerCase())) {
                matches = true;
            } else if (String.valueOf(event.getDuration()).contains(searchQuery)) {
                matches = true;  // Filter by duration
            } else if (String.valueOf(event.getType()).contains(searchQuery)) {
                matches = true;  // Filter by type (numeric)
            } else if (event.getStartEvent().toLowerCase().contains(searchQuery.toLowerCase())) {
                matches = true;  // Filter by start time
            }

            // If any field matches, add the event to the filtered list
            if (matches) {
                filteredEvents.add(event);
            }
        }

        listView.setItems(filteredEvents); // Update the ListView with filtered events
    }

    @FXML
    private void handleCheckWeather() {
        Event selectedEvent = listView.getSelectionModel().getSelectedItem();
        if (selectedEvent != null) {
            String weather = eventService.getWeatherForEventLocation(selectedEvent);
            weatherText.setText(weather);
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
    void setupProfanityFilter() {
        setupProfanityListener(titleField);
        setupProfanityListener(descriptionField);
    }

    private void setupProfanityListener(TextField textField) {
        PauseTransition pause = new PauseTransition(javafx.util.Duration.millis(500)); // <-- Fix here
        textField.textProperty().addListener((observable, oldValue, newValue) -> {
            pause.setOnFinished(event -> {
                final String currentText = textField.getText();
                checkProfanityAsync(currentText, censoredText -> {
                    Platform.runLater(() -> {
                        if (currentText.equals(textField.getText())) {
                            textField.setText(censoredText);
                        }
                    });
                });
            });
            pause.playFromStart();
        });
    }

    private void checkProfanityAsync(String text, Consumer<String> callback) {
        Task<String> task = new Task<String>() {
            @Override
            protected String call() throws Exception {
                return checkProfanity(text);
            }
        };
        task.setOnSucceeded(e -> callback.accept(task.getValue()));
        new Thread(task).start();
    }

    private String checkProfanity(String text) {
        if (text == null || text.isEmpty()) return text;

        try {
            String encodedText = URLEncoder.encode(text, StandardCharsets.UTF_8.toString());
            String apiUrl = "https://api.api-ninjas.com/v1/profanityfilter?text=" + encodedText;

            HttpURLConnection connection = (HttpURLConnection) new URL(apiUrl).openConnection();
            connection.setRequestMethod("GET");
            connection.setRequestProperty("X-Api-Key", "7MZ8I1rg6OPvkwKNycgUcQ==qCkRzAayzDJ26Nj3");

            int responseCode = connection.getResponseCode();
            if (responseCode == 200) {
                BufferedReader reader = new BufferedReader(new InputStreamReader(connection.getInputStream()));
                StringBuilder response = new StringBuilder();
                String line;
                while ((line = reader.readLine()) != null) response.append(line);
                reader.close();

                JSONObject json = new JSONObject(response.toString());
                return json.getBoolean("has_profanity")
                        ? json.getString("censored")
                        : text;
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        return text;
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
    @FXML
    private void handleShowRemainingTime() {
        Event selectedEvent = listView.getSelectionModel().getSelectedItem();
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
    // Add this field
    @FXML private Label locationStatsLabel;

    // Add this method
    @FXML
    private void handleShowLocationStats() {
        if (locationStatsLabel.isVisible()) {
            locationStatsLabel.setVisible(false); // Hide label if already visible
        } else {
            Map<String, Long> locationStats = calculateLocationStatistics();

            if (locationStats.isEmpty()) {
                locationStatsLabel.setText("No location data available");
            } else {
                String mostSelected = getMostSelectedLocation(locationStats);
                String leastSelected = getLeastSelectedLocation(locationStats);

                String statsText = String.format(
                        "Most Popular: %s\nLeast Popular: %s",
                        formatLocationEntry(mostSelected, locationStats),
                        formatLocationEntry(leastSelected, locationStats)
                );

                locationStatsLabel.setText(statsText);
            }

            locationStatsLabel.setVisible(true); // Show label if hidden
        }
    }


    private Map<String, Long> calculateLocationStatistics() {
        return eventService.getAllEvents().stream()
                .filter(e -> e.getStatus() != null && !e.getStatus().isEmpty())
                .collect(Collectors.groupingBy(
                        Event::getStatus,
                        Collectors.counting()
                ));
    }

    private String getMostSelectedLocation(Map<String, Long> stats) {
        return Collections.max(stats.entrySet(), Map.Entry.comparingByValue()).getKey();
    }

    private String getLeastSelectedLocation(Map<String, Long> stats) {
        return Collections.min(stats.entrySet(), Map.Entry.comparingByValue()).getKey();
    }

    private String formatLocationEntry(String location, Map<String, Long> stats) {
        return String.format("%s (%d events)", location, stats.get(location));
    }
    @FXML
    private void handleShowCoordinates() {
        Event selectedEvent = listView.getSelectionModel().getSelectedItem();
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
    @FXML
    private void handleShowMapView() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/map_view.fxml"));
            Parent root = loader.load();

            // Get the map controller and pass any needed data
            MapViewController mapController = loader.getController();

            Stage stage = new Stage();
            stage.setTitle("Event Map View");
            stage.setScene(new Scene(root, 1200, 600));
            stage.show();

        } catch (Exception e) {
            showAlert("Error", "Could not load map view: " + e.getMessage());
            e.printStackTrace();
        }
    }

    // In your main controller
    @FXML
    private void openUserView() {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("/user_view.fxml"));
            Stage stage = new Stage();
            stage.setTitle("User View");
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
        }

    @FXML
    private void goBackToAdminDashboard() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            
            // Get the current window
            Stage stage = (Stage) listView.getScene().getWindow();
            
            // Set the admin dashboard scene
            stage.setScene(new Scene(root));
            stage.setTitle("Admin Dashboard");
            stage.centerOnScreen();
        } catch (IOException e) {
            e.printStackTrace();
            showAlert("Navigation Error", "Failed to go back to admin dashboard: " + e.getMessage());
        }
    }


}

