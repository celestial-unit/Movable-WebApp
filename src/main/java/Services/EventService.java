package Services;

import Models.Event;
import utils.myConnection;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;
import org.json.JSONObject;
import java.io.InputStream;
import java.util.Properties;

public class EventService implements IEventService {

    private Connection conn;
    private String apiKey;

    public EventService() {
        // Load API key from config.properties
        try (InputStream input = getClass().getClassLoader().getResourceAsStream("config.properties")) {
            Properties prop = new Properties();
            prop.load(input);
            apiKey = prop.getProperty("openweather.api.key");
        } catch (Exception e) {
            e.printStackTrace();
            apiKey = "1ddaaccc87b2d518c7055f81e1d85b80"; // Fallback to your key
        }
        this.conn = myConnection.getInstance().getConnection();
        if (this.conn == null) {
            System.err.println("❌ Failed to establish database connection in EventService constructor");
        }
    }

    // Existing CRUD methods remain the same
    @Override
    public void addEvent(Event event) {
        String sql = "INSERT INTO event (title, description, duration, type, status, dateevent, startEvent) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        if (!ensureConnection()) {
            System.err.println("❌ Could not add event: Database connection is not available");
            return;
        }
        
        try (PreparedStatement stmt = conn.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS)) {
            stmt.setString(1, event.getTitle());
            stmt.setString(2, event.getDescription());
            stmt.setInt(3, event.getDuration());
            stmt.setInt(4, event.getType());
            stmt.setString(5, event.getStatus());
            stmt.setString(6, event.getDateEvent());
            stmt.setString(7, event.getStartEvent());

            int rowsInserted = stmt.executeUpdate();
            if (rowsInserted > 0) {
                try (ResultSet generatedKeys = stmt.getGeneratedKeys()) {
                    if (generatedKeys.next()) {
                        event.setId(generatedKeys.getInt(1));
                        System.out.println("✅ Event added successfully with ID: " + event.getId());
                    }
                }
            }
        } catch (SQLException e) {
            System.err.println("❌ Error adding event: " + e.getMessage());
        }
    }

    @Override
    public List<Event> getAllEvents() {
        List<Event> events = new ArrayList<>();
        String sql = "SELECT * FROM event";
        
        if (!ensureConnection()) {
            System.err.println("❌ Could not get events: Database connection is not available");
            return events;
        }
        
        try (Statement stmt = conn.createStatement();
             ResultSet rs = stmt.executeQuery(sql)) {
            while (rs.next()) {
                events.add(new Event(
                        rs.getInt("id"),
                        rs.getString("title"),
                        rs.getString("description"),
                        rs.getInt("duration"),
                        rs.getInt("type"),
                        rs.getString("status"),
                        rs.getString("dateevent"),
                        rs.getString("startEvent")
                ));
            }
        } catch (SQLException e) {
            System.err.println("❌ Error fetching events: " + e.getMessage());
        }
        return events;
    }

    @Override
    public void updateEvent(Event event) {
        String sql = "UPDATE event SET title=?, description=?, duration=?, type=?, status=?, dateevent=?, startEvent=? WHERE id=?";
        
        if (!ensureConnection()) {
            System.err.println("❌ Could not update event: Database connection is not available");
            return;
        }
        
        try (PreparedStatement stmt = conn.prepareStatement(sql)) {
            stmt.setString(1, event.getTitle());
            stmt.setString(2, event.getDescription());
            stmt.setInt(3, event.getDuration());
            stmt.setInt(4, event.getType());
            stmt.setString(5, event.getStatus());
            stmt.setString(6, event.getDateEvent());
            stmt.setString(7, event.getStartEvent());
            stmt.setInt(8, event.getId());

            int rowsUpdated = stmt.executeUpdate();
            if (rowsUpdated > 0) {
                System.out.println("✅ Event updated successfully!");
            }
        } catch (SQLException e) {
            System.err.println("❌ Error updating event: " + e.getMessage());
        }
    }

    @Override
    public void deleteEvent(int id) {
        String sql = "DELETE FROM event WHERE id=?";
        
        if (!ensureConnection()) {
            System.err.println("❌ Could not delete event: Database connection is not available");
            return;
        }
        
        try (PreparedStatement stmt = conn.prepareStatement(sql)) {
            stmt.setInt(1, id);
            int rowsDeleted = stmt.executeUpdate();
            if (rowsDeleted > 0) {
                System.out.println("✅ Event deleted successfully!");
            }
        } catch (SQLException e) {
            System.err.println("❌ Error deleting event: " + e.getMessage());
        }
    }

    @Override
    public Event getEventById(int id) {
        String sql = "SELECT * FROM event WHERE id=?";
        
        if (!ensureConnection()) {
            System.err.println("❌ Could not get event by ID: Database connection is not available");
            return null;
        }
        
        try (PreparedStatement stmt = conn.prepareStatement(sql)) {
            stmt.setInt(1, id);
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    return new Event(
                        rs.getInt("id"),
                        rs.getString("title"),
                        rs.getString("description"),
                        rs.getInt("duration"),
                        rs.getInt("type"),
                        rs.getString("status"),
                        rs.getString("dateevent"),
                        rs.getString("startEvent")
                    );
                }
            }
        } catch (SQLException e) {
            System.err.println("❌ Error fetching event by ID: " + e.getMessage());
        }
        return null;
    }

    // New Weather API Methods
    public String getWeatherForEventLocation(Event event) {
        String city = event.getStatus();
        String apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" + city +
                "&appid=" + apiKey + "&units=metric";

        try {
            HttpClient client = HttpClient.newHttpClient();
            HttpRequest request = HttpRequest.newBuilder()
                    .uri(URI.create(apiUrl))
                    .build();

            HttpResponse<String> response = client.send(request, HttpResponse.BodyHandlers.ofString());
            if (response.statusCode() == 200) {
                return parseWeatherData(response.body());
            } else {
                return "Weather error: " + response.body();
            }
        } catch (Exception e) {
            return "Weather unavailable for " + city;
        }
    }

    private String parseWeatherData(String jsonResponse) {
        try {
            JSONObject json = new JSONObject(jsonResponse);
            String city = json.getString("name");
            double temp = json.getJSONObject("main").getDouble("temp");
            String weather = json.getJSONArray("weather").getJSONObject(0).getString("main");
            return String.format("%s: %.1f°C, %s", city, temp, weather);
        } catch (Exception e) {
            return "Invalid weather data format";
        }
    }
    /**
     * Closes the database connection when the service is no longer needed
     * This should be called when shutting down the application or when
     * this service instance is no longer required
     */
    public void closeConnection() {
        if (conn != null) {
            try {
                if (!conn.isClosed()) {
                    conn.close();
                    System.out.println("✅ EventService database connection closed successfully");
                }
            } catch (SQLException e) {
                System.err.println("❌ Error closing database connection: " + e.getMessage());
            } finally {
                conn = null;
            }
        }
    }
    
    /**
     * Ensures the connection is active before performing database operations
     * @return true if connection is valid, false otherwise
     */
    private boolean ensureConnection() {
        try {
            if (conn == null || conn.isClosed()) {
                conn = myConnection.getInstance().getConnection();
                return conn != null;
            }
            return true;
        } catch (SQLException e) {
            System.err.println("❌ Connection error: " + e.getMessage());
            return false;
        }
    }
    
    @Override
    protected void finalize() throws Throwable {
        try {
            closeConnection();
        } finally {
            super.finalize();
        }
    }
}
