<html>
<head>
	<title>
		quiz
	</title>
	<link rel="stylesheet" type="text/css" href="ps-stylesheet.css" media="all">
<style type="text/css">
#wrapper{
	width: 950px;
	height: auto;
	padding:13px;
	margin-right: auto;
	margin-left: auto;
	background-color: #fff;
}
</style>
</head>
<body>

<div id="header">
<h1>Here is Your Result</h1>
</div>
<div id="wrapper">
	<center>Congratulations</center>
	<br/><br/><br/>
<?php 
$answer1=$_POST['answerOne'];
$answer2=$_POST['answerTwo'];
$answer3=$_POST['answerThree'];
$answer4=$_POST['answerFour'];
$answer5=$_POST['answerFive'];
$score=0;

if($answer1 == "A"){$score+=1;}
if($answer2 == "B"){$score+=1;}
if($answer3 == "B"){$score+=1;}
if($answer4 == "B"){$score+=1;}
if($answer5 == "A"){$score+=1;}

echo"<center><font size='8' color='red'>Your Score is :<br><br> $score/5</font></center>";
?><br>

  <center><a href="success.php">Home</a></center>
  


</body>
</html>