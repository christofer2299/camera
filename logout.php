<?php

session_start();
$_SESSION['type']="";
$_SESSION['login']=0;

header("Location:login.php");

?>