<?php
    include 'navbar.html';
    $email = $emailErr = "";

    if(isset($_POST["submit"]))  
 {  
     
      if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }
}  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
      else{
          header("Location: forgotToLogin.php");
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.error {color: Red;}
legend{ outline: 1px solid red; width: 75px; }
fieldset{ width: 300px; }
</style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<fieldset>
  <legend>Forgot Password</legend>

    <label for="email"><b>Email</b></label>
       <input type="text" placeholder="e.g example@gmail.com" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
  <br>
    <br>
    <button type="submit">Submit</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <br>
    </filedset>
</form>

</body>
</html>