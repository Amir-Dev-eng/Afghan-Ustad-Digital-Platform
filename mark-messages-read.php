<?php
include "connection.php";
$conn->query("UPDATE messages SET status='read' WHERE status='unread'");
echo "success";
?>