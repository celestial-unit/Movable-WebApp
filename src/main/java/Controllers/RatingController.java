package Controllers;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TextArea;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import org.controlsfx.control.Rating;
import utils.myConnection;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class RatingController {

    @FXML
    private Button closeButton;

    @FXML
    private TextArea commentField;

    @FXML
    private Button submitButton;

    @FXML
    private Rating ratingControl;

    @FXML
    private Button showRatesButton;

    @FXML
    private VBox ratesListContainer; // VBox to hold the agent's ratings and comments

    private int agentId; // ID of the agent being rated
    private Connection conn = myConnection.getInstance().getConnection(); // Get the connection from myConnection singleton

    // Set the agent ID
    public void setAgentId(int agentId) {
        this.agentId = agentId;
    }

    // Handle the rating submission
    @FXML
    void submitResponse(ActionEvent event) {
        double rating = ratingControl.getRating();
        String comment = commentField.getText();

        if (rating == 0) {
            showAlert("Please select a star rating before submitting.");
            return;
        }

        // Insert into database using the existing connection
        String sql = "INSERT INTO rates (idagent, rating, comment) VALUES (?, ?, ?)";
        try (PreparedStatement pstmt = conn.prepareStatement(sql)) {
            pstmt.setInt(1, agentId);
            pstmt.setDouble(2, rating);
            pstmt.setString(3, comment);
            pstmt.executeUpdate(); // Execute the insert statement

            showAlert("Rating submitted successfully!");
            closeButton.fire();

        } catch (SQLException e) {
            showAlert("Error submitting rating: " + e.getMessage()); // Handle any SQL errors
        }
    }

    private void showAlert(String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setContentText(message);
        alert.show();
    }

}

