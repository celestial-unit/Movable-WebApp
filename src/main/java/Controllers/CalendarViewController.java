package Controllers;

import Models.Event;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.Tooltip;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import Services.EventService;

import java.time.DayOfWeek;
import java.time.LocalDate;
import java.time.YearMonth;
import java.time.format.DateTimeFormatter;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;

public class CalendarViewController {
    @FXML protected GridPane calendarGrid;
    @FXML private Label monthYearLabel;
    @FXML private Button prevMonthButton, nextMonthButton;

    private YearMonth currentYearMonth;
    private EventService eventService = new EventService();
    protected Map<LocalDate, List<Event>> eventsByDate;

    @FXML
    public void initialize() {
        currentYearMonth = YearMonth.now();
        loadEvents();
        setupMonthNavigation();
        buildCalendar();
    }

    protected void loadEvents() {
        eventsByDate = eventService.getAllEvents().stream()
                .collect(Collectors.groupingBy(
                        e -> LocalDate.parse(e.getDateEvent())
                )); // Added closing parenthesis
    }


    private void setupMonthNavigation() {
        prevMonthButton.setOnAction(e -> {
            currentYearMonth = currentYearMonth.minusMonths(1);
            buildCalendar();
        });

        nextMonthButton.setOnAction(e -> {
            currentYearMonth = currentYearMonth.plusMonths(1);
            buildCalendar();
        });
    }

    protected void buildCalendar() {
        calendarGrid.getChildren().clear();
        monthYearLabel.setText(currentYearMonth.format(DateTimeFormatter.ofPattern("MMMM yyyy")));

        // Add day names
        String[] dayNames = {"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"};
        for (int i = 0; i < 7; i++) {
            Label dayLabel = new Label(dayNames[i]);
            dayLabel.getStyleClass().add("day-header");
            calendarGrid.add(dayLabel, i, 0);
        }

        LocalDate firstOfMonth = currentYearMonth.atDay(1);
        int dayOfWeek = firstOfMonth.getDayOfWeek().getValue() % 7; // Adjust for Sunday start
        int row = 1;

        // Fill calendar
        for (int day = 1; day <= currentYearMonth.lengthOfMonth(); day++) {
            LocalDate date = currentYearMonth.atDay(day);
            VBox dayCell = createDayCell(date);

            int column = (dayOfWeek + day - 1) % 7;
            if (day > 1 && (dayOfWeek + day - 1) % 7 == 0) row++;

            calendarGrid.add(dayCell, column, row);
        }
    }

    protected VBox createDayCell(LocalDate date) {
        VBox cell = new VBox(3);
        cell.getStyleClass().add("day-cell");

        // Add weekend styling
        if (date.getDayOfWeek() == DayOfWeek.SATURDAY || date.getDayOfWeek() == DayOfWeek.SUNDAY) {
            cell.getStyleClass().add("weekend-day");
        }

        // Highlight current day
        if (date.equals(LocalDate.now())) {
            cell.getStyleClass().add("current-day");
        }

        // Add day number
        Label dayNumber = new Label(String.valueOf(date.getDayOfMonth()));
        dayNumber.getStyleClass().add("day-number");
        cell.getChildren().add(dayNumber);

        // Add events with type-specific styling
        // Add events with type-specific styling
        List<Event> daysEvents = getEventsForDate(date);
        daysEvents.forEach(event -> {
            Label eventLabel = new Label(event.getDescription());
            eventLabel.getStyleClass().add("event-label");

            // Add event type specific styling
            String typeClass = "event-type-" + getTypeName(event.getType()).toLowerCase();
            eventLabel.getStyleClass().add(typeClass);

            // Add tooltip with details
            Tooltip tooltip = new Tooltip(
                    String.format("%s\nDuration: %d mins\nLocation: %s",
                            event.getDescription(),
                            event.getDuration(),
                            event.getStatus())
            );
            eventLabel.setTooltip(tooltip);

            cell.getChildren().add(eventLabel);
        });

        // Add busy day indicator if more than 3 events
        if (daysEvents.size() > 3) {
            cell.getStyleClass().add("busy-day");
        }

        return cell;

    }
    
    /**
     * Get events for a specific date
     * @param date The date to get events for
     * @return List of events on that date
     */
    protected List<Event> getEventsForDate(LocalDate date) {
        return eventsByDate.getOrDefault(date, List.of());
    }

    // Helper method to get type name (should match your existing implementation)
    String getTypeName(int type) {
        return switch (type) {
            case 1 -> "Workshop";
            case 2 -> "Seminar";
            case 3 -> "Conference";
            case 4 -> "Meeting";
            default -> "Other";
        };
    }
    @FXML
    public void openeventForm(ActionEvent event) {
        try {
            // 1. Load the new FXML
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_view.fxml"));
            Parent root = loader.load();

            // 2. Get the current stage from any component (using the event source)
            Stage currentStage = (Stage) ((Node) event.getSource()).getScene().getWindow();

            // 3. Replace the scene content
            currentStage.setScene(new Scene(root));
            currentStage.setTitle("User View");

            // Optional: Maintain window size/position
            currentStage.centerOnScreen();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}