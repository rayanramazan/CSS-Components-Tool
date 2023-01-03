<?php include'include/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>رێڤەبەر</title>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header style="font-family: 'NRT Reg';">کورد سۆرس</header>
        <a href="home.php" class="active">
            <i class="fas fa-qrcode"></i>
            <span>دەستپێک</span>
        </a>
        <a href="edit.php" class="active">
            <i class="far fa-edit"></i>
            <span>گوهرین</span>
        </a>
        <a href="upload.php" class="active">
            <i class="fas fa-plus-circle"></i>
            <span>زێدەکرنا بابەتى</span>
        </a>
        <a href="home.php" class="active">
            <i class="far fa-eye"></i>
            <span>سەرەدانکەر</span>
        </a>
        <a href="comments.php" class="active">
            <i class="fas fa-comments"></i>
            <span>پەیام</span>
        </a>
        <a href="?logout" class="active" id="logout">
        <i class="fad fa-sign-out-alt"></i>
            <span>دەرکەفتن</span>
        </a>
    </div>