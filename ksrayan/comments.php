<?php include'include/nav.php';?>
<section>
        <div class="logo">
            <img src="img/1.png" alt="" srcset="">
        </div>
        <div class="cards-comments">
            <?php 
                $query = mysqli_query($db , "SELECT * FROM `contact`");
                while($row = mysqli_fetch_assoc($query)){?>
            <div class="card">
                <div class="head">
                    <p class="name"><?php echo sec($row['name']); ?></p>
                    <p class="email"><?php echo sec($row['email']); ?></p>
                </div>
                <hr>
                <div class="comments">
                    <p style="font-size: 1.2rem; text-align: center; margin-bottom: 10px;"><?php echo sec($row['subject']); ?></p>
                <?php echo sec($row['msg']); ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php include'include/footer.php';?>