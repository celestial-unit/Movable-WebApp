package Services;

import com.google.api.client.auth.oauth2.Credential;
import com.google.api.client.extensions.java6.auth.oauth2.AuthorizationCodeInstalledApp;
import com.google.api.client.extensions.jetty.auth.oauth2.LocalServerReceiver;
import com.google.api.client.googleapis.auth.oauth2.GoogleAuthorizationCodeFlow;
import com.google.api.client.googleapis.auth.oauth2.GoogleClientSecrets;
import com.google.api.client.googleapis.javanet.GoogleNetHttpTransport;
import com.google.api.client.json.JsonFactory;
import com.google.api.client.json.jackson2.JacksonFactory;
import com.google.api.client.util.store.FileDataStoreFactory;
import com.google.api.services.oauth2.Oauth2;

import java.io.*;
import java.security.GeneralSecurityException;
import java.util.Collections;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

public class GoogleAuth {
    private static final String CREDENTIALS_FILE_PATH = "/credentials.json"; // Inside resources folder
    private static final JsonFactory JSON_FACTORY = JacksonFactory.getDefaultInstance();
    private static final List<String> SCOPES = Collections.singletonList("https://www.googleapis.com/auth/userinfo.email");
    private static final String TOKENS_DIRECTORY_PATH = "tokens"; // Stores access tokens

    private static final Logger logger = Logger.getLogger(GoogleAuth.class.getName());

    // Method to get Google OAuth credentials
    public static Credential getCredentials() throws IOException, GeneralSecurityException {
        // Loading credentials file from the resources folder
        InputStream in = GoogleAuth.class.getResourceAsStream(CREDENTIALS_FILE_PATH);
        if (in == null) {
            throw new FileNotFoundException("Resource not found: " + CREDENTIALS_FILE_PATH);
        }

        // Load client secrets
        GoogleClientSecrets clientSecrets = GoogleClientSecrets.load(JSON_FACTORY, new InputStreamReader(in));

        // Build the authorization code flow
        GoogleAuthorizationCodeFlow flow = new GoogleAuthorizationCodeFlow.Builder(
                GoogleNetHttpTransport.newTrustedTransport(),
                JSON_FACTORY,
                clientSecrets,
                SCOPES
        ).setDataStoreFactory(new FileDataStoreFactory(new File(TOKENS_DIRECTORY_PATH)))
                .setAccessType("offline") // Access type for long-lived refresh token
                .build();

        // Set up the authorization code installed app flow
        AuthorizationCodeInstalledApp authorizationCodeInstalledApp = new AuthorizationCodeInstalledApp(
                flow, new LocalServerReceiver()); // LocalServerReceiver handles callback from Google OAuth

        // Log the authorization process
        logger.log(Level.INFO, "Requesting Google OAuth credentials...");
        Credential credentials = authorizationCodeInstalledApp.authorize("user"); // "user" is the token identifier

        if (credentials == null) {
            logger.log(Level.SEVERE, "Failed to obtain credentials. Authentication may have failed.");
            throw new IOException("Failed to obtain credentials.");
        }

        logger.log(Level.INFO, "Google OAuth credentials obtained.");
        return credentials;
    }

    // Method to fetch the user's email from Google
    public static String getEmailFromGoogle(Credential credential) {
        try {
            // Build Oauth2 client
            Oauth2 oauth2 = new Oauth2.Builder(GoogleNetHttpTransport.newTrustedTransport(), JSON_FACTORY, credential)
                    .setApplicationName("YourAppName") // Replace with your app name
                    .build();

            // Fetch the user's email using the Oauth2 API directly
            String email = oauth2.userinfo().get().execute().getEmail();

            // Return the email address
            return email;
        } catch (IOException | GeneralSecurityException e) {
            logger.log(Level.SEVERE, "Failed to fetch email from Google.", e);
            return null;
        }
    }

    // New method to clear stored credentials
    public static void clearCredentials() {
        try {
            File tokensDir = new File(TOKENS_DIRECTORY_PATH);
            if (tokensDir.exists() && tokensDir.isDirectory()) {
                for (File file : tokensDir.listFiles()) {
                    if (file.isFile()) {
                        file.delete(); // Delete all files inside the tokens directory (stored tokens)
                    }
                }
                logger.log(Level.INFO, "Stored credentials have been cleared.");
            } else {
                logger.log(Level.WARNING, "No tokens directory found, nothing to clear.");
            }
        } catch (Exception e) {
            logger.log(Level.SEVERE, "Failed to clear credentials.", e);
        }
    }
}
