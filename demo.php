<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'include/config.php';

$id = sec($_GET['id']);

$query = mysqli_query($db, "SELECT * FROM `category` WHERE `id` = '$id'");

while($row = mysqli_fetch_assoc($query)){
    echo stripslashes($row['tag']);
        } 
?>
</body>
</html>