<?php
include('navbar.html');
// define variables and set to empty values
$nameErr = $passwordErr = $wrong="";
$name = $password ="";
$regexName="/^[a-zA-Z0-9_\.-]+$/";
//$regexPass = "/^[#?!@$%^&*-]+$/";
$regexPass = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (strlen($_POST["uname"])<2) {
    $nameErr = "Username must contain atleast two characters";
  } else {
    $name = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match($regexName,$name)) {
      $nameErr = "Only alpha numeric characters, period, dash or uderscore allowed";
    }
  }
}
  


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (strlen($_POST["psw"])<8) {
      $passwordErr ="Password must contain atleast eight characters"; 
    } else  {
      $password = test_input($_POST["psw"]);
      // check if name only contains letters and whitespace
      if (!preg_match("#\W+#",$password)) {
        $passwordErr = "Must contain atleast one special characters";
      }
    }
  }


//json
  $data = file_get_contents("data.json");  
  $data = json_decode($data, true);  
  foreach($data as $row)  
  {  
    $jname=$row["uname"];
    $jpassword=$row["password"];
         
     
  } 

  // if($nameErr == "" && $passwordErr == "" && $name=="admin" && $password=="admin123@")
 //Session starts 
session_start(); 
  if(isset($_POST['uname']) && isset($_POST['psw']))
  {
    if($jname==$name && $jpassword==$password){
      // Session Variables are created 
	    $_SESSION["user"] = $name;
      $_SESSION["password"] = $password;
	// Login time is stored in a session variable 
	    $_SESSION["login_time_stamp"] = time(); 
	    header("Location:home1.php");
      // header('Location: loginSession.php');
      exit();
    }
    else{
      $wrong= "Enter correct username and password"; 
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>  
<html>
<head>
<title>Login</title>
<style>
</style>
</head>
<body>  
<style>
    legend{ outline: 1px solid red; width: 150px; }
  fieldset{ width: 350px;}
</style>
<div align="center">
  <h2>Student Login Page</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<fieldset>
  <legend>Personal Information</legend>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <span class="error">* <?php echo $nameErr;?></span>
  <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <span class="error">* <?php echo $passwordErr;?></span>
  <br>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <br>
    <span class="psw">Forgot <a href="#">password?</a></span>
    </filedset>
</form>

</div>
<?php
echo "<p align = 'center'>" . $wrong . "</p>";


?>
</body>
<html>