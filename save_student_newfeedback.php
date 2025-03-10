<?php
include("./__sql_connection.php");
include("./student_data.php");

header('Content-Type: application/json');

$student_id = $student_data['id'];

if (!isset($_POST['post_as_anonymous']) || !isset($_POST['context'])) {
    echo json_encode(["success" => false, "message" => "Missing data"]);
    exit;
}

sleep(3);

$is_anonymous = mysqli_real_escape_string($con, $_POST['post_as_anonymous']);
$context = mysqli_real_escape_string($con, $_POST['context']);

mysqli_begin_transaction($con);

try {
    // Insert the new post
    $create_new_post_sql = "INSERT INTO posts (user_id, content, is_anonymous, status) VALUES ($student_id, '$context', $is_anonymous, 'pending')";

    if (!mysqli_query($con, $create_new_post_sql)) {
        throw new Exception("Failed to create new post: " . mysqli_error($con));
    }

    $post_id = mysqli_insert_id($con);

    $uploadDir = "uploads/";
    $imagePaths = [];

    // Create the upload directory if it doesn't exist
    if (!file_exists($uploadDir)) {
        if (!mkdir($uploadDir, 0777, true)) {
            throw new Exception("Failed to create upload directory.");
        }
    }

    // Process each uploaded image
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        if ($_FILES['images']['error'][$key] !== UPLOAD_ERR_OK) {
            throw new Exception("Error uploading file: " . $_FILES['images']['name'][$key]);
        }

        // Generate a unique file name
        $fileName = uniqid() . '_' . basename($_FILES['images']['name'][$key]);
        $targetFilePath = $uploadDir . $fileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($tmp_name, $targetFilePath)) {
            $imagePaths[] = $targetFilePath;

            // Insert the image path into the database
            $insert_image_sql = "INSERT INTO post_images (post_id, image_path) VALUES ($post_id, '$targetFilePath')";
            if (!mysqli_query($con, $insert_image_sql)) {
                throw new Exception("Failed to insert image into database: " . mysqli_error($con));
            }
        } else {
            throw new Exception("Failed to upload image: " . $_FILES['images']['name'][$key]);
        }
    }

    // Commit the transaction
    mysqli_commit($con);

    echo json_encode(["success" => true, "message" => "Post and images uploaded successfully!", "image_paths" => $imagePaths]);
    exit;
} catch (Exception $e) {
    // Rollback in case of an error
    mysqli_rollback($con);
    echo json_encode(["success" => false, "message" => "Failed to upload post and images: " . $e->getMessage()]);
    exit;
}