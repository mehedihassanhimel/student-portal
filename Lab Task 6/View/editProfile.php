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
  include '../Model/editInfoDB.php';
?>

<?php

$nameErr = $emailErr =  $genderErr = $dobErr ="";

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

   
<form action="../Model/updateDB.php" method="post" >  
    
    <br>
    <fieldset>
        <br>
      <legend>Profile</legend>
      <label for="name"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="name" value="<?php echo $upname;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      
      <hr>
      <label for="email"><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="email" value="<?php echo $upemail;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <hr>
      <label for="gender"><b>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="gender" value="<?php echo $upgender;?>">
      <span class="error">* <?php echo $genderErr;?></span>
      <hr>
      <label for="dob"><b>Date Of Birth: </b></label>
      <input type="text" name="dob" value="<?php echo $updob;?>">
      <span class="error">* <?php echo $dobErr;?></span>
      <br>
      
      <br>
      <button type="submit">Apply Changes</button>
    <button type="button" class="cancelbtn">Cancel</button>
      </fieldset>  
    </form>
    </body>
    </html>

