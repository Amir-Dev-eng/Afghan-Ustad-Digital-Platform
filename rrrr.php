<?php
include "connection.php"; // mysqli connection

$name     = "Admin AfghanU";
$email    = "afghanustad12345@gmail.com";
$password = password_hash("afghanustad11", PASSWORD_DEFAULT);
$role     = 1;

$sql = "INSERT INTO users (name, email, password, role)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssi", $name, $email, $password, $role);

if ($stmt->execute()) {
    echo "User registered successfully ✅";
} else {
    echo "Error ❌: " . $stmt->error;
}

$stmt->close();
$conn->close();