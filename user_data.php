<?php

session_start();

$id = $_SESSION['id'];

if($id){

$is_user_sql = "SELECT * FROM students WHERE id=$id";

$is_user_query = mysqli_query($con, $is_user_sql);

$user_data = mysqli_fetch_assoc($is_user_query);

}

?>