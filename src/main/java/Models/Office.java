package Models;

import java.util.ArrayList;
import java.util.List;

public class Office {
    private int id;
    private String name;
    private String location;
    private int phone;
    private int agents1; // This can represent the number of agents (count)
    //private List<Assistant> assistants; // Collection of assistants in this office

    // Constructor with ID
    public Office(int id, String name, String location, int agents1, int phone) {
        this.id = id;
        this.name = name;
        this.location = location;
        this.agents1 = agents1;
        this.phone = phone;
        //this.assistants = new ArrayList<>();
    }

    // Constructor without ID (for creating new instances)
    public Office(String name, String location, int agents1, int phone) {
        this.name = name;
        this.location = location;
        this.agents1 = agents1;
        this.phone = phone;
        //this.assistants = new ArrayList<>();
    }

    public Office(String name, String location, int phone) {
        this.name = name;
        this.location = location;
        this.phone = phone;
    }

    // Default constructor
    public Office() {
        //this.assistants = new ArrayList<>();
    }

    // Getters and Setters
    public int getId() { return id; }
    public void setId(int id) { this.id = id; }

    public String getName() { return name; }
    public void setName(String name) { this.name = name; }

    public String getLocation() { return location; }
    public void setLocation(String location) { this.location = location; }

    public int getPhone() { return phone; }
    public void setPhone(int phone) { this.phone = phone; }

    public int getAgents1() { return agents1; }
    public void setAgents1(int agents1) { this.agents1 = agents1; }

    /* Methods for the relationship with assistants
    public List<Assistant> getAssistants() {
        return assistants;
    }

    public void setAssistants(List<Assistant> assistants) {
        this.assistants = assistants;
        // Update the count of agents
        this.agents1 = assistants.size();
    }
*/


    @Override
    public String toString() {
        return "Office{" +
                "id=" + id +
                ", name='" + name + '\'' +
                ", location='" + location + '\'' +
                ", agents1=" + agents1 +
                ", phone=" + phone +
                '}';
    }
}