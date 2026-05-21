<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Courses | AfghanUstad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <style>
        /* ================= GENERAL ================= */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        /* Navbar */

        .navbar-dark {
            background-color: #0B2CAD;

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
            color: #FF6201 !important;
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

        /* ================= ALL COURSES HEADER ================= */
        .courses-header {
            background: linear-gradient(135deg, #0029AD, #237EFA);
            padding: 120px 0 80px;
            color: #fff;
            text-align: center;
        }

        .courses-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .courses-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 35px;
        }

        /* Search Box */
        .course-search {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 50px;
            padding: 8px;
            display: flex;
            align-items: center;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .course-search input {
            border: none;
            outline: none;
            flex: 1;
            padding: 14px 20px;
            border-radius: 50px;
            font-size: 15px;
        }

        .course-search button {
            background: #FF6A00;
            border: none;
            color: #fff;
            padding: 12px 26px;
            border-radius: 50px;
            font-weight: 600;
            transition: .3s;
        }

        .course-search button:hover {
            background: #FF6A00;
        }


        .course-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.5s, box-shadow 0.3s;
            width: 100%;
            max-width: 300px;
            margin: auto;
        }

        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .course-card img.course-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .course-card .card-body {
            padding: 15px;
        }

        .course-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .stars i {
            color: #f7b500;
            margin-right: 2px;
        }

        .label {
            font-size: 12px;
            color: #555;
        }

        .instructor {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .instructor img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }



        /* ================= FOOTER ================= */
        .site-footer {
            background: #0B2CAD;
            color: #fff;
            padding: 50px 0 20px;
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
            background-color: #FF6201 !important;
            /* نارنجي */
            color: #ffffff !important;
            text-decoration: none;
        }

        .btn-outline-light {
            padding: 10px;
        }

        #download {
            border-radius: 50px;
        }

        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        /* Navbar */
        body.dark-mode .navbar-dark {
            background-color: #1f1f1f !important;
        }

        /* Header */
        body.dark-mode .courses-header {
            background: linear-gradient(135deg, #1a1a1a, #111);
            color: #e0e0e0;
        }

        body.dark-mode .course-search {
            background: #2a2a2a;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
        }

        body.dark-mode .video-section {
            background: #2a2a2a;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
        }

        body.dark-mode .course-search input {
            background: #1f1f1f;
            color: #e0e0e0;
        }

        body.dark-mode .course-search button {
            background: #FF6A00;
            color: #fff;
        }

        /* Course Cards */
        body.dark-mode .course-card {
            background: #1e1e1e;
            box-shadow: 0 6px 16px rgba(0, 0, 0, .5);
        }

        body.dark-mode .course-card .course-title,
        body.dark-mode .course-card .desc,
        body.dark-mode .course-card .meta,
        body.dark-mode .course-card .author span {
            color: #e0e0e0;
        }

        body.dark-mode .course-card .rating i {
            color: #f7b500;
        }

        body.dark-mode .course-card a.btn-primary {
            background-color: #FF6A00;
            color: #fff;
        }


        /* Footer */
        body.dark-mode .site-footer {
            background-color: #1f1f1f;
            color: #e0e0e0;
        }

        body.dark-mode .site-footer a,
        body.dark-mode .footer-info li {
            color: #e0e0e0;
        }

        body.dark-mode .footer-social a {
            background-color: #FF6A00;
            color: #fff;
        }

        /* Buttons */
        body.dark-mode .circle-btn {
            background-color: #2a2a2a;
            color: #e0e0e0;
        }

        body.dark-mode .btn-outline-light {
            color: #e0e0e0;
            border-color: #e0e0e0;
        }

        body.dark-mode .btn-outline-light:hover {
            background-color: #FF6A00;
            color: #fff;
        }


        .site-footer {
            border-radius: 25px;
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

            padding: 70px 0 30px;
            border-radius: 30px 30px 0 0;
            margin-top: 80px;
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
    </style>
</head>


<body>

    <!-- NAVBAR -->
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
                    <li class="nav-item"><a class="nav-link fw-bold" href="all-courses.php">All Courses</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="about-page.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="news-update-info.php">What's New</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="contact-us.php">Contact Us</a></li>
                </ul>
                <button id="modeBtn" class="btn btn-outline-light me-4 circle-btn">
                    <i class="fa-solid fa-moon"></i>
                </button>
                <a href="login.php" class="circle-btn">Login</a>
            </div>
        </div>
    </nav>



    <!-- ================= ALL COURSES HEADER ================= -->
    <section class="courses-header">
        <div class="container">
            <h1>All Courses</h1>
            <p>Discover high-quality courses to upgrade your skills and future</p>

            <form class="course-search" method="GET">
                <input type="text" name="search" placeholder="Search courses, skills, instructors...">
                <button type="submit">
                    <i class="fa fa-search me-1" style="background-color: #FF6A00;"></i> Search
                </button>
            </form>
        </div>
    </section>





    <div class="container py-5">
        <h1 class="text-center mb-4 fw-bold" style="color: #e45700;">Download Your Favorite Course</h1>

        <div class="row g-4 justify-content-center">

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Grade7.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> اووم ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 6 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=10">
                            <span>Aisha</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Grade8.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> اتم ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 8 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=22">
                            <span>Omar Jan</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Grade9.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> نهم ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=33">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>


            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Grade10.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> لسم ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 6 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=10">
                            <span>Aisha</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Grade11.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> یوولسم ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 8 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=22">
                            <span>Omar Jan</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Grade12.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> دولسم ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=33">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/1Kankoor.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> کانکور</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="images/2-English.jpg">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/School-Subjects-Thumbnail.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> د ښوونځي مضامین</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=33">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="images/Computer&English.jpg" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> کمپیوټر او انګلیسۍ</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=33">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card" dir="rtl">
                    <img src="images/Computer.jpg" class="course-img">

                    <div class="card-body">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> کمپیوټر</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=33">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card" dir="rtl">
                    <img src="images/Kankoor.jpg" class="course-img">

                    <div class="card-body">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> کانکور امادګي</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 7 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=33">
                            <span>Ali</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
                <div class="course-card">
                    <img src="https://picsum.photos/400/250?4" class="course-img">

                    <div class="card-body" dir="rtl">
                        <h5 class="course-title"><i class="fa-solid fa-book"></i> Biology</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="label"><i class="fa-regular fa-clock"></i> 5 Weeks</span>
                            <span class="label"><i class="fa-solid fa-user"></i> Instructor</span>
                        </div>

                        <div class="instructor">
                            <img src="https://i.pravatar.cc/100?img=44">
                            <span>Zahra</span>
                        </div>

                        <a href="#" class="btn btn-primary rounded-pill mt-4 w-100" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            <i class="fa-solid fa-download me-2"></i> Download Course
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26666.24833156246!2d69.91415953783908!3d33.33760680360733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d7bb0f9041ae9d%3A0xd06a11ea8c74b4bf!2sKhost%2C%20Afghanistan!5e0!3m2!1sen!2sbg!4v1766682529998!5m2!1sen!2sbg"
                        width="100%" height="200" style="border:0;border-radius:10px;" allowfullscreen=""
                        loading="lazy"></iframe>
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


    <!-- Dark Mode JS -->
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