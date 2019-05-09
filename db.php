<?php 

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=go_banner',
    'root', '' );

$data = $_POST;

session_start();

?>