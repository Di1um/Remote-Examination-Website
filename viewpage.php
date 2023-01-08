<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin viewpage new</title>
</head>
<body>
  
    <div class="container">
        <button class ="btn btn-primary my-5" ><a href="register.php" class="text-light">Add user</a>
        </button>

        <h3 align="center">Admin Privileges</h3>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Partnered Institute</th>
      <th scope="col">User-Name</th>
      <th scope="col">User-Password</th>
      <th scope="col">Study-Level</th>
      <th scope="col">User-Type</th>
      <th scope="col">Admin-Operations</th>


    </tr>
  </thead>
  <tbody>
    
  
    <?php

    include 'db.php';

    $sql1="SELECT * FROM users ";
    $result =mysqli_query($con, $sql1);
    if($result){
        while ($row1 = mysqli_fetch_assoc($result)){
        $id = $row1['ID'];
        $name = $row1['Name'];
        $email = $row1['Email'];
        $campus = $row1['campusName'];
        $username = $row1['Username'];
        $password = $row1['password'];
        $studylevel = $row1['studylevel'];
        $usertype = $row1['usertype'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$campus.'</td>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td>'.$studylevel.'</td>
        <td>'.$usertype.'</td>
        <td><button class="btn btn-primary " ><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger my-1"><a href="delete.php?deleteid='.$id.'" class="text-dark">Delete</a></button></td>
      </tr>';

        }


    }


    ?>

  </tbody>
</table>


    </div>
    
</body>
</html>