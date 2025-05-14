package Models;

import javafx.beans.property.*;

import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeParseException;

public class Event {

    private IntegerProperty id;
    private StringProperty title;
    private StringProperty description;
    private IntegerProperty duration;
    private IntegerProperty type;
    private StringProperty status;
    private StringProperty dateEvent;
    private StringProperty startEvent = new SimpleStringProperty();

    // Constructor without 'id' (auto-incremented)
    public Event(String title, String description, int duration, int type, String status, String dateEvent, String startEvent) {
        this.id = new SimpleIntegerProperty();
        this.title = new SimpleStringProperty(title);
        this.description = new SimpleStringProperty(description);
        this.duration = new SimpleIntegerProperty(duration);
        this.type = new SimpleIntegerProperty(type);
        this.status = new SimpleStringProperty(status);
        this.dateEvent = new SimpleStringProperty(dateEvent);
        this.startEvent = new SimpleStringProperty(startEvent);
    }

    // Constructor with 'id' (for fetching from DB)
    public Event(int id, String title, String description, int duration, int type, String status, String dateEvent, String startEvent) {
        this.id = new SimpleIntegerProperty(id);
        this.title = new SimpleStringProperty(title);
        this.description = new SimpleStringProperty(description);
        this.duration = new SimpleIntegerProperty(duration);
        this.type = new SimpleIntegerProperty(type);
        this.status = new SimpleStringProperty(status);
        this.dateEvent = new SimpleStringProperty(dateEvent);
        this.startEvent = new SimpleStringProperty(startEvent);
    }

    // Getters and Setters
    public int getId() {
        return id.get();
    }

    public void setId(int id) {
        this.id.set(id);
    }

    public IntegerProperty idProperty() {
        return id;
    }

    public String getTitle() {
        return title.get();
    }

    public void setTitle(String title) {
        this.title.set(title);
    }

    public StringProperty titleProperty() {
        return title;
    }

    public String getDescription() {
        return description.get();
    }

    public void setDescription(String description) {
        this.description.set(description);
    }

    public StringProperty descriptionProperty() {
        return description;
    }

    public int getDuration() {
        return duration.get();
    }

    public void setDuration(int duration) {
        this.duration.set(duration);
    }

    public IntegerProperty durationProperty() {
        return duration;
    }

    public int getType() {
        return type.get();
    }

    public void setType(int type) {
        this.type.set(type);
    }

    public IntegerProperty typeProperty() {
        return type;
    }

    public String getStatus() {
        return status.get();
    }

    public void setStatus(String status) {
        this.status.set(status);
    }

    public StringProperty statusProperty() {
        return status;
    }

    public String getDateEvent() {
        return dateEvent.get();
    }

    public void setDateEvent(String dateEvent) {
        this.dateEvent.set(dateEvent);
    }

    public StringProperty dateEventProperty() {
        return dateEvent;
    }

    public String getStartEvent() {
        return startEvent.get();
    }

    public void setStartEvent(String startEvent) {
        this.startEvent.set(startEvent);
    }

    public StringProperty startEventProperty() {
        return startEvent;
    }
    @Override
    public String toString() {
        return String.format("  title : %s\n%s |%d min | Price: %d | location: %s | Date: %s | Start: %s",
                 getTitle(), getDescription(), getDuration(), getType(), getStatus(), getDateEvent(), getStartEvent());
    }
    public LocalDateTime getDateTime() {
        try {
            return LocalDateTime.of(
                    LocalDate.parse((CharSequence) this.dateEvent),
                    LocalTime.parse((CharSequence) this.startEvent)
            );
        } catch (DateTimeParseException e) {
            return LocalDateTime.MIN;
        }
    }

}
