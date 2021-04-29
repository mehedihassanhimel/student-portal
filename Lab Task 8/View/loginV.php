<?php
$passwordErr = "";
// if(!isset($id)) {
//   $id="";
// }
// if(!isset($pass)) {
//   $pass="";
// }
// if(isset($_COOKIE['userid'])){echo $_COOKIE['userid'];}
?>
<!DOCTYPE html>  
<html>
<head>
<title>Login</title>
<head>  
   <link rel="stylesheet" type="text/css" href="../CSS/styleLogin.css"/>  
</head> 
<style>
  .error {color: blue}
</style>
</head>
<body>  

  <div class="wrapper fadeInDown">
  <div id="formContent">

<!-- Tabs Titles -->
<h2 class="active"> Sign In </h2>
    <a href="registrationV.php">
      <h2 class="inactive underlineHover">Sign Up </h2>
    </a>


 <!-- Icon 
 <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>
-->
<form name="myForm" action="../Controller/login.php" method="post" onsubmit="return validateForm()">

    <input type="text" placeholder="Enter ID" id="myName" onfocus="focusID()" onblur="blurID()" class="fadeIn second" name="userid"  value="<?php if(isset($_COOKIE['userid'])){echo $_COOKIE['userid'];}?>">
    <span class="error">*</span>
    <p id="nameError"></p>
  <br>
    
    <input type="password" placeholder="Enter Password" id="myPsw" onfocus="focusPsw()" onblur="blurPsw()" class="fadeIn third" name="psw" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
    <span class="error">* <?php echo $passwordErr;?></span>
    <p id="pswError"></p>
  <br>
  <label>
    <input type="checkbox"  name="remember"> Remember me
    </label>
    <br>
    <!--<button type="submit">Login</button>-->
    <input type="submit" value="Submit" name="submit" id="log" />

    <br>
  
</form>

<!-- Remind Passowrd -->
<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
</div>  

</div>



<script>
function focusID() {
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("myName").style.background = "yellow";
  
}

function blurID() {
  var x = document.forms["myForm"]["userid"].value;
  if (x == ""){

  document.getElementById("nameError").innerHTML ="<span style='color: red;'>ID must be filled out</span>"; 
  document.getElementById("myName").style.background = "red";
  }
}





function focusPsw() {
  document.getElementById("pswError").innerHTML = "";
  document.getElementById("myPsw").style.background = "yellow";
  
}
function checkPassword(str)
{
    var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(str);
}

function blurPsw() {
  var x = document.forms["myForm"]["psw"].value;
  if (x == ""){
  document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must be filled out</span>"; 
  document.getElementById("myPsw").style.background = "red";
  }
  else if(x.length<8) {
    document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must be at least eight characters</span>"; 
    document.getElementById("myPsw").style.background = "red";
  }
  // else {
  //   var pass = checkPassword(x);
  //   if(!pass) {
  //     document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must contain min 8 letter password, with at least a symbol, upper and lower case letters and a number</span>"; 
  //     document.getElementById("myPsw").style.background = "red";
  //   }
  // }
}


function validateForm() {
  var a = document.forms["myForm"]["userid"].value;
  var b = document.forms["myForm"]["psw"].value;

  if (a == null || a == "", b == null || b == "") {
      alert("Please Fill All Required Field");
      return false;
    }
 
}

function validateForm() {
  var a = document.forms["myForm"]["userid"].value;
  var b = document.forms["myForm"]["psw"].value;

  if (a == null || a == "", b == null || b == "") {
      alert("Please Fill All Required Field");
      return false;
    }  
    else if(b.length<8, b.length<8) {
    alert("Password must be at least eight characters");
    return false;
  
  }
 
}



</script>


</body>
<html>

