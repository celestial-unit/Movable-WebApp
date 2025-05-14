package services;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import entities.Reservation;
import utils.myConnection;

public class ReservationDAO {

    public static List<Reservation> getReservationsByAgentId(int agentId) {
        List<Reservation> reservations = new ArrayList<>();

        try {
            Connection conn = myConnection.getInstance().getConnection(); // Use your myConnection class
            String sql = "SELECT id, date, details FROM reservations WHERE agent_id = ?";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setInt(1, agentId);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                reservations.add(new Reservation(
                        rs.getInt("id"),
                        rs.getDate("date").toLocalDate(),
                        rs.getString("details")
                ));
            }
        } catch (SQLException e) {
            System.err.println("Error retrieving reservations: " + e.getMessage());
        }

        return reservations;
    }
}
