
<?php
include('../Controller/session.php');
include 'navBar2.php';
$passwordErr = $passwordErrNew = $passwordErrNew2 = "";
?>
<!DOCTYPE HTML>  
<html>
<head>
<link rel = "stylesheet" type="text/css" href="../CSS/changePasswordV2.css">
<script src="changePassword.js" type="text/javascript"></script>  
</head>
<body>  
<div class="form">
<form action="../Controller/changePasswordC2.php" method="post" name="myForm" onsubmit="return validateForm()">

    <label for="pswOld"><b>Current Password:</b></label>
    <input type="password" placeholder="Enter Current Password" id="myPswOld"  onfocus="focusPswOld()" onblur="blurPswOld()" name="pswOld">
    <span class="error">* <?php echo $passwordErr;?></span>
    <p id="pswOldError"></p>
    <label for="pswNew"><b>New Password:</b></label>
    <input type="password" placeholder="Enter New Password" id="myPswNew"  onfocus="focusPswNew()" onblur="blurPswNew()" name="pswNew" >
    <span class="error">* <?php echo $passwordErrNew;?></span>
    <p id="pswNewError"></p>
 
  <label for="pswNew2"><b>Retype New Password:</b></label>
    <input type="password" placeholder="Retype New Password" id="myPswNew2"  onfocus="focusPswNew2()" onblur="blurPswNew2()" name="pswNew2" >
    <span class="error">* <?php echo $passwordErrNew2;?></span>
    <p id="pswNew2Error"></p>
    <br><br>
    <input type="submit" value=Submit>
    <a href="../Controller/home1.php"> <input type="button" class="cancelbtn" value=Cancel></a>
    <br>

</form>
</div>

</body>
<html>