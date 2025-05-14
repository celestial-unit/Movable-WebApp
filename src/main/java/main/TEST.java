package main;

import Models.Event;
import Services.EventService;
import utils.myConnection;

import java.sql.Connection;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.List;

public class TEST {
    public static void main(String[] args) {
        // Test Database Connection
        try {
            Connection conn = myConnection.getInstance().getConnection();
            if (conn != null && !conn.isClosed()) {
                System.out.println("✅ Database connection successful!");
            } else {
                System.err.println("❌ Database connection failed.");
                return; // Stop execution if connection fails
            }
        } catch (SQLException e) {
            System.err.println("❌ SQL Exception: " + e.getMessage());
            return;
        }

        // Create EventService instance
        EventService eventService = new EventService();

        // 1️⃣ Add an Event
        LocalDate eventDate = LocalDate.of(2025, 5, 10);
        String formattedDate = eventDate.format(DateTimeFormatter.ofPattern("yyyy-MM-dd")); // Ensures correct format

        Event newEvent = new Event(0, "Tech Conference", "Annual tech event", 3, 1, "Scheduled", formattedDate, "2");
        eventService.addEvent(newEvent);
        System.out.println("\n✅ New event added!");

        // 2️⃣ Get All Events
        List<Event> events = eventService.getAllEvents();
        if (events.isEmpty()) {
            System.out.println("\n⚠️ No events found in the database.");
            return;
        }

        System.out.println("\n🔹 All Events:");
        for (Event e : events) {
            System.out.println(e.getId() + " | " + e.getTitle() + " | " + e.getDateEvent());
        }

        // 3️⃣ Update an Event (if exists)
        Event eventToUpdate = events.get(0);
        eventToUpdate.setTitle("Updated Tech Conference");
        eventService.updateEvent(eventToUpdate);
        System.out.println("\n✅ Event updated: " + eventToUpdate.getId());

        // 4️⃣ Delete an Event (if exists)
        int eventIdToDelete = events.get(0).getId();
        eventService.deleteEvent(eventIdToDelete);
        System.out.println("\n🗑️ Event deleted: " + eventIdToDelete);
    }
}
