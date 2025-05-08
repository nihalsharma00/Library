<?php
session_start();
$conn = new mysqli("localhost", "root", "", "library");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE username='$user'");
    $row = $result->fetch_assoc();

    if ($row && password_verify($pass, $row['password'])) {
        $_SESSION['user'] = $row;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login.";
    }
}
?>
<form method="POST">
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
