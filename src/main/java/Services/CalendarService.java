package services;
import entities.CalendarActivity;
import utils.myConnection;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.util.ArrayList;
import java.util.List;

import java.sql.*;
import java.time.LocalDate;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.util.ArrayList;
import java.util.List;

public class CalendarService {

    public static List<CalendarActivity> getReservationsByAgentId(int agentId) {
        List<CalendarActivity> reservations = new ArrayList<>();

        try {
            // Use the singleton connection
            Connection conn = myConnection.getInstance().getConnection();

            String sql = "SELECT id, date, details FROM reservations WHERE agent_id = ?";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setInt(1, agentId);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                LocalDate localDate = rs.getDate("date").toLocalDate();
                ZonedDateTime dateTime = localDate.atStartOfDay(ZoneId.systemDefault());

                reservations.add(new CalendarActivity(
                        dateTime,
                        agentId,  // Fixed incorrect assignment
                        rs.getString("details") // Changed from serviceNo to details
                ));
            }

            // Close resources properly
            rs.close();
            stmt.close();

        } catch (SQLException e) {
            e.printStackTrace();
        }

        return reservations;
    }
}

