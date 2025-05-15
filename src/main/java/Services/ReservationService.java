package Services;

import Models.Reservation;
import utils.MyDb;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 * Service class for handling CRUD operations related to Reservations.
 * This class implements the IService interface and provides transaction-safe
 * database operations.
 */
public class ReservationService implements IService<Reservation> {

    private static final Logger LOGGER = Logger.getLogger(ReservationService.class.getName());
    private Connection connection;

    public ReservationService() {
        connection = MyDb.getInstance().getConnection();
    }

    /**
     * Creates a new reservation in the database.
     * @param obj The reservation object to be created
     * @throws SQLException if a database error occurs
     * @throws IllegalArgumentException if the reservation object is null
     */
    @Override
    public void create(Reservation obj) throws SQLException {
        if (obj == null) {
            throw new IllegalArgumentException("Reservation object cannot be null");
        }

        String sql = "INSERT INTO reservation (firstName, lastName, email, date, location, seats, age, agent_type, paymentMode, transport_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        connection.setAutoCommit(false);
        try (PreparedStatement statement = connection.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS)) {
            statement.setString(1, obj.getFirstName());
            statement.setString(2, obj.getLastName());
            statement.setString(3, obj.getEmail());

            if (obj.getDate() != null) {
                statement.setDate(4, Date.valueOf(obj.getDate()));
            } else {
                statement.setNull(4, Types.DATE);
            }

            statement.setString(5, obj.getLocation());
            statement.setInt(6, obj.getSeats());
            statement.setInt(7, obj.getAge());
            statement.setString(8, obj.getAgentType());
            statement.setString(9, obj.getPaymentMode());
            statement.setString(10, obj.getTransport());

            statement.executeUpdate();
            
            try (ResultSet generatedKeys = statement.getGeneratedKeys()) {
                if (generatedKeys.next()) {
                    obj.setId(generatedKeys.getInt(1));
                    connection.commit();
                    LOGGER.log(Level.INFO, "Created reservation with ID: {0}", obj.getId());
                } else {
                    connection.rollback();
                    throw new SQLException("Failed to retrieve generated reservation ID");
                }
            }
        } catch (SQLException e) {
            try {
                connection.rollback();
            } catch (SQLException ex) {
                LOGGER.log(Level.SEVERE, "Error during rollback", ex);
            }
            LOGGER.log(Level.SEVERE, "Error creating reservation", e);
            throw e;
        } finally {
            try {
                connection.setAutoCommit(true);
            } catch (SQLException e) {
                LOGGER.log(Level.SEVERE, "Error resetting auto-commit", e);
            }
        }
    }

    /**
     * Updates an existing reservation in the database.
     * @param obj The reservation object to be updated
     * @throws SQLException if a database error occurs
     * @throws IllegalArgumentException if the reservation object is null
     */
    @Override
    public void update(Reservation obj) throws SQLException {
        if (obj == null) {
            throw new IllegalArgumentException("Reservation object cannot be null");
        }

        String sql = "UPDATE reservation SET firstName = ?, lastName = ?, email = ?, date = ?, location = ?, seats = ?, age = ?, agent_type = ?, paymentMode = ?, transport_type = ? WHERE id = ?";
        
        connection.setAutoCommit(false);
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setString(1, obj.getFirstName());
            stmt.setString(2, obj.getLastName());
            stmt.setString(3, obj.getEmail());
            
            if (obj.getDate() != null) {
                stmt.setDate(4, Date.valueOf(obj.getDate()));
            } else {
                stmt.setNull(4, Types.DATE);
            }
            
            stmt.setString(5, obj.getLocation());
            stmt.setInt(6, obj.getSeats());
            stmt.setInt(7, obj.getAge());
            stmt.setString(8, obj.getAgentType());
            stmt.setString(9, obj.getPaymentMode());
            stmt.setString(10, obj.getTransport());
            stmt.setInt(11, obj.getId());
            
            int rowsAffected = stmt.executeUpdate();
            if (rowsAffected > 0) {
                connection.commit();
                LOGGER.log(Level.INFO, "Updated reservation with ID: {0}", obj.getId());
            } else {
                connection.rollback();
                LOGGER.log(Level.WARNING, "No reservation found with ID: {0}", obj.getId());
            }
        } catch (SQLException e) {
            try {
                connection.rollback();
            } catch (SQLException ex) {
                LOGGER.log(Level.SEVERE, "Error during rollback", ex);
            }
            LOGGER.log(Level.SEVERE, "Error updating reservation", e);
            throw e;
        } finally {
            try {
                connection.setAutoCommit(true);
            } catch (SQLException e) {
                LOGGER.log(Level.SEVERE, "Error resetting auto-commit", e);
            }
        }
    }

    /**
     * Deletes a reservation from the database by ID.
     * @param id The ID of the reservation to delete
     * @throws SQLException if a database error occurs
     */
    @Override
    public void delete(int id) throws SQLException {
        String sql = "DELETE FROM reservation WHERE id = ?";
        
        connection.setAutoCommit(false);
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, id);
            
            int rowsAffected = ps.executeUpdate();
            if (rowsAffected > 0) {
                connection.commit();
                LOGGER.log(Level.INFO, "Deleted reservation with ID: {0}", id);
            } else {
                connection.rollback();
                LOGGER.log(Level.WARNING, "No reservation found with ID: {0}", id);
            }
        } catch (SQLException e) {
            try {
                connection.rollback();
            } catch (SQLException ex) {
                LOGGER.log(Level.SEVERE, "Error during rollback", ex);
            }
            LOGGER.log(Level.SEVERE, "Error deleting reservation", e);
            throw e;
        } finally {
            try {
                connection.setAutoCommit(true);
            } catch (SQLException e) {
                LOGGER.log(Level.SEVERE, "Error resetting auto-commit", e);
            }
        }
    }

    /**
     * Retrieves all reservations from the database.
     * @return List of all reservations
     * @throws SQLException if a database error occurs
     */
    @Override
    public List<Reservation> read() throws SQLException {
        String sql = "SELECT * FROM reservation";
        List<Reservation> reservations = new ArrayList<>();
        
        try (Statement statement = connection.createStatement();
             ResultSet rs = statement.executeQuery(sql)) {
            
            while (rs.next()) {
                Reservation reservation = mapResultSetToReservation(rs);
                reservations.add(reservation);
            }
            LOGGER.log(Level.INFO, "Retrieved {0} reservations", reservations.size());
        } catch (SQLException e) {
            LOGGER.log(Level.SEVERE, "Error reading reservations", e);
            throw e;
        }
        return reservations;
    }
    
    /**
     * Maps a ResultSet row to a Reservation object.
     * @param rs The ResultSet containing reservation data
     * @return A new Reservation object
     * @throws SQLException if a database error occurs
     */
    private Reservation mapResultSetToReservation(ResultSet rs) throws SQLException {
        Reservation reservation = new Reservation();
        reservation.setId(rs.getInt("id"));
        reservation.setFirstName(rs.getString("firstName"));
        reservation.setLastName(rs.getString("lastName"));
        reservation.setEmail(rs.getString("email"));
        
        Date date = rs.getDate("date");
        if (date != null) {
            reservation.setDate(date.toLocalDate());
        }
        
        reservation.setLocation(rs.getString("location"));
        reservation.setSeats(rs.getInt("seats"));
        reservation.setAge(rs.getInt("age"));
        reservation.setAgentType(rs.getString("agent_type"));
        reservation.setPaymentMode(rs.getString("paymentMode"));
        reservation.setTransport(rs.getString("transport_type"));
        
        return reservation;
    }

    /**
     * Gets a reservation by its ID.
     * @param reservationId The ID of the reservation to retrieve
     * @return The reservation if found, null otherwise
     * @throws SQLException if a database error occurs
     */
    public Reservation getReservationById(int reservationId) throws SQLException {
        String sql = "SELECT * FROM reservation WHERE id = ?";
        
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setInt(1, reservationId);
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    return mapResultSetToReservation(rs);
                }
            }
        }
        return null; // No reservation found with the given ID
    }

    /**
     * Searches for reservations matching the given text in any field.
     * @param searchText The text to search for
     * @return List of matching reservations
     * @throws SQLException if a database error occurs
     */
    public List<Reservation> searchReservations(String searchText) throws SQLException {
        String sql = "SELECT * FROM reservation WHERE firstName LIKE ? OR lastName LIKE ? OR " +
                    "email LIKE ? OR location LIKE ? OR agent_type LIKE ? OR " +
                    "paymentMode LIKE ? OR transport_type LIKE ?";
        
        List<Reservation> reservations = new ArrayList<>();
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            String searchPattern = "%" + searchText + "%";
            for (int i = 1; i <= 7; i++) {
                stmt.setString(i, searchPattern);
            }
            
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    reservations.add(mapResultSetToReservation(rs));
                }
            }
            LOGGER.log(Level.INFO, "Found {0} reservations matching: {1}", 
                      new Object[]{reservations.size(), searchText});
        }
        return reservations;
    }

    /**
     * Adds a reservation to the waitlist.
     * @param reservation The reservation to add to waitlist
     * @throws SQLException if a database error occurs
     */
    public void addToWaitlist(Reservation reservation) throws SQLException {
        if (reservation == null) {
            throw new IllegalArgumentException("Reservation cannot be null");
        }
        
        String sql = "INSERT INTO waitlist (reservation_id, first_name, last_name, email, status) " +
                    "VALUES (?, ?, ?, ?, 'pending')";
        
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setInt(1, reservation.getId());
            stmt.setString(2, reservation.getFirstName());
            stmt.setString(3, reservation.getLastName());
            stmt.setString(4, reservation.getEmail());
            
            int rowsAffected = stmt.executeUpdate();
            if (rowsAffected > 0) {
                LOGGER.log(Level.INFO, "Added reservation {0} to waitlist", reservation.getId());
            }
        }
    }

    /**
     * Gets the status of a reservation from the waitlist.
     * @param email The email address to check
     * @return The status of the reservation or a message if not found
     * @throws SQLException if a database error occurs
     */
    public String getReservationStatus(String email) throws SQLException {
        if (email == null || email.trim().isEmpty()) {
            throw new IllegalArgumentException("Email cannot be null or empty");
        }
        
        String sql = "SELECT status FROM waitlist WHERE email = ?";
        
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setString(1, email);
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    String status = rs.getString("status");
                    LOGGER.log(Level.INFO, "Found reservation status for email {0}: {1}", 
                              new Object[]{email, status});
                    return status;
                }
            }
        }
        return "No reservation found for this email.";
    }

    /**
     * Accepts a reservation from the waitlist.
     * @param reservation The reservation to accept
     * @throws SQLException if a database error occurs
     */
    public void acceptReservation(Reservation reservation) throws SQLException {
        if (reservation == null) {
            throw new IllegalArgumentException("Reservation cannot be null");
        }
        
        String sql = "UPDATE waitlist SET status = 'accepted' WHERE reservation_id = ?";
        
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setInt(1, reservation.getId());
            
            int rowsAffected = stmt.executeUpdate();
            if (rowsAffected > 0) {
                LOGGER.log(Level.INFO, "Accepted reservation {0}", reservation.getId());
            } else {
                LOGGER.log(Level.WARNING, "No waitlist entry found for reservation ID: {0}", 
                          reservation.getId());
            }
        }
    }

    /**
     * Rejects a reservation and removes it from the system.
     * @param reservation The reservation to reject
     * @throws SQLException if a database error occurs
     */
    public void rejectReservation(Reservation reservation) throws SQLException {
        if (reservation == null) {
            throw new IllegalArgumentException("Reservation cannot be null");
        }
        
        connection.setAutoCommit(false);
        try {
            // Update waitlist status
            String sql = "UPDATE waitlist SET status = 'rejected' WHERE reservation_id = ?";
            int rowsAffected;
            
            try (PreparedStatement stmt = connection.prepareStatement(sql)) {
                stmt.setInt(1, reservation.getId());
                rowsAffected = stmt.executeUpdate();
            }

            if (rowsAffected > 0) {
                // Delete the reservation
                delete(reservation.getId());
                
                connection.commit();
                LOGGER.log(Level.INFO, "Rejected and deleted reservation {0}", reservation.getId());
            } else {
                connection.rollback();
                LOGGER.log(Level.WARNING, "No waitlist entry found for reservation ID: {0}", 
                          reservation.getId());
            }
        } catch (SQLException e) {
            try {
                connection.rollback();
            } catch (SQLException ex) {
                LOGGER.log(Level.SEVERE, "Error during rollback", ex);
            }
            LOGGER.log(Level.SEVERE, "Error rejecting reservation", e);
            throw e;
        } finally {
            try {
                connection.setAutoCommit(true);
            } catch (SQLException e) {
                LOGGER.log(Level.SEVERE, "Error resetting auto-commit", e);
            }
        }
    }

    /**
     * Gets all reservations currently in the waitlist with 'pending' status.
     * @return List of pending reservations
     * @throws SQLException if a database error occurs
     */
    public List<Reservation> getWaitlist() throws SQLException {
        String sql = "SELECT r.* FROM waitlist w JOIN reservation r ON w.reservation_id = r.id " +
                    "WHERE w.status = 'pending'";
        List<Reservation> reservations = new ArrayList<>();
        
        try (PreparedStatement stmt = connection.prepareStatement(sql);
             ResultSet rs = stmt.executeQuery()) {
            
            while (rs.next()) {
                reservations.add(mapResultSetToReservation(rs));
            }
            LOGGER.log(Level.INFO, "Retrieved {0} pending reservations from waitlist", 
                      reservations.size());
        }
        return reservations;
    }



    /**
     * Searches for reservations by email address.
     * @param email The email address to search for
     * @return List of matching reservations
     * @throws SQLException if a database error occurs
     */
    public List<Reservation> searchReservationsByEmail(String email) throws SQLException {
        if (email == null || email.trim().isEmpty()) {
            throw new IllegalArgumentException("Email cannot be null or empty");
        }

        String sql = "SELECT * FROM reservation WHERE email = ?";  // Fixed table name
        List<Reservation> reservations = new ArrayList<>();
        
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setString(1, email);
            
            try (ResultSet rs = stmt.executeQuery()) {
                while (rs.next()) {
                    reservations.add(mapResultSetToReservation(rs));
                }
            }
            LOGGER.log(Level.INFO, "Found {0} reservations for email: {1}", 
                      new Object[]{reservations.size(), email});
        }
        return reservations;
    }


    /**
     * Gets a single reservation by email address.
     * @param email The email address to search for
     * @return The reservation if found, null otherwise
     * @throws SQLException if a database error occurs
     */
    public Reservation getReservationByEmail(String email) throws SQLException {
        if (email == null || email.trim().isEmpty()) {
            throw new IllegalArgumentException("Email cannot be null or empty");
        }

        String sql = "SELECT * FROM reservation WHERE email = ?";
        
        try (PreparedStatement stmt = connection.prepareStatement(sql)) {
            stmt.setString(1, email);
            
            try (ResultSet rs = stmt.executeQuery()) {
                if (rs.next()) {
                    Reservation reservation = mapResultSetToReservation(rs);
                    LOGGER.log(Level.INFO, "Found reservation for email: {0}", email);
                    return reservation;
                } else {
                    LOGGER.log(Level.INFO, "No reservation found for email: {0}", email);
                    return null;
                }
            }
        }
    }
}
