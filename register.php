
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register</title>
</head>
<?php
    include("header.php");
    include ('db.php');
?>

<body>
    <br><br><br>
    <h3 align="center">Registration form</h3>
    <p align="center">Hi! Please answer all the questions to process your request at Fast leaners. We wish you all the best</p>
<br>
    <div class="container" style="align: center;">

    <a class = "adminlog "href="admin_log.php">Log in as admin</a>

        <form action="register.php" method="post">
            <label class="labels" for="user">Your Highest Qualification, whether you are..</label>
            <select id="user" name="user">
                <option value="Undergraduate">Undergraduate</option>
                <option value="Graduate">Graduate</option>
                <option value="Post Graduate">Post Graduate</option>
                <option value="A/Ls">A/Ls</option>
                <option value="O/Ls">O/Ls</option>
            </select><br><br>

            <label class="labels" for="usertype">Register as user?</label>
            <select id="usertype" name="usertype">
                <option value="Student">Student</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Admin">Admin</option>
                
            </select>
            
            <br><br>
            <label class="labels" for="fname">Name </label>
            <input type="text" id="fname" name="fullname" placeholder="Your name.."><br><br>

            <label class="labels" for="email">Email </label>
            <input type="text" id="email" name="email" placeholder="Your Email.."><br><br>

            <label class="labels" for="company">Partnered Institute </label>
            <input type="text" id="company" name="company" placeholder="Partnered Institute"><br><br>

            <label class="labels" for="username">Username </label>
            <input type="text" id="username" name="username" placeholder="Username.."><br><br>

            <label class="labels" for="password">Password </label>
            <input type="password" id="password" name="password" placeholder="Password.."><br><br>
            

            <input type="submit" name="btnsubmit" Value="Submit">

        
        </form>    
        <?php
        include 'db.php';
        

        if(isset($_POST['btnsubmit'])){

            $Name = $_POST['fullname'];
            $Email = $_POST['email'];
            $campusName = $_POST['company'];
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            $studylevel = $_POST [ 'user'];
            $usertype = $_POST['usertype'];

            $sql = "INSERT INTO users(Name, Email,campusName, Username, Password, studylevel, usertype) VALUES('$Name', '$Email',  '$campusName', '$Username' , '$Password', '$studylevel','$usertype')";

            $status = mysqli_query($con, $sql);

            if ($status){
                echo "Submitted Successfully!";
            }
            else{
                echo "There was an error connecting, please submit again";
            }

        }

        ?>
    </div>
    
</body>
</html>