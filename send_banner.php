<?php
require 'db.php';
$UID = $_SESSION['logged_user']['id'];
$name_user = $_SESSION['logged_user']['name'];
$email_user = $_SESSION['logged_user']['email'];
echo $UID;
echo $name_user;
echo $email_user;
?>