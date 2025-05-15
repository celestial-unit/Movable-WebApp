package Services;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;

import Model.Transport;
import utils.MyConnection;

public class TransportService {

    private final Connection connection;

    public TransportService() {
        connection = MyConnection.getInstance().getConnection();
    }

    public List<Transport> getAll() throws SQLException {
        List<Transport> transportList = new ArrayList<>();
        String query = "SELECT * FROM transport";
        try (Statement statement = connection.createStatement(); ResultSet rs = statement.executeQuery(query)) {
            while (rs.next()) {
                Transport transport = new Transport(
                        rs.getInt("id"),
                        rs.getString("type"),
                        rs.getInt("capacity"),
                        rs.getBoolean("disponibility"),
                        rs.getString("destination")
                );
                transportList.add(transport);
            }
        }
        return transportList;
    }

    public void create(Transport transport) throws SQLException {
        String query = "INSERT INTO transport (type, capacity, disponibility, destination) VALUES (?, ?, ?, ?)";
        try (PreparedStatement ps = connection.prepareStatement(query)) {
            ps.setString(1, transport.getType());
            ps.setInt(2, transport.getCapacity());
            ps.setBoolean(3, transport.isDisponibility());
            ps.setString(4, transport.getDestination());
            ps.executeUpdate();
        }
    }

    public void update(Transport transport) throws SQLException {
        String query = "UPDATE transport SET type = ?, capacity = ?, disponibility = ?, destination = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(query)) {
            ps.setString(1, transport.getType());
            ps.setInt(2, transport.getCapacity());
            ps.setBoolean(3, transport.isDisponibility());
            ps.setString(4, transport.getDestination());
            ps.setInt(5, transport.getId());
            ps.executeUpdate();
        }
    }

    public void delete(Transport transport) throws SQLException {
        String query = "DELETE FROM transport WHERE id = ?";
        try (PreparedStatement statement = connection.prepareStatement(query)) {
            statement.setInt(1, transport.getId());
            statement.executeUpdate();
        }
    }
    
    public List<Transport> filterByCapacityAndDestination(int minCapacity, String destination) throws SQLException {
        List<Transport> filteredList = new ArrayList<>();
        String query = "SELECT * FROM transport WHERE capacity >= ? AND destination LIKE ?";
        try (PreparedStatement ps = connection.prepareStatement(query)) {
            ps.setInt(1, minCapacity);
            ps.setString(2, "%" + destination + "%");
            try (ResultSet rs = ps.executeQuery()) {
                while (rs.next()) {
                    Transport transport = new Transport(
                            rs.getInt("id"),
                            rs.getString("type"),
                            rs.getInt("capacity"),
                            rs.getBoolean("disponibility"),
                            rs.getString("destination")
                    );
                    filteredList.add(transport);
                }
            }
        }
        return filteredList;
    }


    public List<Integer> getAvailableTransportIds() throws SQLException {
        List<Integer> availableTransportIds = new ArrayList<>();
        String query = "SELECT id FROM transport WHERE disponibility = true";

        try (PreparedStatement ps = connection.prepareStatement(query);
             ResultSet rs = ps.executeQuery()) {

            while (rs.next()) {
                availableTransportIds.add(rs.getInt("id"));
            }
        }

        return availableTransportIds;
    }
    
    public void close() throws SQLException {
        if (connection != null && !connection.isClosed()) {
            connection.close();
            System.out.println("Database connection closed successfully");
        }
    }
}
