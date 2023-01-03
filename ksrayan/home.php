<?php include'include/nav.php';?>
<?php

if($userid == false){
    header('Location: index.php');
}
?>
<section>
        <div class="logo">
            <img src="img/1.png" alt="" srcset="">
        </div>
        <div class="cards">
            <div class="card">
                <i class="fas fa-comments"></i>
                <a href="comments.php">پەیام</a>
            </div>
            <div class="card">
                <i class="far fa-eye"></i>
                <a href="">سەرەدانکەر</a>
                <p><?php echo getRows('visitors');?></p>
            </div>
            <div class="card">
                <i class="fas fa-plus-circle"></i>
                <a href="upload.php">زێدەکرنا بابەتى</a>
            </div>
            <div class="card">
                <i class="far fa-edit"></i>
                <a href="edit.php">گوهرین</a>
            </div>
        </div>
    </section>
    <?php include'include/footer.php';?>