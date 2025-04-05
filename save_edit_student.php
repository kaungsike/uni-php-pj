<?php
include("./__sql_connection.php");
include("./monitor_data.php");

header('Content-Type: application/json');

$monitor_id = $monitor_data['id'];

// Check if all required fields are present
if (!isset($_POST['id'], $_POST['name'], $_POST['studentId'], $_POST['email'])) {
    echo json_encode(["success" => false, "message" => "Missing data"]);
    exit;
}

// Delay for testing (remove in production)
sleep(3);

$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$studentId = mysqli_real_escape_string($con, $_POST['studentId']);
$email = mysqli_real_escape_string($con, $_POST['email']);

// Update student details
$edit_student_sql = "UPDATE `users` SET `student_id` = '$studentId', `name` = '$name', `email` = '$email' WHERE `id` = '$id'";

if (mysqli_query($con, $edit_student_sql)) {
    echo json_encode(["success" => true, "message" => "Student details updated successfully!"]);
} else {
    echo json_encode(["success" => false, "message" => "Failed to update student details: " . mysqli_error($con)]);
}
exit;
