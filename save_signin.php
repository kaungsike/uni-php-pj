<?php

session_start();

include("./__sql_connection.php");

echo "<pre>";

print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from users where email='$email' and password='$password'";

echo $sql;

// die();

$query = mysqli_query($con, $sql);

$user = mysqli_fetch_assoc($query);

if (!$user) {
    echo "<script>
    alert(`Please check your username and password and try again. If you've forgotten your password, use the 'Forgot Password' link.`);
    location.href='./signin.php';
</script>";
    exit();
}

if ($user['role']=="student") {
    $_SESSION['student_id'] = $user['id'];
    echo "<script>
    alert('Sign in successfully..');
    location.href = './student_profile.php';
</script>";
    exit();
}

if($user['role']=="monitor"){
    $_SESSION['monitor_id'] = $user['id'];
    echo "<script>
    alert('Sign in successfully.');
    location.href = './monitor_profile.php';
</script>";
}
