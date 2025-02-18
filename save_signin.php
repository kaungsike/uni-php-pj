<?php

session_start();


include("./__sql_connection.php");
header('Content-Type: text/plain');

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['email']) && isset($data['password'])) {

    sleep(3);

    $email = $data['email'];
    $password = $data['password'];

    $sql = "select * from users where email='$email' and password='$password'";
    $query = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($query);

    if (!$user) {
        echo json_encode(["success" => true, "User Doesn't match!" => "No user"]);
        exit;
    }

    echo json_encode($user['role']);
    
    if($user['role']=="student"){
        $_SESSION['student_id'] = $user['id'];
        exit;
    }

    if($user['role']=='monitor'){
        $_SESSION['monitor_id'] = $user['id'];
        exit;
    }

    exit;

} else {
    echo json_encode(["success" => true, "don't receive data" => "it don't work i think"]);
}

exit;


// if (!$user) {
//     echo "<script>
//     alert(`Please check your username and password and try again. If you've forgotten your password, use the 'Forgot Password' link.`);
//     location.href='./signin.php';
// </script>";
//     exit();
// }

// if ($user['role'] == "student") {
//     $_SESSION['student_id'] = $user['id'];
//     echo "<script>
//     alert('Sign in successfully..');
//     location.href = './student_profile.php';
// </script>";
//     exit();
// }

// if ($user['role'] == "monitor") {
//     $_SESSION['monitor_id'] = $user['id'];
//     echo "<script>
//     alert('Sign in successfully.');
//     location.href = './monitor_profile.php';
// </script>";
// }
