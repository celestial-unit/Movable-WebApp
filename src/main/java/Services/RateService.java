package Services;

import Models.Rate;
import utils.myConnection;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.net.HttpURLConnection;
import java.net.URL;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import org.json.JSONObject;

public class RateService {

    private Connection connection;

    public RateService() {
        connection = myConnection.getInstance().getConnection();
    }

    public List<Rate> getAllRatings() throws SQLException {
        List<Rate> ratings = new ArrayList<>();
        String query = "SELECT id, idagent, rating, comment, sentiment FROM rates";

        try (Statement stmt = connection.createStatement();
             ResultSet rs = stmt.executeQuery(query)) {

            while (rs.next()) {
                int id = rs.getInt("id");
                int idAgent = rs.getInt("idagent");
                int rating = rs.getInt("rating");
                String comment = rs.getString("comment");

                
                String sentiment = getSentimentFromAPI(comment);

                ratings.add(new Rate(id, idAgent, rating, comment, sentiment));
            }
        }
        return ratings;
    }

    private String getSentimentFromAPI(String comment) {
        try {
            String urlString = "http://127.0.0.1:5000/analyze_sentiment?comment=" +
                    comment.replace(" ", "%20");
            URL url = new URL(urlString);
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");

            BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            String inputLine;
            StringBuilder response = new StringBuilder();

            while ((inputLine = in.readLine()) != null) {
                response.append(inputLine);
            }
            //in.close();

            JSONObject jsonResponse = new JSONObject(response.toString());
            return jsonResponse.getString("sentiment");

        } catch (Exception e) {
            e.printStackTrace();
            return "error";
        }
    }


}
