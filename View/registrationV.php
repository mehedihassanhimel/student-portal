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
   <script src="registration.js" type="text/javascript"></script>  
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




</body>
<html>
  
      
    

