package Models;

import java.sql.Timestamp;
public class User {
    private int id;
    private String firstName;
    private String lastName;
    private String email;
    private String password;
    private String role; // "normal", "admin", "driver"
    private boolean faceIdEnabled; // Field already exists
    private boolean isBanned;
    private String banReason;
    private Timestamp banExpiryDate;
    private Timestamp lastLogin;
    public User() {
        this.faceIdEnabled = false;
        this.isBanned = false;
        this.banReason = null;
        this.banExpiryDate = null;
        this.lastLogin = null;
    }
    public User(int id, String firstName, String lastName, String email, String password, String role) {
        this.id = id;
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.password = password;
        this.role = role;
        this.faceIdEnabled = false;
        this.isBanned = false;
        this.banReason = null;
        this.banExpiryDate = null;
        this.lastLogin = null;
    }
    public User(int id, String firstName, String lastName, String email, String password, String role, boolean faceIdEnabled) {
        this.id = id;
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.password = password;
        this.role = role;
        this.faceIdEnabled = faceIdEnabled;
        this.isBanned = false;
        this.banReason = null;
        this.banExpiryDate = null;
        this.lastLogin = null;
    }
    public User(String firstName, String lastName, String email, String password, String role) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.password = password;
        this.role = role;
        this.faceIdEnabled = false;
        this.isBanned = false;
        this.banReason = null;
        this.banExpiryDate = null;
        this.lastLogin = null;
    }
    public User(String firstName, String lastName, String email, String password, String role, boolean faceIdEnabled) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.email = email;
        this.password = password;
        this.role = role;
        this.faceIdEnabled = faceIdEnabled;
        this.isBanned = false;
        this.banReason = null;
        this.banExpiryDate = null;
        this.lastLogin = null;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
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
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public boolean isFaceIdEnabled() {
        return faceIdEnabled;
    }

    public void setFaceIdEnabled(boolean faceIdEnabled) {
        this.faceIdEnabled = faceIdEnabled;
    }

    public boolean isBanned() {
        return isBanned;
    }

    public void setBanned(boolean banned) {
        isBanned = banned;
    }

    public String getBanReason() {
        return banReason;
    }

    public void setBanReason(String banReason) {
        this.banReason = banReason;
    }

    public Timestamp getBanExpiryDate() {
        return banExpiryDate;
    }

    public void setBanExpiryDate(Timestamp banExpiryDate) {
        this.banExpiryDate = banExpiryDate;
    }

    public Timestamp getLastLogin() {
        return lastLogin;
    }

    public void setLastLogin(Timestamp lastLogin) {
        this.lastLogin = lastLogin;
    }

    @Override
    public String toString() {
        return "User{" +
                "id=" + id +
                ", firstName='" + firstName + '\'' +
                ", lastName='" + lastName + '\'' +
                ", email='" + email + '\'' +
                ", role='" + role + '\'' +
                ", faceIdEnabled=" + faceIdEnabled +
                ", isBanned=" + isBanned +
                ", banReason='" + banReason + '\'' +
                ", banExpiryDate=" + banExpiryDate +
                ", lastLogin=" + lastLogin +
                '}';
    }
}
