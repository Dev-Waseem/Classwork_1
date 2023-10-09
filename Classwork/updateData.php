<?php
include('navbar.php');
include('config.php');

if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $update = "UPDATE `users` set username = '$name', email = '$email' where id = '$user_id'";
    $result = mysqli_query($connection, $update);
    if($result){
       echo "<script>alert('User Updated Successfully');</script>";
    }

}
?>