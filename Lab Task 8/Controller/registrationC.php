<?php 
$nameErr=$emailErr=$unameErr=$passwordErr=$newPasswordErr=$genderErr=$dobErr=""; 
$name = $email = $uname = $password = $newPassword = $gender = $dob ="";
 $regexName="/^[a-zA-Z0-9_\.-]+$/";
 //$regexPass = "/^[#?!@$%^&*-]+$/";
 $regexPass = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

 
 ?>

<?php

if(isset($_POST["submit"])) {  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
   } 
  else{
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
     }
   }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
   } 
  else {
    $email = $_POST["email"];
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

  if (empty($_POST["dob"])) 
   {
     $dobErr = "Date is required";
   }
  else
   {
     $dob = $_POST["dob"];
   }
   
  if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } 
  else {
      $gender = $_POST["gender"];
    }
  if (strlen($_POST["uname"])<2) {
    $unameErr = "Username must contain atleast two characters";
  }
  else {
    $uname = $_POST["uname"];
    if (!preg_match($regexName,$uname)) {
      $unameErr = "Only alpha numeric characters, period, dash or uderscore allowed";
   }
  }
  


  if (strlen($_POST["psw"])<8) {
   $passwordErr ="Password must contain atleast eight characters"; 
  }

  else{
    $password = $_POST["psw"];
    if (!preg_match("#\W+#",$password)) {
      $passwordErr = "Must contain atleast one special characters";
    }
  }
    if (strlen($_POST["pswNew"])<8) {
      $newPasswordErr ="Password must contain atleast eight characters"; 
     }
    
    else {
      $newPassword = $_POST["pswNew"];
      if(!preg_match("#\W+#",$newPassword)) {
        $newPasswordErr = "Must contain atleast one special characters";
      }
    }
    if ($password != $newPassword) {    
      $newPasswordErr ="Password did not match";
    }
    
        

}


if(empty($nameErr) && empty($passwordErr) && empty($newPasswordErr) && empty($genderErr) && empty($dobErr) && empty($unameErr) && empty($emailErr)  )
{
  include ('../Model/regDataDB.php'); 
}
else {
  include ('../View/registrationV.php'); 
}
    
 ?>  



