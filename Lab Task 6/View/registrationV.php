


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

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: Red;}
legend{ outline: 1px solid red; width: 115px; }
fieldset{ width: 400px; }
</style>
</head>
<body>  

   
    <h2 >Student Signup Form</h2>
    <form action="../Controller/registrationC.php" method="post" >  
    
    
    <fieldset>
      <legend>REGISTRATION</legend>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name;?>" >
      <span class="error">* <?php echo $_SESSION['nameErr'];?></span>
      <hr>
      <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $_SESSION['emailErr'];?></span>
      <hr>
      <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname">
        <span class="error">* <?php echo $_SESSION['unameErr'];?></span>
        <hr>
        <label for="psw"><b>New Password:</b></label>
        <input type="password" placeholder="Enter New Password" name="psw">
        <span class="error">* <?php echo $_SESSION['passwordErr'];?></span>
      <hr>
      <label for="pswNew"><b>Retype New Password:</b></label>
        <input type="password" placeholder="Retype New Password" name="pswNew">
        <span class="error">* <?php echo $_SESSION['newPasswordErr'];?></span>
        <hr>
        <fieldset>
      <legend>Gender</legend>
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
      <span class="error">* <?php echo $_SESSION['genderErr'];?></span>
      </fieldset>
      <hr>
      <fieldset>
      <legend>Date Of Birth</legend>
      <label for="dob"><b>Date Of Birth</b></label>
      <input type="date" name="dob"  value="<?php echo $_SESSION['dobErr'];?>" required>
      <span class="error">* </span>
      </fieldset>
      <br>
      
      
      <input type="submit" name="submit" value="Submit">
      </fieldset>  
    </form>
    
    
    </body>
    </html>