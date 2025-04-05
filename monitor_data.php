<?php

session_start();

$monitor_id = $_SESSION['monitor_id'];

if(!$monitor_id){
    echo "<script>
            alert('Time out');
            location.href = './clean_session.php';
          </script>";
    exit();
}

if($monitor_id){

$is_monitor_sql = "SELECT * FROM users WHERE id=$monitor_id";

$is_monitor_query = mysqli_query($con, $is_monitor_sql);

$monitor_data = mysqli_fetch_assoc($is_monitor_query);


}

?>