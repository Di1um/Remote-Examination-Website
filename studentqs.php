<html>
<head>
<title>PHP Multiple Choice Questions and Answers</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    include 'header.php';
?>

<div class="container">
    
    <br><br><br><br>
<h2>Multiple Choice Questions For Student</h2>
<p>Please fill the details and answers the all questions-</p>
<form action="studentanswers.php" method="post">
<div class="form-group">
<strong>Name*:</strong><br/>
 <input type="text" name="name" value="" required/>
</div>
<div class="form-group">
<strong>Age*:</strong><br/> 
<input type="text" name="age" value="" required/>
</div>
<div class="form-group">
<strong>Phone*:</strong><br/> 
<input type="text" name="phone" value="" required/>
</div>
<h3>Ques1 : Who is the father of PHP? </h3>
<div class="form-group"> 
<ol>
<li>
<input type="radio" name="q1" value="1" />Rasmus Lerdorf
</li>
<li>
<input type="radio" name="q1" value="2" />Larry Wall
</li>
<li>
<input type="radio" name="q1" value="3" />Zeev Suraski
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>Ques2 : Which of the functions is used to sort an array in descending order?</h3>
<ol>
<li>
<input type="radio" name="q2" value="1" />sort()
</li>
<li>
<input type="radio" name="q2" value="2" />asort()
</li>
<li>
<input type="radio" name="q2" value="3" />rsort()
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>Ques3 : Which version of PHP introduced the instanceof keyword?</h3>
<ol>
<li>
<input type="radio" name="q3" value="1" />PHP 4 
</li>
<li>
<input type="radio" name="q3" value="2" />PHP 5
</li>
<li>
<input type="radio" name="q3" value="3" />PHP 6
</li>
</ol>
</div>
<div class="form-group">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>
</body>
</html>