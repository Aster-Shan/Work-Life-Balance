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

    <link rel="stylesheet" href="event.css">
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


    <div class ="DiV">
     
            <div class ="div1">
            <h1>Event-1</h1> 
            <h3>Event Code -1</h3>
            <p>Maintaining mental health: Juggling work and personal life can be a high-wire act. When the balance tips too far towards work, it can take a toll on your mental health. Stress, anxiety, and burnout become looming threats. Achieving proper work-life balance ensures you have time to recharge and take care of your mental well-being.</p>
            <p>Date     - 10.4.2024</p>
            <p>Time     - 10 AM</p>
            <p>Location - Yangon</p>
            <a href="register.php"><button>Register</button></a> 
            </div>

            <div class ="div2">
                <h1>Event-2</h1>
                <h3>Event Code -2</h3>
                <p>Enhanced productivity: Counterintuitive as it may seem, striking a balance between work and life actually boosts productivity. When you're well-rested and content in your personal life, you bring more focus and energy to your work. It's a win-win for you and your employer.</p>
                <p>Date     - 15.4.2024</p>
                <p>Time     - 10 AM</p>
                <p>Location - Yangon</p>
                <a href="register.php"><button>Register</button></a>
            </div>

            <div class ="div3">
                <h1>Event-3</h1>
                <h3>Event Code -3</h3>
                <p>Stronger relationships: Neglecting personal life for work can strain relationships with family and friends. By making time for those who matter most, you nurture those connections, creating a support system that can carry you through challenging times.</p>
                <p>Date     - 12.4.2024</p>
                <p>Time     - 10 AM</p>
                <p>Location - Yangon</p>
                <a href="register.php"><button>Register</button></a>
            </div>
    </div>  
    
    
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

</body>
</html>
