<?php
include("./__sql_connection.php");
include("./student_data.php");

header('Content-Type: application/json');

$student_id = $student_data['id'];

if (!isset($_POST['name']) || !isset($_POST['user_id'])) {
    echo json_encode(["success" => false, "message" => "Missing required data"]);
    exit;
}

$name = mysqli_real_escape_string($con, $_POST['name']);
$user_id = $_POST['user_id'];
$bio = isset($_POST['bio']) ? mysqli_real_escape_string($con, $_POST['bio']) : null;
$profile_photo = isset($_POST['profile_photo_url']) ? $_POST['profile_photo_url'] : null;
$profile_base64 = isset($_POST['profile_base64']) ? $_POST['profile_base64'] : null;

mysqli_begin_transaction($con);

sleep(2);

try {

    $update_sql = "UPDATE users SET name = '$name', bio = '$bio' WHERE id = $user_id";
    if (!mysqli_query($con, $update_sql)) {
        throw new Exception("Failed to update profile: " . mysqli_error($con));
    }

    $profile_photo_url = null;

    if ($profile_base64) {
        $uploadDir = "uploads/";
        if (!file_exists($uploadDir)) {
            if (!mkdir($uploadDir, 0777, true)) {
                throw new Exception("Failed to create upload directory.");
            }
        }

        $profile_base64 = preg_replace('#^data:image/\w+;base64,#i', '', $profile_base64);
        $imageData = base64_decode($profile_base64);
        if ($imageData === false) {
            throw new Exception("Invalid base64 image data.");
        }

        $imageName = uniqid() . ".png";
        $imagePath = $uploadDir . $imageName;

        if (file_put_contents($imagePath, $imageData)) {

            $update_image_sql = "UPDATE users SET profile_photo = '$imagePath' WHERE id = $user_id";
            if (!mysqli_query($con, $update_image_sql)) {
                throw new Exception("Failed to update profile image: " . mysqli_error($con));
            }

            $profile_photo_url = $imagePath;
        } else {
            throw new Exception("Failed to save image file.");
        }
    } elseif ($profile_photo) {

        $update_image_sql = "UPDATE users SET profile_photo = '$profile_photo' WHERE id = $user_id";
        if (!mysqli_query($con, $update_image_sql)) {
            throw new Exception("Failed to update profile image URL: " . mysqli_error($con));
        }

        $profile_photo_url = $profile_photo;
    }

    mysqli_commit($con);

    echo json_encode([
        "success" => true,
        "message" => "Profile updated successfully!",
        "bio" => $bio,
        "name" => $name,
        "profile_photo_url" => $profile_photo_url 
    ]);
    exit;
} catch (Exception $e) {
    mysqli_rollback($con);
    echo json_encode(["success" => false, "message" => "Error: " . $e->getMessage()]);
    exit;
}
