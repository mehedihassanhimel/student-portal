<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: Blue;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $degreeErr = $bloodGErr = "";
$name = $email = $gender = $dob = $degree = $bloodG ="";

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
      // check if name only contains letters and whitespace
      }
    }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 >User Form Validation using PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth: <input type="date" name="dob" required  value="<?php echo $dob;?>">
  <span class="error">* </span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:

  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSC 
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSC 
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>



  <label for="bloodG">Blood Group:</label>
  <select id="bloodG" name="bloodG" required>
   <option value="">None</option>  
  <option value="a+">A+</option>
    <option value="a-">A-</option>
    <option value="b+">B+</option>
    <option value="b-">B-</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
//echo $dob;
//echo "<br><br>";
echo $degree;
echo "<br>";
echo $bloodG;
echo "<br>";
?>

</body>
</html>