<?php 
include('navbar2.html');
session_start(); 
$jname = $jemail = $jgender = $jdob ="";
$nameErr = $emailErr = $genderErr  = $dobErr= "";
$name = $email = $gender = $dob ="";
// To check if session is started. 
if(isset($_SESSION["user"])) 
{ 
if(time()-$_SESSION["login_time_stamp"] >600) 
{ 
	session_unset(); 
	session_destroy(); 
	header("login.php"); 
} 
} 
else
{ 
header("Location:login.php"); 
} 




$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
foreach ($data as $key => $entry) {
      if ($entry['uname'] == $_SESSION['user']) {
          $jname = $data[$key]['name'];
          $jemail = $data[$key]['email'];
          $jgender = $data[$key]['gender'];
          $jdob = $data[$key]['dob'];
      }
  }

// define variables and set to empty values


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["dob"])) {
      $dobErr = "Date is required";
    } else {
      $dob = test_input($_POST["dob"]);
      }
    }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

} else  
{  
    foreach ($data as $key => $entry) {
        if ($entry['uname'] == $_SESSION['user']) {
            $data[$key]['name'] = $name;
        }
    }
    $newJsonString = json_encode($data);
    if(file_put_contents('data.json', $newJsonString)){
        header("Location:apply.php");
        exit();
    }
}

    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
//   if(isset($error))  
//     {  
//      echo $error;  
//     }  
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

   
<form action="editProfile.php" method="post" >  
    
    <br>
    <fieldset>
        <br>
      <legend>Profile</legend>
      <label for="name"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="name" value="<?php echo $jname;?>">
      <hr>
      <label for="email"><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="email" value="<?php echo $jemail;?>">
      <hr>
      <label for="gender"><b>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
      <input type="text" name="gender" value="<?php echo $jgender;?>">
      <hr>
      <label for="dob"><b>Date Of Birth: </b></label>
      <input type="text" name="dob" value="<?php echo $jdob;?>">
      <br>
      
      <br>
      <button type="submit">Apply Changes</button>
    <button type="button" class="cancelbtn">Cancel</button>
      </fieldset>  
    </form>
    </body>
    </html>