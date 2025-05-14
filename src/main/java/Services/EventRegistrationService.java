package Services;

import Models.EventRegistration;
import utils.myConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class EventRegistrationService {
    
    // Don't store a persistent connection, open and close as needed
    private Connection getConnection() {
        return myConnection.getInstance().getConnection();
    }

    /**
     * Adds a new event registration
     * 
     * @param registration The registration to add
     * @return true if registration was successful, false otherwise
     */
    public boolean addRegistration(EventRegistration registration) {
        String query = "INSERT INTO event_registration (event_id, user_id, registration_date, status) VALUES (?, ?, ?, ?)";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setInt(1, registration.getEventId());
            stmt.setInt(2, registration.getUserId());
            stmt.setTimestamp(3, registration.getRegistrationDate());
            stmt.setString(4, registration.getStatus());
            int rowsAffected = stmt.executeUpdate();
            return rowsAffected > 0;
        } catch (SQLException e) {
            e.printStackTrace();
            return false;
        }
    }

    public List<EventRegistration> getAllRegistrations() {
        List<EventRegistration> registrations = new ArrayList<>();
        String query = "SELECT * FROM event_registration";
        try (Connection conn = getConnection();
             Statement stmt = conn.createStatement(); 
             ResultSet rs = stmt.executeQuery(query)) {
            while (rs.next()) {
                registrations.add(new EventRegistration(
                        rs.getInt("id"),
                        rs.getInt("event_id"),
                        rs.getInt("user_id"),
                        rs.getTimestamp("registration_date"),
                        rs.getString("status")
                ));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return registrations;
    }

    public void updateRegistration(EventRegistration registration) {
        String query = "UPDATE event_registration SET event_id=?, user_id=?, registration_date=?, status=? WHERE id=?";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setInt(1, registration.getEventId());
            stmt.setInt(2, registration.getUserId());
            stmt.setTimestamp(3, registration.getRegistrationDate());
            stmt.setString(4, registration.getStatus());
            stmt.setInt(5, registration.getId());
            stmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void deleteRegistration(int id) {
        String query = "DELETE FROM event_registration WHERE id=?";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setInt(1, id);
            stmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    // New method to fetch event titles
    public List<String> getAllEventTitles() {
        List<String> titles = new ArrayList<>();
        String query = "SELECT title FROM event";
        try (Connection conn = getConnection();
             Statement stmt = conn.createStatement(); 
             ResultSet rs = stmt.executeQuery(query)) {
            while (rs.next()) {
                titles.add(rs.getString("title"));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return titles;
    }

    // New method to get event ID by title
    public int getEventIdByTitle(String title) {
        String query = "SELECT id FROM event WHERE title = ?";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setString(1, title);
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    return rs.getInt("id");
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return -1;  // If no event is found
    }
    public String getEventTitleById(int eventId) {
        String title = "";
        String query = "SELECT title FROM event WHERE id = ?";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setInt(1, eventId);
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    title = rs.getString("title");
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return title;
    }
    public List<EventRegistrationCount> getTopRegisteredEvents(int limit) {
        List<EventRegistrationCount> topEvents = new ArrayList<>();
        String sql = "SELECT e.id AS event_id, e.title, COUNT(er.id) AS registration_count "
                + "FROM event_registration er "
                + "JOIN event e ON er.event_id = e.id "
                + "GROUP BY e.id, e.title "
                + "ORDER BY registration_count DESC "
                + "LIMIT ?";

        try (Connection conn = getConnection();
             PreparedStatement pstmt = conn.prepareStatement(sql)) {
            pstmt.setInt(1, limit);
            try (ResultSet rs = pstmt.executeQuery()) {
            
            while (rs.next()) {
                int count = rs.getInt("registration_count");
                if (count > 0) {  // Filter out zero-count entries
                    topEvents.add(new EventRegistrationCount(
                            rs.getInt("event_id"),
                            rs.getString("title"),
                            count
                    ));
                }
            }
            }
        } catch (SQLException e) {
            System.err.println("Error fetching top events: " + e.getMessage());
            e.printStackTrace(); // Added detailed stack trace for debugging
        }
        return topEvents;
    }

    // DTO for registration counts
    public static class EventRegistrationCount {
        private final int eventId;
        private final String eventTitle;
        private final int registrationCount;

        public EventRegistrationCount(int eventId, String eventTitle, int registrationCount) {
            this.eventId = eventId;
            this.eventTitle = eventTitle;
            this.registrationCount = registrationCount;
        }

        public int getEventId() { return eventId; }
        public String getEventTitle() { return eventTitle; }
        public int getRegistrationCount() { return registrationCount; }
    }
    
    /**
     * Get all registrations for a specific user
     * 
     * @param userId The ID of the user
     * @return List of event registrations for the user
     */
    public List<EventRegistration> getRegistrationsByUserId(int userId) {
        List<EventRegistration> registrations = new ArrayList<>();
        String query = "SELECT * FROM event_registration WHERE user_id = ?";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setInt(1, userId);
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    registrations.add(new EventRegistration(
                            rs.getInt("id"),
                            rs.getInt("event_id"),
                            rs.getInt("user_id"),
                            rs.getTimestamp("registration_date"),
                            rs.getString("status")
                    ));
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return registrations;
    }
    
    /**
     * Get all registrations for a specific event
     * 
     * @param eventId The ID of the event
     * @return List of event registrations for the event
     */
    public List<EventRegistration> getRegistrationsByEventId(int eventId) {
        List<EventRegistration> registrations = new ArrayList<>();
        String query = "SELECT * FROM event_registration WHERE event_id = ?";
        try (Connection conn = getConnection();
             PreparedStatement stmt = conn.prepareStatement(query)) {
            stmt.setInt(1, eventId);
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    registrations.add(new EventRegistration(
                            rs.getInt("id"),
                            rs.getInt("event_id"),
                            rs.getInt("user_id"),
                            rs.getTimestamp("registration_date"),
                            rs.getString("status")
                    ));
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return registrations;
    }
    /**
     * Closes any open database connections
     * This method should be called when the application is shutting down
     * or when the service is no longer needed
     */
    public void closeConnection() {
        // This implementation doesn't store a persistent connection
        // Each method opens and closes its own connection via try-with-resources
        // No additional cleanup needed
        System.out.println("EventRegistrationService: No persistent connection to close");
    }
}

