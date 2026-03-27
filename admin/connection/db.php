<?php 
$conn = mysqli_connect('127.0.0.1', 'root', '', 'restaurants_and_hotel_job_management_system');

if (!$conn) {
    die('❌ Connection Error: ' . mysqli_connect_error());
}
?>