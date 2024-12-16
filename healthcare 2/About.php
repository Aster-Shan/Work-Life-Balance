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
    <title>Home1</title>
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
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


    <section class="carousel-section">
        <div class="container">
            <div class="carousel">
                <h2>What We Are : </h2>
                <div class="carousel-container">
                    <div class="carousel-item">
                        <img src="./image/who.png" alt="Carousel Image 1" style="width: 100px; height: 100px;">
                        
                        <p>The Health Promotion Board (HPB) is committed to enhancing the health and well-being of the community by fostering a culture of healthy living and promoting a work-life balance.</p>
                    </div>
            
                </div>
            </div>
            <div class="carousel">
                <h2> Our Mission : </h2>
                <div class="carousel-container">
                    <div class="carousel-item">
                        <img src="./image/mission1.png" alt="Carousel Image 1" style="width: 100px; height: 100px;">
                        <p>Our mission is to provide accessible and reliable health-related information, and to organize engaging activities and events that promote a healthy lifestyle.</p>
                    </div>
                   
                </div>
            </div>
            <div class="carousel">
                <h2>What We Do:</h2>
                <div class="carousel-container">
                    <div class="carousel-item">
                        <img src="./image/what.png" alt="Carousel Image 1" style="width: 100px; height: 100px;"">
                        <p>Health Education: We offer comprehensive and up-to-date health-related information to empower individuals to make informed decisions about their health.<br><br>

                            Workshops & Events: We organize weekly events, workshops, and activities aimed at promoting a balanced and healthy lifestyle, focusing on the concept of “Work Life Balance”.<br><br>
                            
                            Enrollment & Participation: Our website serves as a platform for health enthusiasts to enroll in health-related activities and events, providing a seamless user experience.</p>
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
                            <a href="#" onclick="showLocation()">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Yangon</span>
                            </a>
                            <a href="tel:09-87654345">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Call 09-87654345</span>
                            </a>
                            <a href="mailto:healtcare@gmail.com">
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

    
    </script>

</body>
</html>