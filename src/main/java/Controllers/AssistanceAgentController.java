package Controllers;

import Models.Assistant;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.FileChooser;
import java.io.File;
import java.io.IOException;
import java.sql.*;
import java.time.LocalDate;
import java.util.List;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.stage.Modality;
import javafx.stage.Stage;
import services.AssistanceAgent;
import utils.myConnection;

public class AssistanceAgentController {

    public Button viewCalendar;
    public Button Dashboard;
    private AssistanceAgent AssistanceService;

    @FXML
    private Button viewRatesButton;

    @FXML
    private Button addButton;

    @FXML
    private Button addPhotoButton;

    @FXML
    private HBox assistantsBox;

    @FXML
    private DatePicker birthDatePicker;

    @FXML
    private Button deleteButton;

    @FXML
    private TextField emailField;

    @FXML
    private Button goToOfficesForm;

    @FXML
    private TextField nameField;

    @FXML
    private ComboBox<String> officeComboBox;

    @FXML
    private TextField phoneField;

    @FXML
    private TextField picturePathField;

    @FXML
    private ComboBox<String> typeComboBox;

    @FXML
    private Button updateButton;

    private Connection conn;
    private Assistant selectedAssistant;


    //private final AssistanceAgent assistanceService = new AssistanceAgent();
    private final ObservableList<Assistant> assistantsList = FXCollections.observableArrayList();

    public AssistanceAgentController() {
        this.AssistanceService = new AssistanceAgent();
    }

    @FXML
    public void initialize() {
        loadAssistants();
        typeComboBox.setItems(FXCollections.observableArrayList("Male", "Female", "Pet"));
        ComboBox<String> officeComboBox = new ComboBox<>();

        loadOfficesFromDatabase();
    }

    private void loadOfficesFromDatabase() {
        Connection conn = null;
        PreparedStatement pstmt = null;
        ResultSet rs = null;

        try {
            // Get the connection from the singleton class
            conn = myConnection.getInstance().getConnection();

            // SQL query to fetch the office ids
            String query = "SELECT id FROM office";
            pstmt = conn.prepareStatement(query);
            rs = pstmt.executeQuery();

            // Create an observable list for the ComboBox
            ObservableList<String> officeList = FXCollections.observableArrayList();

            // Populate the list with office ids
            while (rs.next()) {
                officeList.add(rs.getString("id"));
            }

            // Set the items for the ComboBox
            officeComboBox.setItems(officeList);

        } catch (SQLException e) {
            System.out.println("Error fetching office data: " + e.getMessage());
            e.printStackTrace();
        }
    }

    @FXML
    void addPhoto(ActionEvent event) {
        // Open a file chooser to select a photo
        FileChooser fileChooser = new FileChooser();
        fileChooser.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpg", "*.png"));
        File file = fileChooser.showOpenDialog(null);

        if (file != null) {
            picturePathField.setText(file.getAbsolutePath());
        }
    }


    @FXML
    void saveAgent(ActionEvent event) {
        String name = nameField.getText().trim();
        String email = emailField.getText().trim();
        String type = typeComboBox.getValue();
        String phoneText = phoneField.getText().trim();
        LocalDate birthdate = birthDatePicker.getValue();
        String officeId = officeComboBox.getValue();
        String pictureP = picturePathField.getText().trim();


        if (name.isEmpty() || !name.matches("[a-zA-Z ]+")) {
            showAlert(Alert.AlertType.ERROR, "Invalid Name", "Name must contain only letters and cannot be empty.");
            return;
        }


        if (!email.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
            showAlert(Alert.AlertType.ERROR, "Invalid Email", "Please enter a valid email address.");
            return;
        }

        if (type == null || type.isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Invalid Type", "Please select an assistant type.");
            return;
        }


        int phone = 0;
        if (!phoneText.matches("\\d{8,15}")) {  // Adjust range based on your needs
            showAlert(Alert.AlertType.ERROR, "Invalid Phone", "Phone number must contain only digits (8-15 digits).");
            return;
        } else {
            phone = Integer.parseInt(phoneText);
        }


        if (birthdate == null || birthdate.isAfter(LocalDate.now())) {
            showAlert(Alert.AlertType.ERROR, "Invalid Birthdate", "Please enter a valid birthdate (not in the future).");
            return;
        }

        // Validate Office ID (Must be selected)
        if (officeId == null || officeId.isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Invalid Office", "Please select an office.");
            return;
        }

        int officeIdInt = Integer.parseInt(officeId);


        if (pictureP.isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Invalid Picture Path", "Please select a picture.");
            return;
        }


        Assistant assistant = new Assistant(0, name, email, type, birthdate.toString(), pictureP, phone, officeIdInt);

        try {

            AssistanceService.create(assistant);
            incrementAgentsCount(officeIdInt);

            showAlert(Alert.AlertType.INFORMATION, "Success", "Assistant added successfully.");
            loadAssistants();
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error adding assistant: " + e.getMessage());
        }
    }


    private void incrementAgentsCount(int officeId) {
        Connection conn = null;
        PreparedStatement pstmt = null;

        try {

            conn = myConnection.getInstance().getConnection();


            String query = "UPDATE office SET agents = agents + 1 WHERE id = ?";
            pstmt = conn.prepareStatement(query);
            pstmt.setInt(1, officeId);

            // Execute the update statement
            int rowsUpdated = pstmt.executeUpdate();

            if (rowsUpdated > 0) {
                System.out.println("Agents count updated successfully.");
            } else {
                System.out.println("No office found with the provided ID.");
            }

        } catch (SQLException e) {
            System.out.println("Error updating agents count: " + e.getMessage());
            e.printStackTrace();
        }
    }

    private void loadAssistants() {
        assistantsList.clear();
        try {
            List<Assistant> assistants = AssistanceService.readAll();
            assistantsList.addAll(assistants);
            assistantsBox.getChildren().clear();


            for (Assistant assistant : assistantsList) {
                VBox card = createAssistantCard(assistant);
                assistantsBox.getChildren().add(card);
            }
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error loading assistants: " + e.getMessage());
        }
    }

    private VBox createAssistantCard(Assistant assistant) {
        VBox card = new VBox();
        card.setSpacing(10);
        card.setStyle("-fx-border-color: #ccc; -fx-border-radius: 5; -fx-padding: 10; -fx-background-color: #f9f9f9;");

        ImageView imageView = new ImageView(new Image("file:" + assistant.getPictureP()));
        imageView.setFitWidth(100);
        imageView.setFitHeight(100);
        card.getChildren().add(imageView);

        Label nameLabel = new Label("Name: " + assistant.getName());
        nameLabel.setStyle("-fx-font-weight: bold;");
        card.getChildren().add(nameLabel);

        Label emailLabel = new Label("Email: " + assistant.getEmail());
        card.getChildren().add(emailLabel);

        Label typeLabel = new Label("Type: " + assistant.getType());
        card.getChildren().add(typeLabel);

        Label phoneLabel = new Label("Phone: " + assistant.getPhone());
        card.getChildren().add(phoneLabel);

        Label birthdateLabel = new Label("Birthdate: " + assistant.getBirthdate());
        card.getChildren().add(birthdateLabel);

        Label officeLabel = new Label("Office ID: " + assistant.getOffice_id());
        card.getChildren().add(officeLabel);


        // Set click event to fill fields
        card.setOnMouseClicked(event -> {
            selectedAssistant = assistant;
            nameField.setText(assistant.getName());
            emailField.setText(assistant.getEmail());
            typeComboBox.setValue(assistant.getType());
            phoneField.setText(String.valueOf(assistant.getPhone()));
            birthDatePicker.setValue(LocalDate.parse(assistant.getBirthdate()));
            officeComboBox.setValue(String.valueOf(assistant.getOffice_id()));
            picturePathField.setText(assistant.getPictureP());
        });

        return card;
    }





    @FXML
    void updateAssistant(ActionEvent event) {
        if (selectedAssistant == null) {
            showAlert(Alert.AlertType.WARNING, "No Selection", "Please select an assistant to update.");
            return;
        }

        String name = nameField.getText().trim();
        String email = emailField.getText().trim();
        String type = typeComboBox.getValue();
        String phoneText = phoneField.getText().trim();
        LocalDate birthdate = birthDatePicker.getValue();
        String officeId = officeComboBox.getValue();
        String pictureP = picturePathField.getText().trim();


        if (name.isEmpty() || !name.matches("[a-zA-Z ]+")) {
            showAlert(Alert.AlertType.ERROR, "Invalid Name", "Name must contain only letters and cannot be empty.");
            return;
        }


        if (!email.matches("^[A-Za-z0-9+_.-]+@(.+)$")) {
            showAlert(Alert.AlertType.ERROR, "Invalid Email", "Please enter a valid email address.");
            return;
        }

        if (type == null || type.isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Invalid Type", "Please select an assistant type.");
            return;
        }


        int phone = 0;
        if (!phoneText.matches("\\d{8}")) {  // Adjust range based on your requirements
            showAlert(Alert.AlertType.ERROR, "Invalid Phone", "Phone number must contain only digits (8 digits).");
            return;
        } else {
            phone = Integer.parseInt(phoneText);
        }

        if (birthdate == null || birthdate.isAfter(LocalDate.now())) {
            showAlert(Alert.AlertType.ERROR, "Invalid Birthdate", "Please enter a valid birthdate (not in the future).");
            return;
        }

        if (officeId == null || officeId.isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Invalid Office", "Please select an office.");
            return;
        }


        int newOfficeId = Integer.parseInt(officeId);
        int oldOfficeId = selectedAssistant.getOffice_id();

        if (pictureP.isEmpty()) {
            showAlert(Alert.AlertType.ERROR, "Invalid Picture Path", "Please select a picture.");
            return;
        }


        selectedAssistant.setName(name);
        selectedAssistant.setEmail(email);
        selectedAssistant.setType(type);
        selectedAssistant.setPhone(phone);
        selectedAssistant.setBirthdate(birthdate.toString());
        selectedAssistant.setOffice_id(newOfficeId);
        selectedAssistant.setPictureP(pictureP);

        try {

            AssistanceService.update(selectedAssistant);

            // Update office agent counts if changed
            if (oldOfficeId != newOfficeId) {
                decrementAgentsCount(oldOfficeId);
                incrementAgentsCount(newOfficeId);
            }

            showAlert(Alert.AlertType.INFORMATION, "Success", "Assistant updated successfully.");
            loadAssistants(); // Refresh list
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error updating assistant: " + e.getMessage());
        }
    }


    @FXML
    void deleteAssistant(ActionEvent event) {
        if (selectedAssistant == null) {
            showAlert(Alert.AlertType.WARNING, "No Selection", "Please select an assistant to delete.");
            return;
        }

        int officeId = selectedAssistant.getOffice_id();

        try {
            // Delete the assistant from the database
            AssistanceService.delete(selectedAssistant.getId());

            // Decrement the number of agents in the office
            decrementAgentsCount(officeId);

            showAlert(Alert.AlertType.INFORMATION, "Success", "Assistant deleted successfully.");
            loadAssistants();  // Refresh list
        } catch (SQLException e) {
            showAlert(Alert.AlertType.ERROR, "Database Error", "Error deleting assistant: " + e.getMessage());
        }
    }


    private void decrementAgentsCount(int officeId) {
        Connection conn = null;
        PreparedStatement pstmt = null;

        try {
            // Get the connection from the singleton
            conn = myConnection.getInstance().getConnection();

            // SQL query to decrement the agents field
            String query = "UPDATE office SET agents = agents - 1 WHERE id = ?";
            pstmt = conn.prepareStatement(query);
            pstmt.setInt(1, officeId);

            // Execute the update statement
            pstmt.executeUpdate();

        } catch (SQLException e) {
            System.out.println("Error updating agents count: " + e.getMessage());
            e.printStackTrace();
        }
    }


    private void showAlert(Alert.AlertType type, String title, String message) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
    // Action when Go To Offices Form button is clicked
    @FXML
    void goToOfficeForm(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/userOffice.fxml"));
            Scene scene = new Scene(loader.load());
            Stage stage = (Stage) ((Button) event.getSource()).getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to load the agent form.");
        }
    }

    private int fetchAssistantIdByName(String assistantName) {
        String query = "SELECT id FROM agent WHERE name = ?";
        int idagent = -1;

        try {
            Connection conn = myConnection.getInstance().getConnection(); // Use singleton connection
            PreparedStatement stmt = conn.prepareStatement(query);
            stmt.setString(1, assistantName);
            ResultSet rs = stmt.executeQuery();

            if (rs.next()) {
                idagent = rs.getInt("id");
            }

        } catch (SQLException e) {
            showAlert("Error retrieving assistant ID: " + e.getMessage());
        }
        return idagent;
    }


    private void showAlert(String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }


    public void viewRates(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/showRatingForAdmin.fxml"));
            Parent root = loader.load();

            Stage popUpStage = new Stage();
            Scene scene = new Scene(root);


            popUpStage.setScene(scene);
            popUpStage.setTitle("Rating Form");
            popUpStage.initModality(Modality.APPLICATION_MODAL);
            popUpStage.showAndWait();

        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to load the rating form.");
        }
    }


    public void viewCalendar(ActionEvent actionEvent) {

        if (selectedAssistant == null) {
            showAlert("Please select an assistant.");
            return;
        }

        int agentId = fetchAssistantIdByName(selectedAssistant.getName());

        if (agentId == -1) {
            showAlert("Agent not found.");
            return;
        }

        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Calendar.fxml"));
            Parent root = loader.load();

            CalendarController calendarController = loader.getController();

            calendarController.setAgentId(agentId);

            Stage stage = new Stage();
            stage.setTitle("Agent's Reservation Calendar");
            stage.setScene(new Scene(root, 900, 600)); // Adjust size as needed
            stage.setMaximized(true); // Open in full-screen mode
            stage.show();
        } catch (IOException e) {
            showAlert(Alert.AlertType.ERROR, "Error", "Unable to open the calendar window.");
        }
    }
}

