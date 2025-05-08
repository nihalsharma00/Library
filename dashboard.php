<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
echo "<h2>Welcome, {$user['username']} ({$user['role']})</h2>";
?>
<a href="add_book.php">Add Book</a> |
<a href="view_books.php">View Books</a> |
<a href="logout.php">Logout</a>
