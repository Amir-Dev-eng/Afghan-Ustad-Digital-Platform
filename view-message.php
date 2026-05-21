<?php
include "connection.php";

/* ===== Validate ID ===== */
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  die("Invalid Message ID");
}

$id = (int) $_GET['id'];

/* ===== Fetch Message ===== */
$stmt = $conn->prepare("SELECT * FROM messages WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
  die("Message not found");
}

$message = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>View Message | Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background: #f4f6fb;
      font-family: 'Inter', sans-serif;
    }

    /* Sidebar */
    .sidebar {
      width: 260px;
      min-height: 100vh;
      background: #111827;
      position: fixed;
      top: 0;
      left: 0;
      color: #fff;
      transition: 0.3s;
      z-index: 1000;
      overflow-y: auto;
    }

    .sidebar .logo {
      font-size: 20px;
      font-weight: 700;
      padding: 20px;
      text-align: center;
      border-bottom: 1px solid #1f2937;
      position: relative;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 14px 20px;
      color: #cbd5e1;
      text-decoration: none;
      transition: 0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background: #1f2937;
      color: #fff;
    }

    /* Close button inside sidebar */
    .sidebar-close-btn {
      display: none;
      position: absolute;
      top: 15px;
      right: 15px;
      font-size: 24px;
      color: #fff;
      cursor: pointer;
      z-index: 1001;
    }

    /* Main content */
    .main {
      margin-left: 260px;
      padding: 25px;
      transition: 0.3s;
    }

    /* Mobile menu button (hamburger) */
    .menu-btn {
      display: none;
      font-size: 24px;
      cursor: pointer;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 1100;
      color: #111827;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
      .sidebar {
        left: -260px;
      }
      .sidebar.show {
        left: 0;
      }
      .sidebar-close-btn {
        display: block;
      }
      .menu-btn {
        display: block;
      }
      .main {
        margin-left: 0 !important;
      }
    }

    .view-header {
      background: linear-gradient(135deg, #0d6efd, #0d6efd);
      color: #fff;
      padding: 30px;
      border-radius: 18px;
      margin-bottom: 30px;
    }

    .message-view {
      background: #fff;
      border-radius: 18px;
      padding: 30px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    }

    .avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #0d6efd;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      font-weight: 700;
    }

    .message-text {
      background: #f9fafc;
      border-radius: 14px;
      padding: 20px;
      line-height: 1.8;
      white-space: pre-line;
    }

    .btn-back,
    .btn-delete {
      border-radius: 30px;
      padding: 8px 22px;
    }
  </style>
</head>

<body>

  <!-- Mobile Menu Button -->
  <i class="fa-solid fa-bars menu-btn" id="menuBtn"></i>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="logo">
      Afghan Ustad
      <!-- Close button inside sidebar -->
      <span class="sidebar-close-btn" id="sidebarCloseBtn">&times;</span>
    </div>
    <a href="dashboard.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="upload_course.php"><i class="fa-solid fa-upload"></i> Upload Course</a>
    <a href="index.php"><i class="fa-solid fa-globe"></i> Website</a>
    <a href="admin-messages.php"><i class="fa-solid fa-envelope"></i> Messages</a>
    <a href="#"><i class="fa-solid fa-users"></i> Students</a>
    <a href="#"><i class="fa-solid fa-user-tie"></i> Instructors</a>
    <a href="logout.php" class="text-danger"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main content -->
  <div class="main container py-5">

    <!-- Header -->
    <div class="view-header d-flex justify-content-between align-items-center flex-wrap gap-3">
      <div>
        <h3 class="mb-1">📨 View Message</h3>
        <small>Student contact message details</small>
      </div>
      <a href="admin-messages.php" class="btn btn-light btn-back">
        <i class="fa-solid fa-arrow-left me-1"></i> Back
      </a>
    </div>

    <!-- Message Card -->
    <div class="message-view">

      <!-- Sender -->
      <div class="d-flex align-items-center mb-4">
        <div class="avatar me-3">
          <?= strtoupper(substr($message['name'] ?? '', 0, 1)) ?>
        </div>
        <div>
          <h5 class="mb-0"><?= htmlspecialchars($message['name'] ?? 'Unknown') ?></h5>
          <small class="text-muted">
            <?= htmlspecialchars($message['email'] ?? '') ?><br>
            <?= htmlspecialchars($message['phone'] ?? '') ?>
          </small>
        </div>
      </div>

      <!-- Meta -->
      <div class="row mb-3">
        <div class="col-md-6">
          <strong>Subject:</strong>
          <?= htmlspecialchars($message['subject'] ?? 'No Subject') ?>
        </div>
        <div class="col-md-6 text-md-end text-muted">
          <i class="fa-regular fa-clock"></i>
          <?= date("d M Y, h:i A", strtotime($message['created_at'] ?? date('Y-m-d H:i:s'))) ?>
        </div>
      </div>

      <!-- Message -->
      <div class="message-text mb-4">
        <?= nl2br(htmlspecialchars($message['message'] ?? '')) ?>
      </div>

      <!-- Actions -->
      <div class="d-flex justify-content-end gap-2">
        <a href="delete-message.php?id=<?= $message['id'] ?? 0 ?>"
          onclick="return confirm('Are you sure you want to delete this message?')"
          class="btn btn-danger btn-delete">
          <i class="fa-solid fa-trash me-1"></i> Delete
        </a>
      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById("sidebar");
    const menuBtn = document.getElementById("menuBtn");
    const sidebarCloseBtn = document.getElementById("sidebarCloseBtn");

    menuBtn.addEventListener("click", () => sidebar.classList.add("show"));
    sidebarCloseBtn.addEventListener("click", () => sidebar.classList.remove("show"));
  </script>

</body>

</html>