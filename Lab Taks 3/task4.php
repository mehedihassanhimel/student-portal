<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter Username</label>";  
      }  
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  
      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Enter DOB</label>";  
      }  
     
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'               =>     $_POST['email'], 
                     'uname'               =>     $_POST['uname'],  
                     'gender'          =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Data is added to data.json file Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  





<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: Red;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr =$unameErr = $passwordErr = $newPasswordErr = $genderErr  = $dobErr= "";
$name = $email = $uname = $password = $newPassword = $gender = $dob ="";

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

}


$regexName="/^[a-zA-Z0-9_\.-]+$/";
//$regexPass = "/^[#?!@$%^&*-]+$/";
$regexPass = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (strlen($_POST["uname"])<2) {
    $unameErr = "Username must contain atleast two characters";
  } else {
    $uname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match($regexName,$uname)) {
      $unameErr = "Only alpha numeric characters, period, dash or uderscore allowed";
    }
  }
}
  


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (strlen($_POST["psw"])<8) {
      $passwordErr ="Password must contain atleast eight characters"; 
    }
  
    else  {
      
      $password = test_input($_POST["psw"]);
      
      $newPassword = test_input($_POST["pswNew"]);
      
      // check if name only contains letters and whitespace
      if (!preg_match("#\W+#",$password)) {
         $passwordErr = "Must contain atleast one special characters";
             }
      elseif (!preg_match("#\W+#",$newPassword)) {
              $newPasswordErr = "Must contain atleast one special characters";
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
    legend{ outline: 1px solid red; width: 115px; }
  fieldset{ width: 400px; }
</style>
<h2 >Storing data in a JSON file</h2>
<form method="post" >  

<?php   
  if(isset($error))  
    {  
     echo $error;  
    }  
 ?>  
<fieldset>
  <legend>REGISTRATION</legend>
  <label for="name"><b>Name</b></label>
  <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name;?>" >
  <span class="error">* <?php echo $nameErr;?></span>
  <hr>
  <label for="email"><b>Email</b></label>
   <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <hr>
  <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <span class="error">* <?php echo $unameErr;?></span>
    <hr>
    <label for="psw"><b>New Password:</b></label>
    <input type="password" placeholder="Enter New Password" name="psw" required>
    <span class="error">* <?php echo $passwordErr;?></span>
  <hr>
  <label for="pswNew"><b>Retype New Password:</b></label>
    <input type="password" placeholder="Retype New Password" name="pswNew" required>
    <span class="error">* <?php echo $newPasswordErr;?></span>
    <hr>
    <fieldset>
  <legend>Gender</legend>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
  <hr>
  <fieldset>
  <legend>Date Of Birth</legend>
  <label for="dob"><b>Date Of Birth</b></label>
  <input type="date" name="dob" required  value="<?php echo $dob;?>" required>
  <span class="error">* </span>
  </fieldset>
  <br>
  
  
  <input type="submit" name="submit" value="Submit">
  </fieldset>  
</form>

<?php  
   if(isset($message))  
     {  
      echo "<h2>$message</h2>";  
    }  
?> 

</body>
</html>