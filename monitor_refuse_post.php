<?php
header('Content-Type: text/plain');
include("./__sql_connection.php");

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["post_id"])) {

    $post_id = $input["post_id"];

    sleep(3);

    $refuse_post_sql = "UPDATE `posts` SET `status` = 'refused' WHERE `posts`.`id` = $post_id";
    $refuse_post_query = mysqli_query($con,$refuse_post_sql);

    if($refuse_post_query){
        echo json_encode(["success" => true, "received_post_id" => "it work i think refuse"]);
    }
    
} else {
    echo "No post_id received";
}
exit;


