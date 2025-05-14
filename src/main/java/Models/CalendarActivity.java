package Models;
import java.time.ZonedDateTime;

public class CalendarActivity {
    private ZonedDateTime date;
    private int agentId;
    private String details; // Changed from serviceNo to details

    public CalendarActivity(ZonedDateTime date, int agentId, String details) {
        this.date = date;
        this.agentId = agentId;
        this.details = details;
    }

    public ZonedDateTime getDate() {
        return date;
    }

    public void setDate(ZonedDateTime date) {
        this.date = date;
    }

    public int getAgentId() {
        return agentId;
    }

    public void setAgentId(int agentId) {
        this.agentId = agentId;
    }

    public String getDetails() { // Changed from getServiceNo() to getDetails()
        return details;
    }

    public void setDetails(String details) {
        this.details = details;
    }

    @Override
    public String toString() {
        return "CalendarActivity{" +
                "date=" + date +
                ", agentId=" + agentId +
                ", details='" + details + '\'' +
                '}';
    }
}
