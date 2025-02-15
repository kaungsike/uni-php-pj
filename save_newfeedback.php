<?php

session_start();

include("./__sql_connection.php");
include("./user_data.php");

echo "<pre>";

print_r($_POST);


$context = $_POST['context'];
$post_as_anonymous = $_POST['context'];
$student_id = $user_data['id'];

$sql_create_new_post = "INSERT INTO posts (student_id, content,is_anonymous, status) 
VALUES ($student_id,'$context',1, 'pending')";


mysqli_begin_transaction($con);

try {

    if (!mysqli_query($con, $sql_create_new_post)) {
        throw new Exception("Failed to create new post : " . mysqli_error($con));
    }

    mysqli_commit($con);

    echo "<script>
        alert('New post created successfully.');
        location.href = './explore.php';
    </script>";

} catch (Exception $e) {

    mysqli_rollback($con);

    echo "<script>
        alert('Failed to create post: " . $e->getMessage() . "');
        location.href = './explore.php';
    </script>";
}
