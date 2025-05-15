package Models;

import java.time.LocalDate;

public class Reservation {

    private int id;
    private String firstName;
    private String lastName;
    private String email;
    private LocalDate date;
    private String location;
    private int seats;
    private int age;
    private String agent_type;
    private String paymentMode;
    private String transport_type;

    public Reservation(int age, String text, String lastNameTfText, String emailFieldText, LocalDate value, String locationFieldText, String seatsFieldText, String agentTypeFieldValue, String paymentModeFieldValue, String transportFieldValue) {
    }

    public Reservation(int id, int age, String firstName, String lastName, String email, LocalDate date, String location, int seats, String agent_type, String paymentMode, String transport_type) {
        this.id = id;
        this.age = age;
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.date = date;
        this.location = location;
        this.seats = seats;
        this.agent_type = agent_type;
        this.paymentMode = paymentMode;
        this.transport_type = transport_type;
    }

    public Reservation(int age, String firstName, String lastName, String email, LocalDate date, String location, int seats, String agent_type, String paymentMode, String transport_type) {
        this.age = age;
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.date = date;
        this.location = location;
        this.seats = seats;
        this.agent_type = agent_type;
        this.paymentMode = paymentMode;
        this.transport_type = transport_type;
    }

    public Reservation() {

    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }
    public String getLastName() {
        return lastName;
    }
    public void setLastName(String lastName) {
        this.lastName = lastName;
    }
    public String getEmail() {
        return email;}
    public void setEmail(String email) {
        this.email = email;
    }
    public LocalDate getDate() {
        return date;
    }
    public void setDate(LocalDate date) {
        this.date = date;
    }
    public String getLocation() {
        return location;
    }
    public void setLocation(String location) {
        this.location = location;
    }
    public int getSeats() {
        return seats;
    }
    public void setSeats(int seats) {
        this.seats = seats;
    }
    public int getAge() {
        return age;
    }
    public void setAge(int age) {
        this.age = age;
    }
    public String getAgentType() {
        return agent_type;
    }
    public void setAgentType(String agent_type) {
        this.agent_type = agent_type;
    }
    public String getPaymentMode() {
        return paymentMode;
    }
    public void setPaymentMode(String paymentMode) {
        this.paymentMode = paymentMode;
    }
    public String getTransport() {
        return transport_type;
    }
    public void setTransport(String transport_type) {
        this.transport_type = transport_type;
    }
    public int getId() {
        return id;
    }
    public void setId(int id) {
        this.id = id;
    }

    @Override
    public String toString() {
        return "Reservation Details{" +
                ", age=" + age +
                ", firstName='" + firstName + '\'' +
                ", lastName='" + lastName + '\'' +
                ", email='" + email + '\'' +
                ", date=" + date +
                ", location='" + location + '\'' +
                ", seats=" + seats +
                ", agentType='" + agent_type + '\'' +
                ", paymentMode='" + paymentMode + '\'' +
                ", transport='" + transport_type + '\'' +
                '}';
    }
}
