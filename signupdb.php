<?php 
include 'sql.php';

$usernameErr = $emailErr = $genderErr = $passwordErr = $phonenoErr= $submitErr = "";
$username = $email = $gender = $password = $phoneno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z .]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else if($_POST["password"]<=8){
    $passwordErr = "password must be >8 letters";
  }else{
    $password = test_input($_POST["password"]);
    
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   
  if (empty($_POST["phoneno"])) {
    $phonenoErr = "phonenum is required";
  }
  else if(($_POST["phoneno"]>10 || $_POST["phoneno"]<10)) {
    $phonenoErr = "phonenum must be 10 letters";
  }
   else{ $phoneno = test_input($_POST["phoneno"]);
    
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
	if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) &&!empty($_POST['phoneno']) && !empty($_POST['gender']) ) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email    = $_POST['email'];
	$phoneno  = $_POST['phoneno'];
	$gender   = $_POST['gender'];
   check($username,$password,$email,$phoneno,$gender);
}}

	function check($username,$password,$email,$phoneno,$gender){
	$check = "SELECT * FROM login where username='$username' or password='$password'or email='$email' or phoneno='$phoneno' ";
	$check_q = mysql_query($check);
  $fetch=mysql_num_rows($check_q);
	if ($fetch>0) {
		$submitErr= "Username is Already exists";
    header("Location:signup.php");}
	else{	
	signup($username,$password,$email,$phoneno,$gender);
}
}


function signup($username,$password,$email,$phoneno,$gender){
	$check = "INSERT INTO login (username,password,email,phoneno,gender) VALUES('$username','$password','$email','$phoneno','$gender' )";
	$check_q = mysql_query($check);
  $_SESSION['login_username']=$username;
  header("Location:success1.php");
	
}

?>