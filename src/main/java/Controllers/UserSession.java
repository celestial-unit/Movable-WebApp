package Controllers;

import utils.SharedContext;

/**
 * UserSession class that provides access to the current user's ID.
 * This class now delegates to SharedContext for storing and retrieving user information.
 */
public class UserSession {
    /**
     * Get the current user's ID from the shared context
     * @return The ID of the current user
     */
    public static int getCurrentUserId() {
        return SharedContext.getLoggedInUserId();
    }

    /**
     * Set the current user's ID in the shared context
     * @param userId The ID of the user to set as current
     */
    public static void setCurrentUserId(int userId) {
        SharedContext.setLoggedInUserId(userId);
    }
}
