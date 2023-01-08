<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Profile</title>
<style>
  
 .inside .navigation{
  
  width: 100%;
  position: fixed;
  z-index: 100;
  top: 0px;
  height: 50px;

}
.nav-container {
    margin: 0 auto;
    width: 70%;
    height: 100%;
    display: flex;
  }

a:link {
  color: red;
 
}

  
  .nav-container .links {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: flex-end;
    gap: 25px;
    font-family: "Courier New", monospace;
    
  }
  </style>
</head>
<body>
    


<?php
    include 'db.php';
    
    
  ?>  
<br><br><br>
<h2 align="center"> Profile </h2>
<div class="container">


      


  
    <div class="inside">
    <div class="navigation w3-highway-blue w3-container">
        <nav class="nav-container w3-padding-large">
          
          
          <div class="links">
            <a href="lecclassroom.php" >Lecturers Classroom</a>
            <a href="studentclassroom.php" >Student Classroom</a>
            <a href="login.php" >Login again</a>            
          </div>
          
        </nav>
    </div><br><br>
    
    <div class="text container">
        <a class = "studentclass"href="studentclassroom.php">Enter Student Classroom</a>

        <br>
    
    <div class="text container">
        <a class = "lecclass"href="lecclassroom.php">Enter Lecturer Classroom</a>
        

<br>


    <label for="name"><b>Name</b></label>
    <div class="well"><?php
    session_start();
    $email =  $_SESSION['logged_user_email'];
    $sql_profile ="SELECT * FROM users WHERE Email = '$email'"; 

    $results= mysqli_query($con, $sql_profile);

    while ($row = mysqli_fetch_assoc($results)){
        echo $row['Name'];
    }
$selectSQL = "SELECT * FROM users where "
    
    ?></div>
    <br>
    
    <label for="campus"><b>Partnered University</b></label>
    <div class="well"><?php
    
    $email =  $_SESSION['logged_user_email'];
    $sql_profile ="SELECT * FROM users WHERE Email = '$email'"; 

    $results= mysqli_query($con, $sql_profile);

    while ($row = mysqli_fetch_assoc($results)){
        echo $row['campusName'];
    }

    
    ?></div>
    <br>
    
    <label for="username"><b>Username</b></label>
    <div class="well"><?php
    
    $email =  $_SESSION['logged_user_email'];
    $sql_profile ="SELECT * FROM users WHERE Email = '$email'"; 

    $results= mysqli_query($con, $sql_profile);

    while ($row = mysqli_fetch_assoc($results)){
        echo $row['Username'];
    }

    
    ?></div>

<br>
    
    <label for="studylevel"><b>level of Study</b></label>
    <div class="well"><?php
    
    $email =  $_SESSION['logged_user_email'];
    $sql_profile ="SELECT * FROM users WHERE Email = '$email'"; 

    $results= mysqli_query($con, $sql_profile);

    while ($row = mysqli_fetch_assoc($results)){
        echo $row['studylevel'];
    }

    
    ?></div>

<br>
    
    <label for="password"><b>Password</b></label>
    <div class="well">
    <input type="password" 


    
    value="<?php
    
    $email =  $_SESSION['logged_user_email'];
    $sql_profile ="SELECT * FROM users WHERE Email = '$email'"; 

    $results= mysqli_query($con, $sql_profile);

    while ($row = mysqli_fetch_assoc($results)){
        echo $row['password'];
    }

    
    ?>" id="myInput">

<!-- Upper part is entirely password part -->


    <br><br>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
    
    
    
    
    </div>


    
<br><br><br>
    
  </div>



</div>
   



    
</body>
</html>
