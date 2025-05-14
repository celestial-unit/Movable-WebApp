package Controllers;

import javafx.concurrent.Worker;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;
import netscape.javascript.JSObject;

import java.net.URL;
import java.util.ResourceBundle;
import java.util.function.Consumer;

public class AdminMapView implements Initializable {

    @FXML
    private WebView mapWebView;
    private Consumer<String> coordinatesCallback;  // Add this line
    private String initialCoordinates; // Add this field

    // Add this method to set initial coordinates
    public void setInitialCoordinates(String coords) {
        this.initialCoordinates = coords;
    }

    // Add this method to receive coordinates callback
    public void setCoordinatesCallback(Consumer<String> callback) {
        this.coordinatesCallback = callback;
    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        WebEngine webEngine = mapWebView.getEngine();
        // Add this listener to set up Java-JS bridge
        webEngine.getLoadWorker().stateProperty().addListener((obs, oldState, newState) -> {
            if (newState == Worker.State.SUCCEEDED) {
                JSObject window = (JSObject) webEngine.executeScript("window");
                window.setMember("javaApp", this);
            }

        // Add initial marker if coordinates exist
        if (initialCoordinates != null) {
            String[] coords = initialCoordinates.split(",");
            webEngine.executeScript(
                    "var marker = L.marker([" + coords[0] + "," + coords[1] + "])" +
                            ".addTo(map)" +
                            ".bindPopup('Existing Location');" +
                            "map.setView([" + coords[0] + "," + coords[1] + "], 15);"
            );
        }

});

        String html = """
            <html>
            <head>
                <meta charset='utf-8' />
                <meta name='viewport' content='initial-scale=1.0, user-scalable=no' />
                <script src='https://unpkg.com/leaflet@1.7.1/dist/leaflet.js'></script>
                <link rel='stylesheet' href='https://unpkg.com/leaflet@1.7.1/dist/leaflet.css'/>
                <style>#map { height: 100vh; }</style>
            </head>
            <body>
                                           <div id='map'></div>
                                           <script>
                                               var map = L.map('map').setView([33.8869, 9.5375], 7);
                                               L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                                              \s
                                               map.on('click', function(e) {
                                                   var lat = e.latlng.lat.toFixed(5);
                                                   var lng = e.latlng.lng.toFixed(5);
                                                   if(window.javaApp) {
                                                       window.javaApp.handleCoordinates(lat + "," + lng);
                                                   }
                                               });
                                           </script>
                                       </body>
            </html>
        """;

        webEngine.loadContent(html);
    }
    // Add this method to handle coordinates from JS
    public void handleCoordinates(String coords) {
        if (coordinatesCallback != null) {
            coordinatesCallback.accept(coords);
        }
    }
}


