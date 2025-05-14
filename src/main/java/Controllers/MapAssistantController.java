package Controllers;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;
import netscape.javascript.JSObject;

import java.net.URL;
import java.util.ResourceBundle;

public class MapAssistantController implements javafx.fxml.Initializable {
    @FXML
    private WebView mapWebView;

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        WebEngine webEngine = mapWebView.getEngine();

        // Enable JavaScript
        webEngine.setJavaScriptEnabled(true);

        // Add console logging
        webEngine.setOnAlert(event -> {
            System.out.println("WebView Alert: " + event.getData());
        });

        // Load the HTML file from resources
        URL htmlUrl = getClass().getResource("/map.html");
        if (htmlUrl != null) {
            Platform.runLater(() -> {
                webEngine.load(htmlUrl.toExternalForm());

                webEngine.getLoadWorker().stateProperty().addListener((obs, oldState, newState) -> {
                    if (newState == javafx.concurrent.Worker.State.SUCCEEDED) {
                        JSObject window = (JSObject) webEngine.executeScript("window");
                        JavaBridge bridge = new JavaBridge(); // Create instance of JavaBridge
                        window.setMember("javaApp", bridge); // Attach it to JS
                        System.out.println("Java bridge successfully injected.");
                    }
                });
            });

        } else {
            System.err.println("HTML file not found!");
        }
    }

    // Bridge class to communicate between Java and JavaScript
    public class JavaBridge {
        public void log(String message) {
            System.out.println("JS Log: " + message);
        }

        public void error(String message) {
            System.err.println("JS Error: " + message);
        }

        // Method to update the location (called from JavaScript)
        public void updateLocation(double lat, double lon) {
            System.out.println("Location from WebView: Lat " + lat + ", Lon " + lon);
            // Handle the location data (e.g., update UI or process it)
        }
    }
}


