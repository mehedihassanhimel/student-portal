<?php

include "../Model/config.php";

if(isset($_POST['submit'])){

    $userid = mysqli_real_escape_string($con,$_POST['userid']);
    $password = mysqli_real_escape_string($con,$_POST['psw']);

    if ($userid != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from student where id='".$userid."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
        if(isset($_POST["remember"])) {
	        setcookie ("userid",$_POST["userid"],time()+ (86400), "/");
	        setcookie ("password",$_POST["psw"],time()+ (86400), "/");
	         
        } else {
	        setcookie("username","");
	        setcookie("password","");
	        
        }

        session_start();
        $_SESSION["userid"] = $userid;
        $_SESSION["password"] = $password;
        // Login time is stored in a session variable 
        $_SESSION["login_time_stamp"] = time(); 
        header('Location: home1.php');
        // header('Location: loginSession.php');
        exit();

        }
        else{
            echo "Invalid ID or password";
            include '../View/loginV.php';
            
        }

    }  elseif ($userid == "" || $password == ""){
        echo "Input Text Field Empty";
        include '../View/loginV.php';
    }

}