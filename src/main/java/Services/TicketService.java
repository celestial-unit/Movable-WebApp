package Services;

import Models.Ticket;
import utils.MyDb;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class TicketService implements IService<Ticket> {

    private Connection connection;

    public TicketService() {
        connection = MyDb.getInstance().getConnection();
    }

    @Override
    public void create(Ticket obj) throws SQLException {
        String sql = "INSERT INTO ticket (reservation_id, paymentMode, transport, price, destination, bookingDate) VALUES (?, ?, ?, ?, ?, ?)";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setInt(1, obj.getReservationId());
        stmt.setString(2, obj.getPaymentMode());
        stmt.setString(3, obj.getTransport());
        stmt.setDouble(4, obj.getPrice());
        stmt.setString(5, obj.getDestination());
        stmt.setDate(6, Date.valueOf(obj.getBookingDate()));
        stmt.executeUpdate();
    }

    @Override
    public void update(Ticket obj) throws SQLException {
        String sql = "UPDATE ticket SET reservation_id = ?, paymentMode = ?, transport = ?, price = ?, destination = ?, bookingDate = ? WHERE id = ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setInt(1, obj.getReservationId());
        stmt.setString(2, obj.getPaymentMode());
        stmt.setString(3, obj.getTransport());
        stmt.setDouble(4, obj.getPrice());
        stmt.setString(5, obj.getDestination());
        stmt.setDate(6, Date.valueOf(obj.getBookingDate()));
        stmt.setInt(8, obj.getId());  // Now correctly set as parameter 8
        stmt.executeUpdate();
    }

    @Override
    public void delete(int id) throws SQLException {
        String sql = "DELETE FROM ticket WHERE id = ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setInt(1, id);
        stmt.executeUpdate();
    }

    @Override
    public List<Ticket> read() throws SQLException {
        String sql = "SELECT * FROM ticket";
        Statement statement = connection.createStatement();
        ResultSet rs = statement.executeQuery(sql);
        List<Ticket> tickets = new ArrayList<>();
        while (rs.next()) {
            Ticket ticket = new Ticket();
            ticket.setId(rs.getInt("id"));
            ticket.setReservationId(rs.getInt("reservation_id"));
            ticket.setPaymentMode(rs.getString("paymentMode"));
            ticket.setTransport(rs.getString("transport"));
            ticket.setPrice(rs.getDouble("price"));
            ticket.setDestination(rs.getString("destination"));
            ticket.setBookingDate(rs.getDate("bookingDate").toLocalDate());

            tickets.add(ticket);
        }
        return tickets;
    }
    public List<Ticket> searchTicketsByDestination(String destination) throws SQLException {
        String sql = "SELECT * FROM ticket WHERE destination LIKE ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setString(1, "%" + destination + "%");
        ResultSet rs = stmt.executeQuery();
        return mapResultSetToTickets(rs);
    }

    public List<Ticket> searchTicketsByPrice(double price) throws SQLException {
        String sql = "SELECT * FROM ticket WHERE price = ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setDouble(1, price);
        ResultSet rs = stmt.executeQuery();
        return mapResultSetToTickets(rs);
    }

    public List<Ticket> searchTicketsByBookingDate(String date) throws SQLException {
        String sql = "SELECT * FROM ticket WHERE bookingDate = ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setDate(1, Date.valueOf(date));
        ResultSet rs = stmt.executeQuery();
        return mapResultSetToTickets(rs);
    }

    public List<Ticket> searchTicketsByPaymentMode(String paymentMode) throws SQLException {
        String sql = "SELECT * FROM ticket WHERE paymentMode LIKE ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setString(1, "%" + paymentMode + "%");
        ResultSet rs = stmt.executeQuery();
        return mapResultSetToTickets(rs);
    }

    public List<Ticket> sortTicketsByPrice(boolean ascending) throws SQLException {
        String sql = "SELECT * FROM ticket ORDER BY price " + (ascending ? "ASC" : "DESC");
        Statement stmt = connection.createStatement();
        ResultSet rs = stmt.executeQuery(sql);
        return mapResultSetToTickets(rs);
    }

    public List<Ticket> sortTicketsByBookingDate(boolean mostRecentFirst) throws SQLException {
        String sql = "SELECT * FROM ticket ORDER BY bookingDate " + (mostRecentFirst ? "DESC" : "ASC");
        Statement stmt = connection.createStatement();
        ResultSet rs = stmt.executeQuery(sql);
        return mapResultSetToTickets(rs);
    }

    public List<String> getMostFrequentDestinations() throws SQLException {
        String sql = "SELECT destination, COUNT(*) AS frequency FROM ticket GROUP BY destination ORDER BY frequency DESC";
        Statement stmt = connection.createStatement();
        ResultSet rs = stmt.executeQuery(sql);
        List<String> destinations = new ArrayList<>();
        while (rs.next()) {
            destinations.add(rs.getString("destination"));
        }
        return destinations;
    }

    public Ticket getMostExpensiveOrCheapestTicket(boolean mostExpensive) throws SQLException {
        String sql = "SELECT * FROM ticket ORDER BY price " + (mostExpensive ? "DESC" : "ASC") + " LIMIT 1";
        Statement stmt = connection.createStatement();
        ResultSet rs = stmt.executeQuery(sql);
        if (rs.next()) {
            return mapResultSetToTicket(rs);
        }
        return null;
    }

    private List<Ticket> mapResultSetToTickets(ResultSet rs) throws SQLException {
        List<Ticket> tickets = new ArrayList<>();
        while (rs.next()) {
            tickets.add(mapResultSetToTicket(rs));
        }
        return tickets;
    }

    private Ticket mapResultSetToTicket(ResultSet rs) throws SQLException {
        Ticket ticket = new Ticket();
        ticket.setId(rs.getInt("id"));
        ticket.setReservationId(rs.getInt("reservation_id"));
        ticket.setPaymentMode(rs.getString("paymentMode"));
        ticket.setTransport(rs.getString("transport"));
        ticket.setPrice(rs.getDouble("price"));
        ticket.setDestination(rs.getString("destination"));
        ticket.setBookingDate(rs.getDate("bookingDate").toLocalDate());
        return ticket;
    }


    public List<Ticket> searchTicketsByEmail(String email) throws SQLException {
        String sql = "SELECT t.* FROM ticket t JOIN reservation r ON t.reservation_id = r.id WHERE r.email = ?";
        PreparedStatement stmt = connection.prepareStatement(sql);
        stmt.setString(1, email);
        ResultSet rs = stmt.executeQuery();
        List<Ticket> tickets = new ArrayList<>();
        while (rs.next()) {
            Ticket ticket = new Ticket();
            ticket.setId(rs.getInt("id"));
            ticket.setReservationId(rs.getInt("reservation_id"));
            ticket.setPaymentMode(rs.getString("paymentMode"));
            ticket.setTransport(rs.getString("transport"));
            ticket.setPrice(rs.getDouble("price"));
            ticket.setDestination(rs.getString("destination"));
            ticket.setBookingDate(rs.getDate("bookingDate").toLocalDate());
            tickets.add(ticket);
        }
        return tickets;
    }
}