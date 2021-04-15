
<?php
include 'navBar2.php';
$passwordErr = $passwordErrNew = $passwordErrNew2 = "";
?>
<!DOCTYPE HTML>  
<html>
<head>
<link rel = "stylesheet" type="text/css" href="../CSS/changePasswordV.css">
</head>
<body>  
<div class="form">
<form action="../Controller/changePasswordC.php" method="post">

    <label for="pswOld"><b>Current Password:</b></label>
    <input type="password" placeholder="Enter Current Password" name="pswOld" required>
    <span class="error">* <?php echo $passwordErr;?></span>
  <br>
    <label for="pswNew"><b>New Password:</b></label>
    <input type="password" placeholder="Enter New Password" name="pswNew" required>
    <span class="error">* <?php echo $passwordErrNew;?></span>
  <br>
  <label for="pswNew2"><b>Retype New Password:</b></label>
    <input type="password" placeholder="Retype New Password" name="pswNew2" required>
    <span class="error">* <?php echo $passwordErrNew2;?></span>
    <br><br>
    <input type="submit" value=Submit>
    <input type="button" class="cancelbtn" value=Cancel>
    <br>

</form>
</div>

</body>
<html>