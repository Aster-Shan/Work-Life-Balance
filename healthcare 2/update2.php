<?php
session_start();
include ('con.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
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
                        <li><a href="view.php">View</a></li>
                        
                        <li><a href="update.php">Edit</a></li>
                        <li><a href="logout.php">LogOut</a></li>
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
                        <img src="./image/g.webp" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="heading-container">
                            <h2 style ="color :green"> Update Register People</h2>
                            <?php

                                $code = $_POST['code'];
                                if($_POST['sub']== 'Delete' && $code !=null){
                                    $query = "delete from Register where RCode ='$code' ";
                                    mysqli_query($con,$query)  or die (mysqli_error($query));
                                    header('location:update.php');  
                                }

                                else if($_POST['sub'] == 'Update' && $code !=null){
                                $query = "select * from Register where RCode = $code";
                                $result = mysqli_query($con,$query) or die(mysqli_error());
                                $row = mysqli_num_rows($result);
                                $record = mysqli_fetch_array($result);

                                $Rcode= $record['RCode']; //code no =0
                                $name= $record['Name'];
                                $email= $record['Email'];
                                $ph= $record['Ph_No'];
                                $ecode= $record['ECode'];
                                ?>

                                <form action="successupdate.php" METHOD = "POST">
                                        <table  style="border:1px solid red;"align="center" >
                                            <tr>
                                                <td>Register Code</td>
                                                <td><input type = "text" name ="Code" value = "<?php echo $Rcode; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td> Name</td>
                                                <td><input type = "text" name ="name" value = "<?php echo $name; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Email </td>
                                                <td><input type = "text" name ="email" value = "<?php echo $email; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Phone No </td>
                                                <td><input type = "text" name ="ph_no" value = "<?php echo $ph; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Event Code </td>
                                                <td><input type = "text" name ="ecode" value = "<?php echo $ecode; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td  style align = "center" cplspan ="2"><input type = "submit" name ="sub" value= "Update"  >
                                                <input type = "submit" name ="sub" value= "Delete"  ></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <?php
                                }
                                ?>

   
                        </div>
                        <p>
                          <br><br><br><br><br>  
                        </p>
                       
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

       
    
</body>
</html>