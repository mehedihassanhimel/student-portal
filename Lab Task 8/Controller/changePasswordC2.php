
<?php   
include('session.php');
?>

<?php

// define variables and set to empty values
$password = $passwordNew = $passwordNew2 = "";
$passwordErr = $passwordNewErr = $passwordNewErr2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (strlen($_POST["pswOld"])<8) {
    $passwordErr ="Password must contain atleast eight characters"; 
  }

  elseif (strlen($_POST["pswNew"])<8) {
    $passwordNewErr ="Password must contain atleast eight characters"; 
  }
  elseif (strlen($_POST["pswNew2"])<8) {
    $passwordNewErr2 ="Password must contain atleast eight characters"; 
  }


  else {
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
 if ($password==$_SESSION['password'] && $passwordNew == $passwordNew2 &&  $password!=$passwordNew && $passwordNew!="" && $passwordNew2!="") {
  $upPass=$_POST['pswNew'];
  $_SESSION['password']=$upPass;
  $link = mysqli_connect("localhost", "root", "", "Mydb");
  
  if($link === false){
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
  }
  
  $sql = "UPDATE student SET password='".$upPass."'
  WHERE id=".$_SESSION["userid"];

  if(mysqli_query($link, $sql)){
    include '../View/navBar2.php';
    echo "Password changed successfully";
  } else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($link);
  } 
  mysqli_close($link);



    
}
else {
  
  
  
//   echo $passwordErr;
//   echo $passwordNewErr;
//   echo  $passwordNewErr2;

  if($password!=$_SESSION['password'] && $password!="") {
     echo "You typed the wrong password";
   }
  elseif($password == $passwordNew && $passwordNew!="" && $passwordNew2!="") {
    echo "New Password should not be same as the Current Password";
  }
  elseif($passwordNew != $passwordNew2 && $passwordNew!="" && $passwordNew2!="") {
    echo "New and Retyped password did not match";
  }
}                                     

?>