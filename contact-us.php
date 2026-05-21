<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Afghan Ustad</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
    }

    /* Navbar */

    .navbar-dark {
        background-color: #0029AD;

    }

    /* ================= NAVBAR LINKS FIX ================= */

    /* Default navbar links (not active) */
    .navbar .nav-link {
        color: rgba(255, 255, 255, 0.7);
        transition: color 0.3s ease;
    }

    /* Hover effect only */
    .navbar .nav-link:hover {
        color: #ffffff;
    }

    /* Active link (Home) */
    .navbar .nav-link.active {
        color: #FF6A00 !important;
        /* Orange highlight */
        position: relative;
    }

    /* Optional underline for active link */
    .navbar .nav-link.active::after {
        content: "";
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
        width: 22px;
        height: 3px;
        background-color: #FF6A00;
        border-radius: 10px;
    }

    /* ================= FOOTER ================= */
    .site-footer {
        background: #0B2CAD;
        color: #fff;
        padding: 0px 0 20px;
    }

    .site-footer a {
        color: #fff;
        text-decoration: none;
    }

    .site-footer a:hover {
        text-decoration: underline;
    }

    .footer-title {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 1.1rem;
    }

    .footer-links,
    .footer-info {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li,
    .footer-info li {
        margin-bottom: 8px;
    }

    .footer-social a {
        display: inline-block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        margin-right: 10px;
        border-radius: 50%;
        background: #FF6A00;
        color: #fff;
        text-align: center;
        transition: .3s;
    }

    .footer-social a:hover {
        transform: scale(1.1);
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, .2);
        padding-top: 15px;
        font-size: .9rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 10px;
    }

    /* ================= RESPONSIVE ================= */
    @media(max-width:768px) {
        .about-title {
            font-size: 2.2rem;
        }

        .img-main {
            height: 220px;
        }

        .img-small-wrap img {
            height: 120px;
        }

        .footer-bottom {
            flex-direction: column;
            align-items: center;
        }
    }


    .contact-section {
        background: linear-gradient(180deg, #f7f9ff, #ffffff);
    }

    .contact-card {
        background: #fff;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
        transition: 0.3s ease;
    }

    .contact-card i {
        font-size: 30px;
        color: #FF6A00;
        margin-bottom: 12px;
    }

    .contact-card:hover {
        transform: translateY(-6px);
    }

    .contact-form {
        background: #fff;
        padding: 30px;
        border-radius: 16px;
    }

    .contact-form .form-control {
        border-radius: 12px;
        padding: 12px 14px;
    }

    .btn-send {
        background: linear-gradient(45deg, #FF6A00, #FF9A00);
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 12px 38px;
    }

    .btn-send i {
        font-size: 14px;
    }

    .btn-send:hover {
        opacity: 0.9;
    }

    .map-section iframe {
        width: 100%;
        height: 360px;
        border: none;
    }


    /* ================= LOGIN BUTTON FIX ================= */
    .navbar .circle-btn {
        background-color: transparent !important;
        /* سبز ختم */
        color: #ffffff !important;
        /* Login text ښکاره */
        border: 2px solid #FF6A00;
        /* نارنجي بورډر */
        padding: 6px 22px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    /* Hover */
    .navbar .circle-btn:hover {
        background-color: #FF6A00 !important;
        /* نارنجي */
        color: #ffffff !important;
        text-decoration: none;
    }

    .btn-outline-light {
        padding: 10px;
    }


    /* ================= PAGE HEADER ================= */
    .page-header {
        height: 700px;
        background: linear-gradient(rgba(10, 9, 7, 0.3),
                rgba(11, 44, 173, 0.75)),
            url("images/Contact-Page-hero.jpg") center/cover no-repeat;
        margin-top: 60px;
        /* navbar height */
    }

    .page-header h1 {
        font-size: 3rem;
    }

    .page-header .breadcrumb {
        background: transparent;
        padding: 0;
        margin-top: 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header {
            height: 240px;
        }

        .page-header h1 {
            font-size: 2.2rem;
        }
    }

    /* ================= LOGIN BUTTON FIX ================= */
    .navbar .circle-btn {
        background-color: transparent !important;
        /* سبز ختم */
        color: #ffffff !important;
        /* Login text ښکاره */
        border: 2px solid #FF6A00;
        /* نارنجي بورډر */
        padding: 6px 22px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    /* Hover */
    .navbar .circle-btn:hover {
        background-color: #FF6A00 !important;
        /* نارنجي */
        color: #ffffff !important;
        text-decoration: none;
    }

    .btn-outline-light {
        padding: 10px;
    }


    /* Dark Mode */
    body.dark-mode {
        background-color: #121212;
        color: #e0e0e0;
    }

    /* Navbar */
    body.dark-mode .navbar {
        background-color: #1f1f1f !important;
    }

    /* Page Header */
    body.dark-mode .page-header {
        background-color: #1f1f1f;
    }

    /* Contact Section */
    body.dark-mode .contact-section {
        background-color: #1a1a1a;
    }

    body.dark-mode .contact-card {
        background-color: #2a2a2a;
        color: #e0e0e0;
        border: 1px solid #333;
    }

    body.dark-mode .contact-card i {
        color: #FF6A00;
    }

    body.dark-mode .contact-form {
        background-color: #2a2a2a;
        color: #e0e0e0;
    }

    body.dark-mode .contact-form input,
    body.dark-mode .contact-form textarea {
        background-color: #1f1f1f;
        color: #e0e0e0;
        border: 1px solid #444;
    }

    body.dark-mode .contact-form .form-check-label {
        color: #e0e0e0;
    }

    body.dark-mode .btn-send {
        background-color: #FF6A00;
        color: #fff;
    }

    /* Footer */
    body.dark-mode footer.site-footer {
        background-color: #1f1f1f;
        color: #e0e0e0;
    }

    body.dark-mode .footer-links a,
    body.dark-mode .footer-info li {
        color: #e0e0e0;
    }

    body.dark-mode .footer-social a {
        background-color: #FF6A00;
        color: #fff;
    }

    body.dark-mode .btn-outline-light {
        color: #e0e0e0;
        border-color: #e0e0e0;
    }

    body.dark-mode .btn-outline-light:hover {
        background-color: #FF6A00;
        color: #fff;
    }

    /* ================= NAVBAR ACTIVE UNDERLINE MOBILE FIX ================= */
    @media (max-width: 768px) {

        .navbar .nav-link.active {
            position: relative;
            display: inline-block;
            /* مهم */
        }

        .navbar .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            transform: none;
            width: 100%;
            height: 3px;
            background-color: #FF6A00;
            border-radius: 10px;
        }
    }


    .whatsapp-float {
        position: fixed;
        bottom: 25px;
        right: 25px;
        background: #25D366;
        color: #fff;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        line-height: 55px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        z-index: 9999;
        transition: 0.3s ease;
    }

    .whatsapp-float:hover {
        background: #1ebe5d;
        color: #fff;
        transform: scale(1.1);
    }

    @media (max-width: 576px) {
        .whatsapp-float {
            width: 48px;
            height: 48px;
            font-size: 26px;
            line-height: 48px;
            bottom: 18px;
            right: 18px;
        }
    }

    /* ===== Afghan Ustad Custom Animation ===== */

    .whatsapp-float {
        animation: au-bounce 2.5s infinite ease-in-out;
    }

    /* Soft bounce */
    @keyframes au-bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    /* Pulse ring (knowledge wave) */
    .whatsapp-float::before {
        content: "";
        position: absolute;
        inset: -8px;
        border-radius: 50%;
        border: 2px solid rgba(37, 211, 102, 0.6);
        animation: au-pulse 2s infinite;
    }

    /* Pulse animation */
    @keyframes au-pulse {
        0% {
            transform: scale(0.9);
            opacity: 1;
        }

        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }

    /* Pause animation on hover (professional) */
    .whatsapp-float:hover {
        animation-play-state: paused;
    }

    .whatsapp-float:hover::before {
        animation-play-state: paused;
    }

    /* ===== WhatsApp Floating Button ===== */

    .whatsapp-float {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 55px;
        height: 55px;
        background-color: #25D366;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        line-height: 55px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        z-index: 9999;
        cursor: pointer;

        /* Afghan Ustad Animation */
        animation: au-bounce 2.5s infinite ease-in-out;
    }

    /* Icon center */
    .whatsapp-float i {
        position: relative;
        z-index: 2;
    }

    /* Soft bounce animation */
    @keyframes au-bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    /* Knowledge pulse ring */
    .whatsapp-float::before {
        content: "";
        position: absolute;
        inset: -8px;
        border-radius: 50%;
        border: 2px solid rgba(37, 211, 102, 0.6);
        animation: au-pulse 2s infinite;
    }

    /* Pulse animation */
    @keyframes au-pulse {
        0% {
            transform: scale(0.9);
            opacity: 1;
        }

        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }

    /* Pause animation on hover */
    .whatsapp-float:hover {
        animation-play-state: paused;
    }

    .whatsapp-float:hover::before {
        animation-play-state: paused;
    }

    /* ===== Tooltip Style ===== */

    .wa-tooltip {
        position: absolute;
        right: 70px;
        bottom: 50%;
        transform: translateY(50%);
        background: #1f2933;
        color: #fff;
        padding: 8px 12px;
        font-size: 18px;
        border-radius: 6px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: 0.3s ease;
    }

    /* Tooltip arrow */
    .wa-tooltip::after {
        content: "";
        position: absolute;
        right: -6px;
        top: 50%;
        transform: translateY(-50%);
        border-width: 6px;
        border-style: solid;
        border-color: transparent transparent transparent #1f2933;
    }

    /* Show tooltip on hover */
    .whatsapp-float:hover .wa-tooltip {
        opacity: 1;
    }


    /* ===== Scroll Toggle Button ===== */

    #scrollToggleBtn {
        position: fixed;
        bottom: 25px;
        left: 25px;
        width: 50px;
        height: 50px;
        background: #FF6A00;
        color: #fff;
        border: none;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        z-index: 9999;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    /* Hover effect */
    #scrollToggleBtn:hover {
        background: #FF9A00;
        transform: scale(1.1);
    }

    /* Soft pulse (optional, Afghan Ustad style) */
    #scrollToggleBtn {
        animation: scrollPulse 3s infinite ease-in-out;
    }

    @keyframes scrollPulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.08);
        }
    }

    /* Rotate arrow smoothly */
    #scrollToggleBtn i {
        transition: transform 0.35s ease;
    }


    /* کله چې arrow ښکته وي */
    .arrow-down {
        transform: rotate(0deg);
    }

    /* کله چې arrow پورته شي */
    .arrow-up {
        transform: rotate(180deg);
    }


    /* ===== SIMPLE MODERN DROPDOWN ===== */
    .modern-dropdown {
        background: #0B2CAD;
        /* د navbar سره match */
        border: none;
        border-radius: 14px;
        padding: 8px 0;
        min-width: 240px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        animation: dropdownFade 0.25s ease;
    }

    /* Items */
    .modern-dropdown .dropdown-item {
        color: rgba(255, 255, 255, 0.85);
        padding: 10px 18px;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    /* Hover */
    .modern-dropdown .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #FF6A00;
        padding-left: 22px;
        /* soft move */
    }

    /* Divider */
    .modern-dropdown .dropdown-divider {
        border-color: rgba(255, 255, 255, 0.15);
        margin: 6px 0;
    }

    /* Soft animation */
    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="images/logo.svg" alt="Afghan Ustad" height="40">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto gap-4">
                    <li class="nav-item"><a class="nav-link active ml-5 fw-bold" href="index.php">Home</a></li>
                    <!-- All Courses Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold dropdown-toggle"
                            href="#"
                            id="coursesDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All Courses
                        </a>

                        <ul class="dropdown-menu modern-dropdown text-center" dir="rtl" aria-labelledby="coursesDropdown">
                            <li>
                                <h4><a class="dropdown-item text-center fw-bold" href="all-courses.php" style="color:#FF6A00;">ټــول کورســـونــه</a></h4>
                            </li>
                            <li><a class="dropdown-item" href="#">1. اووم ټولګی</a></li>
                            <li><a class="dropdown-item" href="#">2. اتم ټولګی</a></li>
                            <li><a class="dropdown-item" href="#">3. نهم ټولګی</a></li>
                            <li><a class="dropdown-item" href="#">4. لسم ټولګی</a></li>
                            <li><a class="dropdown-item" href="#">5. یوولسم ټولګی</a></li>
                            <li><a class="dropdown-item" href="#">6. دوولسم ټولګی</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">7. کانکور آمادګي</a></li>
                            <li><a class="dropdown-item" href="#">8. انګلیسي او کمپیوټر</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="news-update-info.php">News</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="about-page.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="contact-us.php">Contact Us</a></li>
                </ul>
                <button id="modeBtn" class="btn btn-outline-light me-4 circle-btn">
                    <i class="fa-solid fa-moon"></i>
                </button>
                <a href="login.php" class="circle-btn">Login</a>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER / HERO -->
    <section class="page-header d-flex  align-items-center">
        <div class="container text-white">
            <h1 class="fw-bold"><span style="color: #FF6A00;">Contact</span> Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-white-50">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Contact
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Contact Us Section -->
    <section class="contact-section py-5">
        <div class="container">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: #FF6A00;">Contact Us</h2>
                <h4 class="text-muted">
                    که کومه پوښتنه لرئ، زموږ ټیم چمتو دی چې مرسته درسره وکړي
                </h4>
            </div>

            <!-- Info Cards -->
            <div class="row g-4 mb-5 text-center">
                <div class="col-md-4">
                    <div class="contact-card">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="mb-0">
                            خوست – افغانستان<br>
                            AfghanUstad Digital Learning Center
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-card">
                        <i class="fa-solid fa-phone"></i>
                        <p class="mb-0">
                            +93 700 000 000<br>
                            +93 780 000 000
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-card">
                        <i class="fa-solid fa-envelope"></i>
                        <p class="mb-0">
                            info@afghanustad.com<br>
                            support@afghanustad.com
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php

                    if (isset($_SESSION['success'])) {
                        echo '<div class="alert alert-success text-center">' . $_SESSION['success'] . '</div>';
                        unset($_SESSION['success']);
                    }

                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-danger text-center">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="contact-form shadow-lg">
                        <h3 class="text-center fw-bold mb-4" style="color: #FF6201;">Our experts will help you</h3>

                        <form method="POST" action="contact-process.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Your message here"></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" required>
                                        <label class="form-check-label fw-bold">
                                            زه د معلوماتو د پروسس شرایط منم
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-send px-5">
                                        <i class="fa-solid fa-paper-plane me-2"></i>
                                        SEND MESSAGE
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Map -->
    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26666.24833156246!2d69.91415953783908!3d33.33760680360733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d7bb0f9041ae9d%3A0xd06a11ea8c74b4bf!2sKhost%2C%20Afghanistan!5e0!3m2!1sen!2sbg!4v1766682529998!5m2!1sen!2sbg" width="100%" height="200" style="border:0;border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
    </div>




    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/93700000000"
        class="whatsapp-float"
        target="_blank"
        aria-label="له افغان استاد سره په واټساپ خبرې وکړئ">

        <i class="fa-brands fa-whatsapp"></i>

        <!-- Pashto Tooltip -->
        <span class="wa-tooltip">
            له افغان استاد سره په واټساپ خبرې وکړئ
        </span>
    </a>

    <!-- FOOTER -->
    <footer class="site-footer pt-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">AfghanUstad</h6>
                    <p>Empowering Afghan youth with skills for a digital future.</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Services</h6>
                    <ul class="footer-links">
                        <li><a href="#">Online Courses</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Student Projects</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Corporate Training</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Helpful Links</h6>
                    <ul class="footer-links">
                        <li><a href="about-page.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="news-update-info.php">News</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Our Instructors</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">Contact</h6>
                    <ul class="footer-info">
                        <li><i class="fa-solid fa-location-dot"></i> Khost, Afghanistan</li>
                        <li><i class="fa-solid fa-phone"></i> +93 78 176 5151</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26666.24833156246!2d69.91415953783908!3d33.33760680360733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d7bb0f9041ae9d%3A0xd06a11ea8c74b4bf!2sKhost%2C%20Afghanistan!5e0!3m2!1sen!2sbg!4v1766682529998!5m2!1sen!2sbg" width="100%" height="200" style="border:0;border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

            <div class="footer-bottom mt-4 d-flex justify-content-between flex-wrap">
                <div>
                    <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
                </div>
                <div>© 2026 Afghan Ustad. All rights reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Scroll Toggle Button -->
    <button id="scrollToggleBtn" aria-label="صفحې پورته او ښکته کول">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Dark Mode Toggle -->
    <script>
        const modeBtn = document.getElementById('modeBtn');
        const body = document.body;
        const icon = modeBtn.querySelector('i');

        // ALWAYS start in light mode
        body.classList.remove('dark-mode');
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');

        // Toggle dark mode only on user click
        modeBtn.addEventListener('click', () => {
            body.classList.toggle('dark-mode');

            if (body.classList.contains('dark-mode')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            const navbarCollapse = document.getElementById("menu");

            // Bootstrap collapse instance
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                toggle: false
            });

            // Close navbar on scroll (mobile only)
            window.addEventListener("scroll", function() {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                    bsCollapse.hide();
                }
            });

        });

        // Icon arrow top and bottom
        const scrollBtn = document.getElementById("scrollToggleBtn");
        const icon1 = scrollBtn.querySelector("i");

        let atTop = false;

        // initial state
        icon1.classList.add("arrow-up");

        scrollBtn.addEventListener("click", () => {
            if (!atTop) {
                // Scroll to top
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });

                // rotate icon (point down)
                icon1.classList.remove("arrow-up");
                icon1.classList.add("arrow-down");

                atTop = true;
            } else {
                // Scroll to bottom
                window.scrollTo({
                    top: document.body.scrollHeight,
                    behavior: "smooth"
                });

                // rotate icon (point up)
                icon1.classList.remove("arrow-down");
                icon1.classList.add("arrow-up");

                atTop = false;
            }
        });

        // Auto detect scroll position
        window.addEventListener("scroll", () => {
            if (window.scrollY < 200) {
                icon1.classList.remove("arrow-down");
                icon1.classList.add("arrow-up");
                atTop = false;
            }
        });
    </script>


</body>

</html>