package Models;

import java.time.LocalDate;

public class Ticket {
    private int id;
    private int reservation_id;
    private String paymentMode;
    private String transport;
    private double price;
    private String destination;
    private LocalDate bookingDate;

    public Ticket(int id, int reservation_id, String paymentMode, String transport, double price, String destination, LocalDate bookingDate) {
        this.id = id;
        this.reservation_id = reservation_id;
        this.paymentMode = paymentMode;
        this.transport = transport;
        this.price = price;
        this.destination = destination;
        this.bookingDate = bookingDate;
    }

    public Ticket() {
        // Default constructor
    }

    // Getters
    public int getId() { return id; }
    public int getReservationId() { return reservation_id; }
    public String getPaymentMode() { return paymentMode; }
    public String getTransport() { return transport; }
    public double getPrice() { return price; }
    public String getDestination() { return destination; }
    public LocalDate getBookingDate() { return bookingDate; }

    // Setters
    public void setId(int id) { this.id = id; }
    public void setReservationId(int reservation_id) { this.reservation_id = reservation_id; }
    public void setPaymentMode(String paymentMode) { this.paymentMode = paymentMode; }
    public void setTransport(String transport) { this.transport = transport; }
    public void setPrice(double price) { this.price = price; }
    public void setDestination(String destination) { this.destination = destination; }
    public void setBookingDate(LocalDate bookingDate) { this.bookingDate = bookingDate; }

    @Override
    public String toString() {
        return "Ticket to " + destination + " (" + bookingDate + ")";
    }
}