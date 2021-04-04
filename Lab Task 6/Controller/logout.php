<?php
session_start();
session_destroy();
header("Location: ../View/loginV.php");
?>