package Services;

import Models.Driver;
import utils.MyDb;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class DriverService implements IService<Driver> {

    private final Connection connection;

    public DriverService() {
        connection = MyDb.getInstance().getConnection();
    }

    @Override
    public void create(Driver driver) throws SQLException {
        String sql = "INSERT INTO drivers (userId, vehicleType, licenseNumber, availableStatus) VALUES (?, ?, ?, ?)";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, driver.getUserId());
            ps.setString(2, driver.getVehicleType());
            ps.setString(3, driver.getLicenseNumber());
            ps.setBoolean(4, driver.isAvailableStatus());
            ps.executeUpdate();
        }
    }

    @Override
    public void update(Driver driver) throws SQLException {
        String sql = "UPDATE drivers SET vehicleType = ?, licenseNumber = ?, availableStatus = ? WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setString(1, driver.getVehicleType());
            ps.setString(2, driver.getLicenseNumber());
            ps.setBoolean(3, driver.isAvailableStatus());
            ps.setInt(4, driver.getId());
            ps.executeUpdate();
        }
    }

    @Override
    public void delete(int id) throws SQLException {
        String sql = "DELETE FROM drivers WHERE id = ?";
        try (PreparedStatement ps = connection.prepareStatement(sql)) {
            ps.setInt(1, id);
            ps.executeUpdate();
        }
    }

    @Override
    public List<Driver> read() throws SQLException {
        String sql = "SELECT * FROM drivers";
        List<Driver> drivers = new ArrayList<>();
        try (Statement statement = connection.createStatement();
             ResultSet rs = statement.executeQuery(sql)) {
            while (rs.next()) {
                Driver driver = new Driver(rs.getInt("id"),
                        rs.getInt("userId"),
                        rs.getString("vehicleType"),
                        rs.getString("licenseNumber"),
                        rs.getBoolean("availableStatus"));
                drivers.add(driver);
            }
        }
        return drivers;
    }
}
