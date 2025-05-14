package Models;

public class Rate {
    private int id;
    private int idAgent;
    private int rating;
    private String comment;
    private String sentiment;

    public Rate(int id, int idAgent, int rating, String comment, String sentiment) {
        this.id = id;
        this.idAgent = idAgent;
        this.rating = rating;
        this.comment = comment;
        this.sentiment = sentiment;
    }

    public int getId() { return id; }
    public int getIdAgent() { return idAgent; }
    public int getRating() { return rating; }
    public String getComment() { return comment; }
    public String getSentiment() { return sentiment; }

    public void setSentiment(String sentiment) {
        this.sentiment = sentiment;
    }

    @Override
    public String toString() {
        return "Rate{" +
                "id=" + id +
                ", idAgent=" + idAgent +
                ", rating=" + rating +
                ", comment='" + comment + '\'' +
                ", sentiment='" + sentiment + '\'' +
                '}';
    }


}
