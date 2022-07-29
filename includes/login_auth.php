<?php
session_start();
// echo $_SESSION["type"];
if($_SESSION["login"]!=1){
header("Location:login.php");
}


?>