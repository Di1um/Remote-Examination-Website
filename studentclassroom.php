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
    <title>Student-Classroom</title>
</head>
<?php
include("header.php");?>
<body>
<br><br><br>
    <h3 align="center">Examination Time Table</h3>
    <br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Exam title</th>
      <th scope="col">Exam Subject</th>
      <th scope="col">Exam date</th>
      <th scope="col">Exam time</th>
      <th scope="col">Take the exam</th>
    </tr>
  </thead>
  <tbody>
  <?php
Include 'db.php';
$sql = "SELECT ID, examTitle, examSubject,date, time FROM exams";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["examTitle"] . "</td><td>"
. $row["examSubject"]. "</td><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td>";
}
echo "<td><a href=studentqs.php>Click here to take test</a></tr>";
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
  </tbody>
</table>
</body>
</html>