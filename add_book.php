<?php
$conn = new mysqli("localhost", "root", "", "library");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $isbn = $_POST['isbn'];
    $qty = $_POST['quantity'];

    $conn->query("INSERT INTO books (title, author, publisher, year, isbn, quantity)
                  VALUES ('$title', '$author', '$publisher', $year, '$isbn', $qty)");
    echo "Book added.";
}
?>
<form method="POST">
    <input name="title" placeholder="Title" required>
    <input name="author" placeholder="Author" required>
    <input name="publisher" placeholder="Publisher">
    <input name="year" type="number" placeholder="Year">
    <input name="isbn" placeholder="ISBN">
    <input name="quantity" type="number" placeholder="Quantity" required>
    <button type="submit">Add Book</button>
</form>
