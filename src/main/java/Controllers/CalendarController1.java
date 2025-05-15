package Controllers;

import javafx.fxml.FXML;
import javafx.scene.control.ListView;
import Services.GoogleCalendarService;
import com.google.api.services.calendar.model.Event;

import java.io.IOException;
import java.security.GeneralSecurityException;
import java.util.List;

public class CalendarController1 {
    @FXML
    private ListView<String> eventListView;

    private GoogleCalendarService calendarService;

    public CalendarController1() throws IOException, GeneralSecurityException {
        calendarService = new GoogleCalendarService();
    }

    @FXML
    public void initialize() {
        loadEvents();
    }

    @FXML
    private void loadEvents() {
        try {
            eventListView.getItems().clear(); // Clear existing items
            List<Event> events = calendarService.getUpcomingEvents();
            for (Event event : events) {
                String eventDetails = event.getSummary() + " - " + event.getStart().getDateTime();
                eventListView.getItems().add(eventDetails);
            }
        } catch (IOException e) {
            e.printStackTrace();
            eventListView.getItems().add("Failed to load events. Please try again.");
        }

    }
}