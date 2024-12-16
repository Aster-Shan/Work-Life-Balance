<?php 
session_start();
header('Cache-Control:no cache');
include('con.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header_top">
            <div class="Container">
              <div class="contact_nav">
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call : 09-234567877
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    Email : healthcare.@gmail.com
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                  Yangon
                  </span>
                </a>
              </div>
            </div>
          </div>

          <div class="header_bottom">
            <div class="container">
                <img src="./image/h.jpeg" alt="Logo" class="logo">
                <nav class="side-nav">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Log in</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    
    </header>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-box">
                        <img src="./image/work-life-balance.webp" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="heading-container">
                            <h2> "Work Life Balance"</h2>
                            <p>Welcome to the revamped website of the Health Promotion Board! Dedicated to promoting a healthy lifestyle and embracing the concept of "Work-Life Balance," our platform offers a wealth of health-related information, resources, and weekly events aimed at empowering individuals to lead healthier lives. Explore our site to learn more about various health matters, discover exciting activities, and enroll in health-related events to kickstart your journey towards improved well-being.</p>
                        </div>
                        <p>
                            
                        </p>
                        <a href="About.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="info-section">
        <div class="container">
            <div class="info-top">
                <div class="info-logo">
                    <a href="#">
                        <img src="./image/h.jpeg" alt="">
                    </a>
                </div>
                <div class="info-form">
                    <form action="#">
                        <input type="email" placeholder="Your email">
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="info-bottom">
                <div class="row info-main-row">
                    <div class="col-md-6 col-lg-3">
                        <h5>Address</h5>
                        <div class="info-contact">
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Yangon</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Call 09-87654345</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>healtcare@gmail.com</span>
                            </a>
                        </div>
                        <div class="social-box">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    

</body>
</html>
