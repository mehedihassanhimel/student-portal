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



function focusGender() {
  document.getElementById("genderError").innerHTML = "";
  document.getElementById("myGender").style.background = "yellow";
  
}

function blurGender() {
  var x = document.forms["myForm"]["gender"].value;
  if (x == ""){

  document.getElementById("genderError").innerHTML ="<span style='color: red;'>Gender must be filled out</span>"; 
  document.getElementById("myGender").style.background = "red";
  }
}

function focusDob() {
  document.getElementById("dobError").innerHTML = "";
  document.getElementById("myDob").style.background = "yellow";
  
}

function blurDob() {
  var x = document.forms["myForm"]["dob"].value;
  if (x == ""){

  document.getElementById("dobError").innerHTML ="<span style='color: red;'>Date of Birth must be filled out</span>"; 
  document.getElementById("myDob").style.background = "red";
  }
}

function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["email"].value;
  var c = document.forms["myForm"]["gender"].value;


  if (a == null || a == "") {
      alert("Please Fill All Required Field");
      return false;
    }
  else if (b == null || b == "") {
      alert("Please Fill All Required Field");
      return false;
    }
  else if (c == null || c == "") {
      alert("Please Fill All Required Field");
      return false;
    }
  else{
    var x = document.forms["myForm"]["email"].value;
    var t = ValidateEmail(x);
    if(!t) {
      alert("You have entered an invalid email address!");
      return false;
    }
  }
 
}