<?php
include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password_hash FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($password_hash);
$stmt->fetch();

if (password_verify($password, $password_hash)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Credenciales incorrectas"]);
}

$stmt->close();
$conn->close();
?>
