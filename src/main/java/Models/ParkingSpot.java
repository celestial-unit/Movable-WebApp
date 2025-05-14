package Models;

public class ParkingSpot {
    private int id_parking, size;
    private int id_destination;
    private boolean is_available ,is_accessible;
    private String spot_number,notes;
    private float parking_fees;

    public ParkingSpot(int id_parking,int id_destination, int size, boolean is_available, boolean is_accessible, String spot_number, String notes, float parking_fees) {
        this.id_destination=id_destination;
        this.id_parking = id_parking;
        this.size = size;
        this.is_available = is_available;
        this.is_accessible = is_accessible;
        this.spot_number = spot_number;
        this.notes = notes;
        this.parking_fees = parking_fees;
    }

    public ParkingSpot(int id_destination,int size, boolean is_available, boolean is_accessible, String spot_number, String notes, float parking_fees) {
        this.id_destination=id_destination;
        this.size = size;
        this.is_available = is_available;
        this.is_accessible = is_accessible;
        this.spot_number = spot_number;
        this.notes = notes;
        this.parking_fees = parking_fees;
    }

    public int getId_parking() {
        return id_parking;
    }

    public void setId_parking(int id_parking) {
        this.id_parking = id_parking;
    }

    public int getSize() {
        return size;
    }

    public void setSize(int size) {
        this.size = size;
    }

    public boolean isIs_available() {
        return is_available;
    }

    public void setIs_available(boolean is_available) {
        this.is_available = is_available;
    }

    public boolean isIs_accessible() {
        return is_accessible;
    }

    public void setIs_accessible(boolean is_accessible) {
        this.is_accessible = is_accessible;
    }

    public String getSpot_number() {
        return spot_number;
    }

    public void setSpot_number(String spot_number) {
        this.spot_number = spot_number;
    }

    public String getNotes() {
        return notes;
    }

    public void setNotes(String notes) {
        this.notes = notes;
    }

    public float getParking_fees() {
        return parking_fees;
    }

    public void setParking_fees(float parking_fees) {
        this.parking_fees = parking_fees;
    }

    public int getId_destination() {
        return id_destination;
    }

    public void setId_destination(int id_destination) {
        this.id_destination = id_destination;
    }

    @Override
    public String toString() {
        return "ParkingSpot{" +
                "id_parking=" + id_parking +
                ", size=" + size +
                ", id_destination=" + id_destination +
                ", is_available=" + is_available +
                ", is_accessible=" + is_accessible +
                ", spot_number='" + spot_number + '\'' +
                ", notes='" + notes + '\'' +
                ", parking_fees=" + parking_fees +
                '}';
    }

}
