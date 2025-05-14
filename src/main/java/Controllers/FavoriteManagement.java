package Controllers;

import Models.Destination;
import utils.MyConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class FavoriteManagement {
    private Connection cnx;

    public FavoriteManagement() {
        this.cnx = MyConnection.getInstance().getConnection();
        if (cnx == null) {
            throw new RuntimeException("Database connection is null!");
        }
        try {
            System.out.println("Connection valid? " + !cnx.isClosed());
        } catch (SQLException e) {
            throw new RuntimeException("Error checking connection status", e);
        }
    }

    // Add a favorite
    public void addFavorite(int destinationId) throws SQLException {
        int userId = UserSession.getCurrentUserId();

        if (isFavorite(destinationId)) {
            System.out.println("Favorite already exists, skipping insert");
            return;
        }

        String query = "INSERT INTO favorite (id_user, id_destination) VALUES (?, ?)";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, destinationId);
            int rows = pst.executeUpdate();
            System.out.println("Inserted " + rows + " row(s)");
        } catch (SQLIntegrityConstraintViolationException e) {
            System.err.println("Duplicate favorite: " + e.getMessage());
        } catch (SQLException e) {
            System.err.println("SQL Error in addFavorite: " + e.getMessage());
            throw e;
        }
    }

    // Remove a favorite
    public void removeFavorite(int destinationId) throws SQLException {
        int userId = UserSession.getCurrentUserId();
        String query = "DELETE FROM favorite WHERE id_user = ? AND id_destination = ?";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, destinationId);
            pst.executeUpdate();
        }
    }

    public boolean isFavorite(int destinationId) throws SQLException {
        int userId = UserSession.getCurrentUserId();
        String query = "SELECT COUNT(*) FROM favorite WHERE id_user = ? AND id_destination = ?";

        System.out.println("Checking favorite for user: " + userId + ", destination: " + destinationId);

        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, destinationId);

            try (ResultSet rs = pst.executeQuery()) {
                if (rs.next()) {
                    int count = rs.getInt(1);
                    System.out.println("Favorite count: " + count);
                    return count > 0;
                }
                return false;
            }
        } catch (SQLException e) {
            System.err.println("SQL Error in isFavorite: " + e.getMessage());
            throw e;
        }
    }

    public  List<Destination> getUserFavorites(int userId) throws SQLException {
        List<Destination> favorites = new ArrayList<>();
        String query = "SELECT d.* FROM destination d " +
                "JOIN favorite f ON d.id_destination = f.id_destination " +
                "WHERE f.id_user = ?";

        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            try (ResultSet rs = pst.executeQuery()) {
                while (rs.next()) {
                    favorites.add(new Destination(
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
                    ));
                }
            }
        }
        return favorites;
    }


}