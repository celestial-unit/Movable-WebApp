package Models;

import javafx.scene.image.Image;

import java.io.File;
import java.util.Objects;

public class Destination {

    private int id_destination;
    private String name, location, category, status, routes, contact_information, image, description;
    private String imageUrl;
    private int rating;
    private boolean isFavorite;

    public Destination(String location, String name, String category, String status, String routes, String contact_information, String image, String description, int rating) {
        this.location = location;
        this.name = name;
        this.category = category;
        this.status = status;
        this.routes = routes;
        this.contact_information = contact_information;
        this.image = image;
        this.description = description;
        this.rating = rating;
    }

    public Destination(String location, String name, int id_destination, String category, String status, String routes, String contact_information, String image, String description, int rating) {
        this.location = location;
        this.name = name;
        this.id_destination = id_destination;
        this.category = category;
        this.status = status;
        this.routes = routes;
        this.contact_information = contact_information;
        this.image = image;
        this.description = description;
        this.rating = rating;
    }

    public int getId_destination() {
        return id_destination;
    }

    public void setId_destination(int id_destination) {
        this.id_destination = id_destination;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getLocation() {
        return location;
    }

    public void setLocation(String location) {
        this.location = location;
    }

    public String getCategory() {
        return category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getRoutes() {
        return routes;
    }

    public void setRoutes(String routes) {
        this.routes = routes;
    }

    public String getContact_information() {
        return contact_information;
    }

    public void setContact_information(String contact_information) {
        this.contact_information = contact_information;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    @Override
    public String toString() {
        return "Destination{" +
                "id_destination=" + id_destination +

                ", name='" + name + '\'' +
                ", location='" + location + '\'' +
                ", category='" + category + '\'' +
                ", status='" + status + '\'' +
                ", routes='" + routes + '\'' +
                ", contact_information='" + contact_information + '\'' +
                ", image='" + image + '\'' +
                ", description='" + description + '\'' +
                ", rating=" + rating +
                '}';
    }
    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Destination that = (Destination) o;
        return id_destination == that.id_destination;
    }

    @Override
    public int hashCode() {
        return Objects.hash(id_destination);
    }

    //handle favorite
    // Add these methods
    public boolean isFavorite() {
        return isFavorite;
    }

    public void setFavorite(boolean favorite) {
        isFavorite = favorite;
    }
    // Returns a JavaFX Image object
    public Image getImageUrl() {
        String basePath = "/home/fsociety/Downloads/FINALVERSIONSYMFONY/Movable-WebApp-hanipushit/public/uploads/destinations/";

        if (image == null || image.isEmpty()) {
            return getPlaceholderImage();
        }

        try {
            String fullPath = basePath + image;
            File file = new File(fullPath);
            if (!file.exists()) {
                return getPlaceholderImage();
            }
            return new Image(file.toURI().toString());
        } catch (Exception e) {
            return getPlaceholderImage();
        }
    }

    public Image getPlaceholderImage() {
        try {
            return new Image(getClass().getResourceAsStream("/placeholder.png"));
        } catch (Exception e) {
            return null;
        }
    }
}

