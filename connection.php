<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "afghanustad";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed");
}