<?php 
session_start();
$_SESSION['nameErr'] = "";
$_SESSION['emailErr'] = "";
$_SESSION['unameErr'] = "";
$_SESSION['passwordErr'] = "";
$_SESSION['newPasswordErr'] = "";
$_SESSION['genderErr'] = "";
$_SESSION['dobErr'] = "";

//$nameErr = $emailErr =$unameErr = $passwordErr = $newPasswordErr = $genderErr  = $dobErr= "";
$name = $email = $uname = $password = $newPassword = $gender = $dob ="";
$count=0;
 $regexName="/^[a-zA-Z0-9_\.-]+$/";
 //$regexPass = "/^[#?!@$%^&*-]+$/";
 $regexPass = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

 
 ?>

<?php
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST["submit"])) {  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $_SESSION['nameErr'] = $nameErr;
   } 
  else{
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $_SESSION['nameErr'] = $nameErr;
     }
   }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $_SESSION['emailErr'] = $emailErr;
   } 
  else {
    $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
       $_SESSION['emailErr'] = $emailErr;
     }
   }

  if (empty($_POST["dob"])) 
   {
     $dobErr = "Date is required";
     $_SESSION['dobErr'] = $dobErr;
   }
  else
   {
     $dob = test_input($_POST["dob"]);
   }
   
  if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        $_SESSION['genderErr'] = $genderErr;
    } 
  else {
      $gender = test_input($_POST["gender"]);
    }
  if (strlen($_POST["uname"])<2) {
    $unameErr = "Username must contain atleast two characters";
    $_SESSION['unameErr'] = $unameErr;
  }
  else {
    $uname = test_input($_POST["uname"]);
    if (!preg_match($regexName,$uname)) {
      $unameErr = "Only alpha numeric characters, period, dash or uderscore allowed";
      $_SESSION['unameErr'] = $unameErr;
   }
  }
  

  



  if (strlen($_POST["psw"])<8) {
   $passwordErr ="Password must contain atleast eight characters"; 
   $_SESSION['passwordErr'] = $passwordErr;
  }

  else{
    $password = test_input($_POST["psw"]);
    if (!preg_match("#\W+#",$password)) {
      $passwordErr = "Must contain atleast one special characters";
      $_SESSION['PassowrdErr'] = $passwordErr;
    }
  }
    if (strlen($_POST["pswNew"])<8) {
      $newPasswordErr ="Password must contain atleast eight characters"; 
      $_SESSION['newPasswordErr'] = $newPasswordErr;
     }
    
    else {
      $newPassword = test_input($_POST["pswNew"]);
      if(!preg_match("#\W+#",$newPassword)) {
        $newPasswordErr = "Must contain atleast one special characters";
        $_SESSION['newPasswordErr'] = $newPasswordErr;
      }
    }
    if ($password != $newPassword) {    
      $newPasswordErr ="Password did not match";
      $_SESSION['newPasswordErr'] = $newPasswordErr;
    }
    
        
      
  

} 
//include '../View/registrationV.php';
if(isset($_POST["submit"]))
{
  if($_SESSION['nameErr'] == "" && $_SESSION['emailErr'] == "" && $_SESSION['unameErr'] == "" && $_SESSION['passwordErr'] == "" && $_SESSION['newPasswordErr'] == "" && $_SESSION['genderErr'] == "" && $_SESSION['dobErr'] == "")
    {

      include '../Model/regDataDB.php';

 } 

}


    
 ?>  



