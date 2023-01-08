<?php
include 'db.php';

if (isset($_GET['deleteid'])){
    $id = $_GET ['deleteid'];
    $sql = "DELETE FROM users WHERE ID=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<span style='color: red;' /><center>Deleted Sucessfully!</center>";

        header('location: viewpage.php');
    }
}


?>