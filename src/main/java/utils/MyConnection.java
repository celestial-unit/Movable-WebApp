package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class MyConnection {
    private final String URL = "jdbc:mysql://localhost:3306/3afinal";
    private final String USER = "root";
    private final String PASS = "root";
    public static Connection connection;
    private static MyConnection instance;

    private MyConnection() {
        try {
            System.out.println("Attempting to establish database connection...");
            System.out.println("URL: " + URL);
            
            // Try to establish connection
            connection = DriverManager.getConnection(URL, USER, PASS);
            
            // Verify connection is valid
            if (verifyConnection()) {
                System.out.println("Database Connection Established Successfully!");
            } else {
                throw new SQLException("Connection established but verification failed");
            }
        } catch (SQLException e) {
            System.err.println("Database Connection Failed!");
            System.err.println("Error Message: " + e.getMessage());
            System.err.println("Error Code: " + e.getErrorCode());
            System.err.println("SQL State: " + e.getSQLState());
            e.printStackTrace();
            throw new RuntimeException("Failed to establish database connection", e);
        }
    }

    public static MyConnection getInstance() {
        if (instance == null) {
            instance = new MyConnection();
        } else {
            // Verify existing connection is still valid
            try {
                if (connection == null || connection.isClosed() || !verifyConnection()) {
                    System.out.println("Existing connection is invalid, creating new connection...");
                    instance = new MyConnection();
                }
            } catch (SQLException e) {
                System.err.println("Error checking connection state: " + e.getMessage());
                instance = new MyConnection();
            }
        }
        return instance;
    }

    public Connection getConnection() {
        try {
            if (connection == null || connection.isClosed()) {
                System.out.println("Connection is null or closed, creating new connection...");
                instance = new MyConnection();
            }
        } catch (SQLException e) {
            System.err.println("Error checking connection state: " + e.getMessage());
            instance = new MyConnection();
        }
        return connection;
    }

    /**
     * Verifies if the database connection is valid and working
     * @return true if connection is valid, false otherwise
     */
    private static boolean verifyConnection() {
        try {
            if (connection == null || connection.isClosed()) {
                return false;
            }
            
            // Test connection with a simple query
            try (Statement stmt = connection.createStatement()) {
                try (ResultSet rs = stmt.executeQuery("SELECT 1")) {
                    return rs.next();
                }
            }
        } catch (SQLException e) {
            System.err.println("Connection verification failed: " + e.getMessage());
            return false;
        }
    }
}
