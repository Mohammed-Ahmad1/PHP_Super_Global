<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Data sent using POST.<br>";
    $email = $_POST['email'];
    $password = $_POST['password'];
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Data sent using GET.<br>";
    $email = $_GET['email'];
    $password = $_GET['password'];
} else {
    echo "Unknown request method.";
    exit;
}

echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Password: " . htmlspecialchars($password);
?>
