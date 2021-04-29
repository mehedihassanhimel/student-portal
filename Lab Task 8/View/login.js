
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
