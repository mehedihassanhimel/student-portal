<?php 
include('../View/navbar2.php');
include('../Controller/session.php');
?>
<html>
<head>
    <style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
<body>

<form>
<br><br>
<b>Start typing a Course:</b><input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../Controller/offeredCourses.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

</body>
</html>