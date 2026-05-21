<?php
include "connection.php";

// Query all messages safely
$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Database query failed: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        .sidebar a i {
            width: 20px;
            text-align: center;
        }

        /* Close button for mobile */
        .sidebar .close-btn {
            display: none;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 22px;
            cursor: pointer;
        }

        /* Main content */
        .main {
            margin-left: 260px;
            padding: 25px;
            transition: 0.3s;
        }

        /* Topbar menu button */
        .menu-btn {
            display: none;
            font-size: 22px;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .sidebar {
                left: -260px;
            }

            .sidebar.show {
                left: 0;
            }

            .sidebar .close-btn {
                display: block;
                color: #fff;
            }

            .main {
                margin-left: 0 !important;
            }

            .menu-btn {
                display: block;
            }
        }

        .admin-header {
            background: linear-gradient(135deg, #0d6efd, #0d6efd);
            color: #fff;
            padding: 25px;
            border-radius: 16px;
            margin-bottom: 30px;
        }

        .message-card {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            transition: .3s ease;
            height: 100%;
        }

        .message-card:hover {
            transform: translateY(-5px);
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #0d6efd;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
        }

        .btn-view {
            background: #0B2CAD;
            color: #fff;
            border-radius: 30px;
            padding: 6px 18px;
        }

        .btn-view:hover {
            background: #0922a5;
            color: #fff;
        }

        .btn-delete {
            border-radius: 30px;
            padding: 6px 18px;
        }
    </style>
</head>

<body>

    <!-- Sidebar Include -->
    <div class="sidebar" id="sidebar">
        <div class="logo">
            Afghan Ustad
            <span class="close-btn" id="closeBtn">&times;</span>
        </div>
        <a href="dashboard.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
        <a href="upload_course.php"><i class="fa-solid fa-upload"></i> Upload Course</a>
        <a href="index.php"><i class="fa-solid fa-globe"></i> Website</a>
        <a href="admin-messages.php"><i class="fa-solid fa-envelope"></i> Messages</a>
        <a href="#"><i class="fa-solid fa-users"></i> Students</a>
        <a href="#"><i class="fa-solid fa-user-tie"></i> Instructors</a>
        <a href="logout.php" class="text-danger"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main">
        <!-- Topbar toggle button -->
        <i class="fa-solid fa-bars menu-btn mb-3" id="menuBtn"></i>

        <div class="container py-3">



            <!-- Header -->
            <?php if (isset($_GET['deleted'])): ?>
                <div class="alert alert-success">
                    Message deleted successfully ✅
                </div>
            <?php endif; ?>
            <div class="admin-header d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>
                    <h3 class="mb-1">📩 Contact Messages</h3>
                    <small>Manage student messages professionally</small>
                </div>
                <span class="badge bg-light text-dark px-3 py-2">
                    Total Messages: <?php echo ($result) ? $result->num_rows : 0; ?>
                </span>
            </div>

            <!-- Messages -->
            <div class="row g-4">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-lg-6">
                            <div class="message-card">

                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar me-3">
                                        <?= strtoupper(substr($row['name'] ?? '', 0, 1)) ?>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0"><?= htmlspecialchars($row['name'] ?? 'Unknown') ?></h6>
                                        <small class="text-muted">
                                            <?= htmlspecialchars($row['email'] ?? '') ?><br>
                                            <?= htmlspecialchars($row['phone'] ?? '') ?>
                                        </small>
                                    </div>
                                </div>

                                <h6 class="fw-bold mb-2"><?= htmlspecialchars($row['subject'] ?? 'No Subject') ?></h6>
                                <p class="text-muted small"><?= substr(strip_tags($row['message'] ?? ''), 0, 90) . '...'; ?></p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fa-regular fa-clock"></i>
                                        <?= date("d M Y", strtotime($row['created_at'] ?? date('Y-m-d'))) ?>
                                    </small>
                                    <div class="d-flex gap-2">
                                        <a href="view-message.php?id=<?= $row['id'] ?>" class="btn btn-view btn-primary btn-sm">View</a>
                                        <a href="delete-message.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this message?')" class="btn btn-danger btn-sm btn-delete">Delete</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <div class="alert alert-info">No messages yet or query failed</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const menuBtn = document.getElementById("menuBtn");
        const sidebar = document.getElementById("sidebar");
        const closeBtn = document.getElementById("closeBtn");

        menuBtn.addEventListener("click", () => {
            sidebar.classList.add("show");
        });

        closeBtn.addEventListener("click", () => {
            sidebar.classList.remove("show");
        });
    </script>
</body>

</html>