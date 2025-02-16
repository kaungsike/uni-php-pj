<?php

include("./__sql_connection.php");

echo "<pre>";

print_r($_POST);



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$year = $_POST['year'];
$major = $_POST['major'];
$id = $_POST['id'];
$student_id = $year . " " . $major . "-" . $id;


// check is email is already exis 
$sql = "select * from students where email='$email'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);

var_dump($data);

if ($data) {
    echo "<script>
        alert('This email already has an account.');
        location.href = './signup.php';
    </script>";
    exit;
}

// add new student
$sql_add_new_user = "INSERT INTO users (student_id, name, email, password) 
VALUES ('$student_id', '$name', '$email', '$password');
";

mysqli_begin_transaction($con);

try {

    if (!mysqli_query($con, $sql_add_new_user)) {
        throw new Exception("Failed to insert new user: " . mysqli_error($con));
    }

    mysqli_commit($con);

    echo "<script>
        alert('Account created successfully.');
        location.href = './signin.php';
    </script>";

} catch (Exception $e) {

    mysqli_rollback($con);

    echo "<script>
        alert('Failed to create account: " . $e->getMessage() . "');
        location.href = './signup.php';
    </script>";
}
