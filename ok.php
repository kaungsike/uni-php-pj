<?php 

session_start();

include("./__sql_connection.php");
include("./monitor_data.php");

echo "<pre>";

print_r($_POST);