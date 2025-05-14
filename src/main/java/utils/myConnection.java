package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class myConnection {
    private static final Logger logger = Logger.getLogger(myConnection.class.getName());
    private final String URL = "jdbc:mysql://localhost:3306/3afinal";
    private final String USER = "root";
    private final String PASS = "root";
    private Connection connection;
    private static myConnection instance;

    public myConnection() {
        createConnection();
    }

    private void createConnection() {
        try {
            connection = DriverManager.getConnection(URL, USER, PASS);
            logger.info("Database connection successfully established");
        } catch (SQLException e) {
            logger.log(Level.SEVERE, "Failed to establish database connection: " + e.getMessage(), e);
        }
    }

    /**
     * Checks if the current database connection is valid.
     * 
     * @return true if the connection is valid and open, false otherwise
     */
    public boolean isConnectionValid() {
        try {
            return connection != null && !connection.isClosed() && connection.isValid(5);
        } catch (SQLException e) {
            logger.log(Level.WARNING, "Error checking connection validity: " + e.getMessage(), e);
            return false;
        }
    }

    /**
     * Gets a valid database connection. If the current connection is invalid,
     * it will create a new connection before returning.
     * 
     * @return A valid database connection
     */
    public Connection getConnection() {
        try {
            if (!isConnectionValid()) {
                logger.info("Database connection is invalid or closed, reconnecting...");
                createConnection();
            }
        } catch (Exception e) {
            logger.log(Level.SEVERE, "Error in getConnection(): " + e.getMessage(), e);
        }
        return connection;
    }

    public static myConnection getInstance() {
        if (instance == null)
            instance = new myConnection();
        return instance;
    }
}
