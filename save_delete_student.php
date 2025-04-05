<?php
include("./__sql_connection.php");
include("./monitor_data.php");

header('Content-Type: application/json');

$monitor_id = $monitor_data['id'];

// Check if all required fields are present
if (!isset($_POST['id'])) {
    echo json_encode(["success" => false, "message" => "Missing data"]);
    exit;
}

// Delay for testing (remove in production)
sleep(3);

$id = mysqli_real_escape_string($con, $_POST['id']);

// Update student details
$delete_student_sql = "DELETE FROM users WHERE `users`.`id` = $id";
if (mysqli_query($con, $delete_student_sql)) {
    echo json_encode(["success" => true, "message" => "Student deleted successfully!"]);
} else {
    echo json_encode(["success" => false, "message" => "Failed to delete student: " . mysqli_error($con)]);
}

exit;
