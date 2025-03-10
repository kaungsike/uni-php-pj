<?php

session_start();
include("./__sql_connection.php");

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['email']) || !isset($data['password'])) {
    echo json_encode(["success" => false, "message" => "Missing email or password."]);
    exit;
}

$email = $data['email'];
$password = $data['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "ss", $email, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo json_encode(["success" => false, "message" => "User does not match!"]);
    exit;
}

// Store session and send JSON response
if ($user['role'] === "student") {
    $_SESSION['student_id'] = $user['id'];
    echo json_encode(["success" => true, "message" => "Sign in successful!", "redirect" => "./student_profile.php"]);
    exit;
}

if ($user['role'] === "monitor") {
    $_SESSION['monitor_id'] = $user['id'];
    echo json_encode(["success" => true, "message" => "Sign in successful!", "redirect" => "./monitor_profile.php"]);
    exit;
}

// If role is unknown
echo json_encode(["success" => false, "message" => "Invalid user role."]);
exit;

?>






<!-- <?php

session_start();


include("./__sql_connection.php");
header('Content-Type: text/plain');

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['email']) && isset($data['password'])) {

    sleep(1);

    $email = $data['email'];
    $password = $data['password'];

    $sql = "select * from users where email='$email' and password='$password'";
    $query = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($query);

    if (!$user) {
        echo json_encode(["success" => true, "User Doesn't match!" => "No user"]);
        echo "<script>alert('User does not match!');
    location.href='./signin.php';
        </script>";
        echo json_encode(["success" => true, "There is no user" => "User doesn't match!"]);

        exit;
    }


    echo json_encode($user['role']);

    if ($user['role'] == "student") {
        $_SESSION['student_id'] = $user['id'];
        exit;
    }

    if ($user['role'] == 'monitor') {
        $_SESSION['monitor_id'] = $user['id'];
        exit;
    }

    exit;
} else {
    echo json_encode(["success" => true, "don't receive data" => "it don't work i think"]);
}

exit;

?> -->



