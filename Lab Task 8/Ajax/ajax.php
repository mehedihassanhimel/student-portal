<?php 
include('../View/navbar2.php');
session_start(); 
// To check if session is started. 
if(isset($_SESSION["userid"])) 
{ 
if(time()-$_SESSION["login_time_stamp"] >600) 
{ 
	session_unset(); 
	session_destroy(); 
	header("Location:../View/loginV.php"); 
} 
} 
else
{ 
header("Location:../View/login.php"); 
} 
?>
<html>
<head>
<style>
body{background-color: rgb(22, 181, 187);}
/* body{background-color: rgb(22, 181, 187);} */
body {
    text-align: center;
}
form {
    display: inline-block;
}
div {
    text-align: inline-block;
}
</style>
</head>
<body>
    <br><br>
<form>
Select a SEMESTER:
<select name="cds" onchange="showCourse(this.value)">
  <option value="">Select a Semester:</option>
  <option value="Summer 19-20">Summer 19-20</option>
  <option value="Fall 20-21">Fall 20-21</option>
  <option value="Spring 20-21">Spring 20-21</option>
</select>
</form>
<div id="txt"></div>
<script>
function showCourse(str) {
  if (str=="") {
    document.getElementById("txt").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txt").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getcourse.php?q="+str,true);
  xmlhttp.send();
}
</script>
</body>
</html>