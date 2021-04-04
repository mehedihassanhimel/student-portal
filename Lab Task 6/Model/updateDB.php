<?php

include '../View/navBar2.php';  
session_start(); 

// To check if session is started. 
if(isset($_SESSION["userid"])) 
{ 
if(time()-$_SESSION["login_time_stamp"] >600) 
{ 
	session_unset(); 
	session_destroy(); 
	header("Location:../View/loginV.php"); 
} 
} 
else
{ 
header("Location:../View/loginV.php"); 
} 


$upname=$_POST['name'];
$upemail=$_POST['email'];
$upgender=$_POST['gender'];
$updob=$_POST['dob'];


$link = mysqli_connect("localhost", "root", "", "Mydb");
  
if($link === false){
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
}
  

$sql = "UPDATE student SET name='".$upname."',
email='".$upemail."',
gender='".$upgender."',
dob='".$updob."' 
WHERE id=".$_SESSION["userid"];

if(mysqli_query($link, $sql)){
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($link);
} 
mysqli_close($link);
?>