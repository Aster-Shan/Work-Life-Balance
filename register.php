<?php 
session_start();
header('Cache-Control:no cache');
include('con.php');
?>
<!DOCTYPE html>
<html lang="en">
    <style>
       
       * {
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .contact-section {
            padding-bottom: 50px;
        }

        .register {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .heading-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-container {
            background-color: #9FE2BF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-box {
            text-align: center;
            margin-top: 20px;
        }

        .btn-box button {
            padding: 10px 20px;
            background-color: green;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-box button:hover {
            background-color: #0056b3;
        }

        .form-control {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

 <section class="contact-section layout-padding-bottom">
    <div class="register">
        <div class="heading-container text-center"> 
            <h2>Register the Event</h2>
        </div>
        <div class="row justify-content-center"> 
            <div class="col-md-7">
                <div class="form-container">
                <form id="registrationForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validateForm()">
                    <table>
                        <tr>
                            <td><label for="fullName">Full Name:</label></td>
                            <td colspan="5"><input type="text" id="fullName" placeholder="Full Name" class="form-control long-input" /></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td colspan="5"><input type="email" id="email" placeholder="Email" class="form-control long-input" /></td>
                        </tr>
                        <tr>
                            <td><label for="phoneNumber">Phone Number:</label></td>
                            <td colspan="5"><input type="text" id="phoneNumber" placeholder="Phone Number" class="form-control long-input" /></td>
                        </tr>
                        <tr>
                            <td><label for="eventCode">Event Code:</label></td>
                            <td colspan="5"><input type="text" id="eventCode" placeholder="Event Code" class="form-control long-input" /></td>
                        </tr>
                        <tr>
                            <td colspan="5" class="btn-box">
                                <button type="submit">REGISTER</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php 
                    if ($_SERVER ['REQUEST_METHOD']== 'POST'){

                        $name = $_POST['fullName'];
                        $email =$_POST['email'];
                        $ph =$_POST['phoneNumber'];
                        $ecode =$_POST['eventCode'];

                        $query = "insert into Register(Name,Email,Ph_No,ECode)values('$name','$email','$ph','$ecode')";
                        mysqli_query($con,$query) or die(mysqli_error($con));
                        echo "Successfully inserted";
                    }
                    ?>

<style>
    .long-input {
        width: 100%; 
    }
</style>


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

<script>
    function validateForm() {
        var fullName = document.forms["registrationForm"]["Full Name"].value;
        var email = document.forms["registrationForm"]["Email"].value;
        var phoneNumber = document.forms["registrationForm"]["Phone Number"].value;

        if (fullName == "" || email == "" || phoneNumber == "") {
            alert("All fields must be filled out");
            return false;
        }
        
    }
</script>


</body>
</html>