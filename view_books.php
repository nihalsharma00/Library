<?php
$conn = new mysqli("localhost", "root", "", "library");
$result = $conn->query("SELECT * FROM books");

echo "<h2>Books</h2><table border='1'><tr><th>ID</th><th>Title</th><th>Author</th><th>Qty</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['title']}</td><td>{$row['author']}</td><td>{$row['quantity']}</td></tr>";
}
echo "</table>";

