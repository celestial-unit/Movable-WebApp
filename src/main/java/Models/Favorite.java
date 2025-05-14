package Models;

public class Favorite {
    private int id_favorite;
    private int id_user;
    private int id_destination;


    public Favorite( int id_favorite,int id_user, int id_destination) {
        this.id_favorite = id_favorite;
        this.id_user = id_user;
        this.id_destination = id_destination;
    }

    public Favorite( int id_user, int id_destination) {
        this.id_user = id_user;
        this.id_destination = id_destination;
    }


    public int getId_favorite() {
        return id_favorite;
    }
    public void setId_favorite(int id_favorite) {
        this.id_favorite = id_favorite;
    }
    public int getId_user() {
        return id_user;
    }
    public void setId_user(int id_user) {
        this.id_user = id_user;
    }
    public int getId_destination() {
        return id_destination;
    }
    public void setId_destination(int id_destination) {
        this.id_destination = id_destination;
    }

}
