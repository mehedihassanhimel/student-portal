<?php   
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
    header("Location:../View/loginV.php");
}
?> 