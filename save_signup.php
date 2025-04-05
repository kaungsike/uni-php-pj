<?php

include("./__sql_connection.php");

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['name'], $data['email'], $data['password'], $data['year'], $data['major'], $data['id'])) {
    echo json_encode(["success" => false, "message" => "Missing required fields."]);
    exit;
}

$name = trim($data['name']);
$email = trim($data['email']);
$password = $data['password'];
$year = trim($data['year']);
$major = trim($data['major']);
$id = trim($data['id']);
$student_id = "$year $major-$id";
$profile_photo = "https://cdn.vectorstock.com/i/500p/22/45/user-icon-profile-line-isolated-on-white-vector-50642245.jpg";

// Sanitize inputs
$name = mysqli_real_escape_string($con, $name);
$email = mysqli_real_escape_string($con, $email);
$year = mysqli_real_escape_string($con, $year);
$major = mysqli_real_escape_string($con, $major);
$id = mysqli_real_escape_string($con, $id);
$student_id = mysqli_real_escape_string($con, $student_id);

// Check if the email already exists
$sql = "SELECT id FROM users WHERE email = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_fetch_assoc($result)) {
    echo json_encode(["success" => false, "message" => "This email already has an account."]);
    exit;
}


// Insert new student
$sql_add_new_user = "INSERT INTO users (student_id, name, email, password , profile_photo ) VALUES (?, ?, ?, ?,?)";
$stmt = mysqli_prepare($con, $sql_add_new_user);
mysqli_stmt_bind_param($stmt, "sssss", $student_id, $name, $email, $password, $profile_photo);

mysqli_begin_transaction($con);

try {
    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Failed to insert new user: " . mysqli_error($con));
    }

    mysqli_commit($con);
    echo json_encode(["success" => true, "message" => "Account created successfully!"]);
} catch (Exception $e) {
    mysqli_rollback($con);
    echo json_encode(["success" => false, "message" => "Failed to create account: " . $e->getMessage()]);
}
