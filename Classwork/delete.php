<?php
include('config.php');

$user_id = $_GET['id'];

$query = "DELETE FROM users WHERE id = '$user_id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "<script>alert('User Deleted!');</script>";
}


?>