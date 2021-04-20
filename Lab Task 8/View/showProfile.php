
<?php 

include('../View/navbar2.php');
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
header("Location:../View/login.php"); 
} 

?> 

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

<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/showProfile.css"/> 
</head>
<body>  

   <div class="form">
    <form action="editProfile.php" method="post" >  
    
    <br>
    <fieldset>
        <br>
      <legend>Profile</legend>
      <label for="id"><b>ID:</b></label>
      <label for="name"><b><?php echo $_SESSION['userid'];?></b></label>
     <br><br>
      <label for="name"><b>Name:</b></label>
      <label for="name"><b><?php echo $name;?></b></label>
      <br><br>
      <label for="email"><b>Email:</b></label>
      <label for="email"><b><?php echo $email;?></b></label>
      <br><br>
      <label for="dob"><b>Gender: </b></label>
      <label for="dob"><b><?php echo $gender;?></b></label>
      <br><br>
      <label for="dob"><b>Date Of Birth: </b></label>
      <label for="dob"><b><?php echo $dob;?></b></label>
      <br>
      
      <br>
      <input type="submit"  name="submit" value="Edit" id="submit">
      </fieldset>  
    </form>
</div>
    
    </body>
    </html>