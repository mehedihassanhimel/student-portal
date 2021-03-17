
<?php 

include('navbar2.html');
session_start(); 

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
<?php
$name = $email = $gender = $dob ="";
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
foreach ($data as $key => $entry) {
      if ($entry['uname'] == $_SESSION['user']) {
          $name = $data[$key]['name'];
          $email = $data[$key]['email'];
          $gender = $data[$key]['gender'];
          $dob = $data[$key]['dob'];
      }
  }
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: Red;}
legend{ outline: 1px solid red; width: 115px; }
fieldset{ width: 400px; }
</style>
</head>
<body>  

   
    <form action="editProfile.php" method="post" >  
    
    <br>
    <fieldset>
        <br>
      <legend>Profile</legend>
      <label for="name"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <label for="name"><b><?php echo $name;?></b></label>
      <hr>
      <label for="email"><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <label for="email"><b><?php echo $email;?></b></label>
      <hr>
      <label for="dob"><b>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <label for="dob"><b><?php echo $gender;?></b></label>
      <hr>
      <label for="dob"><b>Date Of Birth: </b></label>
      <label for="dob"><b><?php echo $dob;?></b></label>
      <br>
      
      <br>
      <input type="submit" name="submit" value="Edit">
      </fieldset>  
    </form>
    
    
    </body>
    </html>