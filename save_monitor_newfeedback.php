<?php

session_start();

include("./__sql_connection.php");
include("./monitor_data.php");

echo "<pre>";

print_r($_POST);


$context = $_POST['context'];
$post_as_anonymous =(int) $_POST['post_as_anonymous'];
$monitor_id = $monitor_data['id'];

$post_as_anonymous;

// die();

$sql_create_new_post = "INSERT INTO posts (student_id, content,is_anonymous, status) 
VALUES ($monitor_id,'$context',$post_as_anonymous, 'pending')";

echo $sql_create_new_post;

// die();
mysqli_begin_transaction($con);

try {

    if (!mysqli_query($con, $sql_create_new_post)) {
        throw new Exception("Failed to create new post : " . mysqli_error($con));
    }

    mysqli_commit($con);

    echo "<script>
        alert('New post created successfully.');
        location.href = './monitor_manage_pending_post.php';
    </script>";

} catch (Exception $e) {

    mysqli_rollback($con);

    echo "<script>
        alert('Failed to create post: " . $e->getMessage() . "');
        location.href = './monitor_manage_pending_post.php';
    </script>";
}
