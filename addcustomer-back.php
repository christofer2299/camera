<?php
include("includes/conn.php");

$id='cid'.date('y').date('m').date('d').date('h').date('i').date('s');
$name=$_POST["name"];

$email=$_POST["email"];
$address=$_POST["address"];
$phone=$_POST["phone"];
#image files and temp file
$adhar_img=$_FILES["adhar_img"]["name"];
$adhar_tmp=$_FILES["adhar_img"]["tmp_name"];

# file name split
$temp=explode(".",$adhar_img);

#new name
$tname="ADH".date('y').date('m').date('d').date('h').date('i').date('s');

$newname=$tname.'.'.end($temp);
# upload path 

$path="upload/".$newname;

#file upload

move_uploaded_file($adhar_tmp,$path);




$other_img=$_FILES["other_img"]["name"];
$other_tmp=$_FILES["other_img"]["tmp_name"];

# file name split
$o_temp=explode(".",$other_img);

#new name
$o_tname="ODH".date('y').date('m').date('d').date('h').date('i').date('s');


$o_newname=$o_tname.'.'.end($o_temp);
# upload path 

$o_path="upload/".$o_newname;

#file upload

move_uploaded_file($other_tmp,$o_path);

$ins="INSERT INTO `customer`(`cid`,`name`,`email`,`address`,`phone`,`adhar_image`,`other_image`)VALUES('$id','$name','$email','$address','$phone','$path','$o_path')";
$conn->query($ins);

header("Location:show.php");
?>