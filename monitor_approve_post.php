<?php
header('Content-Type: text/plain');
include("./__sql_connection.php");

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["post_id"])) {

    $post_id = $input["post_id"];

    sleep(3);

    $approve_post_sql = "UPDATE `posts` SET `status` = 'approved' WHERE `posts`.`id` = $post_id";
    $approve_post_query = mysqli_query($con,$approve_post_sql);

    if($approve_post_query){
        echo json_encode(["success" => true, "received_post_id" => "it work i think"]);
    }
    
} else {
    echo "No post_id received";
}
exit;


