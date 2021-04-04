
<?php
include 'navBar2.php';
$passwordErr = $passwordErrNew = $passwordErrNew2 = "";
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  


<style>
    legend{ outline: 1px solid red; width: 200px; }
  fieldset{ width: 360px; }
</style>
<form action="../Controller/changePasswordC.php" method="post">
<fieldset>
  <legend>Change Password</legend>
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
    <br>
    <button type="submit">Change password</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <br>

</fieldset>
</form>

</body>
<html>