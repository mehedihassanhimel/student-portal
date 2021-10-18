<?php 

   // echo "Registration Completed  Successfully";
   // echo "<p>Go Back To <a href='loginV.php'>Login</a> Page</p>";
   session_start();
   echo "<body style='background-color:white; font-size:30px; text-align: center'>";
   echo "Registration successful ";
   echo "Your ID is: " . $_SESSION['id'];
   session_destroy();
   //include '../View/loginV.php';
   echo "<p>Go Back To <a href='../View/loginV.php'>Login</a> Page</p>";

?> 