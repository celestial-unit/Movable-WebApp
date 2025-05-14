package Services;

import Models.Reclamation;
import utils.MyDb;

import java.sql.*;
import java.text.SimpleDateFormat;
import java.util.*;

public class ReclamationService {

    private final Connection connection;

    public ReclamationService() {
        connection = MyDb.getInstance().getConnection();
    }

    // Create a new reclamation (user adds a reclamation)
    public void create(Reclamation reclamation) throws SQLException {
        if (connection == null) return;
        String sql = "INSERT INTO reclamations (title, description, status, user_id) VALUES (?, ?, ?, ?)";
        try (PreparedStatement ps = connection.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS)) {
            ps.setString(1, reclamation.getTitle());
            ps.setString(2, reclamation.getDescription());
            ps.setString(3, reclamation.getStatus());
            if (reclamation.getUserId() == 0) {
                ps.setNull(4, Types.INTEGER); // If userId is 0, set it as NULL
            } else {
                ps.setInt(4, reclamation.getUserId());
            }
            ps.executeUpdate();

            // Get the generated ID
            try (ResultSet rs = ps.getGeneratedKeys()) {
                if (rs.next()) {
                    reclamation.setId(rs.getInt(1));
                }
            }
        }
    }

    // Read all reclamations from the database (admin can view all)
    public List<Reclamation> read() throws SQLException {
        if (connection == null) return new ArrayList<>();
        String sql = "SELECT * FROM reclamations";  // Admin can see all reclamations
        List<Reclamation> reclamations = new ArrayList<>();
        try (Statement stmt = connection.createStatement();
             ResultSet rs = stmt.executeQuery(sql)) {
            while (rs.next()) {
                Reclamation r = new Reclamation();
                r.setId(rs.getInt("id"));
                r.setTitle(rs.getString("title"));
                r.setDescription(rs.getString("description"));
                r.setStatus(rs.getString("status"));
                // Handle possible NULL user_id
                r.setUserId(rs.getObject("user_id") != null ? rs.getInt("user_id") : 0);
                reclamations.add(r);
            }
        }
        return reclamations;
    }

    // Read reclamations by userId (for user-specific reclamations)
    public List<Reclamation> readByUserId(int userId) throws SQLException {
        if (connection == null) return new ArrayList<>();
        String sql = "SELECT * FROM reclamations WHERE user_id = ?";
        List<Reclamation> reclamations = new ArrayList<>();
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, userId);
            try (ResultSet rs = ps.executeQuery()) {
                while (rs.next()) {
                    Reclamation r = new Reclamation();
                    r.setId(rs.getInt("id"));
                    r.setTitle(rs.getString("title"));
                    r.setDescription(rs.getString("description"));
                    r.setStatus(rs.getString("status"));
                    r.setUserId(rs.getInt("user_id"));
                    reclamations.add(r);
                }
            }
        }
        return reclamations;
    }

    // Find a reclamation by its ID
    public Reclamation findById(int id) throws SQLException {
        if (connection == null) return null;
        String sql = "SELECT * FROM reclamations WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, id);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    Reclamation r = new Reclamation();
                    r.setId(rs.getInt("id"));
                    r.setTitle(rs.getString("title"));
                    r.setDescription(rs.getString("description"));
                    r.setStatus(rs.getString("status"));
                    r.setUserId(rs.getInt("user_id"));
                    return r;
                }
            }
        }
        return null;
    }

    // Update an existing reclamation (admin edits a reclamation)
    public void update(Reclamation reclamation) throws SQLException {
        if (connection == null) return;
        String sql = "UPDATE reclamations SET title = ?, description = ?, status = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, reclamation.getTitle());
            ps.setString(2, reclamation.getDescription());
            ps.setString(3, reclamation.getStatus());
            ps.setInt(4, reclamation.getId());
            ps.executeUpdate();
        }
    }

    // Delete a reclamation by its ID (admin can delete reclamations)
    public void delete(int id) throws SQLException {
        if (connection == null) return;
        String sql = "DELETE FROM reclamations WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, id);
            ps.executeUpdate();
        }
    }

    // Update the status of a reclamation (admin updates the status)
    public void updateStatus(int id, String status) throws SQLException {
        if (connection == null) return;
        String sql = "UPDATE reclamations SET status = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, status);
            ps.setInt(2, id);
            ps.executeUpdate();
        }
    }
    // Get reclamation statistics (total count, pending count, resolved count)
    public Map<String, Integer> getReclamationStatistics() throws SQLException {
        if (connection == null) return new HashMap<>();
        Map<String, Integer> statistics = new HashMap<>();
        
        // Get total count
        String totalSql = "SELECT COUNT(*) as total FROM reclamations";
        // Get count by status
        String statusSql = "SELECT status, COUNT(*) as count FROM reclamations GROUP BY status";
        
        try (Statement stmt = connection.createStatement();
             ResultSet totalRs = stmt.executeQuery(totalSql)) {
            if (totalRs.next()) {
                statistics.put("total", totalRs.getInt("total"));
            }
        }
        
        try (Statement stmt = connection.createStatement();
             ResultSet statusRs = stmt.executeQuery(statusSql)) {
            while (statusRs.next()) {
                String status = statusRs.getString("status");
                int count = statusRs.getInt("count");
                statistics.put(status.toLowerCase(), count);
            }
        }
        
        return statistics;
    }
    
    // Get category distribution of reclamations
    public Map<String, Integer> getCategoryDistribution() throws SQLException {
        if (connection == null) return new HashMap<>();
        Map<String, Integer> distribution = new HashMap<>();
        
        // Check if category column exists
        try {
            String sql = "SELECT category, COUNT(*) as count FROM reclamations GROUP BY category ORDER BY count DESC";
            try (Statement stmt = connection.createStatement();
                 ResultSet rs = stmt.executeQuery(sql)) {
                while (rs.next()) {
                    String category = rs.getString("category");
                    // Handle null category
                    if (category == null || category.isEmpty()) {
                        category = "Uncategorized";
                    }
                    distribution.put(category, rs.getInt("count"));
                }
            }
        } catch (SQLException e) {
            // Category column might not exist yet
            distribution.put("General", getReclamationStatistics().getOrDefault("total", 0));
        }
        
        return distribution;
    }
    
    // Get monthly trends of reclamations
    public Map<String, Integer> getMonthlyTrends() throws SQLException {
        if (connection == null) return new HashMap<>();
        Map<String, Integer> trends = new LinkedHashMap<>(); // Use LinkedHashMap to maintain order
        
        // Check if creation_date column exists
        try {
            String sql = "SELECT DATE_FORMAT(creation_date, '%Y-%m') as month, COUNT(*) as count " +
                         "FROM reclamations " +
                         "WHERE creation_date >= DATE_SUB(CURRENT_DATE, INTERVAL 12 MONTH) " +
                         "GROUP BY month " +
                         "ORDER BY month";
            try (Statement stmt = connection.createStatement();
                 ResultSet rs = stmt.executeQuery(sql)) {
                while (rs.next()) {
                    trends.put(rs.getString("month"), rs.getInt("count"));
                }
            }
        } catch (SQLException e) {
            // creation_date column might not exist yet
            // Return empty map as placeholder
            Calendar cal = Calendar.getInstance();
            SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM");
            
            // Get current month and the previous 11 months
            for (int i = 0; i < 12; i++) {
                String monthKey = sdf.format(cal.getTime());
                trends.put(monthKey, 0); // Placeholder value
                cal.add(Calendar.MONTH, -1);
            }
        }
        
        return trends;
    }
    
    // Get reclamation count per status (for pie charts)
    public Map<String, Integer> getStatusDistribution() throws SQLException {
        if (connection == null) return new HashMap<>();
        Map<String, Integer> statusDistribution = new HashMap<>();
        
        String sql = "SELECT status, COUNT(*) as count FROM reclamations GROUP BY status";
        try (Statement stmt = connection.createStatement();
             ResultSet rs = stmt.executeQuery(sql)) {
            while (rs.next()) {
                statusDistribution.put(rs.getString("status"), rs.getInt("count"));
            }
        }
        
        return statusDistribution;
    }
    
    // Count all reclamations in the database
    public int countAllReclamations() throws SQLException {
        if (connection == null) return 0;
        
        String sql = "SELECT COUNT(*) as total FROM reclamations";
        try (Statement stmt = connection.createStatement();
             ResultSet rs = stmt.executeQuery(sql)) {
            if (rs.next()) {
                return rs.getInt("total");
            }
        }
        return 0;
    }
    
    // Count reclamations by status
    public int countReclamationsByStatus(String status) throws SQLException {
        if (connection == null) return 0;
        
        String sql = "SELECT COUNT(*) as count FROM reclamations WHERE status = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, status);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    return rs.getInt("count");
                }
            }
        }
        return 0;
    }
    
    // Get reclamation counts by category for statistics
    public Map<String, Integer> getReclamationCountsByCategory() throws SQLException {
        return getCategoryDistribution();
    }
    
    // Get monthly reclamation counts with abbreviated month names
    public Map<String, Integer> getMonthlyReclamationCounts() throws SQLException {
        Map<String, Integer> monthlyTrends = getMonthlyTrends();
        Map<String, Integer> monthlyReclamationCounts = new LinkedHashMap<>();
        
        for (Map.Entry<String, Integer> entry : monthlyTrends.entrySet()) {
            String yearMonth = entry.getKey(); // Format: yyyy-MM
            Integer count = entry.getValue();
            
            try {
                // Parse the year-month string
                String[] parts = yearMonth.split("-");
                int year = Integer.parseInt(parts[0]);
                int month = Integer.parseInt(parts[1]) - 1; // Calendar months are 0-based
                
                // Create a calendar and set it to the first day of that month
                Calendar calendar = Calendar.getInstance();
                calendar.set(year, month, 1);
                
                // Format the month to abbreviated name (e.g., "Jan", "Feb")
                SimpleDateFormat monthFormat = new SimpleDateFormat("MMM");
                String abbreviatedMonth = monthFormat.format(calendar.getTime());
                
                // Add to the result map
                monthlyReclamationCounts.put(abbreviatedMonth, count);
            } catch (Exception e) {
                // In case of parsing error, use the original key
                monthlyReclamationCounts.put(yearMonth, count);
            }
        }
        
        return monthlyReclamationCounts;
    }
}
