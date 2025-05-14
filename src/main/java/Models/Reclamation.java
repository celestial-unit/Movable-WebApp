package Models;

import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

public class Reclamation {
    private int id;
    private StringProperty title;
    private StringProperty description;
    private StringProperty status;  // Make status a StringProperty for binding
    private int userId;

    // Default constructor
    public Reclamation() {
        this.title = new SimpleStringProperty();
        this.description = new SimpleStringProperty();
        this.status = new SimpleStringProperty();
    }

    // Constructor with parameters
    public Reclamation(int id, String title, String description, String status, int userId) {
        this.id = id;
        this.title = new SimpleStringProperty(title);
        this.description = new SimpleStringProperty(description);
        this.status = new SimpleStringProperty(status);
        this.userId = userId;
    }

    public Reclamation(String title, String description, String status, int userId) {
        this.title = new SimpleStringProperty(title);
        this.description = new SimpleStringProperty(description);
        this.status = new SimpleStringProperty(status);
        this.userId = userId;
    }

    // Getters and Setters
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitle() {
        return title.get();
    }

    public void setTitle(String title) {
        this.title.set(title);
    }

    public String getDescription() {
        return description.get();
    }

    public void setDescription(String description) {
        this.description.set(description);
    }

    public String getStatus() {
        return status.get();
    }

    public void setStatus(String status) {
        this.status.set(status);
    }

    public int getUserId() {
        return userId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    // Property methods for binding
    public StringProperty titleProperty() {
        return title;
    }

    public StringProperty descriptionProperty() {
        return description;
    }

    public StringProperty statusProperty() {
        return status;
    }

    @Override
    public String toString() {
        return "Reclamation{" +
                "id=" + id +
                ", title='" + title.get() + '\'' +
                ", description='" + description.get() + '\'' +
                ", status='" + status.get() + '\'' +
                ", userId=" + userId +
                '}';
    }
}
