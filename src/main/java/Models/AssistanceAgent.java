package Services;

import Models.Assistant;
import javafx.scene.control.Alert;
import utils.myConnection;

import java.sql.*;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;

public class AssistanceAgent implements Iservice<Assistant> {

    private Connection cnx;

    // Constructor
    public AssistanceAgent() {
        cnx = myConnection.getInstance().getConnection();
    }

    @Override
    public boolean create(Assistant assistant) throws SQLException {
        String query = "INSERT INTO agent (name, email, type, phone, birthdate , pictureP, office_Id) VALUES (?, ?, ?, ?, ?, ?, ?)";

        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setString(1, assistant.getName());
            ps.setString(2, assistant.getEmail());
            ps.setString(3, assistant.getType());
            ps.setInt(4, assistant.getPhone());
            ps.setDate(5, Date.valueOf(assistant.getBirthdate())); // Assuming birthdate is LocalDate
            ps.setString(6, assistant.getPictureP()); // Updated to match attribute name
            ps.setInt(7, assistant.getOffice_id()); // Updated to match attribute name

            int rowsInserted = ps.executeUpdate();
            return rowsInserted > 0;
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while inserting assistant: " + e.getMessage());
            return false;
        }
    }

    @Override
    public void update(Assistant assistant) throws SQLException {
        String query = "UPDATE agent SET name = ?, email = ?, type = ?, phone = ? , birthdate = ?, pictureP = ?, office_id = ? WHERE id = ?";

        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setString(1, assistant.getName());
            ps.setString(2, assistant.getEmail());
            ps.setString(3, assistant.getType());
            ps.setInt(4, assistant.getPhone());
            ps.setDate(5, Date.valueOf(assistant.getBirthdate())); // Assuming birthdate is LocalDate
            ps.setString(6, assistant.getPictureP()); // Updated to match attribute name
            ps.setInt(7, assistant.getOffice_id()); // Updated to match attribute name
            ps.setInt(8, assistant.getId());

            ps.executeUpdate();
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while updating assistant: " + e.getMessage());
        }
    }

    @Override
    public void delete(int id) throws SQLException {
        String query = "DELETE FROM agent WHERE id = ?";

        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setInt(1, id);
            ps.executeUpdate();
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while deleting assistant: " + e.getMessage());
        }
    }

    @Override
    public List<Assistant> readAll() throws SQLException {
        List<Assistant> assistants = new ArrayList<>();
        String query = "SELECT * FROM agent"; // Ensure 'agent' is the correct table name
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd");

        try (Statement st = cnx.createStatement(); ResultSet rs = st.executeQuery(query)) {
            while (rs.next()) {
                // Handling potential null values for birthdate
                Date sqlDate = rs.getDate("birthdate");
                String birthdate = (sqlDate != null) ? sqlDate.toLocalDate().format(formatter) : "N/A"; // Default if null

                Assistant assistant = new Assistant(
                        rs.getInt("id"),
                        rs.getString("name"),
                        rs.getString("email"),
                        rs.getString("type"),
                        birthdate,
                        rs.getString("pictureP"),
                        rs.getInt("phone"),
                        rs.getInt("office_id")
                );
                assistants.add(assistant);
            }
        } catch (SQLException e) {
            System.err.println("Error while retrieving assistants: " + e.getMessage());
        }
        return assistants;
    }


    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }


    public List<Assistant> getByOfficeId(int officeId) {
        List<Assistant> assistants = new ArrayList<>();
        String query = "SELECT * FROM assistants WHERE office_id = ?";

        try (Connection connection = myConnection.getInstance().getConnection(); // Using myConnection to get the connection
             PreparedStatement preparedStatement = connection.prepareStatement(query)) {

            preparedStatement.setInt(1, officeId);
            ResultSet resultSet = preparedStatement.executeQuery();

            while (resultSet.next()) {
                Assistant assistant = new Assistant();
                assistant.setId(resultSet.getInt("id"));
                assistant.setName(resultSet.getString("name"));
                assistant.setEmail(resultSet.getString("email"));
                assistant.setType(resultSet.getString("type"));
                assistant.setPhone(Integer.parseInt(resultSet.getString("phone")));
                assistant.setBirthdate(resultSet.getString("birthdate"));
                assistant.setPictureP(resultSet.getString("picture_path"));
                assistants.add(assistant);
            }
        } catch (SQLException e) {
            e.printStackTrace(); // Handle SQL exception properly in your application
        }

        return assistants;
    }

    public List<Assistant> getAllAgents() {
        List<Assistant> agents = new ArrayList<>();
        String query = "SELECT * FROM agent";

        try {
            Connection conn = myConnection.getInstance().getConnection();
            PreparedStatement stmt = conn.prepareStatement(query);
            ResultSet rs = stmt.executeQuery();

            while (rs.next()) {
                int id = rs.getInt("id");
                String name = rs.getString("name");

                Assistant agent = new Assistant(id, name);
                agents.add(agent);
            }

        } catch (SQLException e) {
            System.err.println("Error retrieving agents: " + e.getMessage());
        }

        return agents;
    }

}
