<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Login</title>
<link rel="stylesheet" href="login_style.css">
<link rel="stylesheet" href="styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

<?php
include("header.php");?>

<br><br><br>



<h2 align="center">Login Form</h2><br><br>




<div class="container">


<form action="" method="post">

  
    <div class="inside">

    <label class="labels" for="usertype">User Type</label>
            <select id="user" name="user">
                <option value="admin">Admin</option>
                <option value="student" selected="selected">Student</option>
                <option value="lecturer">Lecturer</option>
                
            </select> 

            <br><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="txtemail" >
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="txtpsw" >
        
    <button type="submit" name="btnlogin"  style="border-radius:10px;">Login</button>
    
<br><br><br>
    
  </div>


</form>
</div>

<?php

  include 'db.php';

  session_start();

  if (isset($_POST['btnlogin'])){
    $email = $_POST['txtemail'];
    $psw = $_POST['txtpsw'];
    $user = $_POST ['user' ];

    $sql_login= "SELECT * FROM users WHERE Email = '$email' AND password = '$psw' AND usertype='$user'";
    $status = mysqli_query($con, $sql_login);
    $row_num = mysqli_num_rows ($status);
    if ($row_num==1){
      while ($row= mysqli_fetch_assoc($status)){
        $_SESSION['logged_user_email'] =  $row['Email'];
        // $_SESSION['logged_user_email'] =  $row['lecEmail'];
      }
      
      header("Location: profile.php");
    }
    else{
      echo "<span style='color: red;' /><center>Wrong Credentials, please recheck!</center>";
    }
  }

?>


</body>
</html>