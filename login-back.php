
<?php
include("includes/conn.php");
session_start();


$password=$_POST["password"];
$email=$_POST["email"];

$sel="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
$res=$conn->query($sel);

$count=mysqli_num_rows($res);
$row=$res->fetch_assoc();

if ($count>0) 
{
    $_SESSION['type']=$row['type'];
    $_SESSION['uname']=$row['name'];
    $_SESSION['login']=1;
 

header("Location:index.php");
}
else 
{

echo "false";

header("Location:login.php");

}
?>