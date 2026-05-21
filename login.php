<?php
session_start();
include "connection.php";

/* ================= GOOGLE CONFIG ================= */
$clientID = "367130577242-ij877ofkpp0tfkm532d7glkgnqqcdh6s.apps.googleusercontent.com";
$clientSecret = "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";
$redirectUri = "http://localhost/afghanustad/google_callback.php";

$googleAuthUrl = "https://accounts.google.com/o/oauth2/v2/auth?response_type=code"
    . "&client_id=" . urlencode($clientID)
    . "&redirect_uri=" . urlencode($redirectUri)
    . "&scope=" . urlencode("email profile");
/* ================================================= */

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "مهرباني وکړئ ټول فیلډونه ډک کړئ";
    } else {

        $q = $conn->prepare("SELECT id,name,password,role FROM users WHERE email=?");
        $q->bind_param("s", $email);
        $q->execute();
        $res = $q->get_result();

        if ($res->num_rows === 1) {
            $user = $res->fetch_assoc();

            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name']    = $user['name'];
                $_SESSION['role']    = $user['role'];

                header("Location: " . ($user['role'] === 'admin' ? "dashboard.php" : "index.php"));
                exit;
            } else {
                $error = "پاسورډ ناسم دی";
            }
        } else {
            $error = "دا ایمیل ثبت شوی نه دی";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Afghan Ustad</title>
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

        /* LEFT IMAGE - Desktop */
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

        /* Password eye */
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

        /* BUTTONS */
        .btn-login {
            height: 48px;
            border-radius: 25px;
            font-weight: 600;
            background: linear-gradient(90deg, #0029AD, #237EFA);
            border: none;
        }

        .btn-google {
            height: 48px;
            border-radius: 25px;
            background: #fff;
            color: #444;
            font-weight: 600;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all .25s ease;
            text-decoration: none;
        }

        .btn-google:hover {
            background: #f8f9fa;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .12);
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .login-left {
                background:
                    linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)),
                    url("images/Obaid-Afghan.jpg") top center / contain no-repeat;

                min-height: 540px;
                /* 👈 لوړوالی زیات شو */
                min-width: auto;
                padding: 20px;
                border-radius: 18px 18px 0 0;
                margin-bottom: 15px;
                width: 100%;
            }

            .login-left h5 {
                font-size: 14px;
                line-height: 1.4;
            }
        }

        .login-right {
            padding: 30px 20px;
        }

        
        
    </style>
</head>

<body>

    <div class="login-wrapper row g-0">

        <!-- LEFT IMAGE -->
        <div class="col-lg-5 login-left">
            <div>
                <h5>
                    "At AfghanUstad, our mission is to empower Afghanistan’s youth
                    with digital skills for the future."
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

            <h3 class="fw-bold mb-1" style="color:#FF6A00;">Welcome back</h3>
            <p class="text-muted mb-4">Sign in to your AfghanUstad account</p>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                </div>

                <div class="mb-3 password-wrapper">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <i class="fa-solid fa-eye" id="togglePassword"></i>
                </div>

                <button type="submit" name="login" class="btn btn-login w-100 text-white mb-3">
                    Sign in
                </button>
            </form>

            <!-- GOOGLE LOGIN -->
            <a href="<?= $googleAuthUrl ?>" class="btn-google mb-3">
                <img src="https://developers.google.com/identity/images/g-logo.png"
                    alt="Google" width="25" height="25">
                Continue with Google
            </a>

            <div class="text-center small mt-3">
                Don’t have an account?
                <a href="register.php" class="fw-bold">Create account</a>
            </div>

        </div>
    </div>

    <script>
        const toggle = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        toggle.addEventListener('click', () => {
            const type = password.type === 'password' ? 'text' : 'password';
            password.type = type;
            toggle.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>