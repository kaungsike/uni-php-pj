<?php

include("./__sql_connection.php");

echo "<pre>";

print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from students where email='$email' and password='$password'";

$query = mysqli_query($con, $sql);

$student = mysqli_fetch_assoc($query);

if ($student) {
    $endPoint = "profile_student.php?id=" . $student['id'];
    header("location:$endPoint");
} else {
    echo "<script>
        alert(`Please check your username and password and try again. If you've forgotten your password, use the 'Forgot Password' link.`);
        location.href='./signin.php';
    </script>";
}