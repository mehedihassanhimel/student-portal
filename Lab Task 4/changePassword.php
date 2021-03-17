
<?php
include 'navBar2.html';
$passwordErr = $passwordErrNew = $passwordErrNew2 = "";
$password = $passwordNew = $passwordNew2 = $jpassword= "";

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

<?php
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
foreach ($data as $key => $entry) {
  if ($entry['uname'] == "mehedi") {
    $jpassword=$data[$key]['password'];
      $data[$key]['password'] = $passwordNew;
  }
}
 if($password==$jpassword && $passwordNew == $passwordNew2 &&  $password!=$passwordNew && $passwordNew!="" && $passwordNew2!="") {
    echo "Password changed successfully";
  $jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
foreach ($data as $key => $entry) {
  if ($entry['uname'] == "mehedi") {
      $data[$key]['password'] = $passwordNew;
  }
    
  }
  $newJsonString = json_encode($data);
  file_put_contents('data.json', $newJsonString);
}
  elseif($password!=$jpassword && $password!="") {
     echo "You typed the wrong password";
   }
  elseif($password == $passwordNew && $passwordNew!="" && $passwordNew2!="") {
    echo "New Password should not be same as the Current Password";
  }
  elseif($passwordNew != $passwordNew2 && $passwordNew!="" && $passwordNew2!="") {
    echo "New and Retyped password did not match";
  }

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
  fieldset{ width: 380px; }
</style>
<br><br>
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