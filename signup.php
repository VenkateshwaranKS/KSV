<?php session_start();?>
<!Doctype html>
<html>
<head>
<title>Student SignUp</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="ps-stylesheet.css">
<link rel="stylesheet" type="text/css" href="headercss.css" media="all">
<style>
.error {color: #FF0000;}
</style>
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
<h1><strong>Welcome.</strong>Sign Up.</h1>
</div>
<hr>
<div id="login">
<form method="post" action="#">
<?php include 'signupdb.php'; echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
<fieldset> 
<center><p>UserName: <input type="text" name="username" placeholder="Username" size="20">
  <span class="error">*<?php echo $usernameErr;?></span></p>
  
<p>Password: <input type="password" name="password" placeholder="Password" size="15">
  <span class="error">*<?php echo $passwordErr;?></span></p>
 
<p>E-mail: <input type="email" name="email" placeholder="E-mail" size="30">
  <span class="error">*<?php echo $emailErr;?></span></p>
 
<p>Phone Number: <input type="text" name="phoneno" placeholder="Phone Number" size="10">  
   <span class="error">*<?php echo $phonenoErr;?></span></p>
<p>Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">*<?php echo $genderErr;?></span></p>
  <input type="submit" name="submit" value="submit">
  <input type="reset" name="clear" value="reset"></center>
  <p><span class="error">* required field.</span></p>

</fieldset>
</form>
</div>
<center>
<div id="login">
<p><span class="btn-round" style="color:black">or</span></p>
<p>
<a class="facebook-before"></a>
<button class="facebook" onclick="facebook()">SignUp Using Facebook</button>
</p>
<p>
<a class="twitter-before"></a>
<button class="twitter" onclick="twitter()">SignUp Using Twitter</button>
</p>
</div></center>
<script type="text/javascript" src="ps-script.js"></script>
</body>	
</html>