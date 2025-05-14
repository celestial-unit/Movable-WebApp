package Controllers;

import javafx.fxml.FXML;
import javafx.scene.control.ListView;
import javafx.fxml.FXMLLoader;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class DriverDashboardController {

    @FXML
    private ListView<String> deliveriesListView;

    @FXML
    private void handleMarkDelivered() {
        // Implementation for marking deliveries
    }

    @FXML
    private void handleLogOut() {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/Login.fxml"));
            Stage stage = (Stage) deliveriesListView.getScene().getWindow();
            stage.setScene(new Scene(loader.load()));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}