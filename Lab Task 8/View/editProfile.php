

<?php
include('../Controller/session.php');
  include '../Model/editInfoDB.php';
?>

<?php

$nameErr = $emailErr =  $genderErr = $dobErr ="";

?>
<!DOCTYPE HTML>  
<html>
<head>
<!-- <style>
.error {color: Red;}
legend{ outline: 1px solid red; width: 115px; }
fieldset{ width: 400px; }
</style> -->
<link rel="stylesheet" type="text/css" href="../CSS/editProfile.css">
<script src="editProfile.js" type="text/javascript"></script> 
</head>
<body>  

<div class="form" name="myForm"  onsubmit="return validateForm()">
<form action="../Model/updateDB.php" method="post" name="myForm">  
    
    <br>
    <fieldset>
        <br>
      <legend>Profile</legend>
      <label for="name"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="name" id="myName" onfocus="focusName()" onblur="blurName()" value="<?php echo $upname;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <p id="nameError"></p>
      
      <hr>
      <label for="email"><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="email" id="myEmail" onfocus="focusEmail()" onblur="blurEmail()" value="<?php echo $upemail;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <p id="emailError"></p>
      <hr>
      <label for="gender"><b>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="gender" id="myGender" onfocus="focusGender()" onblur="blurGender()" value="<?php echo $upgender;?>">
      <span class="error">* <?php echo $genderErr;?></span>
      <p id="genderError"></p>
      <hr>
      <label for="dob"><b>Date Of Birth: </b></label>
      <input type="date" min="1980-01-01" max="2010-12-31" name="dob" id="myDob" onfocus="focusDob()" onblur="blurDob()" value="<?php echo $updob;?>">
      <span class="error">* <?php echo $dobErr;?></span>
      <p id="dobError"></p>
      <br>
      
      <br>
      <input type="submit" name="submit" value="Apply Changes">
      <a href="../Controller/home1.php"><input type="button" class="cancelbtn" value="Cancel"></a>
      </fieldset>  
    </form>
    <div class="form">

    


    </body>
    </html>

