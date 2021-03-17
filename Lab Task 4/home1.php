<?php 
  include('navbar2.html');


session_start(); 
echo "<h3>Welocome, " . $_SESSION['user'] . "<h3>";

// To check if session is started. 
if(isset($_SESSION["user"])) 
{ 
if(time()-$_SESSION["login_time_stamp"] >600) 
{ 
	session_unset(); 
	session_destroy(); 
	header("Location:login.php"); 
} 
} 
else
{ 
header("Location:login.php"); 
} 
?> 
