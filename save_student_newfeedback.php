<?php

include("./__sql_connection.php");
include("./student_data.php");

header('Content-Type: text/plain');

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $student_data['id'];

if (isset($data['post_as_anonymous']) && isset($data['context'])) {

    sleep(3);

    $is_anonymous = $data['post_as_anonymous'];
    $context = $data['context'];

    $create_new_post_sql = "INSERT INTO posts (student_id, content,is_anonymous,status) 
VALUES ($student_id,'$context',$is_anonymous, 'pending')";

    mysqli_begin_transaction($con);

    try {

        if (!mysqli_query($con, $create_new_post_sql)) {
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
}

exit;
