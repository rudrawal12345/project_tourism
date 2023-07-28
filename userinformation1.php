<?php
error_reporting(0);

$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection,"rishabhdata");

$user = $_POST['user'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`number`,`message`) VALUES ('$user','$email','$number','$message') ";

mysqli_query($connection,$query);

echo "SAVE DATA SUCCESSFUL";

?>