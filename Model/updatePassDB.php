<?php
$upPass=$_POST['pswNew'];
  $_SESSION['password']=$upPass;
  $link = mysqli_connect("localhost", "root", "", "Mydb");
  
  if($link === false){
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
  }
  
  $sql = "UPDATE student SET password='".$upPass."'
  WHERE id=".$_SESSION["userid"];

  if(mysqli_query($link, $sql)){
    echo "Password changed successfully";
  } else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($link);
  } 
  mysqli_close($link);

?>