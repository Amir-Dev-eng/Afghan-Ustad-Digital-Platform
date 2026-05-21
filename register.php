<?php
session_start();
include "connection.php";

if (isset($_POST['register'])) {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        $error = "مهرباني وکړئ ټول فیلډونه ډک کړئ";
    } else {

        $check = $conn->prepare("SELECT id FROM users WHERE email=?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $error = "دا ایمیل مخکې ثبت شوی دی";
        } else {

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $q = $conn->prepare(
                "INSERT INTO users (name,email,password) VALUES (?,?,?)"
            );
            $q->bind_param("sss", $name, $email, $hash);

            if ($q->execute()) {
                header("Location: login.php");
                exit;
            } else {
                $error = "ستونزه رامنځته شوه، بیا هڅه وکړئ";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Register | Afghan Ustad</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {
    min-height: 100vh;
    background: #f5f7fb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Inter, system-ui, sans-serif;
}

/* CARD */
.login-wrapper {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, .12);
    overflow: hidden;
    max-width: 950px;
    width: 100%;
    padding: 40px;
}

/* LEFT IMAGE */
.login-left {
    background:
        linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)),
        url("images/Obaid-Afghan.jpg") center / cover no-repeat;
    color: #fff;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    border-radius: 20px;
    min-height: 100%;
}

.login-left h5 {
    font-weight: 600;
    line-height: 1.5;
}

/* RIGHT FORM */
.login-right {
    padding: 45px;
}

.form-control {
    border-radius: 12px;
    padding: 13px 45px 13px 15px;
    border: 1px solid #e1e5eb;
}

.form-control:focus {
    box-shadow: none;
    border-color: #0d6efd;
}

/* PASSWORD EYE */
.password-wrapper {
    position: relative;
}
.password-wrapper i {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #6c757d;
}

/* BUTTON */
.btn-register {
    height: 48px;
    border-radius: 25px;
    font-weight: 600;
    background: linear-gradient(90deg, #0029AD, #237EFA);
    border: none;
}

/* MOBILE — SAME AS LOGIN */
@media (max-width: 768px) {
    .login-left {
        background:
            linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)),
            url("images/Obaid-Afghan.jpg") top center / contain no-repeat;

        min-height: 540px;
        padding: 20px;
        border-radius: 18px 18px 0 0;
        margin-bottom: 15px;
        width: 100%;
    }

    .login-left h5 {
        font-size: 14px;
        line-height: 1.4;
    }

    .login-right {
        padding: 30px 20px;
    }
}
</style>
</head>

<body>

<div class="login-wrapper row g-0">

    <!-- LEFT IMAGE -->
    <div class="col-lg-5 login-left">
        <div>
            <h5>
                "Start your digital journey with AfghanUstad today."
            </h5>
            <small class="opacity-75 d-block mt-2">
                AfghanUstad – Digital Learning Platform
            </small>
        </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="col-lg-7 login-right">

        <a href="index.php" class="btn btn-light text-primary mb-3">
            <i class="fa-solid fa-arrow-left me-1"></i> Back to Home
        </a>

        <h3 class="fw-bold mb-1" style="color:#FF6A00;">Create Account</h3>
        <p class="text-muted mb-4">Register to AfghanUstad</p>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">

            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email address" required>
            </div>

            <div class="mb-3 password-wrapper">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <i class="fa-solid fa-eye" id="togglePassword"></i>
            </div>

            <button type="submit" name="register" class="btn btn-register w-100 text-white mb-3">
                Create account
            </button>
        </form>

        <div class="text-center small mt-3">
            Already have an account?
            <a href="login.php" class="fw-bold">Sign in</a>
        </div>

    </div>
</div>

<script>
const toggle = document.getElementById('togglePassword');
const password = document.getElementById('password');

toggle.addEventListener('click', () => {
    password.type = password.type === 'password' ? 'text' : 'password';
    toggle.classList.toggle('fa-eye-slash');
});
</script>

</body>
</html>