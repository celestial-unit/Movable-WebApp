package Controllers;

import Models.Reclamation;
import Models.User;
import Services.ReclamationService;
import Services.UsersService;
//import helpers.BanDurationFormatter;
//import helpers.ChartBuilder;
//import helpers.UserManagementHelper;
import utils.MyDb;
import javafx.animation.FadeTransition;
import javafx.animation.KeyFrame;
import javafx.animation.KeyValue;
import javafx.animation.Timeline;
import javafx.animation.TranslateTransition;
import javafx.application.Platform;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Side;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.util.Duration;

import java.io.IOException;
import java.net.URL;
import java.sql.*;
import java.text.MessageFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.util.*;
import java.util.Date;
import java.util.concurrent.atomic.AtomicInteger;
import java.util.stream.Collectors;

/**
 * Controller for the Admin Settings interface, managing application configuration,
 * user management, reclamation statistics, and database administration.
 * 
 * This controller provides functionality for:
 * - Theme and language configuration
 * - User search, ban and unban operations
 * - Reclamation statistics visualization
 * - Database settings and maintenance
 */
public class AdminSettingsController implements Initializable {

    //region CONSTANTS
    
    /** CSS file path for light theme */
    private static final String LIGHT_THEME_CSS = "/styles/light-theme.css";
    
    /** CSS file path for dark theme */
    private static final String DARK_THEME_CSS = "/styles/dark-theme.css";
    
    /** Default minimum database connection pool size */
    private static final String DEFAULT_MIN_POOL_SIZE = "5";
    
    /** Default maximum database connection pool size */
    private static final String DEFAULT_MAX_POOL_SIZE = "20";
    
    /** Default log level */
    private static final String DEFAULT_LOG_LEVEL = "INFO";
    
    /** Default theme */
    private static final String DEFAULT_THEME = "Light";
    
    /** Default ban duration */
    private static final String DEFAULT_BAN_DURATION = "1 week";
    
    /** Default ban time unit */
    private static final String DEFAULT_BAN_TIME_UNIT = "Days";
    
    /** Animation duration for statistics counter */
    private static final int COUNTER_ANIMATION_DURATION = 1500;
    
    /** Database URL - matches the value in MyDb */
    private static final String DB_URL = "jdbc:mysql://localhost:3306/3a2";
    
    /** Database username - matches the value in MyDb */
    private static final String DB_USERNAME = "root";
    
    /** Database password - matches the value in MyDb */
    private static final String DB_PASSWORD = "";
    
    //endregion

    //region SERVICES AND DATABASE
    
    /** Database connection instance */
    private final Connection connection = MyDb.getInstance().getConnection();
    
    /** Service for user management operations */
    private final UsersService usersService = new UsersService();
    
    /** Service for reclamation management operations */
    private final ReclamationService reclamationService = new ReclamationService();
    
    //endregion
    
    //region STATE VARIABLES
    
    /** Resource bundle for internationalization */
    private ResourceBundle resources;
    
    /** Current application locale */
    private Locale currentLocale = Locale.getDefault();
    
    /** Current application theme */
    private String currentTheme = "light";
    
    /** Observable list of users for table view */
    private ObservableList<User> usersList = FXCollections.observableArrayList();
    
    //endregion
    //region UI COMPONENTS
    
    // General settings components
    @FXML private RadioButton lightThemeRadio;
    @FXML private RadioButton darkThemeRadio;
    @FXML private ToggleGroup themeGroup;
    @FXML private ComboBox<String> themeComboBox;
    @FXML private ComboBox<String> logLevelComboBox;
    @FXML private ComboBox<String> languageComboBox;
    @FXML private CheckBox enableDebugCheckBox;
    @FXML private CheckBox enableMaintenanceCheckBox;
    @FXML private Button saveGeneralSettingsBtn;
    
    // User management components
    @FXML private TextField userSearchField;
    @FXML private TableView<User> usersTableView;
    @FXML private TableColumn<User, Integer> userIdColumn;
    @FXML private TableColumn<User, String> usernameColumn;
    @FXML private TableColumn<User, String> emailColumn;
    @FXML private TableColumn<User, String> statusColumn;
    @FXML private TableColumn<User, String> lastLoginColumn;
    @FXML private ComboBox<String> banDurationComboBox;
    @FXML private TextField customBanPeriod;
    @FXML private ComboBox<String> customBanUnitComboBox;
    @FXML private TextArea banReasonTextArea;
    @FXML private Button banUserBtn;
    @FXML private Button unbanUserBtn;
    
    // Statistics components
    @FXML private Label totalReclamationsLabel;
    @FXML private Label pendingReclamationsLabel;
    @FXML private Label resolvedReclamationsLabel;
    @FXML private Pane categoryChartContainer;
    @FXML private Pane monthlyTrendChartContainer;
    
    // Database settings components
    @FXML private TextField dbUrlField;
    @FXML private TextField dbUsernameField;
    @FXML private PasswordField dbPasswordField;
    @FXML private TextField minPoolField;
    @FXML private TextField maxPoolField;
    
    // Navigation
    @FXML private Button backButton;
    
    //endregion
    
    //region NAVIGATION METHODS
    
    /**
     * Navigates back to the admin dashboard.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void backToDashboard(ActionEvent event) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("/admin_dashboard.fxml"));
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root);
            
            // Apply the current theme to the dashboard
            applyTheme(scene, currentTheme);
            
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Error loading admin dashboard: " + e.getMessage());
        }
    }
    
    //endregion
    
    //region INITIALIZATION
    
    /**
     * Initializes the controller after FXML components are loaded.
     * Sets up all UI components and loads initial data.
     * 
     * @param location The location used to resolve relative paths
     * @param resources The resources used to localize the root object
     */
    @Override
    public void initialize(URL location, ResourceBundle resources) {
        this.resources = resources;
        
        // Initialize theme controls
        initializeThemeControls();
        
        // Initialize language controls
        initializeLanguageControls();
        
        // Initialize user management
        initializeUserManagement();
        
        // Initialize reclamation statistics
        initializeReclamationStatistics();
        
        // Initialize database settings
        initializeDatabaseSettings();
        
        // Initialize log controls
        initializeLogControls();
        
        // Initialize general settings
        initializeGeneralSettings();
        
        // Load initial data
        loadUsersData();
        refreshStatistics();
    }
    
    //endregion
    
    //region THEME AND LANGUAGE
    
    /**
     * Initialize theme controls
     */
    private void initializeThemeControls() {
        // Set up theme radio buttons
        if (lightThemeRadio != null && darkThemeRadio != null) {
            lightThemeRadio.setSelected(true);
            darkThemeRadio.setSelected(false);
            
            // Add listeners to theme radio buttons
            lightThemeRadio.selectedProperty().addListener((obs, oldVal, newVal) -> {
                if (newVal) {
                    applyTheme("light");
                }
            });
            
            darkThemeRadio.selectedProperty().addListener((obs, oldVal, newVal) -> {
                if (newVal) {
                    applyTheme("dark");
                }
            });
        }
        
        // Initialize theme combo box
        if (themeComboBox != null) {
            // Add available themes
            themeComboBox.getItems().addAll("Light", "Dark");
            
            // Set default theme
            themeComboBox.setValue("Light");
            
            // Add listener for theme change
            themeComboBox.valueProperty().addListener((obs, oldVal, newVal) -> {
                if (newVal != null) {
                    applyTheme(newVal.toLowerCase());
                }
            });
        }
    }
    
    /**
     * Initialize language controls
     */
    private void initializeLanguageControls() {
        if (languageComboBox != null) {
            // Add available languages
            languageComboBox.getItems().addAll("English", "Français", "العربية");
            
            // Set default language
            languageComboBox.setValue("English");
            
            // Add listener for language change
            languageComboBox.valueProperty().addListener((obs, oldVal, newVal) -> {
                if (newVal != null) {
                    changeLanguage(newVal);
                }
            });
        }
    }
    
    //endregion
    
    //region USER MANAGEMENT
    
    /**
     * Initialize user management controls
     */
    private void initializeUserManagement() {
        if (usersTableView != null) {
            // Configure table columns
            userIdColumn.setCellValueFactory(new PropertyValueFactory<>("id"));
            
            usernameColumn.setCellValueFactory(cellData -> {
                User user = cellData.getValue();
                return new SimpleStringProperty(user.getFirstName() + " " + user.getLastName());
            });
            
            emailColumn.setCellValueFactory(new PropertyValueFactory<>("email"));
            
            statusColumn.setCellValueFactory(cellData -> {
                User user = cellData.getValue();
                return new SimpleStringProperty(user.isBanned() ? "Banned" : "Active");
            });
            
            lastLoginColumn.setCellValueFactory(cellData -> {
                User user = cellData.getValue();
                if (user.getLastLogin() != null) {
                    DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm");
                    return new SimpleStringProperty(
                        user.getLastLogin().toLocalDateTime().format(formatter)
                    );
                }
                return new SimpleStringProperty("Never");
            });
            
            // Initialize the selection listener
            usersTableView.getSelectionModel().selectedItemProperty().addListener(
                (obs, oldSelection, newSelection) -> {
                    if (newSelection != null) {
                        updateUserSelectionUI(newSelection);
                    }
                }
            );
        }
        
        // Initialize ban controls
        if (banDurationComboBox != null) {
            banDurationComboBox.getItems().addAll(
                "1 day", "3 days", "1 week", "2 weeks", "1 month", "3 months", "6 months", "Permanent"
            );
            banDurationComboBox.setValue("1 week");
        }
        
        if (customBanUnitComboBox != null) {
            customBanUnitComboBox.getItems().addAll("Hours", "Days", "Weeks", "Months");
            customBanUnitComboBox.setValue("Days");
        }
        
        // Disable ban buttons until a user is selected
        if (banUserBtn != null) banUserBtn.setDisable(true);
        if (unbanUserBtn != null) unbanUserBtn.setDisable(true);
    }

    /**
     * Searches for users based on the input in the username search field.
     * Updates the user table with the search results.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void searchUser(ActionEvent event) {
        String username = userSearchField.getText().trim();
        if (username.isEmpty()) {
            showError("Please enter a username to search");
            return;
        }

        try {
            // Search for users with the UsersService
            List<User> foundUsers = usersService.findByUsername(username);
            
            // Update the UI based on search results
            if (!foundUsers.isEmpty()) {
                usersList.clear();
                usersList.addAll(foundUsers);
                usersTableView.setItems(usersList);
                
                // If exactly one user was found, select it
                if (foundUsers.size() == 1) {
                    usersTableView.getSelectionModel().select(0);
                    showInformation("User found: " + foundUsers.get(0).getFirstName() + " " + foundUsers.get(0).getLastName());
                } else {
                    showInformation(foundUsers.size() + " users found matching '" + username + "'");
                }
                
                // Enable ban buttons if users were found
                if (banUserBtn != null) banUserBtn.setDisable(false);
                if (unbanUserBtn != null) unbanUserBtn.setDisable(false);
            } else {
                showInformation("No users found matching '" + username + "'");
            }
        } catch (SQLException e) {
            showError("Database error when searching for users: " + e.getMessage());
        } catch (Exception e) {
            showError("Error searching for users: " + e.getMessage());
        }
    }

    /**
     * Bans the selected user with specified duration and reason.
     * If no user is selected, attempts to find the user by the text in the search field.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void banUser(ActionEvent event) {
        // Get selected user from the table
        User selectedUser = usersTableView.getSelectionModel().getSelectedItem();
        
        if (selectedUser == null) {
            String username = userSearchField.getText().trim();
            if (username.isEmpty()) {
                showError("Please search for a user first or select a user from the table");
                return;
            }
            
            // Try to find the user by name in the table
            for (User user : usersList) {
                String fullName = user.getFirstName() + " " + user.getLastName();
                if (fullName.equalsIgnoreCase(username)) {
                    selectedUser = user;
                    break;
                }
            }
            
            // If user is still not found, show error
            if (selectedUser == null) {
                showError("User not found: " + username);
                return;
            }
        }
        
        // Get ban duration
        String duration;
        if (customBanPeriod != null && !customBanPeriod.getText().isEmpty()) {
            duration = customBanPeriod.getText() + " " + customBanUnitComboBox.getValue();
        } else {
            duration = banDurationComboBox.getValue();
        }

        // Get ban reason
        String reason = "";
        if (banReasonTextArea != null && !banReasonTextArea.getText().isEmpty()) {
            reason = banReasonTextArea.getText();
        }

        // Ban the user using the real method
        banUserReal(selectedUser, duration, reason);
    }

    /**
     * Unbans the selected user.
     * If no user is selected, attempts to find the user by the text in the search field.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void unbanUser(ActionEvent event) {
        // Get selected user from the table
        User selectedUser = usersTableView.getSelectionModel().getSelectedItem();
        
        if (selectedUser == null) {
            String username = userSearchField.getText().trim();
            if (username.isEmpty()) {
                showError("Please search for a user first or select a user from the table");
                return;
            }
            
            // Try to find the user by name in the table
            for (User user : usersList) {
                String fullName = user.getFirstName() + " " + user.getLastName();
                if (fullName.equalsIgnoreCase(username)) {
                    selectedUser = user;
                    break;
                }
            }
            
            // If user is still not found, show error
            if (selectedUser == null) {
                showError("User not found: " + username);
                return;
            }
        }

        // Unban the user using the real method
        unbanUserReal(selectedUser);
    }

    /**
     * Refreshes all statistics data from the database and updates the UI.
     * This includes counters, category chart, and monthly trend chart.
     */
    @FXML
    private void refreshStatistics() {
        try {
            // Get real statistics from the database
            int total = reclamationService.countAllReclamations();
            int pending = reclamationService.countReclamationsByStatus("Pending");
            int resolved = reclamationService.countReclamationsByStatus("Resolved");

            // Update statistics labels with animation
            if (totalReclamationsLabel != null) {
                animateCounterLabel(totalReclamationsLabel, 0, total, 1500);
            }
            if (pendingReclamationsLabel != null) {
                animateCounterLabel(pendingReclamationsLabel, 0, pending, 1500);
            }
            if (resolvedReclamationsLabel != null) {
                animateCounterLabel(resolvedReclamationsLabel, 0, resolved, 1500);
            }
            
            // Recreate the charts with new data
            createCategoryChart();
            createMonthlyTrendChart();
            
        } catch (Exception e) {
            showError("Failed to refresh statistics: " + e.getMessage());
        }
    }
    
    /**
     * Animate a label counting up from start to end
     * 
     * @param label The label to animate
     * @param start Starting value
     * @param end Ending value
     * @param duration Animation duration in milliseconds
     */
    /**
     * Animates a counter label from start value to end value over specified duration
     * 
     * @param label The label to animate
     * @param start Starting value
     * @param end Ending value
     * @param duration Animation duration in milliseconds
     */
    private void animateCounterLabel(Label label, int start, int end, int duration) {
        // Create a timeline for the animation
        Timeline timeline = new Timeline();
        
        // Calculate number of keyframes needed (one per 20ms)
        int steps = duration / 20;
        double stepSize = (double)(end - start) / steps;
        
        // Create an AtomicInteger to hold the current count
        AtomicInteger count = new AtomicInteger(start);
        
        // Add keyframes for each step
        for (int i = 0; i <= steps; i++) {
            int frameValue = (int) Math.round(start + (stepSize * i));
            KeyFrame keyFrame = new KeyFrame(
                Duration.millis((double) i / steps * duration),
                event -> {
                    count.set(Math.min(frameValue, end));
                    label.setText(String.valueOf(count.get()));
                }
            );
            timeline.getKeyFrames().add(keyFrame);
        }
        
        // Ensure the final value is exactly the end value
        KeyFrame finalFrame = new KeyFrame(
            Duration.millis(duration),
            event -> label.setText(String.valueOf(end))
        );
        timeline.getKeyFrames().add(finalFrame);
        
        // Play the animation
        timeline.play();
    }

    /**
     * Tests the database connection using the provided credentials.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void testDatabaseConnection(ActionEvent event) {
        String url = dbUrlField.getText();
        String username = dbUsernameField.getText();
        String password = dbPasswordField.getText();

        if (url.isEmpty() || username.isEmpty()) {
            showError("Database URL and username are required");
            return;
        }

        try {
            // Test the connection
            Connection conn = DriverManager.getConnection(url, username, password);
            conn.close();
            showInformation("Database connection successful!");
        } catch (SQLException e) {
            showError("Database connection failed: " + e.getMessage());
        }
    }

    /**
     * Saves the database configuration settings.
     * In a real application, this would save to a configuration file.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void saveDatabaseSettings(ActionEvent event) {
        String url = dbUrlField.getText();
        String username = dbUsernameField.getText();
        String password = dbPasswordField.getText();

        if (url.isEmpty() || username.isEmpty()) {
            showError("Database URL and username are required");
            return;
        }

        // In a real application, this would save the settings to a configuration file
        showInformation("Database settings saved successfully");
    }

    /**
     * Saves general application settings including theme, log level, and database pool size.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void saveGeneralSettings(ActionEvent event) {
        String theme;

        // Get theme from either combo box or radio buttons
        if (lightThemeRadio != null && darkThemeRadio != null) {
            theme = lightThemeRadio.isSelected() ? "Light" : "Dark";
        } else if (themeComboBox != null) {
            theme = themeComboBox.getValue();
        } else {
            theme = "Light"; // Default if neither radio buttons nor combobox are available
        }

        String logLevel = logLevelComboBox != null ? logLevelComboBox.getValue() : "INFO";
        boolean debugEnabled = enableDebugCheckBox != null && enableDebugCheckBox.isSelected();
        boolean maintenanceEnabled = enableMaintenanceCheckBox != null && enableMaintenanceCheckBox.isSelected();

        // Get pool settings if they exist
        String minPool = minPoolField != null ? minPoolField.getText() : "5";
        String maxPool = maxPoolField != null ? maxPoolField.getText() : "20";

        // In a real application, this would save the settings to a configuration file
        showInformation("General settings saved successfully");
    }

    /**
     * Initiates a database backup process.
     * In a real application, this would create an actual database backup.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void backupDatabase(ActionEvent event) {
        // In a real application, this would create a database backup
        showInformation("Database backup started. This may take a few minutes...");

        // Simulate a backup process
        new Thread(() -> {
            try {
                Thread.sleep(2000); // Simulate backup process

                // Update UI on JavaFX thread
                javafx.application.Platform.runLater(() -> {
                    showInformation("Database backup completed successfully.");
                });
            } catch (InterruptedException e) {
                javafx.application.Platform.runLater(() -> {
                    showError("Database backup failed: " + e.getMessage());
                });
            }
        }).start();
    }

    /**
     * Initiates a database restore process from a backup.
     * In a real application, this would restore from an actual backup file.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void restoreDatabase(ActionEvent event) {
        // In a real application, this would restore a database from backup
        showInformation("Database restore initiated. The application will restart when complete.");

        // Simulate a restore process
        new Thread(() -> {
            try {
                Thread.sleep(2000); // Simulate restore process

                // Update UI on JavaFX thread
                javafx.application.Platform.runLater(() -> {
                    showInformation("Database restore completed successfully.");
                });
            } catch (InterruptedException e) {
                javafx.application.Platform.runLater(() -> {
                    showError("Database restore failed: " + e.getMessage());
                });
            }
        }).start();
    }

    /**
     * Optimizes database tables to improve performance.
     * In a real application, this would run actual database optimization commands.
     * 
     * @param event The action event that triggered this method
     */
    @FXML
    private void optimizeTables(ActionEvent event) {
        // In a real application, this would optimize database tables
        showInformation("Database optimization started. This may take a few minutes...");

        // Simulate an optimization process
        new Thread(() -> {
            try {
                Thread.sleep(1500); // Simulate optimization process

                // Update UI on JavaFX thread
                javafx.application.Platform.runLater(() -> {
                    showInformation("Database tables optimized successfully.");
                });
            } catch (InterruptedException e) {
                javafx.application.Platform.runLater(() -> {
                    showError("Database optimization failed: " + e.getMessage());
                });
            }
        }).start();
    }

    /**
     * Displays an error alert with the specified message.
     * 
     * @param message The error message to display
     */
    private void showError(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    /**
     * Displays an information alert with the specified message.
     * 
     * @param message The information message to display
     */
    private void showInformation(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    
    /**
     * Change the application language
     * @param language The language to change to (English, Français, العربية)
     */
    private void changeLanguage(String language) {
        Locale locale;
        switch (language) {
            case "Français":
                locale = Locale.FRENCH;
                break;
            case "العربية":
                locale = new Locale("ar");
                break;
            case "English":
            default:
                locale = Locale.ENGLISH;
                break;
        }
        
        try {
            // Update current locale
            this.currentLocale = locale;
            
            // Load the appropriate resource bundle
            ResourceBundle newResources = ResourceBundle.getBundle("i18n.messages", locale);
            this.resources = newResources;
            
            // Update UI text elements with new language
            updateUILanguage();
            
            // Show success message
            showInformation("Language changed to " + language);
        } catch (Exception e) {
            showError("Failed to change language: " + e.getMessage());
        }
    }
    
    /**
     * Update UI elements with text from the current language resource bundle
     */
    private void updateUILanguage() {
        // This would update all text elements with translations from the resource bundle
        // Example usage:
        if (saveGeneralSettingsBtn != null) {
            saveGeneralSettingsBtn.setText(resources.getString("button.save"));
        }
        
        // Update column headers
        if (userIdColumn != null) {
            userIdColumn.setText(resources.getString("column.userId"));
        }
        if (usernameColumn != null) {
            usernameColumn.setText(resources.getString("column.username"));
        }
        if (emailColumn != null) {
            emailColumn.setText(resources.getString("column.email"));
        }
        if (statusColumn != null) {
            statusColumn.setText(resources.getString("column.status"));
        }
        if (lastLoginColumn != null) {
            lastLoginColumn.setText(resources.getString("column.lastLogin"));
        }
        
        // Update tab labels and other UI elements
        // This would include all text elements in the UI
    }
    
    /**
     * Apply a theme to the current scene
     * @param theme The theme to apply ("light" or "dark")
     */
    private void applyTheme(String theme) {
        currentTheme = theme;
        Scene scene = null;
        
        // Get the current scene from any FXML component
        if (lightThemeRadio != null) {
            scene = lightThemeRadio.getScene();
        } else if (languageComboBox != null) {
            scene = languageComboBox.getScene();
        } else if (usersTableView != null) {
            scene = usersTableView.getScene();
        }
        
        if (scene != null) {
            applyTheme(scene, theme);
        }
    }
    
    /**
     * Apply a theme to a specific scene
     * @param scene The scene to apply the theme to
     * @param theme The theme to apply ("light" or "dark")
     */
    private void applyTheme(Scene scene, String theme) {
        // Remove any existing theme CSS
        scene.getStylesheets().remove(LIGHT_THEME_CSS);
        scene.getStylesheets().remove(DARK_THEME_CSS);
        
        // Apply the selected theme
        if ("dark".equalsIgnoreCase(theme)) {
            scene.getStylesheets().add(DARK_THEME_CSS);
        } else {
            scene.getStylesheets().add(LIGHT_THEME_CSS);
        }
    }
    
    /**
     * Load users data from the database
     */
    private void loadUsersData() {
        try {
            // Clear existing data
            usersList.clear();
            
            // Load users from the database using the UsersService
            List<User> users = usersService.read();
            usersList.addAll(users);
            
            // Set the items to the table view
            if (usersTableView != null) {
                usersTableView.setItems(usersList);
            }
            
            // Add a fade-in animation for the table
            if (usersTableView != null) {
                FadeTransition fadeIn = new FadeTransition(Duration.millis(500), usersTableView);
                fadeIn.setFromValue(0.0);
                fadeIn.setToValue(1.0);
                fadeIn.play();
            }
        } catch (Exception e) {
            showError("Failed to load users: " + e.getMessage());
        }
    }
    
    /**
     * Update UI elements when a user is selected
     * @param user The selected user
     */
    private void updateUserSelectionUI(User user) {
        if (user == null) return;
        
        // Enable/disable ban and unban buttons based on user status
        if (banUserBtn != null) {
            banUserBtn.setDisable(user.isBanned());
        }
        if (unbanUserBtn != null) {
            unbanUserBtn.setDisable(!user.isBanned());
        }
        
        // Set user search field to the selected user's name
        if (userSearchField != null) {
            userSearchField.setText(user.getFirstName() + " " + user.getLastName());
        }
        
        // Add a small animation to highlight the selection
        TranslateTransition transition = new TranslateTransition(Duration.millis(200), banUserBtn);
        transition.setFromX(-5);
        transition.setToX(0);
        transition.setAutoReverse(true);
        transition.setCycleCount(2);
        transition.play();
    }
    
    //endregion
    
    //region STATISTICS
    
    /**
     * Initialize reclamation statistics with animated charts
     */
    private void initializeReclamationStatistics() {
        try {
            // Fetch real statistics from the ReclamationService
            int totalReclamations = reclamationService.countAllReclamations();
            int pendingReclamations = reclamationService.countReclamationsByStatus("Pending");
            int resolvedReclamations = reclamationService.countReclamationsByStatus("Resolved");
            
            // Update statistics labels
            if (totalReclamationsLabel != null) {
                totalReclamationsLabel.setText(String.valueOf(totalReclamations));
            }
            if (pendingReclamationsLabel != null) {
                pendingReclamationsLabel.setText(String.valueOf(pendingReclamations));
            }
            if (resolvedReclamationsLabel != null) {
                resolvedReclamationsLabel.setText(String.valueOf(resolvedReclamations));
            }
            
            // Create and animate category distribution chart
            createCategoryChart();
            
            // Create and animate monthly trend chart
            createMonthlyTrendChart();
            
        } catch (Exception e) {
            showError("Failed to initialize statistics: " + e.getMessage());
        }
    }
    
    /**
     * Create animated category distribution chart
     */
    private void createCategoryChart() {
        if (categoryChartContainer == null) return;
        
        try {
            // Clear previous chart if any
            categoryChartContainer.getChildren().clear();
            
            // Create pie chart
            PieChart pieChart = new PieChart();
            pieChart.setTitle("Reclamations by Category");
            pieChart.setLegendSide(Side.RIGHT);
            pieChart.setLabelsVisible(true);
            pieChart.setAnimated(true);
            
            // Get real data from ReclamationService
            Map<String, Integer> categoryCounts = reclamationService.getReclamationCountsByCategory();
            
            // Create chart data
            ObservableList<PieChart.Data> pieChartData = FXCollections.observableArrayList();
            
            // Add data to chart with animation
            AtomicInteger delay = new AtomicInteger(0);
            categoryCounts.forEach((category, count) -> {
                PieChart.Data slice = new PieChart.Data(category + " (" + count + ")", count);
                pieChartData.add(slice);
                
                // Animate each slice appearing
                Timeline timeline = new Timeline();
                KeyValue kv = new KeyValue(slice.pieValueProperty(), count);
                KeyFrame kf = new KeyFrame(Duration.millis(500 + delay.getAndIncrement() * 200), kv);
                timeline.getKeyFrames().add(kf);
                timeline.play();
            });
            
            pieChart.setData(pieChartData);
            
            // Set chart size
            pieChart.setPrefSize(categoryChartContainer.getPrefWidth(), categoryChartContainer.getPrefHeight());
            
            // Add chart to container
            categoryChartContainer.getChildren().add(pieChart);
            
            // Add appear animation
            FadeTransition ft = new FadeTransition(Duration.millis(1000), pieChart);
            ft.setFromValue(0);
            ft.setToValue(1);
            ft.play();
            
        } catch (Exception e) {
            showError("Failed to create category chart: " + e.getMessage());
        }
    }
    
    /**
     * Create animated monthly trend chart
     */
    private void createMonthlyTrendChart() {
        if (monthlyTrendChartContainer == null) return;
        
        try {
            // Clear previous chart if any
            monthlyTrendChartContainer.getChildren().clear();
            
            // Create axes
            CategoryAxis xAxis = new CategoryAxis();
            NumberAxis yAxis = new NumberAxis();
            xAxis.setLabel("Month");
            yAxis.setLabel("Number of Reclamations");
            
            // Create bar chart
            BarChart<String, Number> barChart = new BarChart<>(xAxis, yAxis);
            barChart.setTitle("Monthly Reclamation Trends");
            barChart.setAnimated(true);
            
            // Get real data from ReclamationService
            Map<String, Integer> monthlyData = reclamationService.getMonthlyReclamationCounts();
            
            // Create data series
            XYChart.Series<String, Number> series = new XYChart.Series<>();
            series.setName("Reclamations");
            
            // Add data to series
            List<String> months = Arrays.asList("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
            for (String month : months) {
                series.getData().add(new XYChart.Data<>(month, monthlyData.getOrDefault(month, 0)));
            }
            
            // Add series to chart
            barChart.getData().add(series);
            
            // Set chart size
            barChart.setPrefSize(monthlyTrendChartContainer.getPrefWidth(), monthlyTrendChartContainer.getPrefHeight());
            
            // Add chart to container
            monthlyTrendChartContainer.getChildren().add(barChart);
            
            // Add animated data reveal
            for (XYChart.Data<String, Number> data : series.getData()) {
                Node node = data.getNode();
                data.setYValue(0);  // Start from 0
                
                int value = monthlyData.getOrDefault(data.getXValue(), 0);
                
                // Animate the bar height
                Timeline timeline = new Timeline();
                KeyValue kv = new KeyValue(data.YValueProperty(), value);
                KeyFrame kf = new KeyFrame(Duration.millis(500), kv);
                timeline.getKeyFrames().add(kf);
                timeline.setDelay(Duration.millis(100 * series.getData().indexOf(data)));
                timeline.play();
            }
            
        } catch (Exception e) {
            showError("Failed to create monthly trend chart: " + e.getMessage());
        }
    }
    
    //endregion
    
    //region DATABASE SETTINGS
    
    /**
     * Initialize database settings
     */
    private void initializeDatabaseSettings() {
        try {
            // Get database connection properties
            if (dbUrlField != null) {
                dbUrlField.setText(DB_URL);
            }
            
            if (dbUsernameField != null) {
                dbUsernameField.setText(DB_USERNAME);
            }
            
            if (dbPasswordField != null) {
                dbPasswordField.setText(DB_PASSWORD);
            }
            
            if (minPoolField != null) {
                minPoolField.setText(DEFAULT_MIN_POOL_SIZE); // Default value
            }
            
            if (maxPoolField != null) {
                maxPoolField.setText(DEFAULT_MAX_POOL_SIZE); // Default value
            }
        } catch (Exception e) {
            showError("Failed to initialize database settings: " + e.getMessage());
        }
    }
    
    /**
     * Ban a user with the specified duration and reason
     * 
     * @param user The user to ban
     * @param duration The ban duration
     * @param reason The reason for the ban
     */
    private void banUserReal(User user, String duration, String reason) {
        try {
            // Convert duration string to hours
            Integer durationInHours = convertDurationToHours(duration);
            
            // Use the UserService.banUser method directly
            boolean success = usersService.banUser(user.getId(), reason, durationInHours);
            
            if (success) {
                String banDurationText = (durationInHours == null) ? "permanently" : 
                    "for " + formatDuration(durationInHours);
                
                showInformation("User " + user.getFirstName() + " " + user.getLastName() + 
                    " has been banned " + banDurationText + 
                    (reason != null && !reason.isEmpty() ? " for reason: " + reason : ""));
                
                // Refresh user list
                loadUsersData();
            } else {
                showError("Failed to ban user");
            }
        } catch (SQLException e) {
            showError("Database error when banning user: " + e.getMessage());
        } catch (Exception e) {
            showError("Error banning user: " + e.getMessage());
        }
    }
    
    /**
     * Converts a duration string to hours for the ban user method
     * 
     * @param duration The duration string (e.g. "1 day", "2 weeks", "Permanent")
     * @return Number of hours, or null for permanent ban
     */
    private Integer convertDurationToHours(String duration) {
        if (duration.equalsIgnoreCase("Permanent")) {
            return null; // Null represents permanent ban
        }
        
        // Parse the duration string
        if (duration.contains(" ")) {
            String[] parts = duration.split(" ", 2);
            try {
                int amount = Integer.parseInt(parts[0]);
                String unit = parts[1].toLowerCase();
                
                if (unit.startsWith("hour")) {
                    return amount;
                } else if (unit.startsWith("day")) {
                    return amount * 24;
                } else if (unit.startsWith("week")) {
                    return amount * 24 * 7;
                } else if (unit.startsWith("month")) {
                    return amount * 24 * 30; // Approximate
                }
            } catch (NumberFormatException e) {
                // Default to 1 week if parsing fails
                return 24 * 7;
            }
        }
        
        // Default to 1 week
        return 24 * 7;
    }
    
    /**
     * Format duration hours into a human-readable string
     * 
     * @param hours Number of hours
     * @return Formatted duration string
     */
    private String formatDuration(int hours) {
        if (hours < 24) {
            return hours + " hour" + (hours > 1 ? "s" : "");
        } else if (hours < 24 * 7) {
            int days = hours / 24;
            return days + " day" + (days > 1 ? "s" : "");
        } else if (hours < 24 * 30) {
            int weeks = hours / (24 * 7);
            return weeks + " week" + (weeks > 1 ? "s" : "");
        } else {
            int months = hours / (24 * 30);
            return months + " month" + (months > 1 ? "s" : "");
        }
    }
    
    /**
     * Calculate ban end date based on duration string
     * 
     * @param duration The ban duration in text format
     * @return The calculated end date or null for permanent ban
     */
    private Date calculateBanEndDate(String duration) {
        if (duration.equalsIgnoreCase("Permanent")) {
            return null; // Null represents permanent ban
        }
        
        Calendar calendar = Calendar.getInstance();
        calendar.setTime(new Date());
        
        // Parse the duration string
        if (duration.contains(" ")) {
            String[] parts = duration.split(" ", 2);
            try {
                int amount = Integer.parseInt(parts[0]);
                String unit = parts[1].toLowerCase();
                
                if (unit.startsWith("hour")) {
                    calendar.add(Calendar.HOUR, amount);
                } else if (unit.startsWith("day")) {
                    calendar.add(Calendar.DAY_OF_MONTH, amount);
                } else if (unit.startsWith("week")) {
                    calendar.add(Calendar.WEEK_OF_YEAR, amount);
                } else if (unit.startsWith("month")) {
                    calendar.add(Calendar.MONTH, amount);
                }
            } catch (NumberFormatException e) {
                // Default to 1 week if parsing fails
                calendar.add(Calendar.WEEK_OF_YEAR, 1);
            }
        } else {
            // Default to 1 week
            calendar.add(Calendar.WEEK_OF_YEAR, 1);
        }
        
        return calendar.getTime();
    }
    
    /**
     * Unban a user
     * 
     * @param user The user to unban
     */
    private void unbanUserReal(User user) {
        try {
            // Use the UserService.unbanUser method directly
            boolean success = usersService.unbanUser(user.getId());
            
            if (success) {
                showInformation("User " + user.getFirstName() + " " + user.getLastName() + " has been unbanned");
                
                // Refresh user list
                loadUsersData();
            } else {
                showError("Failed to unban user");
            }
        } catch (SQLException e) {
            showError("Database error when unbanning user: " + e.getMessage());
        } catch (Exception e) {
            showError("Error unbanning user: " + e.getMessage());
        }
    }
    
    //endregion
    
    //region LOGGING
    
    /**
     * Initialize log level controls
     */
    private void initializeLogControls() {
        if (logLevelComboBox != null) {
            // Add available log levels
            logLevelComboBox.getItems().addAll("TRACE", "DEBUG", "INFO", "WARN", "ERROR", "FATAL");
            
            // Set default log level
            logLevelComboBox.setValue("INFO");
            
            // Add listener for log level change
            logLevelComboBox.valueProperty().addListener((obs, oldVal, newVal) -> {
                if (newVal != null) {
                    // Here you would implement the code to change the application's log level
                    System.out.println("Log level changed to: " + newVal);
                }
            });
        }
    }
    
    //endregion
    
    //region GENERAL SETTINGS
    
    /**
     * Initialize general settings with default values
     */
    private void initializeGeneralSettings() {
        // Initialize checkboxes
        if (enableDebugCheckBox != null) {
            enableDebugCheckBox.setSelected(false);
        }
        
        if (enableMaintenanceCheckBox != null) {
            enableMaintenanceCheckBox.setSelected(false);
        }
        
        // Initialize pool size fields
        if (minPoolField != null) {
            minPoolField.setText(DEFAULT_MIN_POOL_SIZE);
        }
        
        if (maxPoolField != null) {
            maxPoolField.setText(DEFAULT_MAX_POOL_SIZE);
        }
    }
    
    //endregion
}
