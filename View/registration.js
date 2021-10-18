function checkGender() {
  var checked_gender = document.querySelector('input[name = "gender"]:checked');

// if(checked_gender != null){  //Test if something was checked
// alert(checked_gender.value); //Alert the value of the checked.
// } else {
  if(checked_gender == null){
    alert('Gender not checked'); //Alert, nothing was checked.
}
}

  function focusName() {
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("myName").style.background = "yellow";
  
}

function blurName() {
  var x = document.forms["myForm"]["name"].value;
  if (x == ""){
  document.getElementById("nameError").innerHTML ="<span style='color: red;'>Name must be filled out</span>"; 
  document.getElementById("myName").style.background = "red";
  }

}
function focusUname() {
  document.getElementById("unameError").innerHTML = "";
  document.getElementById("myUname").style.background = "yellow";
  
}

function blurUname() {
  var x = document.forms["myForm"]["uname"].value;
  if (x == ""){
  document.getElementById("unameError").innerHTML ="<span style='color: red;'>Name must be filled out</span>"; 
  document.getElementById("myUname").style.background = "red";
  } else if (x.length<2){
  document.getElementById("unameError").innerHTML ="<span style='color: red;'>Username must be atleast two characters</span>"; 
  document.getElementById("myUname").style.background = "red";
  }

}

function focusEmail() {
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("myEmail").style.background = "yellow";
  
}
function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.myEmail.value))
  {
    return (true)
  }
    // alert("You have entered an invalid email address!");
    document.getElementById("emailError").innerHTML ="<span style='color: red;'>You have entered an invalid email address!</span>"; 
    document.getElementById("myEmail").style.background = "red";
    return (false)
}
function blurEmail() {
  var x = document.forms["myForm"]["email"].value;
  if (x == ""){
  document.getElementById("emailError").innerHTML ="<span style='color: red;'>Email must be filled out</span>"; 
  document.getElementById("myEmail").style.background = "red";
  }
  else {
    ValidateEmail(x);
  }
}

function checkPassword(str)
{
    var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(str);
}
function focusPsw() {
  document.getElementById("pswError").innerHTML = "";
  document.getElementById("myPsw").style.background = "yellow";
  
}

function blurPsw() {
  var x = document.forms["myForm"]["psw"].value;
  if (x == ""){

  document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must be filled out</span>"; 
  document.getElementById("myPsw").style.background = "red";
  } else {
      var pass = checkPassword(x);
      if(!pass) {
        document.getElementById("pswError").innerHTML ="<span style='color: red;'>Password must contain min 8 letter password, with at least a symbol, upper and lower case letters and a number</span>"; 
        document.getElementById("myPsw").style.background = "red";
      }
  }
}

function focusPswNew() {
  document.getElementById("pswNewError").innerHTML = "";
  document.getElementById("myPswNew").style.background = "yellow";
  
}

function blurPswNew() {
  var x = document.forms["myForm"]["pswNew"].value;
  if (x == ""){

  document.getElementById("pswNewError").innerHTML ="<span style='color: red;'>Password must be filled out</span>"; 
  document.getElementById("myPswNew").style.background = "red";
  }
  else {
    var pass = checkPassword(x);
    if(!pass) {
      document.getElementById("pswNewError").innerHTML ="<span style='color: red;'>Password must contain min 8 letter password, with at least a symbol, upper and lower case letters and a number</span>"; 
      document.getElementById("myPswNew").style.background = "red";
    }
  }
}


function validateForm() {
  var a = document.forms["myForm"]["name"].value;

  checkGender();
  if (a == null || a == "") {
      alert("Please Fill All Required Field");
      return false;
    } else {
      checkGender();
    }
  

 
}
