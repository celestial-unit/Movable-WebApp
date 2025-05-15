package Models;

import org.apache.http.HttpEntity;
import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.ContentType;
import org.apache.http.entity.mime.MultipartEntityBuilder;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.util.EntityUtils;
import org.json.JSONObject;

import javax.imageio.ImageIO;
import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

public class FaceRecognitionModel {
    private static final String API_KEY = "P3C3Y7tdzVQP4CNM3FErY4NOevFGwVpO";
    private static final String API_SECRET = "XZhetE6Ye_OvV_rppZrdzwPMQTN0v_U7";
    private static final String DETECT_URL = "https://api-us.faceplusplus.com/facepp/v3/detect";

    // 📌 Envoyer une image à l'API Face++ et récupérer la réponse
    public String detectFaces(String imagePath) throws IOException {
        // Vérifier si l'image dépasse 2 Mo
        File imageFile = new File(imagePath);
        if (imageFile.length() > 2 * 1024 * 1024) {
            throw new IOException("L'image est trop volumineuse (max 2 Mo)");
        }

        HttpPost httpPost = new HttpPost(DETECT_URL);
        MultipartEntityBuilder builder = MultipartEntityBuilder.create();
        builder.addTextBody("api_key", API_KEY, ContentType.TEXT_PLAIN);
        builder.addTextBody("api_secret", API_SECRET, ContentType.TEXT_PLAIN);
        builder.addTextBody("return_attributes", "emotion", ContentType.TEXT_PLAIN);

        // 🔹 Compression de l'image avant l'envoi
        BufferedImage originalImage = ImageIO.read(imageFile);
        BufferedImage resizedImage = new BufferedImage(800, 600, originalImage.getType());
        Graphics2D g = resizedImage.createGraphics();
        g.drawImage(originalImage, 0, 0, 800, 600, null);
        g.dispose();

        File compressedFile = new File("compressed.jpg");
        ImageIO.write(resizedImage, "jpg", compressedFile);

        // 🔹 Envoi de l'image compressée
        builder.addBinaryBody("image_file", compressedFile, ContentType.APPLICATION_OCTET_STREAM, "compressed.jpg");

        HttpEntity multipart = builder.build();
        httpPost.setEntity(multipart);

        try (CloseableHttpClient httpClient = HttpClients.createDefault();
             CloseableHttpResponse response = httpClient.execute(httpPost)) {

            int statusCode = response.getStatusLine().getStatusCode();
            if (statusCode != 200) {
                throw new IOException("Erreur lors de l'appel à l'API Face++ : " + statusCode);
            }
            return EntityUtils.toString(response.getEntity());
        }
    }


    // 📌 Extraire le nombre de visages détectés dans la réponse JSON
    public int getFaceCount(String jsonResponse) {
        JSONObject jsonObject = new JSONObject(jsonResponse);
        if (jsonObject.has("faces")) {
            return jsonObject.getJSONArray("faces").length();
        }
        return 0; // Aucun visage détecté
    }
}
