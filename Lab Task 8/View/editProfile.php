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
<!-- <style>
.error {color: Red;}
legend{ outline: 1px solid red; width: 115px; }
fieldset{ width: 400px; }
</style> -->
<link rel="stylesheet" type="text/css" href="../CSS/editProfile.css">
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
     <input type="button" class="cancelbtn" value="Cancel">
      </fieldset>  
    </form>
    <div class="form">

    <script>
function focusName() {
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("myName").style.background = "yellow";
  
}

function blurName() {
  var x = document.forms["myForm"]["name"].value;
  if (x == ""){
  document.getElementById("nameError").innerHTML ="<span style='color: red;'>Name must be filled out</span>"; 
  document.getElementById("myName").style.background = "red";
  }

}

function focusEmail() {
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("myEmail").style.background = "yellow";
  
}
function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.myEmail.value))
  {
    return (true)
  }
    // alert("You have entered an invalid email address!");
    document.getElementById("emailError").innerHTML ="<span style='color: red;'>You have entered an invalid email address!</span>"; 
    document.getElementById("myEmail").style.background = "red";
    return (false)
}
function blurEmail() {
  var x = document.forms["myForm"]["email"].value;
  if (x == ""){
  document.getElementById("emailError").innerHTML ="<span style='color: red;'>Email must be filled out</span>"; 
  document.getElementById("myEmail").style.background = "red";
  }
  else {
    ValidateEmail(x);
  }
}



function focusGender() {
  document.getElementById("genderError").innerHTML = "";
  document.getElementById("myGender").style.background = "yellow";
  
}

function blurGender() {
  var x = document.forms["myForm"]["gender"].value;
  if (x == ""){

  document.getElementById("genderError").innerHTML ="<span style='color: red;'>Gender must be filled out</span>"; 
  document.getElementById("myGender").style.background = "red";
  }
}

function focusDob() {
  document.getElementById("dobError").innerHTML = "";
  document.getElementById("myDob").style.background = "yellow";
  
}

function blurDob() {
  var x = document.forms["myForm"]["dob"].value;
  if (x == ""){

  document.getElementById("dobError").innerHTML ="<span style='color: red;'>Date of Birth must be filled out</span>"; 
  document.getElementById("myDob").style.background = "red";
  }
}

function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["email"].value;
  var c = document.forms["myForm"]["gender"].value;


  if (a == null || a == "") {
      alert("Please Fill All Required Field");
      return false;
    }
  else if (b == null || b == "") {
      alert("Please Fill All Required Field");
      return false;
    }
  else if (c == null || c == "") {
      alert("Please Fill All Required Field");
      return false;
    }
  else{
    var x = document.forms["myForm"]["email"].value;
    var t = ValidateEmail(x);
    if(!t) {
      alert("You have entered an invalid email address!");
      return false;
    }
  }
 
}

</script>


    </body>
    </html>

