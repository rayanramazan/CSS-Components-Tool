<?php 
include'config.php';
if(isset($_POST['login'])){
    $username = sec($_POST['u-name']);
    $password = sec($_POST['u-password']);

    $query = mysqli_query($db ,"SELECT * FROM `admin` WHERE `email` = '$username' AND `password` = '$password'");

    if(mysqli_num_rows($query) > 0){
    	while($row = mysqli_fetch_assoc($query)){
        $_SESSION['userid'] = $row['id'];
        header("Location:../home.php");
        }
    }else{
        header("Location:../home.php");
    }
}
?>