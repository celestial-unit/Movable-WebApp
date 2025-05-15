package Model;

public class Transport {
    private int id;
    private String type; // "Bus" or "Car"
    private int capacity;
    private boolean disponibility; // true if available, false otherwise
    private String destination;

    // Constructor
    public Transport(int id, String type, int capacity, boolean disponibility, String destination) {
        this.id = id;
        this.type = type;
        this.capacity = capacity;
        this.disponibility = disponibility;
        this.destination = destination;
    }

    // Constructor without ID (for inserting new transports)
    public Transport(String type, int capacity, boolean disponibility, String destination) {
        this.type = type;
        this.capacity = capacity;
        this.disponibility = disponibility;
        this.destination = destination;
    }

    // Getters and Setters
    public int getId() { return id; }
    public void setId(int id) { this.id = id; }

    public String getType() { return type; }
    public void setType(String type) { this.type = type; }

    public int getCapacity() { return capacity; }
    public void setCapacity(int capacity) { this.capacity = capacity; }

    public boolean isDisponibility() { return disponibility; }
    public void setDisponibility(boolean disponibility) { this.disponibility = disponibility; }

    public String getDestination() { return destination; }
    public void setDestination(String destination) { this.destination = destination; }

    @Override
    public String toString() {
        return type + " - " + capacity + " seats - " + (disponibility ? "Available" : "Not Available") + " - " + destination;
    }




}