<?php
require_once("./db.php");
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

$sql = "INSERT INTO `users` (firstname,lastname,middlename,tel,email,pass) VALUES ('$firstname', '$lastname',  '$middlename','$tel',  '$email',  '$pass')";
$conn->query($sql);