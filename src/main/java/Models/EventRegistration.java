package Models;

import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ObservableValue;

import java.sql.Timestamp;

public class EventRegistration {
    private int id;
    private int eventId;
    private int userId;
    private Timestamp registrationDate;
    private String status; // Pending, Confirmed, Canceled

    // No-argument constructor (required for JavaFX and ORM frameworks)
    public EventRegistration() {
    }

    // Constructor without ID (for new registrations)
    public EventRegistration(int eventId, int userId, Timestamp registrationDate, String status) {
        this.eventId = eventId;
        this.userId = userId;
        this.registrationDate = registrationDate;
        this.status = status;
    }

    // Constructor with ID (for existing records)
    public EventRegistration(int id, int eventId, int userId, Timestamp registrationDate, String status) {
        this.id = id;
        this.eventId = eventId;
        this.userId = userId;
        this.registrationDate = registrationDate;
        this.status = status;
    }

    // Getters and Setters
    public int getId() { return id; }
    public void setId(int id) { this.id = id; }

    public int getEventId() { return eventId; }
    public void setEventId(int eventId) { this.eventId = eventId; }
    
    public int getUserId() { return userId; }
    public void setUserId(int userId) { this.userId = userId; }

    public Timestamp getRegistrationDate() { return registrationDate; }
    public void setRegistrationDate(Timestamp registrationDate) { this.registrationDate = registrationDate; }

    public String getStatus() { return status; }
    public void setStatus(String status) { this.status = status; }

    @Override
    public String toString() {
        return "EventRegistration{" +
                "id=" + id +
                ", eventId=" + eventId +
                ", userId=" + userId +
                ", registrationDate=" + registrationDate +
                ", status='" + status + '\'' +
                '}';
    }

    // Property methods for JavaFX bindings
    public SimpleIntegerProperty idProperty() {
        return new SimpleIntegerProperty(id);
    }

    public SimpleIntegerProperty eventIdProperty() {
        return new SimpleIntegerProperty(eventId);
    }
    
    public SimpleIntegerProperty userIdProperty() {
        return new SimpleIntegerProperty(userId);
    }

    public ObservableValue<String> registrationDateProperty() {
        return new SimpleStringProperty(registrationDate.toString());
    }

    public ObservableValue<String> statusProperty() {
        return new SimpleStringProperty(status);
    }
}
