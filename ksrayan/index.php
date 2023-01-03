<?php include'include/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>چوونە ژوور</title>
</head>
<body>
    <div class="login-form">
        <form action="include/login.php" method="POST">
            <img src="img/login.svg" alt="" srcset="">
            <p>چوونە ژوور</p>
            <div class="container">
                <label for="" class="fa fa-user icon"></label>
                <input type="text" name="u-name" placeholder="Username" id="user">
            </div>
            <div class="container">
                <label for="" class="fa fa-lock icon"></label>
                <input type="password" name="u-password" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn login">LOGIN</button>
        </form>
    </div>
    
</body>
</html>