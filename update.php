
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_style.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin-Update</title>
</head>



<?php
    
    include ('db.php');
        
        $id = $_GET['updateid']; 
        $sql = "SELECT * FROM users WHERE ID=$id";
        $result= mysqli_query($con, $sql);
        $row =mysqli_fetch_assoc($result);
            $Name = $row['Name'];
            $Email = $row['Email'];
            $campusName = $row['campusName'];
            $Username = $row['Username'];
            $password = $row['password'];
            $studylevel = $row['studylevel'];
            $usertype = $row['usertype'];
        
        

        if(isset($_POST['btnsubmit'])){

            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $campusName = $_POST['campusName'];
            $Username = $_POST['Username'];
            $password = $_POST['password'];
            $studylevel = $_POST['studylevel'];
            $usertype = $_POST['usertype'];

            $sql = "UPDATE users SET ID=$id, Name='$Name', Email='$Email', campusName='$campusName', Username='$Username', password='$password', studylevel='$studylevel', usertype='$usertype' WHERE ID=$id";

            $status = mysqli_query($con, $sql);

            if ($status){
                echo "Updated Successfully!";
            }
            else{
                echo "There was an error connecting, please submit again";
            }

        }

        ?>

<body>
    <br><br><br>
    <h3 align="center">Update user information, You are logged in as Admin</h3>
<br>
    <div class="container" style="align: center;">

    

        <form method="post">
            <label class="labels" for="user">User highest Qualification</label>
            <select id="user" name="user" value=<?php echo $studylevel; ?>>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Graduate">Graduate</option>
                <option value="Post Graduate">Post Graduate</option>
                <option value="A/Ls">A/Ls</option>
                <option value="O/Ls">O/Ls</option>
            </select><br><br>

            <label class="labels" for="usertype">User type</label>
            <select id="usertype" name="usertype" >
                <option value="Student">Student</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Admin">Admin</option>
                
            </select>
            
            <br><br>
            <label class="labels" >Name </label>
            <input type="text" id="Name" name="Name" placeholder="Name." value=<?php echo $Name; ?>><br><br>

            <label class="labels" for="email">Email </label>
            <input type="text" id="Email" name="Email" placeholder="Email." value=<?php echo $Email; ?>><br><br>

            <label class="labels" for="campusName">Partnered Institute </label>
            <input type="text" id="campusName" name="campusName" placeholder="Partnered Institute" value=<?php echo $campusName; ?>><br><br>

            <label class="labels" for="Username">Name </label>
            <input type="text" id="Username" name="Username" placeholder="Username.." value=<?php echo $Username; ?>><br><br>

            <label class="labels" for="Password">Password </label>
            <input type="Password" id="Password" name="Password" placeholder="Password.."value=<?php echo $password; ?>><br><br>
            

            <button type="submit" class="btn btn-primary" name="btnsubmit">Update</button>

        
        </form>    
        
    </div>
    
</body>
</html>