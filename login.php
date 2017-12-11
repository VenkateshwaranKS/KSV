<?php session_start();?>
<!Doctype html>
<html>
<head>
<title>Student Login</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="ps-stylesheet.css" media="all">
<link rel="stylesheet" type="text/css" href="headercss.css" media="all">
</head>
<body>
<div align="center"><img src="index.png" alt="Sona">
</div>
<ul>
  <li><a href="success.php">Home</a></li>
  <li class="dropdown">
    <a href="courses.html">Courses</a>
    <div class="dropdown-content">
      <a href="DS.php">Data Structure</a>
      <a href="DAA.php">Data Analysis And Algorithm</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="quiz.html">Online Test</a>
    <div class="dropdown-content">
      <a href="dsquiz.php">Data Structure</a>
      <a href="daaquiz.php">Data Analysis And Algorithm</a>
    </div>
  </li>
  <li><a href="intro.html">Info</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="college.html">College Profile</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>
<hr>
<div id="header">
<h1><strong>Welcome.</strong> Please login.</h1>
</div>
<div id="login">

<form action="#" method="POST">
<?php include 'logindb.php';?>
<fieldset>
<p><input type="text" placeholder="Username" name="username" size="20"></p>
<p><input type="password" placeholder="Password(regno)" name="password" size="15"></p>
<p><input type="submit" value="login" name="submit"></p>
<p align="center"><input type="reset" value="Reset"></p>
<p align="center"><a href="signup.php"><input type="button" value="New user"></a></p>
<p align="center"><a href="forgotpassword.php" >Forgot Password?</a></p>
</fieldset>
</form>
<p><span class="btn-round">or</span></p>
<p>
<a class="facebook-before"></a>
<button class="facebook" onclick="facebook()">Login Using Facebook</button>
</p>
<p>
<a class="twitter-before" ></a>
<button class="twitter" color="red" onclick="twitter()">Login Using Twitter</button>
</p>
</div>
<footer>
</footer>
</body>	
<script type="text/javascript" src="ps-script.js"></script>
</html>