<?php

session_start();

include("./__sql_connection.php");
include("./monitor_data.php");

header('Content-Type: text/plain');

$data = json_decode(file_get_contents("php://input"), true);

$monitor_id = $monitor_data['id'];


if (isset($data['post_id']) && isset($data['context'])) {

    sleep(2);

    $post_id = $data['post_id'];
    $context = $data['context'];

    $new_comment_sql = "INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `content`, `created_at`) VALUES (NULL, '$monitor_id', '$post_id', NULL, '$context', CURRENT_TIMESTAMP)";

    mysqli_begin_transaction($con);

    try {

        if (!mysqli_query($con, $new_comment_sql)) {
            throw new Exception("Failed to create new post : " . mysqli_error($con));
        }

        mysqli_commit($con);

        echo json_encode(true);

        exit;
    } catch (Exception $e) {

        mysqli_rollback($con);

        echo json_encode(false);

        exit;
    }
} else {
    echo json_encode(["success" => true, "don't receive data" => "it don't work i think"]);
    exit;
}



exit;
