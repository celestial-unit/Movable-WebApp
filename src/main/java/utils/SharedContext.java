package utils;

import java.util.HashMap;
import java.util.Map;
import java.util.concurrent.atomic.AtomicInteger;

/**
 * Singleton utility class for storing shared data across the application.
 * This class provides both instance methods and static methods for accessing shared data.
 * It stores the logged-in user's ID, username, role, and other shared application data.
 */
public class SharedContext {
    // Singleton instance with double-checked locking
    private static SharedContext instance;
    
    // Thread-safe user ID storage
    private static final AtomicInteger loggedInUserId = new AtomicInteger(-1);
    
    // User data fields
    private static String loggedInUsername = "";
    private static String loggedInUserRole = "";
    
    // General context data storage
    private Map<String, Object> contextData;
    
    /**
     * Private constructor to prevent instantiation
     */
    private SharedContext() {
        contextData = new HashMap<>();
    }
    
    /**
     * Get the singleton instance of SharedContext with double-checked locking pattern
     * @return The SharedContext instance
     */
    public static SharedContext getInstance() {
        if (instance == null) {
            synchronized (SharedContext.class) {
                if (instance == null) {
                    instance = new SharedContext();
                }
            }
        }
        return instance;
    }
    
    //==============================================
    // Context data methods - for storing arbitrary data
    //==============================================
    
    /**
     * Store a value in the shared context
     * @param key The key to store the value under
     * @param value The value to store
     */
    public void put(String key, Object value) {
        contextData.put(key, value);
    }
    
    /**
     * Retrieve a value from the shared context
     * @param key The key to retrieve the value for
     * @return The value associated with the key, or null if not found
     */
    public Object get(String key) {
        return contextData.get(key);
    }
    
    /**
     * Retrieve a value from the shared context as a specific type
     * @param key The key to retrieve the value for
     * @param <T> The type to cast the value to
     * @return The value associated with the key, cast to the specified type, or null if not found
     */
    @SuppressWarnings("unchecked")
    public <T> T get(String key, Class<T> type) {
        Object value = contextData.get(key);
        if (value != null && type.isInstance(value)) {
            return (T) value;
        }
        return null;
    }
    
    /**
     * Remove a value from the shared context
     * @param key The key to remove
     */
    public void remove(String key) {
        contextData.remove(key);
    }
    
    /**
     * Clear all values from the shared context
     */
    public void clear() {
        contextData.clear();
    }
    
    //==============================================
    // Instance methods (object-oriented approach)
    //==============================================
    
    /**
     * Set the logged-in user ID (instance method)
     * @param userId The ID of the logged-in user
     */
    public void setUserId(int userId) {
        loggedInUserId.set(userId);
        // Also store in contextData for compatibility
        put("userId", userId);
    }
    
    /**
     * Get the logged-in user ID (instance method)
     * @return The ID of the logged-in user
     */
    public int getUserId() {
        return loggedInUserId.get();
    }
    
    /**
     * Set the logged-in username (instance method)
     * @param username The username of the logged-in user
     */
    public void setUsername(String username) {
        loggedInUsername = username;
        put("username", username);
    }
    
    /**
     * Get the logged-in username (instance method)
     * @return The username of the logged-in user
     */
    public String getUsername() {
        return loggedInUsername;
    }
    
    /**
     * Set the logged-in user role (instance method)
     * @param role The role of the logged-in user
     */
    public void setUserRole(String role) {
        loggedInUserRole = role;
        put("userRole", role);
    }
    
    /**
     * Get the logged-in user role (instance method)
     * @return The role of the logged-in user
     */
    public String getUserRole() {
        return loggedInUserRole;
    }
    
    /**
     * Clear all user data when logging out (instance method)
     */
    public void clearUserData() {
        loggedInUserId.set(-1);
        loggedInUsername = "";
        loggedInUserRole = "";
        // Clear any user-related data from contextData
        remove("userId");
        remove("username");
        remove("userRole");
    }
    
    //==============================================
    // Static methods (for direct access)
    //==============================================
    
    /**
     * Set the logged-in user ID (static method)
     * @param userId The ID of the logged-in user
     */
    public static void setLoggedInUserId(int userId) {
        loggedInUserId.set(userId);
        getInstance().put("userId", userId);
    }
    
    /**
     * Get the logged-in user ID (static method)
     * @return The ID of the logged-in user
     */
    public static int getLoggedInUserId() {
        return loggedInUserId.get();
    }
    
    /**
     * Set the logged-in username (static method)
     * @param username The username of the logged-in user
     */
    public static void setLoggedInUsername(String username) {
        loggedInUsername = username;
        getInstance().put("username", username);
    }
    
    /**
     * Get the logged-in username (static method)
     * @return The username of the logged-in user
     */
    public static String getLoggedInUsername() {
        return loggedInUsername;
    }
    
    /**
     * Set the logged-in user role (static method)
     * @param role The role of the logged-in user
     */
    public static void setLoggedInUserRole(String role) {
        loggedInUserRole = role;
        getInstance().put("userRole", role);
    }
    
    /**
     * Get the logged-in user role (static method)
     * @return The role of the logged-in user
     */
    public static String getLoggedInUserRole() {
        return loggedInUserRole;
    }
    
    /**
     * Clear all user data when logging out (static method)
     */
    public static void clearLoggedInUserData() {
        loggedInUserId.set(-1);
        loggedInUsername = "";
        loggedInUserRole = "";
        
        // Get the instance and clear user-related data
        SharedContext context = getInstance();
        context.remove("userId");
        context.remove("username");
        context.remove("userRole");
    }
}
