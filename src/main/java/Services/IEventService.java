package Services;
import Models.Event;

import java.util.List;
public interface IEventService {
    void addEvent(Event event);

    List<Event> getAllEvents();

    void updateEvent(Event event);

    void deleteEvent(int id);

    Event getEventById(int id);
}
