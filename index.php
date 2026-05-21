<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Afghan Ustad | Digital Learning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
    }

    /* Navbar */
    .navbar-expand-lg {
      background-color: #0029AD;
    }

    /* ================= HERO SECTION ================= */
    .hero-section {
      min-height: 100vh;
      background: linear-gradient(135deg, #0029AD, #237EFA);
      padding-top: 120px;
      padding-bottom: 80px;
      color: #fff;
      overflow: hidden;
    }

    /* h3 instead of badge */
    .hero-subtitle {
      color: #FF6A00;
      font-weight: 900;
      font-size: 36px;
      letter-spacing: 0.5px;
    }

    /* Title */
    .hero-title {
      font-size: clamp(2.2rem, 5vw, 3.5rem);
      font-weight: 800;
      line-height: 1.2;
    }

    /* Text */
    .hero-text {
      max-width: 520px;
      font-size: 16px;
      line-height: 1.7;
      color: rgba(255, 255, 255, 0.88);
    }

    /* Button – Orange Gradient */
    .hero-btn {
      display: inline-block;
      background: linear-gradient(135deg, #FF6A00, #FF9A00);
      color: #fff;
      padding: 14px 36px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .hero-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    }

    /* Image */
    .hero-img {
      max-width: 100%;
      height: auto;
      object-fit: contain;
    }

    /* RESPONSIVE */
    @media (max-width: 991px) {
      .hero-section {
        text-align: center;
        padding-top: 140px;
      }

      .hero-text {
        margin: auto;
      }
    }

    /* ================= MAIN SECTION ================= */
    .about {
      padding: 80px 0;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    /* ================= HEADER ================= */
    .about-header {
      text-align: center;
      margin-bottom: 60px;
    }

    .about-header h1 {
      color: #FF6A00;
      font-size: 36px;
      font-weight: bold;
    }

    .about-header p {
      max-width: 700px;
      margin: 15px auto;
      color: #555;
      line-height: 1.6;
    }

    /* ================= CONTENT ================= */
    .about-content {
      display: flex;
      gap: 60px;
      align-items: center;
    }

    /* ================= IMAGE ================= */
    .about-image {
      flex: 1;
      width: 100%;
      border-radius: 28px;
      /* desktop radius */
      overflow: hidden;
      /* ensures radius is applied */
      background: #f3f6ff;
      /* optional background */
    }

    .about-image img {
      width: 100%;
      height: auto;
      object-fit: contain;
      display: block;
      /* no border-radius here, parent handles it */
    }

    /* ================= FAQ ================= */
    .about-faq {
      flex: 1;
    }

    .faq-item {
      border-bottom: 1px solid #ddd;
      padding: 18px 0;
    }

    .faq-question {
      display: flex;
      justify-content: space-between;
      cursor: pointer;
      font-weight: 600;
      color: #333;
    }

    .faq-question span {
      color: #FF6A00;
      font-size: 22px;
      transition: transform 0.3s ease;
    }

    .faq-item.active .faq-question span {
      transform: rotate(180deg);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      opacity: 0;
      transition: max-height 0.4s ease, opacity 0.3s ease;
      padding-top: 0;
      color: #666;
      line-height: 1.6;
    }

    .faq-item.active .faq-answer {
      max-height: 200px;
      opacity: 1;
      padding-top: 10px;
    }

    /* ================= BUTTON ================= */
    .about-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-top: 40px;
      padding: 14px 30px;
      background: linear-gradient(90deg, #0029AD, #237EFA);
      color: #fff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .about-btn:hover {
      transform: translateY(-2px);
    }

    .about-btn .arrow {
      transition: transform 0.3s ease;
    }

    .about-btn:hover .arrow {
      transform: translateX(6px);
    }

    /* ================= MOBILE RESPONSIVE ================= */
    @media (max-width: 900px) {
      body {
        overflow-x: hidden;
        /* prevent horizontal scroll */
      }

      .container {
        width: 100%;
        padding-left: 0;
        padding-right: 0;
      }

      .about-content {
        flex-direction: column;

      }

      .about-image {
        width: 100%;
        border-radius: 18px;
        /* smaller radius on mobile */
      }

      .about-image img {
        width: 100%;
        max-width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
      }
    }



    /* COURSE CARD */
    .course-card {
      width: 280px;
      background: #0029AD;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
      transition: .3s;
    }

    .course-card:hover {
      transform: translateY(-8px);
    }

    .course-card img.course-img {
      width: 100%;
      height: 170px;
      object-fit: cover;
    }

    .course-card .card-body {
      padding: 16px;
    }

    .course-title {
      font-weight: 600;
      font-size: 1.1rem;
    }

    .stars i {
      color: goldenrod;
      font-size: 14px;
    }

    .label {
      font-size: .8rem;
      font-weight: 500;
    }

    .instructor {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 10px;
    }

    .instructor img {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* SWIPER ARROWS */
    .swiper-button-next,
    .swiper-button-prev {
      width: 48px;
      height: 48px;
      background: #FF6A00;
      border-radius: 50%;
      color: #fff;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 18px;
      font-weight: bold;
    }

    .label i {
      margin-right: 4px;
    }

    .fa-star {
      color: goldenrod;
    }

    .modern-btn {
      background: linear-gradient(135deg, #FF6A00, #FF9A00);
      color: black;
      width: 12rem;
      padding: 12px 0;
      text-align: center;
      font-weight: 600;
      font-size: 1rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
      display: inline-block;
      text-decoration: none;
    }

    .modern-btn:hover {
      background: linear-gradient(135deg, #FF6A00, #FF9A00);
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
      color: white;
    }

    /* ABOUT IMAGE GALLERY */
    .about-gallery {
      background: #fff;
      border-radius: 16px;
    }

    .about-main-img {
      height: 47rem;
      object-fit: cover;
      width: 100%;
      transition: 0.5s ease;
    }

    .about-thumbs img {
      width: 70px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
      cursor: pointer;
      opacity: 0.6;
      border: 2px solid transparent;
      transition: 0.5s;
    }

    .about-thumbs img:hover {
      opacity: 1;
    }

    .about-thumbs img.active {
      opacity: 1;
      border-color: #0d6efd;
    }

    .faq-item {
      border-bottom: 1px solid #eee;
    }

    .faq-question {
      width: 100%;
      background: none;
      border: none;
      padding: 16px 0;
      font-size: 16px;
      font-weight: 500;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.45s ease, opacity 0.3s ease;
      opacity: 0;
    }

    .faq-item.active .faq-answer {
      max-height: 200px;
      opacity: 1;
    }

    .icon {
      font-size: 22px;
      transition: transform 0.3s ease;
    }

    .faq-item.active .icon {
      transform: rotate(180deg);
    }

    /* ================= INSTRUCTORS ================= */
    .instructor-card {
      position: relative;
      border-radius: 18px;
      overflow: hidden;
      height: 360px;
      background: #000;
    }

    .instructor-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .instructor-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, .85), rgba(0, 0, 0, .3));
    }

    .instructor-content {
      position: absolute;
      bottom: 20px;
      left: 20px;
      right: 20px;
      color: #fff;
    }

    .instructor-content h6 {
      font-weight: 600;
      margin-bottom: 4px;
    }

    .instructor-content p {
      font-size: 13px;
      opacity: 0.85;
    }

    .instructor-link {
      position: absolute;
      bottom: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
      background: #0d6efd;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    /* ================= TESTIMONIALS ================= */
    .testimonial-card {
      background: var(--card);
      border-radius: 18px;
      overflow: hidden;
      display: flex;
      height: 320px;
      box-shadow: 22px 124px 8px black;
    }

    .testimonial-content {
      padding: 35px;
      flex: 1;
      box-shadow: 2px 4px 8px black;
    }

    .testimonial-stars {
      color: #ffc400ff;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .testimonial-content p {
      font-size: 14px;
      line-height: 1.6;
    }

    .testimonial-user h6 {
      margin-bottom: 0;
      font-weight: 600;
    }

    .testimonial-user span {
      font-size: 13px;
      opacity: 0.7;
    }

    .testimonial-img {
      width: 50%;
    }

    .testimonial-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* ================= COMMUNITY ================= */

    .community-section {
      padding: 120px 0;
      background: radial-gradient(circle at top, #f5f9ff, #ffffff);
      position: relative;
      overflow: hidden;
    }

    .community-number {
      font-size: 72px;
      font-weight: 800;
      background: linear-gradient(90deg, #FF6A00, #FF9A00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Floating images (base) */
    .float-img {
      position: absolute;
      width: 100px;
      height: 100px;
      border-radius: 16px;
      object-fit: cover;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      animation: floatY 6s ease-in-out infinite;
      z-index: 1;
    }

    /* ✅ INDIVIDUAL POSITIONS */
    .img-1 {
      top: 20%;
      left: 5%;
      height: 9rem;
      width: 9rem;
    }

    .img-2 {
      top: 30%;
      right: 8%;
      animation-delay: 1s;
      height: 9rem;
      width: 9rem;
    }

    .img-3 {
      bottom: 25%;
      left: 7%;
      animation-delay: 2s;
      height: 9rem;
      width: 9rem;
    }

    .img-4 {
      bottom: 15%;
      right: 5%;
      animation-delay: 3s;
      height: 9rem;
      width: 9rem;
    }



    /* Floating animation */
    @keyframes floatY {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-12px);
      }

      100% {
        transform: translateY(0);
      }
    }


    /* CTA BOX – FIXED POSITIONING */
    .community-cta {
      position: relative;
      /* stays in normal flow */
      margin: 80px auto 0;
      /* space from content */
      max-width: 600px;
      padding: 45px 40px;
      text-align: center;

      background: linear-gradient(90deg, #0029AD, #237EFA);
      border-radius: 22px;
      box-shadow: 0 30px 80px rgba(13, 110, 253, 0.35);

      z-index: 3;
      /* above floating images */
    }

    /* OPTIONAL: CTA button hover polish */
    .community-cta .btn {
      font-weight: 600;
      border-radius: 30px;
      padding: 12px 28px;
    }

    /* MOBILE OPTIMIZATION */
    @media (max-width: 768px) {
      .community-cta {
        margin-top: 60px;
        padding: 35px 25px;
      }
    }

    /* ================= FOOTER ================= */
    .site-footer {
      background: #0029AD;
      padding: 70px 0 30px;
      border-radius: 30px 30px 0 0;
      margin-top: 80px;
    }

    .footer-title {
      font-weight: 700;
      margin-bottom: 15px;
    }

    .footer-text {
      color: #6b7280;
      font-size: 14px;
      max-width: 320px;
    }

    .footer-links,
    .footer-info {
      list-style: none;
      padding: 0;
    }

    .footer-links a {
      color: #374151;
      font-size: 14px;
      text-decoration: none;
    }

    /* 
    .footer-links a:hover {
      color: #0d6efd;
    } */



    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {

      .hero,
      .hero .carousel,
      .hero .carousel-inner,
      .hero .carousel-item {
        height: 30rem;
      }

      .testimonial-card {
        flex-direction: column;
        height: auto;
      }

      .testimonial-img {
        width: 100%;
        height: 220px;
      }

      .float-img {
        display: none;
      }
    }

    /* ================= SWIPER BUTTONS ================= */
    .swiper-button-next,
    .swiper-button-prev {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #0B2CAD;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
      background-color: #0029AD;
      transform: scale(1.1);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
      font-size: 20px;
      font-weight: bold;
    }

    .swiper-button-next {
      right: 10px;
    }

    .swiper-button-prev {
      left: 10px;
    }

    .swiper-slide .course-card,
    .swiper-slide .instructor-card {
      width: 100%;
      max-width: 280px;
      margin: auto;
    }

    #more-courses {
      border-radius: 50px;
      padding: 12px 15px;

    }

    #more-about-us {
      border-radius: 50px;
      padding: 15px;

    }


    #download {
      border-radius: 50px;

    }





    .testimonials {
      padding: 80px 0;
    }

    .container {
      max-width: 1100px;
      margin: auto;
    }

    .section-title {
      margin-bottom: 40px;
      font-size: 26px;
      position: relative;
    }

    .section-title::before {
      content: "";
      width: 40px;
      height: 3px;
      background: green;
      position: absolute;
      top: -10px;
      left: 0;
    }

    .testimonial-box {
      background: #fff;
      display: flex;
      padding: 50px;
      border-radius: 10px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }

    .avatars {
      width: 35%;
      position: relative;
    }

    .avatar {
      display: flex;
      align-items: center;
      gap: 15px;
      opacity: 0.3;
      margin-bottom: 30px;
      transition: 0.4s;
    }

    .avatar.active {
      opacity: 1;
      transform: translateX(10px);
    }

    .avatar img {
      width: 55px;
      height: 55px;
      border-radius: 50%;
    }

    .avatar h4 {
      margin: 0;
      font-size: 16px;
    }

    .avatar span {
      font-size: 13px;
      color: green;
    }

    .content {
      width: 65%;
      padding-left: 40px;
      display: flex;
      align-items: center;
    }

    .quote {
      display: none;
      font-size: 20px;
      font-style: italic;
      color: #333;
      line-height: 1.6;
    }

    .quote.active {
      display: block;
    }


    /* ================= FOOTER ================= */
    .site-footer {
      background: #0029AD;
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



    /* Light/Dark mode variables */
    body.light-mode {
      --bg-color: #ffffff;
      --text-color: #111;
      --secondary-bg: #f5f8ff;
      --card-bg: #fff;
      --navbar-bg: #0B2CAD;
      --btn-primary-bg: #0d6efd;
      --btn-primary-hover: #0b5ed7;
      --footer-bg: #0B2CAD;
      --footer-text: #fff;
      --faq-border: #eee;
      --hero-caption-color: #fff;
      --label-color: #000;
      --desc-color: #555;
      --download-btn-bg: #1f1a14ff;
      /* نارنجي */
      --download-btn-hover: #FF6A00;
    }

    body.dark-mode {
      --bg-color: #121212;
      --text-color: #e0e0e0;
      --secondary-bg: #1e1e1e;
      --card-bg: #1f1f1f;
      --navbar-bg: #121212;
      --btn-primary-bg: #5a95ff;
      --btn-primary-hover: #3f7ae0;
      --footer-bg: #121212;
      --footer-text: #fff;
      --faq-border: #333;
      --hero-caption-color: #fff;
      --label-color: #fff;
      --desc-color: #ccc;
      --download-btn-bg: #0c0b0aff;
      --download-btn-hover: #FF9A00;
    }

    /* Apply variables */
    body {
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    .navbar {
      background-color: #0029AD;
    }

    .navbar a,
    .navbar .nav-link {
      color: #fff;
    }

    .navbar a:hover,
    .navbar .nav-link:hover {
      color: #ddd;
    }

    .hero-caption h1,
    .hero-caption p {
      color: var(--hero-caption-color);
    }

    .about-section {
      background-color: var(--secondary-bg) !important;
      color: var(--text-color);
    }

    .course-card {
      background-color: var(--card-bg) !important;
      color: var(--text-color);
    }

    .course-card .desc {
      color: var(--desc-color);
    }

    .course-card .label {
      color: var(--label-color);
    }

    .testimonial-card {
      background-color: var(--card-bg);
      color: var(--text-color);
    }

    .faq-item {
      border-bottom: 1px solid var(--faq-border);
    }

    .faq-question {
      color: var(--text-color);
    }

    .faq-answer p {
      color: var(--text-color);
    }

    .instructor-card {
      background-color: var(--card-bg);
      color: var(--text-color);
    }

    .community-section {
      background: var(--secondary-bg);
      color: var(--text-color);
    }

    .community-cta {
      background: linear-gradient(90deg, #0029AD, #237EFA);
      color: #fff;
    }

    .btn-primary {
      background-color: #0029AD;
      border-color: var(--btn-primary-bg);
    }

    .btn-primary:hover {
      background-color: var(--btn-primary-hover);
    }

    /* Download button */
    .btn-download {
      background-color: #0029AD;
      color: #fff;
      border: none;
    }

    .btn-download:hover {
      background-color: var(--download-btn-hover);
      color: #fff;
    }

    /* Footer */
    .site-footer {
      background-color: var(--footer-bg);
      color: var(--footer-text);
    }

    .site-footer a {
      color: var(--footer-text);
    }

    .site-footer a:hover {
      text-decoration: underline;
    }

    /* Swiper arrows */
    .swiper-button-next,
    .swiper-button-prev {
      background-color: var(--btn-primary-bg);
    }

    /* Optional: floating images slight opacity in dark mode */
    body.dark-mode .float-img {
      filter: brightness(0.85);
    }

    body.dark-mode .course-card a.btn-primary {
      background-color: #FF6A00;
      color: #fff;
    }

    body.dark-mode .text-center a.btn-primary {
      background-color: #FF6A00;
      color: #fff;
    }

    body.dark-mode .swiper-button-next {
      background-color: #FF6A00;
      color: #fff;
    }

    body.dark-mode .swiper-button-prev {
      background-color: #FF6A00;
      color: #fff;
    }

    .icon {
      color: #FF6A00;
    }

    body.dark-mode .students-review-section {
      background-color: var(--bg-color);
      color: #fff;
    }

    body.dark-mode .navbar-expand-lg {
      background-color: var(--bg-color);
    }

    body.dark-mode .hero-section {
      background-color: var(--bg-color);
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

    #more-courses {
      min-width: 260px;
      /* بټن پراخ شو */
      padding: 8px 32px;
      border-radius: 50px;
      /* modern look */
      font-weight: 600;
      transition: all 0.3s ease;
    }

    #more-courses i {
      transition: transform 0.3s ease;
    }

    #more-courses:hover {
      background-color: #FF6A00;
      /* نارنجي hover */
      border-color: #FF6A00;
    }

    #more-courses:hover i {
      transform: translateX(6px);
      /* arrow حرکت */
    }


    /* === DOWNLOAD SECTION SHARED CARD STYLE === */

    .download-card {
      height: 100%;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .download-card .card-body {
      padding: 24px;
    }

    .download-video video {
      border-radius: 12px;
    }

    .download-video {
      height: 500px;
      /* دلته height زیات کړئ */
    }

    .download-video video {
      height: 100%;
      width: 100%;
      object-fit: cover;
      /* ویدیو به container ډک کړي */
      border-radius: 12px;
    }


    /* ================= TESTIMONIALS MOBILE FIX ================= */
    @media (max-width: 768px) {

      .testimonial-box {
        flex-direction: column;
        padding: 25px;
      }

      .avatars {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }

      .avatar {
        flex-direction: column;
        align-items: center;
        gap: 6px;
        margin-bottom: 0;
        opacity: 0.4;
        text-align: center;
      }

      .avatar.active {
        opacity: 1;
        transform: none;
      }

      .avatar img {
        width: 50px;
        height: 50px;
      }

      .avatar h4 {
        font-size: 14px;
        margin: 0;
      }

      .avatar span {
        font-size: 12px;
        color: #FF6A00;
        /* stars color */
      }

      .content {
        width: 100%;
        padding-left: 0;
        text-align: center;
      }

      .quote {
        font-size: 16px;
        line-height: 1.6;
      }
    }



    /* TEAM CARD */
    .team-card {
      background: linear-gradient(135deg, #0029AD, #237EFA);
      border-radius: 24px;
      padding: 18px;
      height: 490px;
      /* height کم شو */
      transition: all 0.4s ease;
    }

    /* Image wrapper */
    .team-img-wrap {
      position: relative;
      height: 100%;
      border-radius: 18px;
      overflow: hidden;
      padding-top: 10px;
    }

    /* Image */
    .team-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* INFO OVER IMAGE */
    .team-info {
      position: absolute;
      bottom: 15px;
      left: 15px;
      right: 15px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 16px;
      padding: 12px;
      text-align: left;
    }

    .team-info h5 {
      font-weight: 700;
      margin-bottom: 2px;
    }

    .team-info span {
      font-size: 13px;
      color: #FF6A00;
    }

    .section-title1 {

      color: #FF6A00;
    }

    .section-desc {
      max-width: 650px;
      margin: 10px auto 0;
      color: #555;
      line-height: 1.7;
    }

    /* ===== SLIDER EFFECT ===== */
    .teamSwiper .swiper-slide {
      transform: scale(0.9);
      opacity: 0.8;
      transition: all 0.4s ease;
    }

    .teamSwiper .swiper-slide-active {
      transform: scale(1);
      opacity: 1;
      z-index: 7;
    }

    /* ARROWS CENTER */
    .team-arrows {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 30px;
    }

    .team-nav {
      position: static;
      width: 44px;
      height: 44px;
      background: linear-gradient(135deg, #FF6A00, #FF9A00);
      border-radius: 50%;
    }

    .team-nav::after {
      font-size: 16px;
      color: #fff;
    }


    /* Students Reviews */
    /* Section */
    .students-review-section {
      background: #f7f9fc;
    }

    /* Title */
    .students-review-title {
      color: #FF6A00;
      font-weight: 700;
    }

    /* Review Card */
    .review-card {
      background: #ffffff;
      padding: 30px;
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.6s ease;
    }

    .review-avatar {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .review-stars {
      color: #FF6A00;
      margin-bottom: 10px;
    }

    /* Swiper behavior */
    .studentsReviewSwiper .swiper-slide {
      opacity: 0.3;
      transition: transform 0.6s ease, opacity 0.6s ease;
    }

    .studentsReviewSwiper .swiper-slide-active {
      opacity: 1;
    }

    /* Active center card */
    .studentsReviewSwiper .swiper-slide-active .review-card {
      background: #0029AD;
      color: #ffffff;
      transform: scale(1);
    }

    .studentsReviewSwiper .swiper-slide-active .review-stars {
      color: #FFD700;
    }

    /* Arrows */
    .students-review-arrows {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .students-review-arrows button {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      border: none;
      background: linear-gradient(135deg, #FF6A00, #FF9A00);
      color: #fff;
      font-size: 22px;
      cursor: pointer;
      transition: 0.3s;
    }

    .students-review-arrows button:hover {
      background: #e85c00;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .studentsReviewSwiper .swiper-slide-active .review-card {
        transform: scale(1);
      }
    }

    /* ===== GLOBAL SAFETY FIX ===== */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html,
    body {
      width: 100%;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
    }

    /* ===== CONTAINER FIX (single source) ===== */
    .container {
      width: 100%;
      max-width: 1200px;
      margin-inline: auto;
      padding-inline: 16px;
    }

    /* ===== MOBILE FIX ===== */
    @media (max-width: 768px) {

      section {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }

      .container {
        padding-left: 16px;
        padding-right: 16px;
      }

      img {
        max-width: 100%;
        height: auto;
        display: block;
      }

      /* About image */
      .about-image,
      .about-image img {
        width: 100%;
        max-width: 100%;
        margin: 0;
        border-radius: 0;
      }

      /* Remove fixed heights */
      [style*="height"],
      .about-main-img,
      .team-card,
      .download-video {
        height: auto !important;
      }

      /* Disable floating absolute elements */
      .float-img {
        display: none !important;
      }
    }

    /* LOGO DEFAULT */
    .nav-logo {
      height: 38px;
      width: auto;
    }

    /* MOBILE FIX */
    @media (max-width: 991px) {
      .navbar-brand {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
      }

      .nav-logo {
        height: 35px;
      }
    }

    /* ===== Swiper Arrows Position Fix ===== */
    .coursesSwiper {
      position: relative;
    }

    /* Desktop */
    .coursesSwiper .swiper-button-next,
    .coursesSwiper .swiper-button-prev {
      top: 42%;
      /* default 50% وي، دا لږ پاس راولي */
      transform: translateY(-50%);
      width: 45px;
      height: 45px;
      border-radius: 50%;
    }

    /* Icon color */
    .coursesSwiper .swiper-button-next::after,
    .coursesSwiper .swiper-button-prev::after {
      font-size: 18px;
      color: #fff;
    }

    @media (max-width: 768px) {

      .coursesSwiper .swiper-button-next,
      .coursesSwiper .swiper-button-prev {
        top: 35%;
        /* موبایل کې ډېر پاس */
        width: 40px;
        height: 40px;
      }

      .coursesSwiper .swiper-button-next::after,
      .coursesSwiper .swiper-button-prev::after {
        font-size: 18px;
      }
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

<body class="dark-mode">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <!-- LOGO -->
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="images/logo.svg" alt="Afghan Ustad" class="nav-logo">
      </a>
      <button class="navbar-toggler text-white" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mx-auto gap-4">

          <li class="nav-item">
            <a class="nav-link active ml-5 fw-bold" href="index.php">Home</a>
          </li>

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
          <li class="nav-item">
            <a class="nav-link fw-bold" href="news-update-info.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="about-page.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-bold" href="contact-us.php">Contact Us</a>
          </li>

        </ul>

        <button id="modeBtn" class="btn btn-outline-light me-4 circle-btn">
          <i class="fa-solid fa-moon"></i>
        </button>

        <a href="login.php" class="circle-btn">Login</a>
      </div>
    </div>
  </nav>

  <!-- ================= HERO SECTION ================= -->
  <section class="hero-section d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center gy-5">

        <!-- LEFT CONTENT -->
        <div class="col-lg-6 text-center text-lg-start">

          <h3 class="hero-subtitle">
            AfghanUstad
          </h3>

          <h1 class="hero-title mt-3">
            Digital Learning <br>
            Platform
          </h1>

          <p class="hero-text mt-3">
            Empowering learners with engaging courses,
            modern tools, and interactive experiences.
            Gain new skills anytime, anywhere.
          </p>

          <a href="all-courses.php" target="_blank" class="hero-btn mt-4">
            Start Learning Now
          </a>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-lg-6 text-center">
          <img src="images/main-hero.png" class="hero-img" alt="Hero Image">
        </div>

      </div>
    </div>
  </section>


  <!-- ===== Courses Section ===== -->
  <section id="courses" class="py-5">
    <div class="container">

      <!-- Section Title -->
      <div class="text-center mb-5">
        <h1 class="fw-bold" style="color:#FF6A00;">Our Courses</h1>
        <p class="section-desc">Explore a wide range of expertly designed courses,
          tailored to enhance your knowledge and skills.
          Learn at your own pace, anytime, anywhere.</p>
      </div>

      <!-- SWIPER -->
      <div class="swiper coursesSwiper p-4">
        <div class="swiper-wrapper">

          <!-- CARD 1 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card">
              <img src="images/Kankoor.jpg" class="course-img">
               <div class="card-body text-center" dir="rtl">
                        <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> کانکور ټولګی</h5>

                        <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>ghjklddfghjkl;chvhjkl</p>
                        <a href="7thclass.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                            اووم ټولګي ټول درسونه
                            <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>



                    </div>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card">
              <img src="images/Grade7.jpg" class="course-img">
              <div class="card-body text-center" dir="rtl">
                <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> اووم ټولګی</h5>

                <div class="stars mb-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>ghjklddfghjkl;chvhjkl</p>
                <a href="7thclass.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                  اووم ټولګي ټول درسونه
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </a>


              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card" lang="rtl">
              <img src="images/Grade8.jpg" class="course-img">
              <div class="card-body text-center" dir="rtl">
                <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> اتم ټولګی</h5>

                <div class="stars mb-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>ghjklddfghjkl;chvhjkl</p>
                <a href="8thclass.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                  اتم ټولګي ټول درسونه
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </a>



              </div>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card">
              <img src="images/Grade9.jpg" class="course-img">
              <div class="card-body text-center" dir="rtl">
                <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> نهم ټولګی</h5>

                <div class="stars mb-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>ghjklddfghjkl;chvhjkl</p>
                <a href="9thclass.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                  نهم ټولګي ټول درسونه
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </a>



              </div>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card" dir="rtl">
              <img src="images/Grade10.jpg" class="course-img">

              <div class="card-body text-center" dir="rtl">
                <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> لسم ټولګی</h5>

                <div class="stars mb-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>ghjklddfghjkl;chvhjkl</p>
                <a href="10thclass.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                  لسم ټولګي ټول درسونه
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </a>



              </div>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card" lang="rtl">
              <img src="images/Grade11.jpg" class="course-img">
              <div class="card-body text-center" dir="rtl">
                <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> یوولسم ټولګی</h5>

                <div class="stars mb-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>ghjklddfghjkl;chvhjkl</p>
                <a href="11thclass.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                  یوولسم ټولګي ټول درسونه
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </a>



              </div>
            </div>
          </div>



          <!-- CARD 4 -->
          <div class="swiper-slide d-flex justify-content-center">
            <div class="course-card">
              <img src="images/Grade12.jpg" class="course-img">
              <div class="card-body text-center" dir="rtl">
                <h5 class="course-title fw-bold"><i class="fa-solid fa-book"></i> دولسم ټولګی</h5>

                <div class="stars mb-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>ghjklddfghjkl;chvhjkl</p>
                <a href="12class.php" class="btn btn-primary rounded-pill mt-4 w-100 course-btn" style=" background: linear-gradient(90deg, #0029AD, #237EFA);">
                  دولسم ټولګي ټول درسونه
                  <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                </a>



              </div>
            </div>
          </div>

        </div>

        <!-- Navigation -->
        <div class="swiper-button-next" style=" background: linear-gradient(90deg, #0029AD, #237EFA);"></div>
        <div class="swiper-button-prev" style=" background: linear-gradient(90deg, #0029AD, #237EFA);"></div>
      </div>

    </div>

    <!-- More Courses Button -->
    <div class="text-center">
      <a href="all-courses.php" class="about-btn">
        View All Courses<span class="arrow"><i class="fa-solid fa-arrow-right ms-2"></i></span>
      </a>
    </div>



  </section>



  <section class="about">
    <div class="container">

      <div class="about-header">
        <h1 class="fw-bold">About AfghanUstad</h1>
        <p>
          AfghanUstad brings accessible and modern learning
          to students across Afghanistan and beyond.
          We focus on skill-building, practical knowledge, and growth for every learner.
        </p>
      </div>

      <div class="about-content">

        <!-- IMAGE -->
        <div class="about-image" style="border-radius: 20px;">
          <img src="images/About Us Image.jpg" alt="About AfghanUstad">
        </div>

        <!-- FAQ -->
        <div class="about-faq">

          <div class="faq-item active">
            <div class="faq-question">
              What Services do You Provide?
              <span>−</span>
            </div>
            <div class="faq-answer">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              Lorem ipsum dolor sit amet?
              <span>+</span>
            </div>
            <div class="faq-answer">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              lorem10
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              Lorem ipsum dolor sit amet?
              <span>+</span>
            </div>
            <div class="faq-answer">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              Lorem ipsum dolor sit amet?
              <span>+</span>
            </div>
            <div class="faq-answer">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
          </div>
          <div class="text-center">
            <a href="about-page.php" class="about-btn">
              More About Us <span class="arrow"><i class="fa-solid fa-arrow-right ms-2"></i></span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>



  <!-- ===== Instructors ===== -->
  <section class="team-section py-5">
    <div class="container">

      <!-- ===== SECTION HEADING ===== -->
      <div class="text-center mb-5">
        <h1 class="section-title1 fw-bold">Our Team</h1>
        <p class="section-desc">
          Our team consists of passionate educators and dedicated professionals working together to deliver a reliable
          and user-friendly digital learning platform that empowers learners with quality education and practical
          skills.
        </p>
      </div>



      <div class="swiper teamSwiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Obaid-Afghan.jpg" class="team-img">

                <div class="team-info">
                  <h5>Obaid Afghan</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Abdulhaq-Ghafoor-Zoi.jpg" class="team-img">

                <div class="team-info">
                  <h5>Abdulhaq GhafoorZoi</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, iure.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Anwar-Darman.jpg" class="team-img">

                <div class="team-info">
                  <h5>Anwar Darman</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Dawood-Khan.jpg" class="team-img">

                <div class="team-info">
                  <h5>Dawood Khan</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Fahimullah-Dilfoori.jpg" class="team-img">

                <div class="team-info">
                  <h5>Fahimullah Dilfoori</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Mohmmad-Qayum-Shah.jpg" class="team-img">

                <div class="team-info">
                  <h5>Mohmmad Qayum Shah</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Safiullah-Hamdard.jpg" class="team-img">

                <div class="team-info">
                  <h5>Safiullah Hamdard</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>



          <div class="swiper-slide">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="images/Shams.jpg" class="team-img">

                <div class="team-info">
                  <h5>Shams</h5>
                  <span>Job Name Here</span>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- همدا structure په ټولو slides کې تکرار کړه -->
        </div>
      </div>

      <!-- Arrows CENTER BOTTOM -->
      <div class="team-arrows">
        <div class="swiper-button-prev team-nav"></div>
        <div class="swiper-button-next team-nav"></div>
      </div>

      <div class="text-center">
        <a href="about-page.php" class="about-btn">
          See Full Team <span class="arrow"><i class="fa-solid fa-arrow-right ms-2"></i></span>
        </a>
      </div>

    </div>
  </section>

  <!-- ================= Students Review Section ================= -->
  <section class="students-review-section py-5">
    <div class="container">

      <div class="text-center mb-5">
        <h2 class="students-review-title">Students Review</h2>
      </div>

      <div class="swiper studentsReviewSwiper">
        <div class="swiper-wrapper">

          <!-- Review Card 1 -->
          <div class="swiper-slide">
            <div class="review-card">
              <img src="images/Review-Image-1.jpg" class="review-avatar">
              <h5>Amir khan</h5>
              <div class="review-stars">★★★★★</div>
              <p>AfghanUstad helped me learn new skills in a simple and clear way. The lessons are easy to understand
                and very useful.</p>
            </div>
          </div>

          <!-- Review Card 2 -->
          <div class="swiper-slide">
            <div class="review-card">
              <img src="images/Review-Image-2.jpg" class="review-avatar">
              <h5>Fatima</h5>
              <div class="review-stars">★★★★★</div>
              <p>This platform made online learning possible for me. I can study anytime and improve my knowledge step
                by step.</p>
            </div>
          </div>

          <!-- Review Card 3 -->
          <div class="swiper-slide">
            <div class="review-card">
              <img src="images/reviw-Image-3.jpg " class="review-avatar">
              <h5>Said Mohammad</h5>
              <div class="review-stars">★★★★★</div>
              <p>AfghanUstad provides quality education with practical content. It really helped me grow academically.
              </p>
            </div>
          </div>

          <!-- Review Card 4 -->
          <div class="swiper-slide">
            <div class="review-card">
              <img src="images/About-Us-hero-Image-1.jpg" class="review-avatar">
              <h5>Ezatullah</h5>
              <div class="review-stars">★★★★★</div>
              <p>I like how organized and user-friendly AfghanUstad is. Learning feels smooth and motivating.</p>
            </div>
          </div>

          <!-- Review Card 5 -->
          <div class="swiper-slide">
            <div class="review-card">
              <img src="images/Community-Image-4.jpg" class="review-avatar">
              <h5>Maryam</h5>
              <div class="review-stars">★★★★★</div>
              <p>Thanks to AfghanUstad, I gained confidence in my studies and learned skills that are useful for my
                future.p>
            </div>
          </div>

        </div>

        <!-- Custom Arrows (center card لاندې) -->
        <div class="students-review-arrows mt-4">
          <button class="students-review-prev">‹</button>
          <button class="students-review-next">›</button>
        </div>
      </div>

    </div>
  </section>


  <!-- ===== COMMUNITY SECTION ===== -->
  <section class="community-section">
    <div class="container text-center position-relative">

      <!-- Floating Images -->

      <img src="images/Community-Image-4.jpg" class="float-img img-1">
      <img src="images/Community-Image-1.jpg" class="float-img img-4">
      <img src="images/3-Community-Image-3.jpg" class="float-img img-3">
      <img src="images/Commuinty-Image-2.jpg" class="float-img img-2">



      <!-- Content -->
      <h6 class="section-desc mb-2">Join Afghanistan’s leading global digital learning platform</h6>
      <h4 class="fw-bold">learning community</h4>

      <h1 class="community-number">217,924+</h1>

      <p class="section-desc">
        Inspiring learners to achieve their goals with confidence
      </p>
      <a href="https://wa.me/1234567890" target="_blank"
        class="btn px-4 mt-2 d-inline-flex shadow-lg align-items-center gap-2" style="background-color: #0029AD; color:#fff;">
        <i class="fa-brands fa-whatsapp" style="color:#25D366; font-size:30px;"></i>
        Join Our Community
      </a>

      <!-- CTA Box -->
      <div class="community-cta mt-5">
        <h5 class="fw-bold text-white">
          Don't wait — Move forward toward a successful future with confidence
        </h5>
        <p class=" mb-3" style="color: #FF6A00;">
          Your journey starts with one simple step today
        </p>
        <a href="all-courses.php" class="btn btn-light px-4">
          Start Learning
        </a>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer" style="background-color: #0029AD; color:#fff; ">
    <div class="container">
      <div class="row g-4">

        <div class="col-lg-4 col-md-6">
          <h6 class="footer-title">AfghanUstad</h6>
          <p>Preparing Afghan youth for success in a digital future</p>
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
            width="100%" height="200" style="border:0;border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
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
  <a href="https://wa.me/93787485538?text=سلام%20Afghan%20Ustad!%20زه%20ستاسو%20ویب%20سایټ%20نه%20پیغام%20لیږم"
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

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {
      item.querySelector(".faq-question").addEventListener("click", () => {

        faqItems.forEach(i => {
          if (i !== item) {
            i.classList.remove("active");
            i.querySelector("span").innerText = "+";
          }
        });

        item.classList.toggle("active");
        const icon = item.querySelector("span");
        icon.innerText = item.classList.contains("active") ? "−" : "+";
      });
    });

    const courseSwiper = new Swiper('.coursesSwiper', {
      loop: true,
      speed: 700, // slides ژر حرکت وکړي
      spaceBetween: 20,
      slidesPerView: 3,
      slidesPerGroup: 3,
      grabCursor: true,
      watchOverflow: true,

      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },

      navigation: {
        nextEl: '.coursesSwiper .swiper-button-next',
        prevEl: '.coursesSwiper .swiper-button-prev',
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
          slidesPerGroup: 1,
        },
        576: {
          slidesPerView: 2,
          slidesPerGroup: 2,
        },
        768: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
        992: {
          slidesPerView: 4,
          slidesPerGroup: 4,
        },
      },

      loopedSlides: 6, // loop freeze fix
      preventClicks: false,
      preventClicksPropagation: false,
      touchReleaseOnEdges: true,
    });




    const testimonialSwiper = new Swiper(".testimonialSwiper", {
      loop: true,
      spaceBetween: 24,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".testimonialSwiper .swiper-button-next",
        prevEl: ".testimonialSwiper .swiper-button-prev",
      },
      watchOverflow: true,

      breakpoints: {
        0: {
          slidesPerView: 1
        }, // 📱 Mobile
        768: {
          slidesPerView: 2
        }, // Tablet
        1200: {
          slidesPerView: 2
        }, // Desktop
      },
    });


    const instructorSwiper = new Swiper(".instructorSwiper", {
      loop: true,
      spaceBetween: 30,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".instructorSwiper .swiper-button-next",
        prevEl: ".instructorSwiper .swiper-button-prev",
      },
      watchOverflow: true,

      breakpoints: {
        0: {
          slidesPerView: 1
        },
        576: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 3
        },
        992: {
          slidesPerView: 4
        },
      },
    });





    let index = 0;
    const avatars = document.querySelectorAll(".avatar");
    const quotes = document.querySelectorAll(".quote");

    function showTestimonial(i) {
      avatars.forEach(a => a.classList.remove("active"));
      quotes.forEach(q => q.classList.remove("active"));

      avatars[i].classList.add("active");
      quotes[i].classList.add("active");
    }

    setInterval(() => {
      index++;
      if (index >= avatars.length) index = 0;
      showTestimonial(index);
    }, 4000);



    document.querySelectorAll(".faq-question").forEach(btn => {
      btn.addEventListener("click", () => {
        const item = btn.parentElement;

        document.querySelectorAll(".faq-item").forEach(faq => {
          faq.classList.remove("active");
          faq.querySelector(".icon").textContent = "+";
        });

        if (!item.classList.contains("active")) {
          item.classList.add("active");
          item.querySelector(".icon").textContent = "−";
        }
      });
    });

    // dark mode
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


    new Swiper(".teamSwiper", {
      slidesPerView: 3,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3000
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 3
        }
      }
    });

    new Swiper(".reviewSwiper", {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 3500
      }
    });

    // Students Reviews
    var studentsReviewSwiper = new Swiper(".studentsReviewSwiper", {
      slidesPerView: 3,
      spaceBetween: 25,
      centeredSlides: true,
      loop: true,
      speed: 600, // smooth (زیات تېز نه)
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".students-review-next",
        prevEl: ".students-review-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        }
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