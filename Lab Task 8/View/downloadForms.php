<?php
    include('../Controller/session.php');
    include('navbar2.php');
?>
<html>
<head>
<title>Download Forms</title>
<style>
    body 
    {
        background-color: rgb(22, 181, 187);
    }
  
    .button {
    display: inline-block;
    width: 115px;
    height: 50px;
    background: #425b61;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
}
div {
    text-align: center;
}
a {
    text-decoration: none;
}
</style>
</head>
<body>
    <br><br><br><br>
<div>
<a class="button" href="download.php?path=../downloads/dummy.txt">Download TEXT file</a>
       
<a class="button" href="download.php?path=../downloads/dummy.pdf">Download PDF1 file</a>
      
<a class="button" href="download.php?path=../downloads/dummy2.pdf">Download PDF2 file</a>
    
<a class="button" href="download.php?path=../downloads/dummy3.pdf">Download PDF3 file</a>
<a class="button" href="download.php?path=../downloads/dummy.jpeg">Download JPEG file</a>
</div>
</body>
</html>