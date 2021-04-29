
<?php
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
$name=$row['name'];
$email=$row['email'];
$gender=$row['gender'];
$dob=$row['dob'];

}
echo "</table>";
} else {
  echo "0 results";
}
$conn->close();


?>