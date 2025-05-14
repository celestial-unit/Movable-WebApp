package Services;

import Models.Favorite;
import utils.MyConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class FavoriteService implements IDestination<Favorite> {
    private Connection cnx;

    public FavoriteService() {
        this.cnx = MyConnection.getInstance().getConnection();
    }
    @Override
    public void create(Favorite favorite) throws SQLException {
        String query = "INSERT INTO favorite (user_id, destination_id) VALUES (?, ?)";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, favorite.getId_user());
            pst.setInt(2, favorite.getId_destination());
            pst.executeUpdate();
        }

    }

    @Override
    public void update(Favorite favorite) throws SQLException {
        // Typically not needed for favorites, but can implement if needed
        throw new UnsupportedOperationException("Update not supported for favorites");
    }

    @Override
    public void delete(Favorite favorite) throws SQLException {
        String query = "DELETE FROM favorite WHERE user_id = ? AND destination_id = ?";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, favorite.getId_user());
            pst.setInt(2, favorite.getId_destination());
            pst.executeUpdate();
        }

    }

    @Override
    public List<Favorite> readAll() throws SQLException {
        List<Favorite> favorites = new ArrayList<>();
        String query = "SELECT * FROM favorite";
        try (Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {
            while (rs.next()) {
                favorites.add(new Favorite(
                        rs.getInt("user_id"),
                        rs.getInt("destination_id")
                ));
            }
        }
        return favorites;
    }

    public  boolean isFavorite(int userId, int destinationId) throws SQLException {
        String query = "SELECT COUNT(*) FROM favorite WHERE user_id = ? AND destination_id = ?";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, destinationId);
            try (ResultSet rs = pst.executeQuery()) {
                return rs.next() && rs.getInt(1) > 0;
            }
        }
    }

    public List<Favorite> getFavoritesByUser(int userId) throws SQLException {
        List<Favorite> favorites = new ArrayList<>();
        String query = "SELECT * FROM favorite WHERE user_id = ?";
        try (PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            try (ResultSet rs = pst.executeQuery()) {
                while (rs.next()) {
                    favorites.add(new Favorite(
                            rs.getInt("user_id"),
                            rs.getInt("destination_id")
                    ));
                }
            }
        }
        return favorites;
    }
}
