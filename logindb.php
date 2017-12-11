<?php 
include 'sql.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	//check($username,$password);
 if($username!=' '&&$password!=' '){
	//login($username,$password);
	$check = "SELECT username,password FROM login where username='$username' and password='$password'";
	$check_q = mysql_query($check);
    $count=mysql_num_rows($check_q);
    if($count!="")
    {
    //session_register("sessionusername");
    $_SESSION['login_username']=$username;
    header("Location:success1.php"); 
    }
    else{
		echo "Invalid Username Password!!";  
    }
 }
 else {
 	echo "enter username password";
 }
}
