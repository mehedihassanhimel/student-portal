<?php
if(!isset($name)) {
  $name="";
}
if(!isset($email)) {
  $email="";
}
if(!isset($uname)) {
  $uname="";
}
if(!isset($password)) {
  $password="";
}
if(!isset($newPassword)) {
  $newPassword="";
}
if(!isset($gender)) {
  $gender="";
}
if(!isset($dob)) {
  $dob="";
}

?>


<!DOCTYPE html>  
<html>
<head>
<title>SignUP</title>
<head>  
   <link rel="stylesheet" type="text/css" href="../CSS/styleLogin.css"/>   
<style>
    .error {color: blue}
</style>
</head>
<body>  

  <div class="wrapper fadeInDown">
  <div id="formContent">

<!-- Tabs Titles -->
<h2 class="active"> Sign Up</h2>
    <a href="loginV.php">
      <h2 class="inactive underlineHover"> Sign In</h2>
    </a>

<form name = "myForm" action="../Controller/registrationC.php" method="post" onsubmit="return validateForm()">

    <input type="text" id="myName" onfocus="focusName()" onblur="blurName()" placeholder="Enter Name" name="name" value="<?php echo $name;?>" >
    <?php if(isset($nameErr)) {?> <span class="error">*  <?php echo $nameErr;?></span> <?php } ?>
      <p id="nameError"></p>
      <input type="text" id="myEmail" onfocus="focusEmail()" onblur="blurEmail()" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
      <?php if(isset($emailErr)) {?> <span class="error">*  <?php echo $emailErr;?></span> <?php } ?>
      <p id="emailError"></p>
        <input type="text" id="myUname" onfocus="focusUname()" onblur="blurUname()" placeholder="Enter Username" name="uname">
        <?php if(isset($unameErr)) {?> <span class="error">*  <?php echo $unameErr;?></span> <?php } ?>
        <p id="unameError"></p>
        <input type="password" id="myPsw" onfocus="focusPsw()" onblur="blurPsw()"  placeholder="Enter New Password" name="psw">
        <?php if(isset($passwordErr)) {?> <span class="error">*  <?php echo $passwordErr;?></span> <?php } ?>
        <p id="pswError"></p>
        <input type="password" id="myPswNew" onfocus="focusPswNew()" onblur="blurPswNew()"  placeholder="Retype New Password" name="pswNew">
        <?php if(isset($newPasswordErr)) {?> <span class="error">*  <?php echo $newPasswordErr;?></span> <?php } ?>
        <p id="pswNewError"></p>
        <br> <br>
        <label for="gender"><b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
      <?php if(isset($genderErr)) {?> <span class="error">*  <?php echo $genderErr;?></span> <?php } ?>
      <br><br>
      <label for="dob"><b>Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="date" name="dob"  value="<?php echo $dobErr;?>" required>
      <span class="error">* </span>

  <br><br>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <!--<button type="submit">Login</button>-->
    <input type="submit" value="Submit" name="submit" id="log" />

    <br>
  
</form>

<!-- Remind Passowrd -->
<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
</div>  

</div>

<script>
function checkGender() {
  var checked_gender = document.querySelector('input[name = "gender"]:checked');

// if(checked_gender != null){  //Test if something was checked
// alert(checked_gender.value); //Alert the value of the checked.
// } else {
  if(checked_gender == null){
    alert('Gender not checked'); //Alert, nothing was checked.
}
}

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
function focusUname() {
  document.getElementById("unameError").innerHTML = "";
  document.getElementById("myUname").style.background = "yellow";
  
}

function blurUname() {
  var x = document.forms["myForm"]["uname"].value;
  if (x == ""){
  document.getElementById("unameError").innerHTML ="<span style='color: red;'>Name must be filled out</span>"; 
  document.getElementById("myUname").style.background = "red";
  } else if (x.length<2){
  document.getElementById("unameError").innerHTML ="<span style='color: red;'>Username must be atleast two characters</span>"; 
  document.getElementById("myUname").style.background = "red";
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

function checkPassword(str)
{
    var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(str);
}
function focusPsw() {
  document.getElementById("pswError").innerHTML = "";
  document.getElementById("myPsw").style.background = "yellow";
  
}

function blurPsw() {
  var x = document.forms["myForm"]["psw"].value;
  if (x == ""){

  document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must be filled out</span>"; 
  document.getElementById("myPsw").style.background = "red";
  } else {
      var pass = checkPassword(x);
      if(!pass) {
        document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must contain min 8 letter password, with at least a symbol, upper and lower case letters and a number</span>"; 
        document.getElementById("myPsw").style.background = "red";
      }
  }
}

function focusPswNew() {
  document.getElementById("pswNewError").innerHTML = "";
  document.getElementById("myPswNew").style.background = "yellow";
  
}

function blurPswNew() {
  var x = document.forms["myForm"]["pswNew"].value;
  if (x == ""){

  document.getElementById("pswNewError").innerHTML ="<span style='color: red;'>Password must be filled out</span>"; 
  document.getElementById("myPswNew").style.background = "red";
  }
  else {
    var pass = checkPassword(x);
    if(!pass) {
      document.getElementById("pswNewError").innerHTML ="<span style='color: red;'>Password must contain min 8 letter password, with at least a symbol, upper and lower case letters and a number</span>"; 
      document.getElementById("myPswNew").style.background = "red";
    }
  }
}


function validateForm() {
  var a = document.forms["myForm"]["name"].value;

  checkGender();
  if (a == null || a == "") {
      alert("Please Fill All Required Field");
      return false;
    } else {
      checkGender();
    }
  

 
}
</script>


</body>
<html>
  
      
    

