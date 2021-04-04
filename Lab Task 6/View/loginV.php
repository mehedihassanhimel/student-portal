<?php
$passwordErr = "";
?>
<!DOCTYPE html>  
<html>
<head>
<title>Login</title>
<style>
</style>
</head>
<body>  
<style>
    legend{ outline: 1px solid red; width: 150px; }
  fieldset{ width: 350px;}
</style>
<div align="center">
  <h2>Student Login Page</h2>
<form action="../Controller/login.php" method="post">
<fieldset>
  <legend>Personal Information</legend>
    <label for="userid"><b>ID</b></label>
    <input type="text" placeholder="Enter ID" name="userid" required>
    <span class="error">*</span>
  <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <span class="error">* <?php echo $passwordErr;?></span>
  <br>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <!--<button type="submit">Login</button>-->
    <input type="submit" value="Submit" name="submit" id="submit" />
    <button type="button" class="cancelbtn">Cancel</button>
    <br>
    <span class="psw">Forgot <a href="forgotPassword.php">password?</a></span>
    </filedset>
</form>

</div>

</body>
<html>