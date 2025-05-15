package Services;

import Models.Destination;
import utils.MyConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class DestinationService implements IDestination<Destination> {

    private Connection cnx;
    
    public DestinationService() {
        this.cnx = MyConnection.getInstance().getConnection();
        try {
            verifyTable();
            initializeSampleData();  // Add sample data if table is empty
        } catch (SQLException e) {
            System.err.println("Failed to initialize destination service: " + e.getMessage());
            e.printStackTrace();
        }
    }
    
    /**
     * Verifies that the destination table exists with the correct structure
     * Creates the table if it doesn't exist
     */
    private void verifyTable() throws SQLException {
        String createTableSQL = "CREATE TABLE IF NOT EXISTS destination (" +
            "id_destination INT AUTO_INCREMENT PRIMARY KEY, " +
            "name VARCHAR(255) NOT NULL, " +
            "location VARCHAR(255) NOT NULL, " +
            "category VARCHAR(100), " +
            "status VARCHAR(50), " +
            "routes TEXT, " +
            "contact_information VARCHAR(255), " +
            "image VARCHAR(255), " +
            "description TEXT, " +
            "rating INT" +
            ")";
        
        try (Statement stmt = cnx.createStatement()) {
            stmt.execute(createTableSQL);
            System.out.println("Destination table verified/created successfully!");
        } catch (SQLException e) {
            System.err.println("Error verifying destination table: " + e.getMessage());
            throw e;
        }
    }
    
    /**
     * Check if the table is empty and add sample data if needed
     */
    private void initializeSampleData() throws SQLException {
        // First check if table is empty
        String countQuery = "SELECT COUNT(*) FROM destination";
        try (Statement stmt = cnx.createStatement();
             ResultSet rs = stmt.executeQuery(countQuery)) {
            if (rs.next() && rs.getInt(1) == 0) {
                // Table is empty, add sample data
                // Use the image paths we verified exist in resources
                // Use resource paths instead of file paths
                String insertSampleData = 
                    "INSERT INTO destination (name, location, category, status, routes, contact_information, image, description, rating) " +
                    "VALUES " +
                    "('Paris Tour', '48.8566,2.3522', 'Tourism', 'Active', 'Direct', '+33 1 23 45 67 89', '/background_image.jpg', 'Visit the beautiful city of Paris', 5), " +
                    "('London Adventure', '51.5074,-0.1278', 'Adventure', 'Active', 'Express', '+44 20 1234 5678', '/background_image.jpg', 'Explore historic London', 4), " +
                    "('Rome Experience', '41.9028,12.4964', 'Culture', 'Active', 'Scenic', '+39 06 1234 5678', '/background_image.jpg', 'Discover ancient Rome', 5)";
                
                try (Statement insertStmt = cnx.createStatement()) {
                    insertStmt.executeUpdate(insertSampleData);
                    System.out.println("Sample destinations added successfully!");
                }
            }
        } catch (SQLException e) {
            System.err.println("Error initializing sample data: " + e.getMessage());
            throw e;
        }
    }

    @Override
    public void create(Destination destination) throws SQLException {
        String query = "INSERT into destination (name, location, category, status, routes, contact_information, image, description, rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        try (PreparedStatement pst = cnx.prepareStatement(query, Statement.RETURN_GENERATED_KEYS)) {
            // Fix parameter ordering to match column order in SQL query
            pst.setString(1, destination.getName());  // Fixed order
            pst.setString(2, destination.getLocation());  // Fixed order
            pst.setString(3, destination.getCategory());
            pst.setString(4, destination.getStatus());
            pst.setString(5, destination.getRoutes());
            pst.setString(6, destination.getContact_information());
            pst.setString(7, destination.getImage());
            pst.setString(8, destination.getDescription());
            pst.setInt(9, destination.getRating());
            
            pst.executeUpdate();
            try (ResultSet generatedKeys = pst.getGeneratedKeys()) {
                if (generatedKeys.next()) {
                    int id_destination = generatedKeys.getInt(1); // Retrieve the auto-generated ID
                    destination.setId_destination(id_destination); // Set the ID in the object
                    System.out.println("Destination created successfully! ID: " + id_destination);
                } else {
                    throw new SQLException("Failed to retrieve auto-generated ID.");
                }
            }
        } catch (SQLException e) {
            System.err.println("Error creating destination: " + e.getMessage());
            throw e;
        }

    }

    @Override
    public void update(Destination destination) throws SQLException{
        String query = "update destination set name = ?, location = ?, category = ?, status = ?, routes = ?, contact_information = ?, image = ?, description = ?, rating = ? WHERE id_destination = ?";
        PreparedStatement pst = cnx.prepareStatement(query) ;
        pst.setString(1, destination.getName());
        pst.setString(2, destination.getLocation());
        pst.setString(3, destination.getCategory());
        pst.setString(4, destination.getStatus());
        pst.setString(5, destination.getRoutes());
        pst.setString(6, destination.getContact_information());
        pst.setString(7, destination.getImage());
        pst.setString(8, destination.getDescription());
        pst.setInt(9, destination.getRating());
        pst.setInt(10, destination.getId_destination());
        pst.executeUpdate();
    }

    @Override
    public void delete(Destination destination) throws SQLException{
        String query = "delete from destination where id_destination = ?";
        PreparedStatement pst = cnx.prepareStatement(query);
        pst.setInt(1, destination.getId_destination());
        pst.executeUpdate();
    }

    @Override
    public List<Destination> readAll() throws SQLException {
        List<Destination> destinations = new ArrayList<>();
        String query = "SELECT * FROM destination";
        
        System.out.println("Executing readAll query (session-independent)...");
        
        // Enhanced connection validation and recovery
        int retryCount = 0;
        int maxRetries = 3;
        boolean connectionSuccess = false;
        
        while (!connectionSuccess && retryCount < maxRetries) {
            try {
                // Validate connection before using it
                if (cnx == null || cnx.isClosed()) {
                    System.out.println("Connection was null or closed, getting new connection (attempt " + (retryCount + 1) + ")");
                    cnx = MyConnection.getInstance().getConnection();
                }
                
                // Test connection with a simple query
                try (Statement testStmt = cnx.createStatement()) {
                    testStmt.executeQuery("SELECT 1");
                    connectionSuccess = true;
                    System.out.println("Database connection test successful");
                }
            } catch (SQLException e) {
                retryCount++;
                System.err.println("Connection attempt " + retryCount + " failed: " + e.getMessage());
                
                if (retryCount >= maxRetries) {
                    System.err.println("Maximum connection retry attempts exceeded");
                    throw new SQLException("Failed to establish database connection after " + maxRetries + " attempts", e);
                }
                
                // Wait before retrying
                try {
                    Thread.sleep(1000); // 1 second delay between retries
                } catch (InterruptedException ie) {
                    Thread.currentThread().interrupt();
                }
            }
        }
        
        // Now execute the actual query
        try (Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {
            
            System.out.println("Query executed successfully, processing results...");
            
            while (rs.next()) {
                try {
                    String imagePath = rs.getString("image");
                    String name = rs.getString("name");
                    int id = rs.getInt("id_destination");
                    System.out.println("Loading destination ID: " + id + ", Name: " + name);
                    
                    // Add null checks to prevent NullPointerException
                    Destination destination = new Destination(
                        rs.getString("location") != null ? rs.getString("location") : "",
                        name != null ? name : "",
                        id,
                        rs.getString("category") != null ? rs.getString("category") : "",
                        rs.getString("status") != null ? rs.getString("status") : "",
                        rs.getString("routes") != null ? rs.getString("routes") : "",
                        rs.getString("contact_information") != null ? rs.getString("contact_information") : "",
                        imagePath != null ? imagePath : "",
                        rs.getString("description") != null ? rs.getString("description") : "",
                        rs.getInt("rating")
                    );
                    destinations.add(destination);
                } catch (Exception e) {
                    System.err.println("Error mapping destination: " + e.getMessage());
                    e.printStackTrace();
                    // Continue with next record instead of failing entire operation
                    continue;
                }
            }
        } catch (SQLException e) {
            System.err.println("Database error in readAll(): " + e.getMessage());
            e.printStackTrace();
            
            // Check if we have any destinations already loaded before failing
            if (!destinations.isEmpty()) {
                System.out.println("Returning " + destinations.size() + " destinations despite error");
                return destinations; // Return partial results if we have any
            }
            
            throw e; // Re-throw if we couldn't load any destinations
        }
        
        System.out.println("Successfully loaded " + destinations.size() + " destinations");
        
        return destinations;
    }

    public void refresh(Destination destination) throws SQLException {
        String query = "SELECT * FROM destination WHERE id_destination = ?";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, destination.getId_destination());
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                destination.setName(rs.getString("name"));
                // Update all other fields from database
            }
        }
    }

    /**
     * Search for destinations by name or location
     * This method works without requiring a user session
     * 
     * @param searchQuery The search term to look for
     * @return List of destinations matching the search criteria
     * @throws SQLException If a database error occurs
     */
    public List<Destination> getDestinationsBySearch(String searchQuery) throws SQLException {
        List<Destination> filteredDestinations = new ArrayList<>();
        
        // Provide a default result for empty searches
        if (searchQuery == null || searchQuery.trim().isEmpty()) {
            System.out.println("Empty search query, returning all destinations");
            return readAll();
        }
        
        String query = "SELECT * FROM destination WHERE name LIKE ? OR location LIKE ? OR category LIKE ?";
        
        // Validate connection before using it
        if (cnx == null || cnx.isClosed()) {
            System.out.println("Connection was null or closed, getting new connection for search");
            cnx = MyConnection.getInstance().getConnection();
        }

        try (PreparedStatement stmt = cnx.prepareStatement(query)) {
            String searchTerm = "%" + searchQuery + "%";  // Using wildcards for LIKE query
            stmt.setString(1, searchTerm);
            stmt.setString(2, searchTerm);
            stmt.setString(3, searchTerm);  // Added category search
            
            System.out.println("Executing search query for term: " + searchQuery);
            ResultSet rs = stmt.executeQuery();
            
            while (rs.next()) {
                try {
                    filteredDestinations.add(mapDestination(rs));
                } catch (Exception e) {
                    System.err.println("Error mapping search result: " + e.getMessage());
                    // Continue to next result rather than failing entire search
                }
            }
            
            System.out.println("Search found " + filteredDestinations.size() + " results for: " + searchQuery);
        } catch (SQLException e) {
            System.err.println("Database error in search: " + e.getMessage());
            e.printStackTrace();
            throw e;
        }
        
        return filteredDestinations;
    }
    private Destination mapDestination(ResultSet rs) throws SQLException {
        int id = rs.getInt("id_destination");  // Assuming "id" is the primary key for the destination
        String name = rs.getString("name");  // Assuming "name" column holds the name of the destination
        String location = rs.getString("location");  // Assuming "location" column contains location details
        String description = rs.getString("description");  // If you have a description field
        String category = rs.getString("category");
        String status = rs.getString("status");
        String routes = rs.getString("routes");
        String contact_information = rs.getString("contact_information");
        String image = rs.getString("image");
        int rating = rs.getInt("rating");


        // Return a new Destination object with the mapped fields
        return new Destination(location,name,id,category,status,routes,contact_information,image,description,rating);
    }



}