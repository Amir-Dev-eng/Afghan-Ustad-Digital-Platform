<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Afghan Ustad</title> <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }


        /* Navbar */

        .navbar-dark {
            background-color: #0B2CAD !important;
            transition: background 0.3s;
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

        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .about-section {
            background: linear-gradient(180deg, #0029AD 55%, #ffffff 45%);
            padding: 80px 0;
        }

        .about-title {
            color: #fff;
            font-weight: 700;
            padding: 3rem;
        }

        .about-img {
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
        }

        .about-img.middle {
            transform: translateY(-30px);
        }

        .about-img img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .about-img:hover img {
            transform: scale(1.08);
        }

        /* Mission */
        .mission h3 {
            color: #ff7a00;
            font-weight: 700;
        }

        .mission p {
            max-width: 650px;
            margin: 10px auto;
            color: #666;
        }

        /* Icons */
        .mission-item {
            background: #fff;
            border-radius: 15px;
            padding: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: center;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .mission-item i {
            font-size: 26px;
            color: #ff7a00;
            transition: transform 0.4s ease;
        }

        .mission-item span {
            font-weight: 600;
            color: #333;
        }

        .mission-item:hover {
            transform: translateY(-6px) scale(1.05);
        }

        .mission-item:hover i {
            transform: scale(1.2);
        }

        /* ================= CORE VALUES ================= */
        .core-values-section {
            background: #fff;
        }

        /* .section-title {  
        font-size: 2.2rem;  
        font-weight: 700;  
    } */

        .section-subtitle {
            color: #6c757d;
            max-width: 520px;
            margin: auto;
        }

        .value-card {
            background: #fff;
            padding: 35px 25px;
            border-radius: 18px;
            box-shadow: 0 6px 10px #FF6A00;
            transition: .3s;
            height: 100%;
        }

        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 10px #FF6A00;
            transition: transform .3s, box-shadow .3s;
        }

        .icon-circle {
            width: 64px;
            height: 64px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #eaf3ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: #FF6201;
        }

        /* ================= FAQ ================= */
        .faq-section {
            background: #f8fbff;
        }

        .faq-wrapper {
            max-width: 800px;
            margin: auto;
        }

        .faq-item {
            background: #fff;
            border-radius: 14px;
            margin-bottom: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            padding: 18px 22px;
            border: none;
            background: none;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            padding: 0 22px;
            transition: .35s;
            color: #555;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            max-height: 250px;
            padding: 15px 22px 22px;
        }

        .faq-question .icon {
            font-size: 22px;
            color: #FF6201;
        }

        .faq-item.active .icon {
            transform: rotate(45deg);
        }

        /* ================= FOOTER ================= */
        .site-footer {
            background: #0B2CAD !important;
            color: #fff;
            padding: 50px 0 20px;
            transition: background 0.3s, color 0.3s;
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
            background: #FF6201;
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


        /* ================= DARK MODE – ALL SECTIONS ================= */
        body.dark-mode {
            background-color: #0d1117;
            color: #d0d0d0;
        }

        /* Navbar Dark Mode */
        body.dark-mode .navbar-dark {
            background-color: #18191A !important;
        }

        body.dark-mode .navbar-dark .nav-link {
            color: #d0d0d0 !important;
        }

        body.dark-mode .navbar-dark .nav-link.active {
            color: #FF6A00 !important;
        }

        /* About Section */
        body.dark-mode .about-section {
            background: linear-gradient(to bottom, #0d1117, #1a1a1a);
        }

        body.dark-mode .about-title {
            color: #FF6A00;
        }

        body.dark-mode .mission h3 {
            color: #FF6A00;
        }

        body.dark-mode .mission p {
            color: #ccc;
        }

        /* Mission Icons */
        body.dark-mode .mission-item {
            background-color: #222;
            color: #eee;
        }

        body.dark-mode .mission-item span {
            color: #eee;
        }

        body.dark-mode .mission-item i {
            color: #FF6A00;
        }

        /* Core Values */
        body.dark-mode .core-values-section {
            background-color: #1a1a1a;
        }

        body.dark-mode .value-card {
            background-color: #222;
            color: #eee;
        }

        body.dark-mode .icon-circle {
            background-color: #333;
            color: #FF6A00;
        }

        /* Team Section */
        body.dark-mode .our-team-section {
            background-color: #1a1a1a;
        }

        body.dark-mode .team-card {
            background-color: #222;
            color: #eee;
        }

        body.dark-mode .team-info {
            background: rgba(255, 255, 255, 0.05);
            color: #eee;
        }

        body.dark-mode .team-info span {
            color: #FF6A00;
        }

        /* FAQ Section */
        body.dark-mode .faq-section {
            background-color: #1a1a1a;
        }

        body.dark-mode .faq-item {
            background-color: #222;
            color: #eee;
        }

        body.dark-mode .faq-answer {
            color: #ccc;
        }

        body.dark-mode .faq-question .icon {
            color: #FF6A00;
        }

        /* Footer */
        body.dark-mode .site-footer {
            background-color: #18191A !important;
            color: #d0d0d0;
        }

        body.dark-mode .site-footer a {
            color: #d0d0d0;
        }

        body.dark-mode .footer-social a {
            background: linear-gradient(45deg, #FF6A00, #FF8C00, #FFC107);
        }

        /* Images slight dim */
        body.dark-mode .about-img img,
        body.dark-mode .team-img {
            filter: brightness(0.85);
        }

        /* Section */
        .our-team-section {
            background: #f7f9fc;
        }

        /* Title */
        .our-team-title {
            color: #FF6A00;
            font-weight: 700;
        }

        .our-team-subtitle {
            max-width: 650px;
            margin: 0 auto;
            color: #555;
        }

        /* Team Card */
        .team-card {
            background: #0029AD;
            border-radius: 22px;
            padding: 20px;
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        /* Image Wrapper – FIXED & EQUAL SIZE */
        .team-img-wrapper {
            width: 100%;
            height: 300px;
            /* 🔑 ټول images یو شان height */
            background: #0029AD;
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Image */
        .team-img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            /* NO crop */
            padding: 12px;
        }

        /* Info Box */
        .team-info {
            background: rgba(255, 255, 255, 8);
            /* transparent white */
            border-radius: 16px;
            padding: 18px;
            margin-top: -40px;
            position: relative;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }


        .team-info h5 {
            margin-bottom: 2px;
            font-weight: 600;
        }

        .team-info span {
            font-size: 14px;
            color: #FF6A00;
            font-weight: 500;
        }

        .team-info p {
            font-size: 14px;
            margin-top: 8px;
            color: #555;
        }

        /* Hover effect (subtle, luxury) */
        .team-card:hover {
            transform: translateY(-5px);
            transition: 0.4s ease;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .team-img-wrapper {
                height: 240px;
            }
        }

        /* LOGIN BUTTON */
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

        .site-footer {
            background: #ffffff;
            padding: 70px 0 30px;
            border-radius: 30px 30px 0 0;
            margin-top: 80px;
        }

        /* ================= ABOUT SECTION MOBILE FIX ================= */
        @media (max-width: 768px) {

            .about-section {
                padding: 60px 0;
                background: linear-gradient(180deg, #0029AD 65%, #ffffff 35%);
            }

            .about-title {
                padding: 1.5rem 0;
                font-size: 2rem;
            }

            /* Images stack vertically */
            .about-section .row.justify-content-center {
                flex-direction: column;
            }

            .about-img {
                margin-bottom: 20px;
            }

            /* Remove middle image lift */
            .about-img.middle {
                transform: none;
            }

            /* Reduce image height for mobile */
            .about-img img {
                height: 600px;
            }
        }

        /* ================= OUR MISSION MOBILE – FIXED PROPERLY ================= */
        @media (max-width: 768px) {

            /* Target ONLY mission icons row */
            .about-section .row.mt-4.g-4.justify-content-center {
                display: grid;
                grid-template-columns: repeat(4, 3fr);
                gap: 14px;
            }

            /* Override bootstrap cols */
            .about-section .row.mt-4.g-4.justify-content-center>div {
                max-width: 100%;
                flex: unset;
            }

            /* Mission card styling */
            .mission-item {
                padding: 14px 10px;
                flex-direction: column;
                gap: 8px;
            }

            .mission-item i {
                font-size: 22px;
            }

            .mission-item span {
                font-size: 12px;
                text-align: center;
                line-height: 1.4;
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

</head>

<body> <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark p-3  fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <img src="images/logo.svg" alt="Afghan Ustad" height="40">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto gap-4">
                    <li class="nav-item"><a class="nav-link active ml-5 fw-bold" target="_blank" href="index.php">Home</a></li>
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


    <section class="about-section text-center">
        <div class="container">

            <h1 class="about-title" style="color: #FF6A00;">About Us</h1>

            <!-- Images -->
            <div class="row justify-content-center mt-5 g-4">
                <div class="col-md-4">
                    <div class="about-img">
                        <img src="images/About-Us-Hero-Image3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-img middle">
                        <img src="images/About-Us-hero-Image-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-img">
                        <img src="images/About-Us-hero-Image2.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="mission mt-5">
                <h1 class="fw-bold" style="color: #FF6A00;">Our Mission</h1>
                <p>
                    At AfghanUstad, our mission is to empower Afghan youth with high-quality,
                    accessible digital education. We strive to bridge the skills gap by
                    providing practical, career-oriented learning that prepares students
                    for real-world opportunities in a global digital economy.
                </p>
            </div>

            <!-- Icons -->
            <div class="row mt-4 g-4 justify-content-center">

                <!-- 1 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Practical Learning</span>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-globe"></i>
                        <span>Global Opportunities</span>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-people-group"></i>
                        <span>Community Powered</span>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-lightbulb"></i>
                        <span>Innovation Mindset</span>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-laptop-code"></i>
                        <span>Digital Skills First</span>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <span>Career Ready</span>
                    </div>
                </div>

                <!-- 7 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <span>Education for All</span>
                    </div>
                </div>

                <!-- 8 -->
                <div class="col-md-3 col-6">
                    <div class="mission-item">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Future Focused</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="core-values-section py-5">
        <div class="container text-center">
            <h1 class="section-title fw-bold mb-2" style="color: #FF6A00;">Our Core Values</h1>
            <p class="section-subtitle mb-5">Principles that guide everything we do.</p>

            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="icon-circle"><i class="fa-solid fa-award"></i></div>
                        <h5>Excellence</h5>
                        <p>We deliver high-quality education with global standards.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="icon-circle"><i class="fa-solid fa-people-group"></i></div>
                        <h5>Inclusivity</h5>
                        <p>Education should be accessible to everyone.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="icon-circle"><i class="fa-solid fa-rocket"></i></div>
                        <h5>Innovation</h5>
                        <p>We embrace modern technology to grow together.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= OUR TEAM SECTION ================= -->
    <section class="our-team-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="our-team-title">Our Team</h1>
                <p class="our-team-subtitle">
                    Meet the professionals dedicated to the quality and success of
                    Afghanistan’s learning experience.
                </p>
            </div>

            <div class="row g-4">

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Obaid-Afghan.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Obaid Afghan</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Shafiullah-Mohammad.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Shafiullah Mohammadi</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Dawood-Khan.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Dawood Khan</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>


                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Abdulhaq-Ghafoor-Zoi.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Abdulhaq GhafoorZoi</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Anwar-Darman.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Anwar Darman</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Fahimullah-Dilfoori.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Fahimullah Dilfoori</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>



                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Safiullah-Hamdard.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Safiullah Hamdard</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Shams.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Shams</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card shadow-lg">
                        <div class="team-img-wrapper">
                            <img src="images/Mohmmad-Qayum-Shah.jpg" class="team-img">
                        </div>
                        <div class="team-info">
                            <h5>Mohammad Qayum Sha</h5>
                            <span>Instructor</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ==================================================== -->


    <!-- FAQ -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold" style="color: #FF6A00;">Frequently Asked Questions</h1>
                <p class="section-subtitle">Everything you need to know about Afghan Ustad</p>
            </div>

            <div class="faq-wrapper">

                <div class="faq-item">
                    <button class="faq-question">What is Afghan Ustad?<span class="icon">+</span></button>
                    <div class="faq-answer">A free digital learning platform for Afghan students.</div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Are courses free?<span class="icon">+</span></button>
                    <div class="faq-answer">Yes, all courses are completely free.</div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Do I need prior experience?<span class="icon">+</span></button>
                    <div class="faq-answer">No prior experience is required. Courses are for beginners and advanced learners.</div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Will I receive a certificate?<span class="icon">+</span></button>
                    <div class="faq-answer">Yes, you will get a digital certificate after completing a course.</div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">How can I join Afghan Ustad?<span class="icon">+</span></button>
                    <div class="faq-answer">Simply sign up on our website and start learning immediately.</div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
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
                    <h6 class="footer-title">Quick Links</h6>
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

    <!-- Scroll Toggle Button -->
    <button id="scrollToggleBtn" aria-label="صفحې پورته او ښکته کول">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FAQ JS -->
    <script>
        document.querySelectorAll(".faq-question").forEach(q => {
            q.onclick = () => q.parentElement.classList.toggle("active");
        });


        // Dark Mode Toggle  
        const modeBtn = document.getElementById('modeBtn');
        modeBtn.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');

            // تڼۍ icon بدلول  
            const icon = modeBtn.querySelector('i');
            if (document.body.classList.contains('dark-mode')) {
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