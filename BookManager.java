import java.sql.*;

public class BookManager {
    public void addBook(String title, String author, String publisher, int year, String isbn, int qty) throws SQLException {
        Connection conn = DatabaseConnection.connect();
        PreparedStatement stmt = conn.prepareStatement(
            "INSERT INTO books (title, author, publisher, year, isbn, quantity) VALUES (?, ?, ?, ?, ?, ?)"
        );
        stmt.setString(1, title);
        stmt.setString(2, author);
        stmt.setString(3, publisher);
        stmt.setInt(4, year);
        stmt.setString(5, isbn);
        stmt.setInt(6, qty);
        stmt.executeUpdate();
        conn.close();
        System.out.println("Book added successfully.");
    }
}
