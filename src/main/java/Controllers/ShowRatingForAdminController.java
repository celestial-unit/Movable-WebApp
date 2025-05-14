package Controllers;

import Models.Rate;
import javafx.beans.property.SimpleStringProperty;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import org.json.JSONObject;
import services.RateService;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import utils.myConnection;

import java.io.*;
import java.net.HttpURLConnection;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;

public class ShowRatingForAdminController {
    @FXML
    private TableView<ObservableList<String>> agentRatingsTable;

    @FXML
    private Button backButton;

    @FXML
    private TableColumn<ObservableList<String>, String> nameColumn;
    @FXML
    private TableColumn<ObservableList<String>, String> ratingColumn;
    @FXML
    private TableColumn<ObservableList<String>, String> commentColumn;
    @FXML
    private TableColumn<ObservableList<String>, String> sentimentColumn;
    @FXML
    private TableColumn<ObservableList<String>, String> scoreColumn;

    @FXML
    private Button refreshButton;

    private RateService rateService = new RateService();
    // Store connection as a class-level field
    private Connection conn = null;

    @FXML
    void initialize() {
        nameColumn.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().get(0)));
        ratingColumn.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().get(1)));
        commentColumn.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().get(2)));
        sentimentColumn.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().get(3)));
        scoreColumn.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().get(4)));

        // Load data
        agentRatingsTable.setItems(loadRatingsWithSentiment());
    }

    @FXML
    void handleRefresh(ActionEvent event) {
        agentRatingsTable.setItems((ObservableList) loadRatingsWithSentiment());
    }

    private ObservableList<ObservableList<String>> loadRatingsWithSentiment() {
        ObservableList<ObservableList<String>> ratings = FXCollections.observableArrayList();
        String query = "SELECT agent.name, rates.idagent, rates.rating, rates.comment FROM agent " +
                "INNER JOIN rates ON agent.id = rates.idagent";

        try {
            // Get connection but don't close it automatically
            if (conn == null || conn.isClosed()) {
                conn = myConnection.getInstance().getConnection();
            }

            PreparedStatement stmt = conn.prepareStatement(query);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                String agentName = rs.getString("name");
                int agentId = rs.getInt("idagent");
                String rating = String.valueOf(rs.getInt("rating"));
                String comment = rs.getString("comment");

                System.out.println("Agent: " + agentName + ", Rating: " + rating + ", Comment: " + comment);

                // Fetch sentiment analysis from API
                String[] sentimentData = getSentimentFromAPI(comment);
                String sentiment = sentimentData[0];
                String score = sentimentData[1];

                System.out.println("Sentiment: " + sentiment + ", Score: " + score);

                updateSentimentInDatabase(agentId, sentiment);

                ObservableList<String> row = FXCollections.observableArrayList();
                row.add(agentName);
                row.add(rating);
                row.add(comment);
                row.add(sentiment);
                row.add(score);
                ratings.add(row);
            }

            // Close statement and result set but not connection
            rs.close();
            stmt.close();

        } catch (SQLException e) {
            e.printStackTrace();
        }
        return ratings;
    }

    private void updateSentimentInDatabase(int agentId, String sentiment) {
        String updateQuery = "UPDATE rates SET sentiment = ? WHERE idagent = ?";
        try {
            PreparedStatement updateStmt = conn.prepareStatement(updateQuery);
            updateStmt.setString(1, sentiment);
            updateStmt.setInt(2, agentId);

            int rowsAffected = updateStmt.executeUpdate();
            if (rowsAffected > 0) {
                System.out.println("Sentiment for agent " + agentId + " updated successfully.");
            }

            updateStmt.close();

        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    // Call Flask API to analyze sentiment
    private String[] getSentimentFromAPI(String comment) {
        HttpURLConnection httpConn = null;
        BufferedReader in = null;
        try {
            String urlString = "http://127.0.0.1:5000/analyze_sentiment?comment=" + comment.replace(" ", "%20");
            URL url = new URL(urlString);
            httpConn = (HttpURLConnection) url.openConnection();
            httpConn.setRequestMethod("GET");

            in = new BufferedReader(new InputStreamReader(httpConn.getInputStream()));
            String inputLine;
            StringBuilder response = new StringBuilder();

            while ((inputLine = in.readLine()) != null) {
                response.append(inputLine);
            }
            in.close();
            httpConn.disconnect();

            // ✅ Print API response
            System.out.println("API Response: " + response.toString());

            JSONObject jsonResponse = new JSONObject(response.toString());
            String sentiment = jsonResponse.getString("sentiment");
            String score = String.valueOf(jsonResponse.getDouble("score"));

            return new String[]{sentiment, score};
        } catch (Exception e) {
            e.printStackTrace();
            return new String[]{"Error", "0.0"};
        }
    }


    private void showAlert(Alert.AlertType type, String title, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Method to save TableView data to CSV
    @FXML
    private void saveTableToCSV(ActionEvent event) {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Save Table Data");
        fileChooser.getExtensionFilters().add(new FileChooser.ExtensionFilter("CSV Files", "*.csv"));

        File file = fileChooser.showSaveDialog(new Stage());
        if (file != null) {
            try (FileWriter writer = new FileWriter(file)) {
                // Write CSV headers
                writer.write("Agent Name,Rating,Comment,Sentiment,Sentiment Score\n");

                // Get table data
                ObservableList<ObservableList<String>> data = agentRatingsTable.getItems();
                for (ObservableList<String> row : data) {
                    // Write each row to CSV, ensuring that each value is separated by a comma
                    writer.write(String.join(",", row) + "\n");
                }

                System.out.println("CSV file saved successfully!");
            } catch (IOException e) {
                System.err.println("Error saving CSV file: " + e.getMessage());
            }
        }
    }
}
