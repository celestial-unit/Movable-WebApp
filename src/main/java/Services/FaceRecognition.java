package Services;

import Models.User;
import java.io.BufferedReader;
import java.io.File;
import java.io.InputStreamReader;
import java.nio.file.Paths;
import java.util.concurrent.CompletableFuture;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 * Service class for facial recognition integration with Python scripts.
 * This class provides methods to initialize, register, and recognize faces.
 * 
 * IMPORTANT NOTE ON EMAIL HANDLING:
 * When storing face images during registration, this class temporarily uses a sanitized 
 * version of the user's email as the filename (replacing special characters with underscores).
 * This sanitization is ONLY for filename purposes and does not affect how emails are stored
 * in the database. After successful user registration, these temporary filenames are renamed
 * to use the user's numeric ID.
 */
public class FaceRecognition {
    private static final Logger LOGGER = Logger.getLogger(FaceRecognition.class.getName());
    
    private final String pythonPath;
    private final String scriptsPath;
    private Process currentProcess;
    private boolean initialized = false;
    
    /**
     * Constructor for FaceRecognition service.
     * 
     * @param pythonPath Path to the Python executable (e.g., "python" or "python3")
     * @param scriptsPath Path to the directory containing the Python scripts
     */
    public FaceRecognition(String pythonPath, String scriptsPath) {
        this.pythonPath = pythonPath;
        this.scriptsPath = scriptsPath;
    }
    
    /**
     * Default constructor that uses system Python and predefined scripts path.
     */
    public FaceRecognition() {
        this("/home/fsociety/MovableFInal/venv/bin/python", "/home/fsociety/MovableFInal/");
    }
    
    /**
     * Initialize the facial recognition system.
     * This method checks if the required Python environment and scripts are available.
     * 
     * @return CompletableFuture<Boolean> that resolves to true if initialization was successful
     */
    public CompletableFuture<Boolean> initialize() {
        return CompletableFuture.supplyAsync(() -> {
            try {
                File scriptsDir = new File(scriptsPath);
                if (!scriptsDir.exists() || !scriptsDir.isDirectory()) {
                    LOGGER.severe("Scripts directory does not exist: " + scriptsPath);
                    return false;
                }
                
                // Check if Python is available
                ProcessBuilder processBuilder = new ProcessBuilder(pythonPath, "--version");
                Process process = processBuilder.start();
                int exitCode = process.waitFor();
                
                if (exitCode != 0) {
                    LOGGER.severe("Python is not available. Exit code: " + exitCode);
                    return false;
                }
                
                // Check if required scripts exist
                // Check if required scripts exist
                String[] requiredScripts = {"simple_facerec.py", "capture_face.py", "new_recognize_face.py", "cleanup.py"};
                for (String script : requiredScripts) {
                    File scriptFile = Paths.get(scriptsPath, script).toFile();
                    if (!scriptFile.exists() || !scriptFile.isFile()) {
                        LOGGER.severe("Required script not found: " + scriptFile.getAbsolutePath());
                        return false;
                    }
                }
                initialized = true;
                LOGGER.info("Facial recognition system initialized successfully");
                return true;
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Failed to initialize facial recognition system", e);
                return false;
            }
        });
    }
    
    /**
     * Register a face for a user.
     * Captures the user's face and associates it with their user ID.
     * 
     * @param user The user for whom to register the face
     * @return CompletableFuture<Boolean> that resolves to true if registration was successful
     */
    /**
     * Register a face for a user.
     * Captures the user's face and associates it with their user ID.
     * 
     * @param user The user for whom to register the face
     * @return CompletableFuture<Boolean> that resolves to true if registration was successful
     */
    public CompletableFuture<Boolean> registerFace(User user) {
        if (!initialized) {
            LOGGER.warning("Facial recognition system is not initialized");
            return CompletableFuture.completedFuture(false);
        }
        
        // If user doesn't have an ID yet (new user during sign-up), use email as temporary identifier
        if (user.getId() <= 0) {
            return registerFaceWithEmail(user.getEmail(), user);
        }
        
        return CompletableFuture.supplyAsync(() -> {
            try {
                String userId = String.valueOf(user.getId());
                
                // Ensure images directory exists
                File imagesDir = Paths.get(scriptsPath, "images").toFile();
                if (!imagesDir.exists()) {
                    if (!imagesDir.mkdirs()) {
                        LOGGER.warning("Failed to create images directory: " + imagesDir.getAbsolutePath());
                    }
                }
                
                // Build and start the process
                ProcessBuilder processBuilder = new ProcessBuilder(
                    pythonPath,
                    Paths.get(scriptsPath, "capture_face.py").toString(),
                    userId
                );
                
                // Redirect error stream to output stream
                // Redirect error stream to output stream
                processBuilder.redirectErrorStream(true);
                processBuilder.directory(new File(scriptsPath));
                synchronized (this) {
                    if (currentProcess != null) {
                        cleanup();
                    }
                    currentProcess = processBuilder.start();
                }
                
                // Read the output
                try (BufferedReader reader = new BufferedReader(new InputStreamReader(currentProcess.getInputStream()))) {
                    String line;
                    StringBuilder output = new StringBuilder();
                    while ((line = reader.readLine()) != null) {
                        output.append(line).append("\n");
                        LOGGER.info("Face registration output: " + line);
                    }
                }
                
                int exitCode = currentProcess.waitFor();
                synchronized (this) {
                    currentProcess = null;
                }
                
                if (exitCode == 0) {
                    LOGGER.info("Face registration successful for user ID: " + userId);
                    return true;
                } else {
                    LOGGER.warning("Face registration failed for user ID: " + userId + " with exit code: " + exitCode);
                    return false;
                }
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error during face registration", e);
                return false;
            }
        });
    }
    
    /**
     * Register a face using email as temporary identifier for users who don't have an ID yet.
     * This is useful during sign-up when the user hasn't been saved to the database yet.
     * 
     * @param email The user's email to use as temporary identifier
     * @param user The user object (for future reference)
     * @return CompletableFuture<Boolean> that resolves to true if registration was successful
     */
    public CompletableFuture<Boolean> registerFaceWithEmail(String email, User user) {
        if (!initialized) {
            LOGGER.warning("Facial recognition system is not initialized");
            return CompletableFuture.completedFuture(false);
        }
        
        return CompletableFuture.supplyAsync(() -> {
            try {
                // Use email as a temporary identifier
                // IMPORTANT: This sanitization is ONLY for creating valid filenames
                // and does NOT affect how emails are stored in the database.
                // Special characters like '@' and '.' are replaced with underscores
                // to ensure valid filesystem paths.
                LOGGER.info("Sanitizing email for filename use only: " + email);
                String tempId = email.replaceAll("[^a-zA-Z0-9]", "_");
                LOGGER.info("Email sanitized to temporary ID: " + tempId + " (for file storage only)");
                
                // Ensure images directory exists
                File imagesDir = Paths.get(scriptsPath, "images").toFile();
                if (!imagesDir.exists()) {
                    if (!imagesDir.mkdirs()) {
                        LOGGER.warning("Failed to create images directory: " + imagesDir.getAbsolutePath());
                    }
                }
                
                // Build and start the process
                ProcessBuilder processBuilder = new ProcessBuilder(
                    pythonPath,
                    Paths.get(scriptsPath, "capture_face.py").toString(),
                    tempId
                );
                
                // Redirect error stream to output stream
                // Redirect error stream to output stream
                processBuilder.redirectErrorStream(true);
                processBuilder.directory(new File(scriptsPath));
                synchronized (this) {
                    if (currentProcess != null) {
                        cleanup();
                    }
                    currentProcess = processBuilder.start();
                }
                
                // Read the output
                try (BufferedReader reader = new BufferedReader(new InputStreamReader(currentProcess.getInputStream()))) {
                    String line;
                    StringBuilder output = new StringBuilder();
                    while ((line = reader.readLine()) != null) {
                        output.append(line).append("\n");
                        LOGGER.info("Face registration output: " + line);
                    }
                }
                
                int exitCode = currentProcess.waitFor();
                synchronized (this) {
                    currentProcess = null;
                }
                
                if (exitCode == 0) {
                    LOGGER.info("Face registration successful with temporary ID (email): " + tempId);
                    return true;
                } else {
                    LOGGER.warning("Face registration failed with temporary ID (email): " + tempId + " with exit code: " + exitCode);
                    return false;
                }
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error during face registration with email", e);
                return false;
            }
        });
    }
    
    /**
     * Recognizes a face and returns the associated user ID.
     * 
     * @return CompletableFuture<String> that resolves to the recognized user ID or null if not recognized
     */
    public CompletableFuture<String> recognizeFace() {
        if (!initialized) {
            LOGGER.warning("Facial recognition system is not initialized");
            return CompletableFuture.completedFuture(null);
        }
        
        return CompletableFuture.supplyAsync(() -> {
            try {
                // Build and start the process
                // Build and start the process
                ProcessBuilder processBuilder = new ProcessBuilder(
                    pythonPath,
                    Paths.get(scriptsPath, "new_recognize_face.py").toString()
                );
                processBuilder.directory(new File(scriptsPath));
                // Redirect error stream to output stream
                processBuilder.redirectErrorStream(true);
                
                synchronized (this) {
                    if (currentProcess != null) {
                        cleanup();
                    }
                    currentProcess = processBuilder.start();
                }
                
                // Read the output
                // Read the output
                String recognizedUserId = null;
                boolean noUserRecognized = false;
                try (BufferedReader reader = new BufferedReader(new InputStreamReader(currentProcess.getInputStream()))) {
                    String line;
                    while ((line = reader.readLine()) != null) {
                        LOGGER.info("Face recognition output: " + line);
                        
                        // Parse the log-formatted output to get the recognized user ID
                        // Format: "YYYY-MM-DD HH:MM:SS - INFO - User recognized: {id}"
                        if (line.contains("User recognized:")) {
                            // Extract the substring after the last colon
                            int lastColonIndex = line.lastIndexOf(":");
                            if (lastColonIndex != -1 && lastColonIndex + 1 < line.length()) {
                                recognizedUserId = line.substring(lastColonIndex + 1).trim();
                            }
                        } else if (line.contains("No user recognized")) {
                            noUserRecognized = true;
                            recognizedUserId = null;
                        }
                    }
                }
                int exitCode = currentProcess.waitFor();
                synchronized (this) {
                    currentProcess = null;
                }
                
                if (exitCode == 0) {
                    if (recognizedUserId != null && !recognizedUserId.isEmpty()) {
                        LOGGER.info("Face recognition successful. Recognized user ID: " + recognizedUserId);
                        return recognizedUserId;
                    } else if (noUserRecognized) {
                        LOGGER.info("Face recognition completed successfully but no user was recognized");
                        return null;
                    } else {
                        LOGGER.warning("Face recognition completed with exit code 0 but no clear result was found");
                        return null;
                    }
                } else {
                    LOGGER.warning("Face recognition failed with exit code: " + exitCode);
                    return null;
                }
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error during face recognition", e);
                return null;
            }
        });
    }
    
    /**
     * Checks if the facial recognition system is available and ready to use.
     * This is a synchronous version of the checks performed during initialization.
     * 
     * @return boolean indicating whether the system is available
     */
    public boolean isSystemAvailable() {
        try {
            File scriptsDir = new File(scriptsPath);
            if (!scriptsDir.exists() || !scriptsDir.isDirectory()) {
                LOGGER.warning("Scripts directory does not exist: " + scriptsPath);
                return false;
            }
            
            // Check if Python is available
            ProcessBuilder processBuilder = new ProcessBuilder(pythonPath, "--version");
            Process process = processBuilder.start();
            int exitCode = process.waitFor();
            
            if (exitCode != 0) {
                LOGGER.warning("Python is not available. Exit code: " + exitCode);
                return false;
            }
            
            // Check if required scripts exist
            String[] requiredScripts = {"simple_facerec.py", "capture_face.py", "new_recognize_face.py", "cleanup.py"};
            for (String script : requiredScripts) {
                File scriptFile = Paths.get(scriptsPath, script).toFile();
                if (!scriptFile.exists() || !scriptFile.isFile()) {
                    LOGGER.warning("Required script not found: " + scriptFile.getAbsolutePath());
                    return false;
                }
            }
            
            // Check if webcam is accessible (optional, may require additional Python script)
            // This could be implemented by running a simple Python script that checks webcam access
            
            return true;
        } catch (Exception e) {
            LOGGER.log(Level.WARNING, "Error checking facial recognition system availability", e);
            return false;
        }
    }
    
    /**
     * Removes the stored face data for a specific user.
     * 
     * @param userId ID of the user whose face data should be removed
     * @return CompletableFuture<Boolean> that resolves to true if deletion was successful
     */
    public CompletableFuture<Boolean> removeFaceData(int userId) {
        String userIdStr = String.valueOf(userId);
        return CompletableFuture.supplyAsync(() -> {
            try {
                // The face images are typically stored in an "images" subdirectory
                File imagesDir = Paths.get(scriptsPath, "images").toFile();
                if (!imagesDir.exists() || !imagesDir.isDirectory()) {
                    LOGGER.warning("Images directory does not exist: " + imagesDir.getAbsolutePath());
                    return false;
                }
                
                // Face images are typically named with the user ID (with various possible extensions)
                File[] matchingFiles = imagesDir.listFiles((dir, name) -> 
                    name.startsWith(userIdStr + ".") || name.equals(userIdStr));
                
                if (matchingFiles == null || matchingFiles.length == 0) {
                    LOGGER.info("No face data found for user ID: " + userIdStr);
                    return false;
                }
                
                boolean allDeleted = true;
                for (File file : matchingFiles) {
                    boolean deleted = file.delete();
                    if (!deleted) {
                        LOGGER.warning("Failed to delete face data file: " + file.getAbsolutePath());
                        allDeleted = false;
                    } else {
                        LOGGER.info("Successfully deleted face data file: " + file.getAbsolutePath());
                    }
                }
                
                return allDeleted;
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error removing face data for user ID: " + userIdStr, e);
                return false;
            }
        });
    }
    
    /**
     * Updates the face image identifier after a user has been saved to the database.
     * This renames the temporary file (using email) to use the actual user ID.
     * 
     * @param email The email that was used as temporary identifier
     * @param userId The permanent user ID assigned after database insertion
     * @return CompletableFuture<Boolean> that resolves to true if update was successful
     */
    /**
     * Updates the face image identifier after a user has been saved to the database.
     * This renames the temporary file (using sanitized email as filename) to use the actual user ID.
     * 
     * @param email The email that was used as temporary identifier (will be sanitized for filename use)
     * @param userId The permanent user ID assigned after database insertion
     * @return CompletableFuture<Boolean> that resolves to true if update was successful
     */
    public CompletableFuture<Boolean> updateFaceIdAfterSignup(String email, int userId) {
        return CompletableFuture.supplyAsync(() -> {
            try {
                // Sanitize email for filename lookup - this must match the same sanitization
                // used in registerFaceWithEmail to ensure we find the correct files
                LOGGER.info("Updating face recognition files from email-based to ID-based format");
                LOGGER.info("Original email (for reference only): " + email);
                String tempId = email.replaceAll("[^a-zA-Z0-9]", "_");
                String permanentId = String.valueOf(userId);
                
                LOGGER.info("Looking for face files with temporary ID: " + tempId);
                LOGGER.info("Will rename to permanent user ID: " + permanentId);
                
                File imagesDir = Paths.get(scriptsPath, "images").toFile();
                if (!imagesDir.exists() || !imagesDir.isDirectory()) {
                    LOGGER.warning("Images directory does not exist: " + imagesDir.getAbsolutePath());
                    return false;
                }
                
                // Look for files with the temporary ID
                File[] matchingFiles = imagesDir.listFiles((dir, name) -> 
                    name.startsWith(tempId + ".") || name.equals(tempId));
                
                if (matchingFiles == null || matchingFiles.length == 0) {
                    LOGGER.warning("No face data found for temporary ID: " + tempId + 
                                  " (sanitized from email: " + email + ")");
                    // This is a common issue when the face capture process fails or is interrupted
                    return false;
                }
                
                boolean allRenamed = true;
                for (File file : matchingFiles) {
                    String fileName = file.getName();
                    String extension = "";
                    int dotIndex = fileName.lastIndexOf('.');
                    if (dotIndex > 0) {
                        extension = fileName.substring(dotIndex);
                    }
                    
                    File newFile = new File(imagesDir, permanentId + extension);
                    
                    // Check if destination file already exists - this could happen
                    // if there was a previous failed attempt
                    if (newFile.exists()) {
                        LOGGER.warning("Destination file already exists, will delete it first: " + 
                                      newFile.getAbsolutePath());
                        if (!newFile.delete()) {
                            LOGGER.severe("Could not delete existing file: " + newFile.getAbsolutePath() + 
                                         " - cannot rename temporary file");
                            allRenamed = false;
                            continue;
                        }
                    }
                    
                    boolean renamed = file.renameTo(newFile);
                    if (!renamed) {
                        LOGGER.severe("Failed to rename face data file from " + 
                                      file.getAbsolutePath() + " to " + newFile.getAbsolutePath() + 
                                      ". Check file permissions and disk space.");
                        // Try to determine the reason for failure
                        if (!file.exists()) {
                            LOGGER.severe("Source file no longer exists: " + file.getAbsolutePath());
                        } else if (!file.canRead()) {
                            LOGGER.severe("Source file is not readable: " + file.getAbsolutePath());
                        } else if (newFile.exists()) {
                            LOGGER.severe("Destination file already exists: " + newFile.getAbsolutePath());
                        } else if (!imagesDir.canWrite()) {
                            LOGGER.severe("Images directory is not writable: " + imagesDir.getAbsolutePath());
                        }
                        allRenamed = false;
                    } else {
                        LOGGER.info("Successfully renamed face data file from " + 
                                   file.getAbsolutePath() + " to " + newFile.getAbsolutePath() +
                                   " (email-based filename to user ID-based filename)");
                    }
                }
                
                if (allRenamed) {
                    LOGGER.info("All face recognition files successfully updated from email-based to ID-based format");
                } else {
                    LOGGER.warning("Some face recognition files could not be updated from email format to ID format. " +
                                  "This may cause issues with face recognition for this user.");
                }
                
                return allRenamed;
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error updating face ID after signup: " + e.getMessage(), e);
                return false;
            }
        });
    }
    
    /**
     * Verifies if the face image directory exists and is writable.
     * 
     * @return true if the directory exists and is writable, false otherwise
     */
    public boolean isFaceStorageReady() {
        try {
            File imagesDir = Paths.get(scriptsPath, "images").toFile();
            if (!imagesDir.exists()) {
                if (!imagesDir.mkdirs()) {
                    LOGGER.warning("Failed to create images directory: " + imagesDir.getAbsolutePath());
                    return false;
                }
            }
            
            return imagesDir.canWrite();
        } catch (Exception e) {
            LOGGER.log(Level.SEVERE, "Error checking face storage directory", e);
            return false;
        }
    }
    
    /**
     * Cleanup resources used by the facial recognition system.
     * This method should be called when the application is closing.
     */
    public void cleanup() {
        try {
            // Terminate any running process
            synchronized (this) {
                if (currentProcess != null) {
                    currentProcess.destroy();
                    currentProcess = null;
                }
            }
            
            // Run the cleanup script to release system resources
            ProcessBuilder processBuilder = new ProcessBuilder(
                pythonPath,
                Paths.get(scriptsPath, "cleanup.py").toString()
            );
            processBuilder.directory(new File(scriptsPath));
            
            Process process = processBuilder.start();
            int exitCode = process.waitFor();
            
            if (exitCode != 0) {
                LOGGER.warning("Cleanup script exited with non-zero code: " + exitCode);
            } else {
                LOGGER.info("Facial recognition resources cleaned up successfully");
            }
            
            initialized = false;
        } catch (Exception e) {
            LOGGER.log(Level.SEVERE, "Error during cleanup of facial recognition resources", e);
        }
    }
}
