package Services;

import Models.User;
import utils.MyDb;

import org.mindrot.jbcrypt.BCrypt;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.time.LocalDateTime;

public class UsersService implements IService<User> {

    private final Connection connection;

    public UsersService() {
        connection = MyDb.getInstance().getConnection();
    }

    /**
     * Creates a user and returns the generated user ID
     * 
     * @param user the user to create
     * @return the generated user ID
     * @throws SQLException if a database error occurs
     */
    public int createAndGetId(User user) throws SQLException {
        // Validate role
        if (!isValidRole(user.getRole())) {
            throw new IllegalArgumentException("Invalid role: " + user.getRole());
        }

        // Check if email already exists
        if (isEmailTaken(user.getEmail())) {
            throw new UserAlreadyExistsException("Email is already taken: " + user.getEmail());
        }

        // Hash password before storing
        String hashedPassword = BCrypt.hashpw(user.getPassword(), BCrypt.gensalt());
        String sql = "INSERT INTO users (firstName, lastName, email, password, role, faceIdEnabled, isBanned, banReason, banExpiryDate, lastLogin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        try (PreparedStatement ps = connection.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS)) {
            ps.setString(1, user.getFirstName());
            ps.setString(2, user.getLastName());
            ps.setString(3, user.getEmail());
            ps.setString(4, hashedPassword);
            ps.setString(5, user.getRole());
            ps.setBoolean(6, user.isFaceIdEnabled());
            ps.setBoolean(7, user.isBanned());
            ps.setString(8, user.getBanReason());
            ps.setTimestamp(9, user.getBanExpiryDate());
            ps.setTimestamp(10, user.getLastLogin());

            int rowsAffected = ps.executeUpdate();

            if (rowsAffected == 0) {
                throw new SQLException("Failed to save user: No rows affected.");
            }
            
            // Get the generated ID
            try (ResultSet generatedKeys = ps.getGeneratedKeys()) {
                if (generatedKeys.next()) {
                    int userId = generatedKeys.getInt(1);
                    user.setId(userId); // Update the user object with the new ID
                    return userId;
                } else {
                    throw new SQLException("Failed to retrieve generated user ID.");
                }
            }
        }
    }

    /**
     * Creates a user (implements the IService interface method)
     * 
     * @param user the user to create
     * @throws SQLException if a database error occurs
     */
    @Override
    public void create(User user) throws SQLException {
        // Call createAndGetId but ignore the returned ID
        createAndGetId(user);
    }

    @Override
    public void update(User user) throws SQLException {
        String sql = "UPDATE users SET firstName = ?, lastName = ?, email = ?, password = ?, role = ?, faceIdEnabled = ?, isBanned = ?, banReason = ?, banExpiryDate = ?, lastLogin = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, user.getFirstName());
            ps.setString(2, user.getLastName());
            ps.setString(3, user.getEmail());
            ps.setString(4, user.getPassword()); // Assuming password is already hashed
            ps.setString(5, user.getRole());
            ps.setBoolean(6, user.isFaceIdEnabled());
            ps.setBoolean(7, user.isBanned());
            ps.setString(8, user.getBanReason());
            ps.setTimestamp(9, user.getBanExpiryDate());
            ps.setTimestamp(10, user.getLastLogin());
            ps.setInt(11, user.getId());
            int rowsAffected = ps.executeUpdate();
            if (rowsAffected == 0) {
                throw new SQLException("Failed to update user: No rows affected.");
            }
        }
    }

    @Override
    public void delete(int id) throws SQLException {
        String sql = "DELETE FROM users WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, id);

            int rowsAffected = ps.executeUpdate();
            if (rowsAffected == 0) {
                throw new SQLException("Failed to delete user: No rows affected.");
            }
        }
    }

    @Override
    public List<User> read() throws SQLException {
        String sql = "SELECT * FROM users";
        List<User> users = new ArrayList<>();
        try (Statement statement = connection.createStatement();
             ResultSet rs = statement.executeQuery(sql)) {
            while (rs.next()) {
                User u = new User();
                u.setId(rs.getInt("id"));
                u.setFirstName(rs.getString("firstName"));
                u.setLastName(rs.getString("lastName"));
                u.setEmail(rs.getString("email"));
                u.setPassword(rs.getString("password"));
                u.setRole(rs.getString("role"));
                u.setFaceIdEnabled(rs.getBoolean("faceIdEnabled"));
                try {
                    u.setBanned(rs.getBoolean("isBanned"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    u.setBanned(false);
                }
                try {
                    u.setBanReason(rs.getString("banReason"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    u.setBanReason(null);
                }
                try {
                    u.setBanExpiryDate(rs.getTimestamp("banExpiryDate"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    u.setBanExpiryDate(null);
                }
                try {
                    u.setLastLogin(rs.getTimestamp("lastLogin"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    u.setLastLogin(null);
                }
                users.add(u);
            }
        }
        return users;
    }

    public User findByEmail(String email) {
        // SQL query to find a user by email
        String query = "SELECT * FROM users WHERE email = ?";

        try (PreparedStatement stmt = connection.prepareStatement(query)) {
            stmt.setString(1, email); // Set the email in the query

            ResultSet rs = stmt.executeQuery();

            if (rs.next()) {
                // Create a User object from the result set
                User user = new User();
                user.setId(rs.getInt("id"));
                user.setFirstName(rs.getString("firstName"));
                user.setLastName(rs.getString("lastName"));
                user.setEmail(rs.getString("email"));
                user.setPassword(rs.getString("password"));
                user.setRole(rs.getString("role"));
                user.setFaceIdEnabled(rs.getBoolean("faceIdEnabled"));
                try {
                    user.setBanned(rs.getBoolean("isBanned"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    user.setBanned(false);
                }
                try {
                    user.setBanReason(rs.getString("banReason"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    user.setBanReason(null);
                }
                try {
                    user.setBanExpiryDate(rs.getTimestamp("banExpiryDate"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    user.setBanExpiryDate(null);
                }
                try {
                    user.setLastLogin(rs.getTimestamp("lastLogin"));
                } catch (SQLException e) {
                    // Column doesn't exist yet, set default value
                    user.setLastLogin(null);
                }
                return user;
            }
            return null; // Return null if no user is found with the email

        } catch (SQLException e) {
            e.printStackTrace(); // Handle SQL exceptions (e.g., connection errors)
            return null;
        }
    }

    public User findByEmailAndPassword(String email, String password) throws SQLException {
        String sql = "SELECT * FROM users WHERE email = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, email);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    String storedHash = rs.getString("password");
                    if (BCrypt.checkpw(password, storedHash)) {
                        User user = new User();
                        user.setId(rs.getInt("id"));
                        user.setFirstName(rs.getString("firstName"));
                        user.setLastName(rs.getString("lastName"));
                        user.setEmail(rs.getString("email"));
                        user.setPassword(storedHash);  // Don't return plain text password
                        user.setRole(rs.getString("role"));
                        user.setFaceIdEnabled(rs.getBoolean("faceIdEnabled"));
                        try {
                            user.setBanned(rs.getBoolean("isBanned"));
                        } catch (SQLException e) {
                            // Column doesn't exist yet, set default value
                            user.setBanned(false);
                        }
                        try {
                            user.setBanReason(rs.getString("banReason"));
                        } catch (SQLException e) {
                            // Column doesn't exist yet, set default value
                            user.setBanReason(null);
                        }
                        try {
                            user.setBanExpiryDate(rs.getTimestamp("banExpiryDate"));
                        } catch (SQLException e) {
                            // Column doesn't exist yet, set default value
                            user.setBanExpiryDate(null);
                        }
                        try {
                            user.setLastLogin(rs.getTimestamp("lastLogin"));
                        } catch (SQLException e) {
                            // Column doesn't exist yet, set default value
                            user.setLastLogin(null);
                        }
                        return user;
                    } else {
                        return null; // Password does not match
                    }
                } else {
                    return null; // User not found
                }
            }
        }
    }

    public boolean isEmailTaken(String email) throws SQLException {
        String sql = "SELECT 1 FROM users WHERE email = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, email);
            try (ResultSet rs = ps.executeQuery()) {
                return rs.next(); // Returns true if email exists
            }
        }
    }

    private boolean isValidRole(String role) {
        return role.equals("USER") || role.equals("ADMIN") || role.equals("DRIVER");
    }

    public List<String> getRoles() throws SQLException {
        List<String> roles = new ArrayList<>();
        String sql = "SELECT DISTINCT role FROM users";
        try (Statement stmt = connection.createStatement();
             ResultSet rs = stmt.executeQuery(sql)) {
            while (rs.next()) {
                roles.add(rs.getString("role"));
            }
        }
        return roles;
    }

    // Helper method to check if email exists
    private boolean checkEmailExistence(String email) throws SQLException {
        String sql = "SELECT 1 FROM users WHERE email = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, email);
            try (ResultSet rs = ps.executeQuery()) {
                return rs.next();
            }
        }
    }
    /**
     * Enable or disable Face ID for a specific user
     * 
     * @param userId the ID of the user
     * @param enabled true to enable Face ID, false to disable
     * @return true if the operation was successful, false otherwise
     * @throws SQLException if a database error occurs
     */
    public boolean setFaceIdEnabled(int userId, boolean enabled) throws SQLException {
        String sql = "UPDATE users SET faceIdEnabled = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setBoolean(1, enabled);
            ps.setInt(2, userId);
            
            int rowsAffected = ps.executeUpdate();
            return rowsAffected > 0;
        }
    }

    /**
     * Get a user by ID
     * 
     * @param id the user ID to find
     * @return the User object if found, null otherwise
     * @throws SQLException if a database error occurs
     */
    public User findById(int id) throws SQLException {
        String sql = "SELECT * FROM users WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, id);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    User user = new User();
                    user.setId(rs.getInt("id"));
                    user.setFirstName(rs.getString("firstName"));
                    user.setLastName(rs.getString("lastName"));
                    user.setEmail(rs.getString("email"));
                    user.setPassword(rs.getString("password"));
                    user.setRole(rs.getString("role"));
                    user.setFaceIdEnabled(rs.getBoolean("faceIdEnabled"));
                    try {
                        user.setBanned(rs.getBoolean("isBanned"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setBanned(false);
                    }
                    try {
                        user.setBanReason(rs.getString("banReason"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setBanReason(null);
                    }
                    try {
                        user.setBanExpiryDate(rs.getTimestamp("banExpiryDate"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setBanExpiryDate(null);
                    }
                    try {
                        user.setLastLogin(rs.getTimestamp("lastLogin"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setLastLogin(null);
                    }
                    return user;
                } else {
                    return null; // User not found
                }
            }
        }
    }

    /**
     * Update the faceIdEnabled field for a user
     * 
     * @param userId the ID of the user to update
     * @param enabled true to enable Face ID, false to disable
     * @return true if the operation was successful, false otherwise
     * @throws SQLException if a database error occurs
     */
    public boolean updateFaceIdEnabled(int userId, boolean enabled) throws SQLException {
        String sql = "UPDATE users SET faceIdEnabled = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setBoolean(1, enabled);
            ps.setInt(2, userId);
            
            int rowsAffected = ps.executeUpdate();
            return rowsAffected > 0;
        }
    }
    
    /**
     * Updates a user's password to a new value
     * 
     * @param userId ID of the user to update
     * @param newPassword new password to set
     * @throws SQLException if a database error occurs
     */
    public void updatePassword(int userId, String newPassword) throws SQLException {
        String sql = "UPDATE users SET password = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            // Hash the new password before storing
            String hashedPassword = BCrypt.hashpw(newPassword, BCrypt.gensalt());
            ps.setString(1, hashedPassword);
            ps.setInt(2, userId);
            
            int rowsAffected = ps.executeUpdate();
            if (rowsAffected == 0) {
                throw new SQLException("Failed to update password: No rows affected.");
            }
        }
    }
    
    /**
     * Update user profile information with optional fields
     * This method handles updating the user's basic information and password
     * Phone and address fields are not currently stored in the database
     * 
     * @param user The user object containing updated information
     * @param newPassword New password (can be null if not changing)
     * @param phoneNumber User's phone number (stored in session only)
     * @param address User's address (stored in session only)
     * @throws SQLException if a database error occurs
     */
    public void updateUserProfile(User user, String newPassword, String phoneNumber, String address) throws SQLException {
        // First, update the basic user information
        String sql = "UPDATE users SET firstName = ?, lastName = ?, email = ?, role = ?, faceIdEnabled = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, user.getFirstName());
            ps.setString(2, user.getLastName());
            ps.setString(3, user.getEmail());
            ps.setString(4, user.getRole());
            ps.setBoolean(5, user.isFaceIdEnabled());
            ps.setInt(6, user.getId());

            int rowsAffected = ps.executeUpdate();
            if (rowsAffected == 0) {
                throw new SQLException("Failed to update user: No rows affected.");
            }
        }
        
        // If a new password was provided, update it
        if (newPassword != null && !newPassword.isEmpty()) {
            updatePassword(user.getId(), newPassword);
        }
        
        // Note: phoneNumber and address are not stored in the database
        // In a production app, you would either:
        // 1. Add these columns to the users table
        // 2. Create a separate user_profiles table to store this additional information
        // 3. Store these in the user's session or application context
    }
    
    /**
     * Validates if a given plaintext password matches the stored hash for a user
     * 
     * @param userId ID of the user to validate password for
     * @param plainTextPassword The plaintext password to check
     * @return true if the password matches, false otherwise
     * @throws SQLException if a database error occurs
     */
    public boolean validatePassword(int userId, String plainTextPassword) throws SQLException {
        String sql = "SELECT password FROM users WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, userId);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    String storedHash = rs.getString("password");
                    return BCrypt.checkpw(plainTextPassword, storedHash);
                } else {
                    return false; // User not found
                }
            }
        }
    }

    // Custom exception for when a user already exists
    public static class UserAlreadyExistsException extends RuntimeException {
        public UserAlreadyExistsException(String message) {
            super(message);
        }
    }

    /**
     * Ban a user for a specified duration with a reason
     * 
     * @param userId ID of the user to ban
     * @param reason Reason for the ban
     * @param durationInHours Duration of the ban in hours (null for permanent ban)
     * @return true if the user was successfully banned
     * @throws SQLException if a database error occurs
     */
    public boolean banUser(int userId, String reason, Integer durationInHours) throws SQLException {
        // First, retrieve the user to check if they exist
        User user = findById(userId);
        if (user == null) {
            return false; // User not found
        }

        // Calculate the expiry timestamp if a duration is provided
        Timestamp expiryDate = null;
        if (durationInHours != null) {
            // Current time + duration in hours
            LocalDateTime expiry = LocalDateTime.now().plusHours(durationInHours);
            expiryDate = Timestamp.valueOf(expiry);
        }

        // Update the user's ban status
        String sql = "UPDATE users SET isBanned = ?, banReason = ?, banExpiryDate = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setBoolean(1, true);
            ps.setString(2, reason);
            ps.setTimestamp(3, expiryDate);
            ps.setInt(4, userId);

            int rowsAffected = ps.executeUpdate();
            return rowsAffected > 0;
        }
    }

    /**
     * Unban a user
     * 
     * @param userId ID of the user to unban
     * @return true if the user was successfully unbanned
     * @throws SQLException if a database error occurs
     */
    public boolean unbanUser(int userId) throws SQLException {
        // Update the user's ban status
        String sql = "UPDATE users SET isBanned = ?, banReason = NULL, banExpiryDate = NULL WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setBoolean(1, false);
            ps.setInt(2, userId);

            int rowsAffected = ps.executeUpdate();
            return rowsAffected > 0;
        }
    }

    /**
     * Check if a user is currently banned, taking into account ban expiry
     *
     * @param userId ID of the user to check
     * @return true if the user is currently banned, false otherwise
     * @throws SQLException if a database error occurs
     */
    public boolean isUserBanned(int userId) throws SQLException {
        String sql = "SELECT isBanned, banExpiryDate FROM users WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, userId);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    boolean isBanned = false;
                    try {
                        isBanned = rs.getBoolean("isBanned");
                    } catch (SQLException e) {
                        // Column doesn't exist yet, default to not banned
                        isBanned = false;
                    }
                    if (!isBanned) {
                        return false; // User is not banned
                    }
                    
                    // Check if the ban has expired
                    Timestamp expiryDate = null;
                    try {
                        expiryDate = rs.getTimestamp("banExpiryDate");
                    } catch (SQLException e) {
                        // Column doesn't exist yet, default to no expiry
                        expiryDate = null;
                    }
                    if (expiryDate == null) {
                        return true; // Permanent ban (no expiry date)
                    }
                    
                    // Compare with current time
                    return expiryDate.after(new Timestamp(System.currentTimeMillis()));
                }
                return false; // User not found
            }
        }
    }

    /**
     * Update the last login time for a user
     *
     * @param userId ID of the user
     * @return true if the update was successful
     * @throws SQLException if a database error occurs
     */
    public boolean updateLastLogin(int userId) throws SQLException {
        String sql = "UPDATE users SET lastLogin = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setTimestamp(1, new Timestamp(System.currentTimeMillis()));
            ps.setInt(2, userId);
            
            int rowsAffected = ps.executeUpdate();
            return rowsAffected > 0;
        }
    }
    
    /**
     * Find users by username (matches partial names)
     *
     * @param username The username to search for (searches in firstName and lastName)
     * @return List of users matching the search criteria
     * @throws SQLException if a database error occurs
     */
    public List<User> findByUsername(String username) throws SQLException {
        String sql = "SELECT * FROM users WHERE CONCAT(firstName, ' ', lastName) LIKE ? OR firstName LIKE ? OR lastName LIKE ?";
        List<User> users = new ArrayList<>();
        
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            String searchPattern = "%" + username + "%";
            ps.setString(1, searchPattern);
            ps.setString(2, searchPattern);
            ps.setString(3, searchPattern);
            
            try (ResultSet rs = ps.executeQuery()) {
                while (rs.next()) {
                    User user = new User();
                    user.setId(rs.getInt("id"));
                    user.setFirstName(rs.getString("firstName"));
                    user.setLastName(rs.getString("lastName"));
                    user.setEmail(rs.getString("email"));
                    user.setPassword(rs.getString("password"));
                    user.setRole(rs.getString("role"));
                   user.setFaceIdEnabled(rs.getBoolean("faceIdEnabled"));
                    try {
                        user.setBanned(rs.getBoolean("isBanned"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setBanned(false);
                    }
                    try {
                        user.setBanReason(rs.getString("banReason"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setBanReason(null);
                    }
                    try {
                        user.setBanExpiryDate(rs.getTimestamp("banExpiryDate"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setBanExpiryDate(null);
                    }
                    try {
                        user.setLastLogin(rs.getTimestamp("lastLogin"));
                    } catch (SQLException e) {
                        // Column doesn't exist yet, set default value
                        user.setLastLogin(null);
                    }
                    users.add(user);
                }
            }
        }
        
        return users;
    }
}
