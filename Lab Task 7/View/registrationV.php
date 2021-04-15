<?php
// define variables and set to empty values
$nameErr = $emailErr =$unameErr = $passwordErr = $newPasswordErr = $genderErr  = $dobErr= "";
$name = $email = $uname = $password = $newPassword = $gender = $dob ="";

if(!isset($_POST["submit"]))  {
session_start();
$_SESSION['nameErr'] = $nameErr;
$_SESSION['emailErr'] = $emailErr;
$_SESSION['unameErr'] = $unameErr;
$_SESSION['passwordErr'] = $passwordErr; 
$_SESSION['newPasswordErr'] = $newPasswordErr;
$_SESSION['genderErr'] = $genderErr;
$_SESSION['dobErr'] = $dobErr;
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


 <!-- Icon 
 <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>
-->
<form action="../Controller/registrationC.php" method="post">

    <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name;?>" >
      <span class="error">* <?php echo $_SESSION['nameErr'];?></span>
       <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $_SESSION['emailErr'];?></span>
        <input type="text" placeholder="Enter Username" name="uname">
        <span class="error">* <?php echo $_SESSION['unameErr'];?></span>
        <input type="password" placeholder="Enter New Password" name="psw">
        <span class="error">* <?php echo $_SESSION['passwordErr'];?></span>
        <input type="password" placeholder="Retype New Password" name="pswNew">
        <span class="error">* <?php echo $_SESSION['newPasswordErr'];?></span>
        <br> <br>
        <label for="gender"><b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
      <span class="error">* <?php echo $_SESSION['genderErr'];?></span>
      <br><br>
      <label for="dob"><b>Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="date" name="dob"  value="<?php echo $_SESSION['dobErr'];?>" required>
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
  
      
    

