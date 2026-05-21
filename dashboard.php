<?php
session_start();
include "connection.php";

/* امنیت: یوازې admin ته اجازه */
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

/* Unread messages count */
$msgQuery = $conn->query("SELECT COUNT(*) as unread_count FROM messages WHERE status='unread'");
$msgData = $msgQuery->fetch_assoc();
$unreadCount = $msgData['unread_count'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Afghan Ustad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f4f6f9;
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

        /* Close button for mobile */
        .sidebar-close-btn {
            display: none;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        /* Main */
        .main {
            margin-left: 260px;
            padding: 25px;
            transition: 0.3s;
        }

        /* Topbar */
        .topbar {
            background: #fff;
            padding: 15px 25px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .menu-btn {
            display: none;
            font-size: 22px;
            cursor: pointer;
        }

        .notif-wrapper {
            position: relative;
            cursor: pointer;
        }

        .notif-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 12px;
            padding: 2px 6px;
        }

        /* Cards */
        .stat-card {
            border-radius: 15px;
            padding: 25px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .stat-card i {
            font-size: 40px;
            opacity: 0.3;
            position: absolute;
            right: 20px;
            bottom: 20px;
        }

        /* Responsive */
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

            .main {
                margin-left: 0;
            }

            .menu-btn {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <div class="logo">
            AfghanUstad
            <span class="sidebar-close-btn" id="sidebarCloseBtn">&times;</span>
        </div>
        <a href="dashboard.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
        <a href="#"><i class="fa-solid fa-upload"></i> Upload Course</a>
        <a href="index.php"><i class="fa-solid fa-globe"></i> Website</a>
        <a href="admin-messages.php">
            <i class="fa-solid fa-envelope"></i> Messages
        </a>
        <a href="#"><i class="fa-solid fa-users"></i> Students</a>
        <a href="#"><i class="fa-solid fa-user-tie"></i> Instructors</a>
        <a href="upload-news.php"><i class="fa-solid fa-user-tie"></i> News</a>
        <a href="logout.php" class="text-danger">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar mb-4">
            <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-bars menu-btn" id="menuBtn"></i>
                <h5 class="mb-0">Admin Dashboard</h5>
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="notif-wrapper" onclick="markMessagesRead(); window.location.href='admin-messages.php';">
                    <i class="fa-solid fa-bell fa-lg"></i>
                    <?php if ($unreadCount > 0): ?>
                        <span class="badge rounded-pill bg-danger notif-badge" id="notifBadge"><?php echo $unreadCount; ?></span>
                    <?php endif; ?>
                </div>
                <span class="fw-semibold">Admin</span>
                <img src="https://i.pravatar.cc/40" class="rounded-circle">
            </div>
        </div>

        <!-- STATISTICS -->
        <div class="row g-4 mb-4">
            <div class="col-lg-3 col-md-6">
                <div class="stat-card bg-primary">
                    <h6>Total Courses</h6>
                    <h3 class="fw-bold">24</h3>
                    <i class="fa-solid fa-book"></i>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card bg-success">
                    <h6>Total Students</h6>
                    <h3 class="fw-bold">1,280</h3>
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card bg-warning">
                    <h6>Instructors</h6>
                    <h3 class="fw-bold">12</h3>
                    <i class="fa-solid fa-user-tie"></i>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card bg-danger">
                    <h6>Downloads</h6>
                    <h3 class="fw-bold">8,540</h3>
                    <i class="fa-solid fa-download"></i>
                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="fw-bold mb-3">Latest Courses</h6>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Instructor</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Web Development</td>
                                <td>Gula Khan</td>
                                <td>2025-01-10</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Graphic Design</td>
                                <td>Noman Sahar</td>
                                <td>2025-01-05</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const menuBtn = document.getElementById("menuBtn");
        const sidebar = document.getElementById("sidebar");
        const sidebarCloseBtn = document.getElementById("sidebarCloseBtn");

        menuBtn.addEventListener("click", () => sidebar.classList.add("show"));
        sidebarCloseBtn.addEventListener("click", () => sidebar.classList.remove("show"));

        function markMessagesRead() {
            const badge = document.getElementById('notifBadge');
            if (badge) badge.style.display = 'none';

            // Update messages status via AJAX
            fetch('mark-messages-read.php')
                .then(res => res.text())
                .then(console.log);
        }
    </script>

</body>

</html>