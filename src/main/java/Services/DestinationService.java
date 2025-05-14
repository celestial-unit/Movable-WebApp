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
    }

    @Override
    public void create(Destination destination) throws SQLException {
        String query = "INSERT into destination (name, location, category, status, routes, contact_information, image, description, rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        PreparedStatement pst = cnx.prepareStatement(query, Statement.RETURN_GENERATED_KEYS);
        pst.setString(2, destination.getName());
        pst.setString(1, destination.getLocation());
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
    public List<Destination> readAll() throws SQLException{
        List<Destination> destinations = new ArrayList<>();
        String query = "SELECT * FROM destination";
        Statement st = cnx.createStatement();
        ResultSet rs = st.executeQuery(query);
        while (rs.next()) {
            Destination destination = new Destination(
                    rs.getString("location"),
                    rs.getString("name"),
                    rs.getInt("id_destination"),
                    rs.getString("category"),
                    rs.getString("status"),
                    rs.getString("routes"),
                    rs.getString("contact_information"),
                    rs.getString("image"),
                    rs.getString("description"),
                    rs.getInt("rating")
            );
            destinations.add(destination);
        }

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

    public List<Destination> getDestinationsBySearch(String searchQuery) throws SQLException {
        List<Destination> filteredDestinations = new ArrayList<>();
        String query = "SELECT * FROM destination WHERE name LIKE ? OR location LIKE ?";  // Modify based on your table schema

        try (PreparedStatement stmt = cnx.prepareStatement(query)) {
            String searchTerm = "%" + searchQuery + "%";  // Using wildcards for LIKE query
            stmt.setString(1, searchTerm);
            stmt.setString(2, searchTerm);

            ResultSet rs = stmt.executeQuery();
            while (rs.next()) {
                filteredDestinations.add(mapDestination(rs));
            }
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