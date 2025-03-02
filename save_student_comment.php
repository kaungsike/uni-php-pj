<?php


include("./__sql_connection.php");
include("./student_data.php");

header('Content-Type: text/plain');

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $student_data['id'];


if (isset($data['post_id']) && isset($data['context'])) {

    sleep(2);

    $post_id = $data['post_id'];
    $context = $data['context'];
    $parent_id = isset($data['parent_id']) && !empty($data['parent_id']) ? $data['parent_id'] : 'NULL';

    mysqli_begin_transaction($con);

    try {

        $new_comment_sql = "INSERT INTO `comments` (`user_id`, `post_id`, `parent_id`, `content`, `created_at`) 
                            VALUES ('$student_id', '$post_id', $parent_id, '$context', CURRENT_TIMESTAMP)";

        if (!mysqli_query($con, $new_comment_sql)) {
            throw new Exception("Failed to create new post : " . mysqli_error($con));
        }

        $comment_id = mysqli_insert_id($con);


        $fetch_comment_sql = "SELECT comments.*, users.name AS user_name, users.profile_photo, users.role 
                              FROM comments 
                              JOIN users ON comments.user_id = users.id 
                              WHERE comments.id = '$comment_id'";

        $result = mysqli_query($con, $fetch_comment_sql);

        if (!$result) {
            throw new Exception("Failed to fetch the new comment: " . mysqli_error($con));
        }

        $comment_data = mysqli_fetch_assoc($result);

        mysqli_commit($con);

        echo json_encode($comment_data);

        exit;
    } catch (Exception $e) {
        mysqli_rollback($con);
        echo json_encode(["success" => false, "error" => $e->getMessage()]);
        exit;
    }
} else {
    echo json_encode(["success" => true, "don't receive data" => "it don't work i think"]);
    exit;
}



exit;
