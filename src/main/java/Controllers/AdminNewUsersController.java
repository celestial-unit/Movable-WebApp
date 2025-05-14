package Controllers;

import java.io.IOException;
import java.net.URL;
import java.time.LocalDate;
import java.util.ResourceBundle;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import javafx.util.Callback;

// Model class for a new user
class NewUser {
    private String userId;
    private String fullName;
    private String email;
    private LocalDate registrationDate;
    private String status;

    public NewUser(String userId, String fullName, String email, LocalDate registrationDate, String status) {
        this.userId = userId;
        this.fullName = fullName;
        this.email = email;
        this.registrationDate = registrationDate;
        this.status = status;
    }

    public String getUserId() {
        return userId;
    }

    public String getFullName() {
        return fullName;
    }

    public String getEmail() {
        return email;
    }

    public LocalDate getRegistrationDate() {
        return registrationDate;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }
}

public class AdminNewUsersController implements Initializable {

    @FXML
    private Button backButton;

    @FXML
    private Button approveSelectedButton;

    @FXML
    private Button rejectSelectedButton;

    @FXML
    private Button refreshButton;

    @FXML
    private TableView<NewUser> usersTableView;

    @FXML
    private TableColumn<NewUser, String> userIdColumn;

    @FXML
    private TableColumn<NewUser, String> nameColumn;

    @FXML
    private TableColumn<NewUser, String> emailColumn;

    @FXML
    private TableColumn<NewUser, LocalDate> registrationDateColumn;

    @FXML
    private TableColumn<NewUser, String> statusColumn;

    @FXML
    private TableColumn<NewUser, Void> actionsColumn;

    private ObservableList<NewUser> userList = FXCollections.observableArrayList();

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        // Configure the table columns
        userIdColumn.setCellValueFactory(new PropertyValueFactory<>("userId"));
        nameColumn.setCellValueFactory(new PropertyValueFactory<>("fullName"));
        emailColumn.setCellValueFactory(new PropertyValueFactory<>("email"));
        registrationDateColumn.setCellValueFactory(new PropertyValueFactory<>("registrationDate"));
        statusColumn.setCellValueFactory(new PropertyValueFactory<>("status"));

        // Add action buttons to the table
        addButtonsToTable();

        // Load sample data (should be replaced with real data from database)
        loadSampleData();

        // Set the table data
        usersTableView.setItems(userList);
    }

    private void addButtonsToTable() {
        Callback<TableColumn<NewUser, Void>, TableCell<NewUser, Void>> cellFactory = new Callback<>() {
            @Override
            public TableCell<NewUser, Void> call(final TableColumn<NewUser, Void> param) {
                return new TableCell<>() {
                    private final Button approveBtn = new Button("Approve");
                    private final Button rejectBtn = new Button("Reject");
                    private final HBox pane = new HBox(5, approveBtn, rejectBtn);

                    {
                        approveBtn.setStyle("-fx-background-color: #2ecc71; -fx-text-fill: white;");
                        rejectBtn.setStyle("-fx-background-color: #e74c3c; -fx-text-fill: white;");

                        approveBtn.setOnAction(event -> {
                            NewUser user = getTableView().getItems().get(getIndex());
                            approveUser(user);
                        });

                        rejectBtn.setOnAction(event -> {
                            NewUser user = getTableView().getItems().get(getIndex());
                            rejectUser(user);
                        });
                    }

                    @Override
                    protected void updateItem(Void item, boolean empty) {
                        super.updateItem(item, empty);

                        if (empty) {
                            setGraphic(null);
                        } else {
                            NewUser user = getTableView().getItems().get(getIndex());
                            if ("Pending".equals(user.getStatus())) {
                                setGraphic(pane);
                            } else {
                                setGraphic(null);
                            }
                        }
                    }
                };
            }
        };

        actionsColumn.setCellFactory(cellFactory);
    }

    private void loadSampleData() {
        // This is sample data - in a real app, you'd load from database
        userList.add(new NewUser("U001", "John Doe", "john.doe@example.com", LocalDate.now().minusDays(5), "Pending"));
        userList.add(new NewUser("U002", "Jane Smith", "jane.smith@example.com", LocalDate.now().minusDays(3), "Pending"));
        userList.add(new NewUser("U003", "Robert Johnson", "robert.j@example.com", LocalDate.now().minusDays(2), "Approved"));
        userList.add(new NewUser("U004", "Emily Davis", "emily.d@example.com", LocalDate.now().minusDays(1), "Rejected"));
        userList.add(new NewUser("U005", "Michael Wilson", "michael.w@example.com", LocalDate.now(), "Pending"));
    }

    @FXML
    private void goBack(ActionEvent event) {
        try {
            // Load the admin dashboard view
            Parent root = FXMLLoader.load(getClass().getResource("/admin_dashboard.fxml"));
            Scene scene = new Scene(root);
            Stage stage = (Stage) backButton.getScene().getWindow();
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            showError("Error navigating to dashboard: " + e.getMessage());
        }
    }

    @FXML
    private void approveSelected(ActionEvent event) {
        NewUser selectedUser = usersTableView.getSelectionModel().getSelectedItem();
        if (selectedUser != null) {
            approveUser(selectedUser);
        } else {
            showInformation("Please select a user to approve.");
        }
    }

    @FXML
    private void rejectSelected(ActionEvent event) {
        NewUser selectedUser = usersTableView.getSelectionModel().getSelectedItem();
        if (selectedUser != null) {
            rejectUser(selectedUser);
        } else {
            showInformation("Please select a user to reject.");
        }
    }

    @FXML
    private void refreshUserList(ActionEvent event) {
        // In a real app, you'd reload data from the database
        showInformation("User list refreshed.");
    }

    private void approveUser(NewUser user) {
        if ("Pending".equals(user.getStatus())) {
            user.setStatus("Approved");
            usersTableView.refresh();
            showInformation("User " + user.getFullName() + " has been approved.");
        } else {
            showInformation("This user is already " + user.getStatus().toLowerCase() + ".");
        }
    }

    private void rejectUser(NewUser user) {
        if ("Pending".equals(user.getStatus())) {
            user.setStatus("Rejected");
            usersTableView.refresh();
            showInformation("User " + user.getFullName() + " has been rejected.");
        } else {
            showInformation("This user is already " + user.getStatus().toLowerCase() + ".");
        }
    }

    private void showInformation(String message) {
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Information");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }

    private void showError(String message) {
        Alert alert = new Alert(AlertType.ERROR);
        alert.setTitle("Error");
        alert.setHeaderText(null);
        alert.setContentText(message);
        alert.showAndWait();
    }
}

