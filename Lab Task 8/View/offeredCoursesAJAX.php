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
<script>
function showText(str) {
    if (str.length == 0) {
        document.getElementById("txt").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txt").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "offeredCourses.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Search:</b></p>
<form>
Course: <input type="text" onkeyup="showText(this.value)">
</form>
<p>Suggestions: <span id="txt"></span></p>
</body>
</html>