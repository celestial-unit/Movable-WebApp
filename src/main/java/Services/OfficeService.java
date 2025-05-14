package services;

import entities.Assistant;
import entities.Office;
import javafx.scene.control.Alert;
import utils.myConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class OfficeService implements Iservice<Office> {

    private Connection cnx;
    private AssistanceAgent assistantService; // Will be initialized later to avoid circular dependency

    // Constructor
    public OfficeService() {
        cnx = myConnection.getInstance().getConnection();
    }

    // Set assistant service (call this after creating both services to resolve circular dependency)
    public void setAssistantService(AssistanceAgent assistantService) {
        this.assistantService = assistantService;
    }

    @Override
    public boolean create(Office office) throws SQLException {
        String query = "INSERT INTO office (name, location, agents, phone) VALUES (?, ?, ?, ?)";

        try (PreparedStatement ps = cnx.prepareStatement(query, Statement.RETURN_GENERATED_KEYS)) {
            ps.setString(1, office.getName());
            ps.setString(2, office.getLocation());
            ps.setInt(3, office.getAgents1());
            ps.setInt(4, office.getPhone());

            int rowsInserted = ps.executeUpdate();

            // Get the generated ID
            if (rowsInserted > 0) {
                ResultSet generatedKeys = ps.getGeneratedKeys();
                if (generatedKeys.next()) {
                    office.setId(generatedKeys.getInt(1));
                }
                return true;
            }
            return false;
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while inserting office: " + e.getMessage());
            return false;
        }
    }

    @Override
    public void update(Office office) throws SQLException {
        String query = "UPDATE office SET name = ?, location = ?, agents = ?, phone = ? WHERE id = ?";

        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setString(1, office.getName());
            ps.setString(2, office.getLocation());
            ps.setInt(3, office.getAgents1());
            ps.setInt(4, office.getPhone());
            ps.setInt(5, office.getId());

            ps.executeUpdate();
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while updating office: " + e.getMessage());
        }
    }

    @Override
    public void delete(int id) throws SQLException {
        // First, remove office reference from all assistants
        if (assistantService != null) {
            List<Assistant> assistants = assistantService.getByOfficeId(id);
            for (Assistant assistant : assistants) {
                assistant.setOffice_id(0); // Set to null or 0 based on your database design
                assistantService.update(assistant);
            }
        }

        String query = "DELETE FROM office WHERE id = ?";

        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setInt(1, id);
            ps.executeUpdate();
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while deleting office: " + e.getMessage());
        }
    }

    @Override
    public List<Office> readAll() throws SQLException {
        List<Office> offices = new ArrayList<>();
        String query = "SELECT * FROM office";

        try (Statement st = cnx.createStatement(); ResultSet rs = st.executeQuery(query)) {
            while (rs.next()) {
                Office office = mapResultSetToOffice(rs);
                offices.add(office);
            }
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while retrieving offices: " + e.getMessage());
        }

        return offices;
    }

    // Get office by ID
    public Office getById(int id) throws SQLException {
        String query = "SELECT * FROM office WHERE id = ?";
        try (PreparedStatement ps = cnx.prepareStatement(query)) {
            ps.setInt(1, id);
            try (ResultSet rs = ps.executeQuery()) {
                if (rs.next()) {
                    return mapResultSetToOffice(rs);
                }
            }
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error while retrieving office: " + e.getMessage());
        }
        return null;
    }

    //Load assistants for an office


    private Office mapResultSetToOffice(ResultSet rs) throws SQLException {
        Office office = new Office(
                rs.getInt("id"),
                rs.getString("name"),
                rs.getString("location"),
                rs.getInt("agents"),
                rs.getInt("phone")
        );

        return office;
    }

    // Count assistants for an office and update the count
    public void updateAgentCount(int officeId) throws SQLException {
        if (assistantService != null) {
            List<Assistant> assistants = assistantService.getByOfficeId(officeId);
            int count = assistants.size();

            String query = "UPDATE office SET agents = ? WHERE id = ?";
            try (PreparedStatement ps = cnx.prepareStatement(query)) {
                ps.setInt(1, count);
                ps.setInt(2, officeId);
                ps.executeUpdate();
            } catch (SQLException e) {
                showAlert(Alert.AlertType.ERROR, "Database Error", "Error updating agent count: " + e.getMessage());
            }
        }
    }

    private void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    public int getOfficeIdByName(String value)  {
        int officeId = -1;
        String query = "SELECT id FROM office WHERE name = ?";

        try (PreparedStatement preparedStatement = cnx.prepareStatement(query)) {
            preparedStatement.setString(1, value);
            ResultSet resultSet = preparedStatement.executeQuery();

            if (resultSet.next()) {
                officeId = resultSet.getInt("office");
            }
        } catch (SQLException e) {
            System.out.println("Error retrieving office ID: " + e.getMessage());
        }
        return officeId;
    }


    public List<String> getAllOfficeID() throws SQLException {
        List<String> officeIds = new ArrayList<>();
        String query = "SELECT office_id FROM office";  // Adjust query to match your table structure
        Statement stmt = cnx.createStatement();
        ResultSet rs = stmt.executeQuery(query);

        while (rs.next()) {
            officeIds.add(rs.getString("office_id"));  // Assuming the column name is 'office_id'
        }

        return officeIds;
    }
}