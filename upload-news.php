<?php
session_start();
include "connection.php";

/* ===== AUTH ===== */
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

/* ===== INIT ===== */
$title = $description = "";
$media_name = "";
$status = 1;
$edit_mode = false;
$edit_id = 0;
$message = "";

/* ===== EDIT MODE ===== */
if (isset($_GET['edit_id'])) {
    $edit_id = (int)$_GET['edit_id'];
    $edit_mode = true;

    $stmt = $conn->prepare("SELECT * FROM news WHERE id=?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();

    if ($row) {
        $title = $row['title'];
        $description = $row['description'];
        $media_name = $row['media'];
        $status = $row['status'];
    }
}

/* ===== ADD / UPDATE ===== */
if (isset($_POST['submit_news'])) {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $status = (int)$_POST['status'];
    $edit_id = isset($_POST['edit_id']) ? (int)$_POST['edit_id'] : 0;

    /* Media Upload */
    if (!empty($_FILES['media']['name'])) {
        $allowed_images = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $allowed_videos = ['mp4', 'webm', 'ogg'];
        $ext = strtolower(pathinfo($_FILES['media']['name'], PATHINFO_EXTENSION));

        $media_new = time() . '_' . $_FILES['media']['name'];

        if (in_array($ext, $allowed_images) || in_array($ext, $allowed_videos)) {
            move_uploaded_file($_FILES['media']['tmp_name'], "uploads/news/" . $media_new);

            if ($edit_mode && $media_name && file_exists("uploads/news/" . $media_name)) {
                unlink("uploads/news/" . $media_name);
            }

            $media_name = $media_new;
        } else {
            $message = "<div class='alert alert-danger'>❌ یوازې تصویر یا ویډیو اجازه لري</div>";
        }
    }

    if ($edit_mode) {
        $stmt = $conn->prepare("
            UPDATE news 
            SET title=?, description=?, media=?, status=? 
            WHERE id=?
        ");
        $stmt->bind_param("sssii", $title, $description, $media_name, $status, $edit_id);
        $stmt->execute();
        header("Location: upload-news.php?updated=1");
        exit;
    } else {
        $stmt = $conn->prepare("
            INSERT INTO news (title, description, media, status)
            VALUES (?,?,?,?)
        ");
        $stmt->bind_param("sssi", $title, $description, $media_name, $status);
        $stmt->execute();
        header("Location: upload-news.php?added=1");
        exit;
    }
}

/* ===== DELETE ===== */
if (isset($_GET['delete_id'])) {
    $id = (int)$_GET['delete_id'];

    $stmt = $conn->prepare("SELECT media FROM news WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();

    if ($row && $row['media'] && file_exists("uploads/news/" . $row['media'])) {
        unlink("uploads/news/" . $row['media']);
    }

    $conn->query("DELETE FROM news WHERE id=$id");
    header("Location: upload-news.php?deleted=1");
    exit;
}

/* ===== FETCH ===== */
$result = $conn->query("SELECT * FROM news ORDER BY id DESC");

/* ===== ALERTS ===== */
if (isset($_GET['added']))   $message = "<div class='alert alert-success'>✅ خبر اضافه شو</div>";
if (isset($_GET['updated'])) $message = "<div class='alert alert-info'>✏ خبر اپډېټ شو</div>";
if (isset($_GET['deleted'])) $message = "<div class='alert alert-warning'>🗑 خبر حذف شو</div>";
?>

<!DOCTYPE html>
<html lang="ps">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6fb;
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: #111827;
            position: fixed;
            top: 0;
            left: 0;
            color: #fff;
            z-index: 1000;
            overflow-y: auto;
            transition: 0.3s;
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

        .sidebar .close-btn {
            display: none;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 22px;
            cursor: pointer;
        }

        .main {
            margin-left: 260px;
            padding: 25px;
            transition: 0.3s;
        }

        @media(max-width:991px) {
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
        }

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

        @media(max-width:991px) {
            .menu-btn {
                display: block;
            }
        }

        .card-header {
            border-radius: 0;
        }

        .table-responsive {
            overflow-y: auto;
            height: 34rem;
        }

        /* ===== ADMIN MEDIA PREVIEW ===== */
        .admin-media-wrap {
            width: 100%;
            max-width: 220px;
            height: 140px;
            background: #000;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 10px;
        }

        .admin-media-wrap.sm {
            max-width: 80px;
            height: 60px;
            margin: auto;
        }

        .admin-media {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo">Afghan Ustad <span class="close-btn" id="closeBtn">&times;</span></div>
        <a href="dashboard.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
        <a href="upload_course.php"><i class="fa-solid fa-upload"></i> Upload Course</a>
        <a href="index.php"><i class="fa-solid fa-globe"></i> Website</a>
        <a href="admin-messages.php"><i class="fa-solid fa-envelope"></i> Messages</a>
        <a href="#"><i class="fa-solid fa-users"></i> Students</a>
        <a href="#"><i class="fa-solid fa-user-tie"></i> Instructors</a>
        <a href="logout.php" class="text-danger"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>

    <i class="fa-solid fa-bars menu-btn" id="menuBtn"></i>

    <div class="main">

        <!-- FORM -->
        <div class="card mb-4 shadow-lg">
            <div class="card-header text-white <?= $edit_mode ? 'bg-warning' : 'bg-primary' ?>">
                <?= $edit_mode ? 'د خبر ایډیټ' : 'نوی خبر اضافه کړه' ?>
            </div>
            <div class="card-body">
                <?= $message ?>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="edit_id" value="<?= $edit_mode ? $edit_id : '' ?>">

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required value="<?= htmlspecialchars($title) ?>">
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="4"><?= htmlspecialchars($description) ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Media</label><br>
                        <?php if ($edit_mode && $media_name):
                            $ext = strtolower(pathinfo($media_name, PATHINFO_EXTENSION)); ?>
                            <div class="admin-media-wrap">
                                <?php if (in_array($ext, ['mp4', 'webm', 'ogg'])): ?>
                                    <video class="admin-media" controls muted>
                                        <source src="uploads/news/<?= htmlspecialchars($media_name) ?>">
                                    </video>
                                <?php else: ?>
                                    <img src="uploads/news/<?= htmlspecialchars($media_name) ?>" class="admin-media">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <input type="file" name="media" class="form-control" accept="image/*,video/*">
                    </div>

                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select">
                            <option value="1" <?= $status == 1 ? 'selected' : '' ?>>Active</option>
                            <option value="0" <?= $status == 0 ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>

                    <button class="btn <?= $edit_mode ? 'btn-warning' : 'btn-primary' ?> w-100" name="submit_news">
                        <?= $edit_mode ? 'Update News' : 'Add News' ?>
                    </button>
                </form>
            </div>
        </div>

        <!-- TABLE -->
        <div class="card shadow-lg">
            <div class="card-header text-white" style="background:#ff6201">ټول خبرونه</div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Media</th>
                            <th>Title</th>
                            <th>Description</th> <!-- نوی ستون -->
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()):
                            $ext = strtolower(pathinfo($row['media'], PATHINFO_EXTENSION)); ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td>
                                    <?php if ($row['media']): ?>
                                        <div class="admin-media-wrap sm">
                                            <?php if (in_array($ext, ['mp4', 'webm', 'ogg'])): ?>
                                                <video class="admin-media" muted>
                                                    <source src="uploads/news/<?= htmlspecialchars($row['media']) ?>">
                                                </video>
                                            <?php else: ?>
                                                <img src="uploads/news/<?= htmlspecialchars($row['media']) ?>" class="admin-media">
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td><?= htmlspecialchars($row['title']) ?></td>
                                <td style="max-width:200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    <?= htmlspecialchars($row['description']) ?>
                                </td>
                                <td><?= $row['status'] ? 'Active' : 'Inactive' ?></td>
                                <td>
                                    <a href="?edit_id=<?= $row['id'] ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
                                    <a href="?delete_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('حذف شي؟')">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const menuBtn = document.getElementById("menuBtn");
        const closeBtn = document.getElementById("closeBtn");
        menuBtn.addEventListener("click", () => sidebar.classList.add("show"));
        closeBtn.addEventListener("click", () => sidebar.classList.remove("show"));
    </script>

</body>

</html>