<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>FAZT LEARNERS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
include("header.php");?>

      <div class="hero" id="home">
      
   
        <div class="text container">
        <a class = "adminlog "href="admin_log.php">Log in as admin</a>
          
          <p class="pre-title">One place for all your examinations!</p>
          <h1 class="title"> FAZT<span>LEARNERS</span></h1>
          <p class="post-title">Take your examination right now!</p>
          <a class="w3-button w3-round-large w3-indigo w3-hover-red" href="./register.php">REGISTER NOW !</a> 
          
        </div>
      </div>

      <div class="about container w3-padding-large" id="about">
        <div class="text-one">
          <h2>About Us</h2>
          <p>We are the pioneers of modern day teaching! FAZT LEARNERS is an online exam software developed by BCAS CSD71, which is a robust online exam platform. Our online examination system provides innovative and impeccable solutions for exams throughout various colleges, universities, educational institutions, and many leading corporate entities. FAZT LEARNERS is developed by a highly qualified team and specialized in creating high impact online exam software which is highly efficient in terms of reliability and speed.</p>


          
        </div>
        <div class="text-one">
          <h2>Our Vision</h2>
          <p>Setting the global standard in online, blended, and digital examination & creating community and knowledge around quality online, blended, and digital learning & examination while driving innovation..</p>
          
        </div>
      </div>

      <div class="services container" id="services">
        <h2 class="w3-wide w3-center">Our services</h2>
        <div class="cards w3-padding-large w3-margin-top">
          <div class="card w3-card-2 w3-padding-large w3-border w3-border-blue w3-round-large">
            <h3>SELF LEARNING PLATFORM</h3>
            <div class="card-text">
              <p>We will help you learn with your college.</p>
            </div>
          </div>
          <div class="card w3-card-2 w3-padding-large w3-border w3-border-blue w3-round-large">
            <h3>PRACTICE FOR YOUR BIG EXAM & DO THE FINALS</h3>
            <div class="card-text">
              <p>We will provide most realistic examination environment for you to practice for the big one!</p>
            </div>
          </div>
          <div class="card w3-card-2 w3-padding-large w3-border w3-border-blue w3-round-large">
            <h3>COLLABORATION WITH UNIVERSITIES ACCROSS THE GLOBE</h3>
            <div class="card-text">
              <p>We will take your responsibility and do the exams with all the facilities. You don't have to do anything</p>
            </div>
          </div>
        
        </div>
      </div>

    

      <div class="contact container" id="contact">
        <div class="short-contact">
          <h2>Contact us</h2>
          <p class="w3-xlarge">We would like to hear from you!</p>
          <div class="w3-large w3-margin-top contact-info">
            <i class="fa fa-location-arrow"></i><span style="margin-left:10px;"><a href="https://goo.gl/maps/XB2ieitnzeqeUW6r9" target="_blank">23rd Street, Dalupotha, Negombo, Sri Lanka</a></span><br>
            <i class="fa fa-envelope-o"></i><span style="margin-left:10px;"><a href="connect@faztlearners.com">connect@faztlearners.com</a></span><br>
            <i class="fa fa-phone"></i><span style="margin-left:10px;"><a href="+94774785190">+94774785190</a></span><br>
          </div>
          <div class="w3-large w3-margin-top contact-info">
            <i class="fa fa-linkedin"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;">- LinkedIn</a></span><br>
            <i class="fa fa-facebook"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;"> - Facebook</a></span><br>
            <i class="fa fa-twitter"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;">- Twitter</a></span><br>
          </div>
        </div>
        <div class="form w3-margin-top">
          <div class="container w3-round-xlarge">
            <form class="w3-highway-blue w3-padding-large w3-round-large">
              <label for="fname">First Name</label>
              <input type="text" id="name" name="name" placeholder="Your name">

              <label for="lname">Last Name</label>
              <input type="text" id="email" name="email" placeholder="Your email">

              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
              
              <p>By submiting this form, you agree to our <a href="index.php" target="_blank">privacy policy</a></p><br>
              <input class="w3-metro-blue" type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>

      <div class=" w3-highway-blue w3-padding-large" id="footer">
        <p class="w3-center logo">© 2022 - FAST<span>LEARNERS</span> - All rights reserved</p>
      </div>

  
  </body>
</html>
