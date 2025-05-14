package Models;

public class Assistant {
    private int id;
    private String name ,email ,type, birthdate, pictureP;
    private int phone,office_id;

    public Assistant() {
    }

    public Assistant(int id, String name, String email, String type, String birthdate, String pictureP, int phone, int office_id) {
        this.id = id;
        this.name = name;
        this.email = email;
        this.type = type;
        this.birthdate = birthdate;
        this.pictureP = pictureP;
        this.phone = phone;
        this.office_id = office_id;
    }

    public Assistant(String name, String email, String type, String birthdate, String pictureP, int phone, int office_id) {
        this.name = name;
        this.email = email;
        this.type = type;
        this.birthdate = birthdate;
        this.pictureP = pictureP;
        this.phone = phone;
        this.office_id = office_id;
    }

    public Assistant(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getBirthdate() {
        return birthdate;
    }

    public void setBirthdate(String birthdate) {
        this.birthdate = birthdate;
    }

    public String getPictureP() {
        String basePath = "/home/fsociety/Downloads/FINALVERSIONSYMFONY/Movable-WebApp-hanipushit/public/";
        return basePath + pictureP; // Combines base path with "uploads/agents/assistant.jpg"
    }

    public void setPictureP(String pictureP) {
        this.pictureP = pictureP;
    }

    public int getPhone() {
        return phone;
    }

    public void setPhone(int phone) {
        this.phone = phone;
    }

    public int getOffice_id() {
        return office_id;
    }

    public void setOffice_id(int office_id) {
        this.office_id = office_id;
    }


}
