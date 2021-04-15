<?php
$passwordErr = "";
?>
<!DOCTYPE html>  
<html>
<head>
<title>Login</title>
<head>  
   <link rel="stylesheet" type="text/css" href="../CSS/styleLogin.css"/>  
</head> 
<style>
  .error {color: blue}
</style>
</head>
<body>  

  <div class="wrapper fadeInDown">
  <div id="formContent">

<!-- Tabs Titles -->
<h2 class="active"> Sign In </h2>
    <a href="registrationV.php">
      <h2 class="inactive underlineHover">Sign Up </h2>
    </a>


 <!-- Icon 
 <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>
-->
<form action="../Controller/login.php" method="post">

    <input type="text" placeholder="Enter ID" id="login" class="fadeIn second" name="userid" required>
    <span class="error">*</span>
  <br>
    
    <input type="password" placeholder="Enter Password" id="password" class="fadeIn third" name="psw" required>
    <span class="error">* <?php echo $passwordErr;?></span>

  <br>
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

