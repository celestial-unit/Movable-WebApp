import org.mindrot.jbcrypt.BCrypt;

public class CreateTestUser {
    public static void main(String[] args) {
        String password = "Test123!";
        String hashedPassword = BCrypt.hashpw(password, BCrypt.gensalt(10));
        
        System.out.println("Password: " + password);
        System.out.println("Hashed Password: " + hashedPassword);
        
        System.out.println("\nSQL to insert test user:");
        System.out.println("INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `role`, `created_at`, `faceIdEnabled`, `isBanned`) VALUES");
        System.out.println("('Test', 'User', 'test@example.com', '" + hashedPassword + "', 'USER', CURRENT_TIMESTAMP, 0, 0);");
    }
}

