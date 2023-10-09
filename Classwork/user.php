<?php
include('navbar.php');
require("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container text-center table-bordered mt-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $print = "SELECT * FROM `users`";
                $result = mysqli_query($connection, $print);
                while($row = mysqli_fetch_assoc($result)){ 
                    ?>
                    <tr>
                    <th scope='row'> <?php echo $row['id'] ?></th>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><a class="btn btn-warning" href="update.php?id=<?php echo $row['id']?>">Update</td>
                    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Delete</td>
                </tr>
                <?php 
            }
            ?>
                
            
                
            </tbody>
        </table>
    </div>
</body>

</html>