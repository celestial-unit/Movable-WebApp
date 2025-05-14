package Services;

import Models.ParkingSpot;
import utils.MyConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ParkingService implements IDestination<ParkingSpot> {

    private Connection cnx;

    public ParkingService() {
        cnx = MyConnection.getInstance().getConnection();
    }

    @Override
    public void create(ParkingSpot parkingSpot) throws SQLException {
        String query = "INSERT INTO parkingspot (id_destination, spot_number, is_accessible, is_available, size, notes, parking_fees) VALUES (?, ?, ?, ?, ?, ?, ?)";
        PreparedStatement pst = cnx.prepareStatement(query, Statement.RETURN_GENERATED_KEYS);
        pst.setInt(1, parkingSpot.getId_destination()); // Foreign key
        pst.setString(2, parkingSpot.getSpot_number());
        pst.setBoolean(3, parkingSpot.isIs_accessible());
        pst.setBoolean(4, parkingSpot.isIs_available());
        pst.setInt(5, parkingSpot.getSize());
        pst.setString(6, parkingSpot.getNotes());
        pst.setFloat(7, parkingSpot.getParking_fees());
        pst.executeUpdate();
        // Retrieve the auto-generated id_parking
        try (ResultSet generatedKeys = pst.getGeneratedKeys()) {
            if (generatedKeys.next()) {
                int id_parking = generatedKeys.getInt(1); // Retrieve the auto-generated ID
                parkingSpot.setId_parking(id_parking); // Set the ID in the object
                System.out.println("Parking spot created successfully! ID: " + id_parking);
            } else {
                throw new SQLException("Failed to retrieve auto-generated ID.");
            }
        }
    }

    @Override
    public void update(ParkingSpot parkingSpot) throws SQLException {
        String query = "UPDATE parkingspot SET id_destination = ?, spot_number = ?, is_accessible = ?, is_available = ?, size = ?, notes = ?, parking_fees = ? WHERE id_parking = ?";
        PreparedStatement pst = cnx.prepareStatement(query);
        pst.setInt(1, parkingSpot.getId_destination()); // Foreign key
        pst.setString(2, parkingSpot.getSpot_number());
        pst.setBoolean(3, parkingSpot.isIs_accessible());
        pst.setBoolean(4, parkingSpot.isIs_available());
        pst.setInt(5, parkingSpot.getSize());
        pst.setString(6, parkingSpot.getNotes());
        pst.setFloat(7, parkingSpot.getParking_fees());
        pst.setInt(8, parkingSpot.getId_parking());
        pst.executeUpdate();

    }

    @Override
    public void delete(ParkingSpot parkingSpot) throws SQLException {
        String query = "DELETE FROM parkingspot WHERE id_parking = ?";
        PreparedStatement pst = cnx.prepareStatement(query);
        pst.setInt(1, parkingSpot.getId_parking());
        pst.executeUpdate();
    }

    @Override
    public List<ParkingSpot> readAll() throws SQLException {
        List<ParkingSpot> parkingSpots = new ArrayList<>();
        String query = "SELECT * FROM parkingspot";
        Statement st = cnx.createStatement(); ResultSet rs = st.executeQuery(query);
        while (rs.next()) {
            ParkingSpot parkingSpot = new ParkingSpot(
                    rs.getInt("id_parking"),
                    rs.getInt("id_destination"),
                    rs.getInt("size"),
                    rs.getBoolean("is_available"),
                    rs.getBoolean("is_accessible"),
                    rs.getString("spot_number"),
                    rs.getString("notes"),
                    rs.getFloat("parking_fees")
            );
            parkingSpots.add(parkingSpot);
        }
        return parkingSpots;
    }
    // Add this method to filter by destination
    public List<ParkingSpot> getParkingByDestination(int destinationId) throws SQLException {
        String query = "SELECT * FROM parkingspot WHERE id_destination = ?";
        List<ParkingSpot> spots = new ArrayList<>();

        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, destinationId);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                spots.add(new ParkingSpot(
                        rs.getInt("id_parking"),
                        rs.getInt("id_destination"),
                        rs.getInt("size"),
                        rs.getBoolean("is_available"),
                        rs.getBoolean("is_accessible"),
                        rs.getString("spot_number"),
                        rs.getString("notes"),
                        rs.getFloat("parking_fees")
                ));
            }
        }
        return spots;
    }

    public List<ParkingSpot> getParkingByDestinationAndMaxFee(int destinationId, float maxFee) throws SQLException {
        List<ParkingSpot> filteredSpots = new ArrayList<>();
        String query = "SELECT * FROM parkingspot WHERE id_destination = ? AND parking_fees <= ?";

        try (PreparedStatement stmt = cnx.prepareStatement(query)) {
            stmt.setInt(1, destinationId);  // Set the destination ID
            stmt.setFloat(2, maxFee);        // Set the max fee
            ResultSet rs = stmt.executeQuery();
            while (rs.next()) {
                filteredSpots.add(mapParkingSpot(rs));  // Add the mapped parking spot to the list
            }
        }
        return filteredSpots;
    }

    private ParkingSpot mapParkingSpot(ResultSet rs) throws SQLException {
        int idParking = rs.getInt("id_parking");
        int idDestination = rs.getInt("id_destination");
        int size = rs.getInt("size");
        boolean isAvailable = rs.getBoolean("is_available");
        boolean isAccessible = rs.getBoolean("is_accessible");
        String spotNumber = rs.getString("spot_number");
        String notes = rs.getString("notes");
        float parkingFees = rs.getFloat("parking_fees");

        // Assuming ParkingSpot has a constructor that matches these parameters
        return new ParkingSpot(idParking, idDestination, size, isAvailable, isAccessible, spotNumber, notes, parkingFees);
    }

    public List<ParkingSpot> getParkingByAvailabilityAndDestination(boolean isAvailable, int destinationId) throws SQLException {
        List<ParkingSpot> filteredSpots = new ArrayList<>();
        String query = "SELECT * FROM parkingspot WHERE is_available = ? AND id_destination = ?";  // SQL query to filter by both availability and destination ID

        try (PreparedStatement stmt = cnx.prepareStatement(query)) {
            stmt.setBoolean(1, isAvailable);
            stmt.setInt(2, destinationId);  // Filtering by the specific destination
            ResultSet rs = stmt.executeQuery();
            while (rs.next()) {
                filteredSpots.add(mapParkingSpot(rs));  // Map result set to parking spot
            }
        }
        return filteredSpots;
    }






}
