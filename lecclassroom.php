<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Classroom</title>

    <style>
  form {
  text-align: center;
}
  </style>
</head>

<body>
<?php
    include("header.php");
    include ('db.php');
?>
<body>
    <br><br><br>
    <br><br><br>
    <h3 align="center">Schedule Examination</h3>
    <br><br>
    <p align="center">Lecturers, please schedule examinations for the respective students according to our guidlines..</p>

<br>


<form action="lecclassroom.php" method="post">
<div class="d-inline-flex p-2">
  <div class="mb-3">
    <label class="form-control" for="title">Exam Title</label>
    <input type="text" name="examtitle" id="title" >
    <div id="examtitle" class="form-text">Title, catchy, hint: 2 words exam title is the best</div>
  </div>
  <div class="mb-3">
  <label class="form-control" for="sub">Exam Subject</label>
    <input type="text" name="subject" id="sub" >
  </div>
  <div class="mb-3">
  <label class="form-control" for="exdate">Exam Date</label>
    <input type="date" name="date" id="exdate" >
  </div>
  <div class="mb-3">
  <label class="form-control" for="extime">Exam Time</label>
    <input type="time" name="time" id="extime" >
  </div>
  
  <input type="submit" name="btnsubmit" class="btn btn-primary"Value="Submit">
  </div>
</form>

<?php
        include 'db.php';
        

        if(isset($_POST['btnsubmit'])){

            $extitle = $_POST['examtitle'];
            $exsub = $_POST['subject'];
            $exdate = $_POST['date'];
            $extime = $_POST['time'];
           

            $sql = "INSERT INTO exams(examTitle, examSubject, date, time) VALUES('$extitle', '$exsub',  '$exdate', '$extime' )";

            $status = mysqli_query($con, $sql);

            if ($status){
                echo "Submitted Successfully!";
            }
            else{
                echo "There was an error connecting, please submit again";
            }

        }

        ?>

    
</body>
</html>