<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$passwordErr = $passwordErrNew = $passwordErrNew2 = "";
$password = $passwordNew = $passwordNew2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (strlen($_POST["pswOld"])<8) {
    $passwordErr ="Password must contain atleast eight characters"; 
  }

  elseif (strlen($_POST["pswNew"])<8) {
    $passwordErrNew ="Password must contain atleast eight characters"; 
  }
  elseif (strlen($_POST["pswNew2"])<8) {
    $passwordErrNew2 ="Password must contain atleast eight characters"; 
  }


  else  {
    $password = test_input($_POST["pswOld"]);
    
    $passwordNew = test_input($_POST["pswNew"]);
    
    $passwordNew2 = test_input($_POST["pswNew2"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("#\W+#",$password)) {
       $passwordErr = "Must contain atleast one special characters";
           }
    elseif (!preg_match("#\W+#",$passwordNew)) {
            $passwordNewErr = "Must contain atleast one special characters";
          }
    elseif (!preg_match("#\W+#",$passwordNew2)) {
            $passwordNewErr2 = "Must contain atleast one special characters";
           }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  
?>

<style>
    legend{ outline: 1px solid red; width: 200px; }
  fieldset{ width: 360px; }
</style>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
<?php
 if($passwordNew == $passwordNew2 &&  $password!=$passwordNew && $passwordNew!="" && $passwordNew2!="") {
    echo "Password changed successfully";
  }
  elseif($password == $passwordNew && $passwordNew!="" && $passwordNew2!="") {
    echo "New Password should not be same as the Current Password";
  }
  elseif($passwordNew != $passwordNew2 && $passwordNew!="" && $passwordNew2!="") {
    echo "New and Retyped password did not match";
  }

?>
</body>
<html>