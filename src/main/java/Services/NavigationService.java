package Services;

import Controllers.AdminCalendarViewController;
import Controllers.AdminDashboardController;
import Controllers.EventRegistrationController;
import Controllers.UserCalendarViewController;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import utils.SharedContext;

import java.io.IOException;

/**
 * Service class to handle navigation between different views based on user role
 */
public class NavigationService {
    
    private static NavigationService instance;
    private Stage primaryStage;
    
    private NavigationService() {
        // Private constructor for singleton pattern
    }
    
    /**
     * Get the singleton instance of NavigationService
     * @return NavigationService instance
     */
    public static NavigationService getInstance() {
        if (instance == null) {
            instance = new NavigationService();
        }
        return instance;
    }
    
    /**
     * Set the primary stage for the application
     * @param stage The primary stage
     */
    public void setPrimaryStage(Stage stage) {
        this.primaryStage = stage;
    }
    
    /**
     * Navigate to the login screen
     */
    public void navigateToLogin() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/login.fxml"));
            Parent root = loader.load();
            
            // Clear user data on logout
            SharedContext.clearLoggedInUserData();
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("Login");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading login view: " + e.getMessage());
        }
    }
    
    /**
     * Navigate to the admin dashboard
     */
    public void navigateToAdminDashboard() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_dashboard.fxml"));
            Parent root = loader.load();
            
            AdminDashboardController controller = loader.getController();
            controller.initialize();
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("Admin Dashboard");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading admin dashboard view: " + e.getMessage());
        }
    }
    
    /**
     * Navigate to the user dashboard
     * @param userId The ID of the user
     */
    public void navigateToUserDashboard(int userId) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_dashboard.fxml"));
            Parent root = loader.load();
            
            // Store user ID in shared context
            SharedContext.setLoggedInUserId(userId);
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("User Dashboard");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading user dashboard view: " + e.getMessage());
        }
    }
    
    /**
     * Navigate to the admin calendar view
     */
    public void navigateToAdminCalendar() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/admin_calendar_view.fxml"));
            Parent root = loader.load();
            
            AdminCalendarViewController controller = loader.getController();
            controller.initialize();
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("Admin Calendar");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading admin calendar view: " + e.getMessage());
        }
    }
    
    /**
     * Navigate to the user calendar view
     * @param userId The ID of the user
     */
    public void navigateToUserCalendar(int userId) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/user_calendar_view.fxml"));
            Parent root = loader.load();
            
            UserCalendarViewController controller = loader.getController();
            controller.setUserId(userId);
            controller.initialize();
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("Your Calendar");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading user calendar view: " + e.getMessage());
        }
    }
    
    /**
     * Navigate to event registration view
     * @param userId The ID of the user (null for admin)
     */
    public void navigateToEventRegistration(Integer userId) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/event_registration.fxml"));
            Parent root = loader.load();
            
            EventRegistrationController controller = loader.getController();
            if (userId != null) {
                controller.setUserId(userId);
            }
            controller.initialize();
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("Event Registration");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading event registration view: " + e.getMessage());
        }
    }
    
    /**
     * Navigate to event view
     */
    public void navigateToEventView() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/event_view.fxml"));
            Parent root = loader.load();
            
            Scene scene = new Scene(root);
            primaryStage.setScene(scene);
            primaryStage.setTitle("Events");
            primaryStage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.err.println("Error loading event view: " + e.getMessage());
        }
    }
}

