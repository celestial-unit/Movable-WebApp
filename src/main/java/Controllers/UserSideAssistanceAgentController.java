package Controllers;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

import java.awt.*;
import java.io.IOException;
import java.net.URI;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javafx.scene.image.Image;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Modality;
import javafx.stage.Stage;
import org.controlsfx.control.Rating;
import utils.myConnection;  // Import the connection class

public class UserSideAssistanceAgentController {

    public Button TrackButton;
    public Button rateAgentButton;
    public Button ViewCalendar;
    public Button backToDashboardButton;
    @FXML
    private ComboBox<String> assistantComboBox;

    @FXML
    private ImageView assistantImage;

    @FXML
    private Label birthdateLabel;

    @FXML
    private Label emailLabel;

    @FXML
    private Label nameLabel;

    @FXML
    private ComboBox<String> officeComboBox;

    @FXML
    private Label phoneLabel;

    @FXML
    private Label typeLabel;
    @FXML
    private Rating ratingControl;
    @FXML
    private VBox ratingsVBox;

    @FXML
    private VBox ratesListContainer;

    @FXML
    private Button viewDetailsButton;

    private Connection connection;
    private int agentId;

    @FXML
    public void initialize() {
        // Get the database connection instance once
        connection = myConnection.getInstance().getConnection();
        loadOfficesFromDatabase();
        assistantComboBox.getItems().clear();
        officeComboBox.setOnAction(e -> filterAssistantsByOffice());
    }

    private void loadOfficesFromDatabase() {
        String query = "SELECT name FROM office";

        try {
            PreparedStatement stmt = connection.prepareStatement(query);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                String officeName = rs.getString("name");
                officeComboBox.getItems().add(officeName);
            }

            // Do not close connection, only close the result set and statement
            rs.close();
            stmt.close();
        } catch (SQLException e) {
            showAlert("Error retrieving offices: " + e.getMessage());
        }
    }

    // Fetch assistants based on selected office
    private void filterAssistantsByOffice() {
        String selectedOffice = officeComboBox.getValue();

        if (selectedOffice != null) {
            assistantComboBox.getItems().clear();
            fetchAssistantsForOffice(selectedOffice);
        }
    }

    // Fetch assistants from the database
    private void fetchAssistantsForOffice(String officeName) {
        String query = "SELECT a.name FROM agent a " +
                "INNER JOIN office o ON a.office_Id = o.id " +
                "WHERE o.name = ?";

        try {
            PreparedStatement stmt = connection.prepareStatement(query);
            stmt.setString(1, officeName);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                String assistantName = rs.getString("name");
                assistantComboBox.getItems().add(assistantName);
            }


            rs.close();
            stmt.close();
        } catch (SQLException e) {
            showAlert("Error retrieving assistants: " + e.getMessage());
        }
    }

    @FXML
    void viewAgentDetails(ActionEvent event) {
        String selectedAssistant = assistantComboBox.getValue();

        if (selectedAssistant == null) {
            showAlert("Please select an assistant to view details.");
            return;
        }

        // Fetch the agent details from the database based on the selected assistant
        fetchAgentDetails(selectedAssistant);
    }

    // Fetch agent details based on the assistant's name
    private void fetchAgentDetails(String assistantName) {
        String query = "SELECT * FROM agent WHERE name = ?";

        try {
            PreparedStatement stmt = connection.prepareStatement(query);
            stmt.setString(1, assistantName);
            ResultSet rs = stmt.executeQuery();

            if (rs.next()) {
                // Retrieve agent details
                String name = rs.getString("name");
                String email = rs.getString("email");
                String phone = rs.getString("phone");
                String type = rs.getString("type");
                String birthdate = rs.getString("birthdate");
                String profilePicturePath = rs.getString("pictureP");

                // Set agent details to labels
                nameLabel.setText(name);
                emailLabel.setText(email);
                phoneLabel.setText(phone);
                typeLabel.setText(type);
                birthdateLabel.setText(birthdate);

                // Load profile image (if exists)
                if (profilePicturePath != null && !profilePicturePath.isEmpty()) {
                    Image image = new Image("file:" + profilePicturePath);
                    assistantImage.setImage(image);
                } else {
                    // Set default image if no profile picture is available
                    assistantImage.setImage(new Image("img/default-profile.png"));
                }
                fetchAgentRates(assistantName);
            }

            rs.close();
            stmt.close();
        } catch (SQLException e) {
            showAlert("Error retrieving agent details: " + e.getMessage());
        }
    }
    // Fetch agent rates based on the agent's ID
    private void fetchAgentRates(String agentName) {
        // Step 1: Retrieve the agent's ID based on the agent's name
        String getAgentIdQuery = "SELECT id FROM agent WHERE name = ?";

        try {
            // Step 2: Prepare the statement to fetch the agent's ID
            PreparedStatement stmt = connection.prepareStatement(getAgentIdQuery);
            stmt.setString(1, agentName);  // Set the agent's name as the parameter
            ResultSet rs = stmt.executeQuery();

            // Check if the agent was found
            if (rs.next()) {
                int agentId = rs.getInt("id");  // Retrieve the agent's ID

                // Step 3: Now fetch the ratings for this agent from the rates table
                String getRatingsQuery = "SELECT rating, comment FROM rates WHERE idagent = ?";
                PreparedStatement ratingStmt = connection.prepareStatement(getRatingsQuery);
                ratingStmt.setInt(1, agentId);  // Set the agent's ID to filter the ratings
                ResultSet ratingRs = ratingStmt.executeQuery();

                // Step 4: Clear any previous ratings
                ratingsVBox.getChildren().clear();

                // Step 5: Process the ratings
                while (ratingRs.next()) {
                    double rate = ratingRs.getDouble("rating");  // Get the rating value
                    String comment = ratingRs.getString("comment");  // Get the associated comment

                    // Create a Rating component and set its value
                    Rating rating = new Rating();
                    rating.setRating(rate);
                    // Optionally, you can display the comment here as well, using a Label or similar

                    // For displaying the comment, you can use a Label, for example:
                    Label commentLabel = new Label("Comment: " + comment);
                    ratingsVBox.getChildren().addAll(rating, commentLabel);  // Add both rating and comment to the VBox
                }

                ratingRs.close();
                ratingStmt.close();
            } else {
                showAlert("Agent not found.");
            }

            rs.close();
            stmt.close();
        } catch (SQLException e) {
            showAlert("Error retrieving agent rates: " + e.getMessage());
        }
    }



    // Helper method to show alerts
    private void showAlert(String message) {
        javafx.scene.control.Alert alert = new javafx.scene.control.Alert(javafx.scene.control.Alert.AlertType.INFORMATION);
        alert.setTitle("Agent Details");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    private void showAlert(Alert.AlertType type, String title, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    private int fetchAgentIdByName(String assistantName) {
        int agentId = -1; // Default to -1 if not found
        String query = "SELECT id FROM agent WHERE name = ?";

        try (PreparedStatement stmt = connection.prepareStatement(query)) {
            stmt.setString(1, assistantName);
            ResultSet rs = stmt.executeQuery();

            if (rs.next()) {
                agentId = rs.getInt("id");
            }

            rs.close();
        } catch (SQLException e) {
            showAlert("Error fetching agent ID: " + e.getMessage());
        }

        return agentId;
    }

    public void rateAgent(ActionEvent event) {
        String selectedAssistant = assistantComboBox.getValue();

        if (selectedAssistant == null) {
            showAlert("Please select an assistant to rate.");
            return;
        }

        // Fetch the agentId from the database based on the selected assistant's name
        int agentId = fetchAgentIdByName(selectedAssistant);

        if (agentId == -1) {
            showAlert("Agent not found.");
            return;
        }

        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/AgentRating.fxml"));
            Scene scene = new Scene(loader.load());

            // Get the RatingController instance from the FXMLLoader
            RatingController ratingController = loader.getController();

            // Pass the agentId to the RatingController
            ratingController.setAgentId(agentId);

            // Open the popup window
            Stage stage = new Stage();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to open the rating window.");
        }
    }



    public void ViewCalendar(ActionEvent actionEvent) {
        String selectedAssistant = assistantComboBox.getValue();

        if (selectedAssistant == null) {
            showAlert("Please select an assistant.");
            return;
        }

        int agentId = fetchAgentIdByName(selectedAssistant);

        if (agentId == -1) {
            showAlert("Agent not found.");
            return;
        }

        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Calendar.fxml"));
            Parent root = loader.load();

            // Get the CalendarController instance from the FXMLLoader
            CalendarController calendarController = loader.getController();

            // Pass the agentId to the CalendarController
            calendarController.setAgentId(agentId);

            // Open the popup window (full-size)
            Stage stage = new Stage();
            stage.setTitle("Agent's Reservation Calendar");
            stage.setScene(new Scene(root, 900, 600)); // Adjust size as needed
            stage.setMaximized(true); // Open in full-screen mode
            stage.show();
        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to open the calendar window.");
        }
    }
    public void TruckButton(ActionEvent event) {
        try {
            // Open the URL in the default web browser
            Desktop.getDesktop().browse(new URI("http://localhost:63342/projetPidev/map.html"));
        } catch (IOException | java.net.URISyntaxException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to open the map page.");
        }
    }
    
    /**
     * Navigate back to the normal user dashboard
     */
    @FXML
    public void backToDashboard(ActionEvent event) {
        try {
            // Load the normal user dashboard
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/normal_user_dashboard.fxml"));
            Parent root = loader.load();
            
            // Get the current stage from the event source
            Stage stage = (Stage) ((javafx.scene.Node) event.getSource()).getScene().getWindow();
            
            // Replace the scene content
            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.setTitle("User Dashboard");
            
            // Optional: Center on screen for better UX
            stage.centerOnScreen();
            
        } catch (IOException e) {
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR, "Navigation Error", 
                      "Unable to navigate to the dashboard. Please try again.");
        }
    }

    /*public void TruckButton(ActionEvent event) {
        try {
            // Load the rating form
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/mapAssistant.fxml"));
            Parent root = loader.load();

            // Create a new Stage (pop-up window)
            Stage popUpStage = new Stage();
            Scene scene = new Scene(root);

            // Set the scene and show the new stage
            popUpStage.setScene(scene);
            popUpStage.setTitle("Tracking In Real Time"); // Optional: set a title for the pop-up window
            popUpStage.initModality(Modality.APPLICATION_MODAL); // This makes it a modal (it will block interaction with the main window)
            popUpStage.showAndWait(); // Show the pop-up and wait for it to be closed

        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to load the rating form.");
        }
    }*/
}




