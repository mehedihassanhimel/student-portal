<?php
$upname = $upemail = $upgender = $updob ="";


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

$sql = "SELECT name, email, gender, dob FROM student WHERE  id='".$_SESSION['userid']."' and password='".$_SESSION['password']."'";
$result = $conn->query($sql);

$name = $email = $gender = $dob ="";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
$upname=$row['name'];
$_SESSION['upname']=$upname;
$upemail=$row['email'];
$_SESSION['upemail']=$upemail;
$upgender=$row['gender'];
$_SESSION['upgender']=$upgender;
$updob=$row['dob'];
$_SESSION['updob']=$updob;

}
} else {
  echo "0 results";
}
$conn->close();
?>