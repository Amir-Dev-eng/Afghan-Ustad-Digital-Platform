<?php
session_start();
include "connection.php"; // ستا DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Clean input
    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $name    = clean($_POST['name']);
    $email   = clean($_POST['email']);
    $phone   = clean($_POST['phone']);
    $subject = clean($_POST['subject']);
    $message = clean($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error'] = "مهرباني وکړئ ټول ضروري ځایونه ډک کړئ";
        header("Location: contact-us.php");
        exit;
    }

    // Insert into database (prepared statement)
    $stmt = $conn->prepare(
        "INSERT INTO messages (name, email, phone, subject, message)
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    if ($stmt->execute()) {
        $_SESSION['success'] = "ستاسو پیغام په بریالیتوب سره ولېږل شو";
    } else {
        $_SESSION['error'] = "یو ستونزه رامنځته شوه، بیا هڅه وکړئ";
    }

    $stmt->close();
    $conn->close();

    // 🔁 POST → REDIRECT → GET (resubmission حل)
    header("Location: contact-us.php");
    exit;
}
?>