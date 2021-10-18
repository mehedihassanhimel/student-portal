<?php 
include('../View/navbar2.php');
include('../Controller/session.php');
?>
<html>
<head>
<style>
#dropdown{
 width:150px; 
 height:25px;
}
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

<form>
<br>
<br>Choose one from the list<br>

<br>
<select id="dropdown" name="users" onchange="showCourse(this.value)">
  <option value="">Select a Semester:</option>
  <option value="Summer 19-20">Summer 19-20</option>
  <option value="Fall 20-21">Fall 20-21</option>
  <option value="Spring 20-21">Spring 20-21</option>
</select>
</form>
<br>
<br><br>
<div id="txtHint"><b></b></div>


<script>
function showCourse(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../Controller/getcourse.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</body>
</html>