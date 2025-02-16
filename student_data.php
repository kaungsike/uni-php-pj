<?php

session_start();

$student_id = $_SESSION['student_id'];

if($student_id){

$is_student_sql = "SELECT * FROM users WHERE id=$student_id";

$is_student_query = mysqli_query($con, $is_student_sql);

$student_data = mysqli_fetch_assoc($is_student_query);

}

?>