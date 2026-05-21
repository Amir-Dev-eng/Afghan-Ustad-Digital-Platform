<?php
// delete-message.php
include "connection.php";

if (!isset($_GET['id'])) {
    header("Location: admin-messages.php");
    exit;
}

$id = intval($_GET['id']); // Security

$stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: admin-messages.php?deleted=1");
    exit;
} else {
    die("Delete failed!");
}