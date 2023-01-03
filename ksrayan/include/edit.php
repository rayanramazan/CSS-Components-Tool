<?php
include'config.php';
if(isset($_POST['change'])){

    $id = sec($_POST['id']);
    $name = sec($_POST['name']);
    $image = sec($_POST['image']);
    $user = sec($_POST['user']);
    $date = sec($_POST['date']);

    $query = mysqli_query($db , "UPDATE `category` SET `name` = '$name' , `image` = '$image' ,
     `user` = '$user' , `date` = '$date' WHERE `id` = '$id'");
    if($query){
        header("Location: ../edit.php?success");
    }
}

?>