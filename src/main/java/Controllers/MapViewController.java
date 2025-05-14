package Controllers;

import Models.Event;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.scene.control.ListView;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.StackPane;
import javafx.scene.text.Text;
import Services.EventService;
import org.json.JSONArray;
import org.json.JSONObject;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLEncoder;
import java.nio.charset.StandardCharsets;
import java.util.*;
import java.util.function.Consumer;

public class MapViewController {
    @FXML private ListView<String> cityList;
    @FXML private ImageView mapImage;
    @FXML private StackPane mapContainer;
    @FXML private Text loadingText;
    @FXML private ListView<String> eventDetailsList;

    // Mapbox configuration
    private static final String MAPBOX_ACCESS_TOKEN = "pk.eyJ1IjoiYXlvdWJmcmlraGEiLCJhIjoiY203cW1zZXk2MHJ5ZTJpcXkzZmZvcGIzbiJ9.Zq4EjQ92NQYGee-wmhm4gQ";
    private static final String MAPBOX_STYLE = "streets-v11";
    private static final int MAP_WIDTH = 900;
    private static final int MAP_HEIGHT = 600;
    private static final int DEFAULT_ZOOM = 12;
    private static final int API_DELAY_MS = 1000;

    private final EventService eventService = new EventService();
    private final Map<String, List<Event>> cityEventsMap = new HashMap<>();
    private final Map<String, String> coordinateCache = new HashMap<>();
    private long lastApiCallTime = 0;

    public void initialize() {
        setupMapContainer();
        groupEventsByCity();
        setupCityList();
        eventDetailsList.getItems().clear();
        eventDetailsList.setPlaceholder(new Text("Select a city to view event details"));



    }

    private void updateEventDetails(String city) {
        eventDetailsList.getItems().clear();
        List<Event> events = cityEventsMap.getOrDefault(city, Collections.emptyList());

        events.forEach(event -> {
            String details = String.format(
                    "Event: %s\nDate: %s\nType: %s\nDuration: %d min\nLocation: %s",
                    event.getTitle(),
                    event.getDateEvent(),
                    event.getType(),
                    event.getDuration(),
                    event.getStatus()
            );
            eventDetailsList.getItems().add(details);
        });

        if (events.isEmpty()) {
            eventDetailsList.setPlaceholder(new Text("No events for " + city));
        }

        // Show event list overlay
        eventDetailsList.setVisible(true);
    }

    private void setupMapContainer() {
        mapImage.fitWidthProperty().bind(mapContainer.widthProperty());
        mapImage.fitHeightProperty().bind(mapContainer.heightProperty());
        mapImage.setPreserveRatio(true);
    }

    private void groupEventsByCity() {
        cityEventsMap.clear();
        eventService.getAllEvents().forEach(event -> {
            cityEventsMap.computeIfAbsent(event.getStatus(), k -> new ArrayList<>()).add(event);
        });
    }

    private void setupCityList() {
        cityList.getItems().clear();
        cityEventsMap.forEach((city, events) -> {
            cityList.getItems().add(String.format("%s (%d events)", city, events.size()));
        });

        cityList.getSelectionModel().selectedItemProperty().addListener((obs, oldVal, newVal) -> {
            if (newVal != null) {
                String city = newVal.substring(0, newVal.lastIndexOf(" (")); // Extract city name properly
                updateMapForCity(city);
                updateEventDetails(city); // Ensure event details are updated
            }
        });

    }

    private void updateMapForCity(String city) {
        showLoading(true);
        if (coordinateCache.containsKey(city)) {
            updateMapImage(coordinateCache.get(city));
        } else {
            fetchCoordinates(city, coordinates -> {
                coordinateCache.put(city, coordinates);
                updateMapImage(coordinates);
            });
        }
    }

    private void updateMapImage(String coordinates) {
        try {
            String[] parts = coordinates.split("\n");
            double lat = Double.parseDouble(parts[0]);
            double lon = Double.parseDouble(parts[1]);
            loadMapImage(createMapboxUrl(lon, lat));
        } catch (Exception e) {
            showError("Invalid coordinates: " + e.getMessage());
            loadDefaultMap();
        }
    }

    // Fixed URL formatting with correct access_token parameter
    // Correct marker syntax: "pin-l+ff0000" = small red marker
    private String createMapboxUrl(double lon, double lat) {
        return String.format(
                "https://api.mapbox.com/styles/v1/mapbox/%s/static/pin-l+ff0000(%f,%f)/%f,%f,%d/%dx%d?access_token=%s",
                MAPBOX_STYLE,
                lon, lat,       // Marker position
                lon, lat,       // Center position
                DEFAULT_ZOOM,
                MAP_WIDTH,      // Must be 900
                MAP_HEIGHT,     // Must be 600
                MAPBOX_ACCESS_TOKEN
        );
    }

    private void loadMapImage(String url) {
        System.out.println("Loading map: " + url);
        new Thread(() -> {
            try {
                Image image = new Image(url, true);

                image.progressProperty().addListener((obs, oldVal, newVal) -> {
                    if (newVal.doubleValue() == 1.0) {
                        Platform.runLater(() -> {
                            showLoading(false);
                            if (image.isError()) {
                                showError("Map load failed: " + getImageError(image));
                                loadDefaultMap();
                            } else {
                                mapImage.setImage(image);
                            }
                        });
                    }
                });

                image.errorProperty().addListener((obs, wasError, isNowError) -> {
                    if (isNowError) {
                        Platform.runLater(() -> {
                            showError("Image error: " + getImageError(image));
                            loadDefaultMap();
                        });
                    }
                });

            } catch (Exception e) {
                Platform.runLater(() -> {
                    showLoading(false);
                    showError("Load error: " + e.getMessage());
                    loadDefaultMap();
                });
            }
        }).start();
    }

    private void loadDefaultMap() {
        mapImage.setImage(new Image(createMapboxUrl(10.1815, 36.8065)));
    }

    private void fetchCoordinates(String city, Consumer<String> callback) {
        new Thread(() -> {
            try {
                // Rate limiting
                long currentTime = System.currentTimeMillis();
                if (currentTime - lastApiCallTime < API_DELAY_MS) {
                    Thread.sleep(API_DELAY_MS - (currentTime - lastApiCallTime));
                }
                lastApiCallTime = System.currentTimeMillis();

                String encodedCity = URLEncoder.encode(city, StandardCharsets.UTF_8);
                URL url = new URL("https://api.api-ninjas.com/v1/geocoding?city=" + encodedCity);
                HttpURLConnection connection = (HttpURLConnection) url.openConnection();
                connection.setRequestProperty("X-Api-Key", "7MZ8I1rg6OPvkwKNycgUcQ==qCkRzAayzDJ26Nj3");
                connection.setConnectTimeout(5000);
                connection.setReadTimeout(5000);

                int responseCode = connection.getResponseCode();
                if (responseCode == 200) {
                    BufferedReader reader = new BufferedReader(
                            new InputStreamReader(connection.getInputStream()));
                    StringBuilder response = new StringBuilder();
                    String line;
                    while ((line = reader.readLine()) != null) response.append(line);
                    reader.close();

                    JSONArray jsonArray = new JSONArray(response.toString());
                    if (jsonArray.length() > 0) {
                        JSONObject location = jsonArray.getJSONObject(0);
                        String coords = String.format("%f\n%f\n%s\n%s",
                                location.getDouble("latitude"),
                                location.getDouble("longitude"),
                                location.getString("country"),
                                location.getString("state"));
                        Platform.runLater(() -> callback.accept(coords));
                    } else {
                        handleGeoError("No coordinates found", city, callback);
                    }
                } else {
                    handleGeoError("API error: " + responseCode, city, callback);
                }
            } catch (Exception e) {
                handleGeoError("Connection failed: " + e.getMessage(), city, callback);
            }
        }).start();
    }

    private void handleGeoError(String message, String city, Consumer<String> callback) {
        Platform.runLater(() -> {
            showError(message + " - " + city);
            callback.accept("36.8065\n10.1815\nTN\nTunis");
        });
    }

    private String getImageError(Image image) {
        return image.getException() != null ?
                image.getException().getMessage() : "Unknown image error";
    }

    private void showLoading(boolean show) {
        loadingText.setVisible(show);
        loadingText.setText(show ? "Loading..." : "");
    }

    private void showError(String message) {
        loadingText.setText(message);
        loadingText.setVisible(true);
    }
}