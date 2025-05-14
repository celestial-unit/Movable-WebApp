package Tests;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.io.IOException;

public class MainFx extends Application {
    @Override
    public void start(Stage primaryStage) throws IOException {
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("/DestinationManagement.fxml"));
       // FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("/ParkingManagement.fxml"));

        Scene scene = new Scene(fxmlLoader.load(), 1200, 800); // Adjust size for desktop
        primaryStage.setTitle("Destination Management");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    public static void main(String[] args)  {
        launch(args);
    }
}
