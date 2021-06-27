<?php>

$connection =mysqli_connect('localhost','root');

mysqli_select_db($connection, "event");

$user= $_POST['user'];
$email= $_post['email'];
$message= $_post['message'];

$query= "INSERT INTO  'userinfodata'('user' ,'email', 'message') values ('$user',$email','$message')";
mysqli_query($connection,$query);
echo"message sent";

?>