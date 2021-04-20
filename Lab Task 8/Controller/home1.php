<?php 
  include('../View/navbar2.php');


session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student WHERE  id='".$_SESSION['userid']."' and password='".$_SESSION['password']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Name: " . $row["name"]. " - Email: " . $row["email"].  "<br>";
$_SESSION["username"]=$row['username'];
$_SESSION["name"]=$row['name'];
$_SESSION["email"]=$row['email'];
$_SESSION["gender"]=$row['gender'];
$_SESSION["dob"]=$row['dob'];

}

} else {
  echo "0 results";
}
$conn->close();

echo "<h3>Welocome, " . strtoupper($_SESSION['name']) . "<h3>";
echo "<br>";
include('../View/courseTable.html');

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
?> 
