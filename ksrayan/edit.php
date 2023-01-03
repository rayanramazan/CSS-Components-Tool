<?php include'include/nav.php';?>
<section>
    <div class="logo">
        <img src="img/1.png" alt="" srcset="">
    </div>
    <div class="table">
        <table>
            <thead>
            <tr >
                <td>#</td>
                <td>ناڤ</td>
                <td>وێنە</td>
                <td>دروستکرن</td>
                <td>بەروار</td>
                <td>گوهرین</td>
            </tr>
        </thead>
        <?php
            $query = mysqli_query($db , "SELECT * FROM `category`");
            while($row = mysqli_fetch_assoc($query)){?>
        
        <form action="include/edit.php" method="POST">
            <tr>
                <input type="text" name="id" value="<?php echo sec($row['id']); ?>" hidden>
                <td><?php echo sec($row['id']); ?></td>
                <td><input name="name" type="text" value="<?php echo sec($row['name']); ?>"></td>
                <td><input name="image" type="text" value="<?php echo sec($row['image']); ?>"></td>
                <td><input name="user" type="text" value="<?php echo sec($row['user']); ?>"></td>
                <td><input name="date" type="text" value="<?php echo sec($row['date']); ?>"></td>
                <td><button name="change">گوهرین</button></td>
            </tr>
        </form>
        <?php } ?>
        </table>
    </div>
</section>
<?php include'include/footer.php';?>