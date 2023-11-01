<?php
if (isset($_POST[fname]) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST[message]))
{
if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['message'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "not email";
}else{
$body =$fname."\n".$lname."\n".$email."\n".$message;
if(mail('yadavsatyam868@gmail.com','try','$body','From: chanakya.gq')){
echo "sent";
}else{
echo "not sent";
}
}
}else{
echo "not work";
}
}else{
echo "something goes worngs";
}
?>
