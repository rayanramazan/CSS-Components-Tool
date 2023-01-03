<?php

include'config.php';

if(isset($_POST['add'])){
    
    $name = sec($_POST['name']);
    $categories = sec($_POST['categories']);
    $make = sec($_POST['make']);
    $date = sec($_POST['date']);
    $image = sec($_POST['image']);
    $link = sec($_POST['link']);
    $short_description = sec($_POST['short-description']);
    $long_description = sec($_POST['long-description']);
    
    $query = mysqli_query($db , "INSERT INTO `category` (`user`,`date`,`name`,`categories`,`image`,`link`,`short-description`
    ,`long-description`) VALUES('$make','$date','$name','$categories','$image','$link','$short_description','$long_description')");

    if($query){
        header("Location: ../upload.php?success");
    }
}



?>