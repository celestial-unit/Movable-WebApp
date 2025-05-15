package utils;

/**
 * Singleton class for managing user session information across the application
 */
public class UserSession {
    private static int currentUserId = 0;
    private static UserSession instance;

    private UserSession() {}

    /**
     * Get the singleton instance of UserSession
     * @return The UserSession instance
     */
    public static UserSession getInstance() {
        if (instance == null) {
            instance = new UserSession();
        }
        return instance;
    }

    /**
     * Set the current user ID for the session
     * @param userId The ID of the currently logged-in user
     */
    public static void setCurrentUserId(int userId) {
        currentUserId = userId;
        System.out.println("User session updated. Current user ID: " + userId);
    }

    /**
     * Get the current user ID
     * @return The current user ID, or 0 if no user is logged in
     */
    public static int getCurrentUserId() {
        if (currentUserId <= 0) {
            System.err.println("Warning: Attempting to get user ID but no user is logged in");
        }
        return currentUserId;
    }

    /**
     * Clear the current user session
     */
    public static void clearSession() {
        currentUserId = 0;
        System.out.println("User session cleared");
    }

    /**
     * Check if a user is currently logged in
     * @return true if a user is logged in, false otherwise
     */
    public static boolean isLoggedIn() {
        return currentUserId > 0;
    }
}

