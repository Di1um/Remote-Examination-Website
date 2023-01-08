<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<?php
include 'header.php'; 

?>


<br><br><br><br><br><br>

<h2 align="center">Administrator</h2><br><br>

<div class="container">


<form action="" method="post">

  
    <div class="inside">

    
    <label for="email"><b>User Email</b></label>
    <input type="text" placeholder="URL" name="txtemail" >
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
    

    $sql_login= "SELECT * FROM adminusers WHERE Email = '$email' AND Password = '$psw' ";
    $status = mysqli_query($con, $sql_login);
    $row_num = mysqli_num_rows ($status);
    if ($row_num==1){
      while ($row= mysqli_fetch_assoc($status)){
        $_SESSION['logged_user_email'] =  $row['Email'];
        // $_SESSION['logged_user_email'] =  $row['lecEmail'];
      }
      
      header("Location: viewpage.php");
    }
    else{
      echo "<span style='color: red;' /><center>Wrong Credentials, please recheck!</center>";
    }
  }
?>
 
</body>
</html>