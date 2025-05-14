package Controllers;

import Models.User;
import Services.UsersService;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;

import java.sql.SQLException;
import java.util.List;

public class UserCrudController {

    @FXML
    private TextField firstNameTf, lastNameTf, emailTf, passwordTf;

    @FXML
    private ComboBox<String> roleCb;

    @FXML
    private ListView<User> usersListView;  // ListView should hold User objects, not Strings

    private ObservableList<User> users;  // List of User objects
    private UsersService usersService;

    public UserCrudController() {
        usersService = new UsersService();
    }

    // Initialize the users list view with data from the database
    @FXML
    public void initialize() {
        try {
            // Fetch users for the ListView
            List<User> userList = usersService.read();
            users = FXCollections.observableArrayList(userList);
            usersListView.setItems(users);

            // Fetch roles for the ComboBox
            List<String> roles = usersService.getRoles();
            ObservableList<String> roleOptions = FXCollections.observableArrayList(roles);
            roleCb.setItems(roleOptions);

            // Add listener to ListView to populate the form with selected user's details
            usersListView.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
                if (newValue != null) {
                    populateForm(newValue); // Populate the form with the selected user's data
                }
            });

            // Set custom cell factory to improve display
            usersListView.setCellFactory(param -> new ListCell<User>() {
                @Override
                protected void updateItem(User user, boolean empty) {
                    super.updateItem(user, empty);
                    if (empty || user == null) {
                        setText(null);
                        setGraphic(null);
                    } else {
                        // Create a layout to display user details nicely
                        HBox hBox = new HBox();
                        hBox.setSpacing(10);
                        Label nameLabel = new Label(user.getFirstName() + " " + user.getLastName());
                        Label emailLabel = new Label(" - " + user.getEmail());
                        hBox.getChildren().addAll(nameLabel, emailLabel);
                        setGraphic(hBox);
                    }
                }
            });

        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to load data from the database.");
        }
    }

    // Save a new user to the database
    @FXML
    public void saveUser(ActionEvent event) {
        String firstName = firstNameTf.getText();
        String lastName = lastNameTf.getText();
        String email = emailTf.getText();
        String password = passwordTf.getText();
        String role = roleCb.getValue();

        // Create new User object and add it to the database
        User user = new User(firstName, lastName, email, password, role);
        try {
            if (!usersService.isEmailTaken(email)) {
                usersService.create(user);
                // Update the ListView with the new user
                users.add(user);
                clearForm();
            } else {
                showAlert("Error", "Email is already taken.");
            }
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to save user.");
        }
    }

    // Update an existing user in the database
    @FXML
    public void updateUser(ActionEvent event) {
        User selectedUser = usersListView.getSelectionModel().getSelectedItem();

        if (selectedUser != null) {
            String newFirstName = firstNameTf.getText();
            String newLastName = lastNameTf.getText();
            String newEmail = emailTf.getText();
            String newPassword = passwordTf.getText();
            String newRole = roleCb.getValue();

            selectedUser.setFirstName(newFirstName);
            selectedUser.setLastName(newLastName);
            selectedUser.setEmail(newEmail);
            selectedUser.setPassword(newPassword);
            selectedUser.setRole(newRole);

            try {
                usersService.update(selectedUser);
                clearForm();
                refreshUsersList();
            } catch (SQLException e) {
                e.printStackTrace();
                showAlert("Error", "Failed to update user.");
            }
        }
    }

    // Delete a user from the database
    @FXML
    public void deleteUser(ActionEvent event) {
        User selectedUser = usersListView.getSelectionModel().getSelectedItem();

        if (selectedUser != null) {
            try {
                usersService.delete(selectedUser.getId());
                users.remove(selectedUser);
                clearForm();
            } catch (SQLException e) {
                e.printStackTrace();
                showAlert("Error", "Failed to delete user.");
            }
        }
    }

    // Clear form fields
    @FXML
    public void clearForm() {
        firstNameTf.clear();
        lastNameTf.clear();
        emailTf.clear();
        passwordTf.clear();
        roleCb.setValue(null);
    }

    // Navigate to the DriverCrud view
    @FXML
    public void goToDriverCrud(ActionEvent event) throws Exception {
        Parent driverCrudView = FXMLLoader.load(getClass().getResource("/admin_dashboard.fxml"));
        Scene driverCrudScene = new Scene(driverCrudView);
        Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
        window.setScene(driverCrudScene);
        window.show();
    }

    // Refresh the users list after an operation
    private void refreshUsersList() {
        try {
            List<User> userList = usersService.read();
            users.clear();
            users.addAll(userList);  // Add all users back to the list
        } catch (SQLException e) {
            e.printStackTrace();
            showAlert("Error", "Failed to refresh user list.");
        }
    }

    // Show alert dialog with a message
    private void showAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setContentText(message);
        alert.showAndWait();
    }

    // Populate the form with the selected user's details
    private void populateForm(User user) {
        firstNameTf.setText(user.getFirstName());
        lastNameTf.setText(user.getLastName());
        emailTf.setText(user.getEmail());
        passwordTf.setText(user.getPassword());
        roleCb.setValue(user.getRole());
    }
}