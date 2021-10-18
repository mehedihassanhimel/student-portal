<?php
$passwordErr = "";
// if(!isset($id)) {
//   $id="";
// }
// if(!isset($pass)) {
//   $pass="";
// }
// if(isset($_COOKIE['userid'])){echo $_COOKIE['userid'];}
?>
<!DOCTYPE html>  
<html>
<head>
<title>Login</title>
<head>  
   <link rel="stylesheet" type="text/css" href="../CSS/styleLogin.css"/> 
   <script src="login.js" type="text/javascript"></script>  
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
<form name="myForm" action="../Controller/login.php" method="post" onsubmit="return validateForm()">

    <input type="text" placeholder="Enter ID" id="myName" onfocus="focusID()" onblur="blurID()" class="fadeIn second" name="userid"  value="<?php if(isset($_COOKIE['userid'])){echo $_COOKIE['userid'];}?>">
    <span class="error">*</span>
    <p id="nameError"></p>
  <br>
    
    <input type="password" placeholder="Enter Password" id="myPsw" onfocus="focusPsw()" onblur="blurPsw()" class="fadeIn third" name="psw" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
    <span class="error">* <?php echo $passwordErr;?></span>
    <p id="pswError"></p>
  <br>
  <label>
    <input type="checkbox"  name="remember"> Remember me
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

