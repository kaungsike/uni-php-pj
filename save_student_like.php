<?php

session_start();

include("./__sql_connection.php");
include("./student_data.php");

header('Content-Type: text/plain');

$data = json_decode(file_get_contents("php://input"), true);

$student_id= $student_data['id'];

if ($data['is_like']) {

    if (isset($data['post_id']) && isset($data['is_like'])) {

        $post_id = $data['post_id'];
        $is_like = $data['is_like'];

        $unlike_sql = "DELETE FROM likes WHERE likes.post_id = $post_id and likes.user_id=$student_id";

        mysqli_begin_transaction($con);

        try {

            if (!mysqli_query($con, $unlike_sql)) {
                throw new Exception("Failed to create new post : " . mysqli_error($con));
            }

            mysqli_commit($con);

            $updated_sql = "SELECT COUNT(*) AS like_count, GROUP_CONCAT(user_id) AS liked_users FROM likes WHERE post_id = $post_id";
            $updated_query = mysqli_query($con, $updated_sql);
            $updated_data = mysqli_fetch_assoc($updated_query);
            $updated_data['id'] = $student_id;

            echo json_encode($updated_data);

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
} else {
    if (isset($data['post_id']) && isset($data['is_like'])) {

        $post_id = $data['post_id'];
        $is_like = $data['is_like'];

        $unlike_sql = "INSERT INTO likes (id, user_id, post_id, created_at) VALUES (NULL, '$student_id', '$post_id', CURRENT_TIMESTAMP);";

        mysqli_begin_transaction($con);

        try {

            if (!mysqli_query($con, $unlike_sql)) {
                throw new Exception("Failed to create new post : " . mysqli_error($con));
            }

            mysqli_commit($con);

            $updated_sql = "SELECT COUNT(*) AS like_count, GROUP_CONCAT(user_id) AS liked_users FROM likes WHERE post_id = $post_id";
            $updated_query = mysqli_query($con, $updated_sql);
            $updated_data = mysqli_fetch_assoc($updated_query);
            $updated_data['id'] = $student_id;

            echo json_encode($updated_data);

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
}


exit;
