
<div class="left">
        <div class="recom">
        <div class="title">
          <p> پێشنیارکرى </p>
        </div>
        <?php
        $query = mysqli_query($db , "SELECT * FROM `category` limit 3");
        while($row = mysqli_fetch_assoc($query)){?>
        
        <div class="recommended">
          <a href="view.php?post=<?php echo sec($row['id']); ?>">
            <img src="img/<?php echo sec($row['image']); ?>" alt="" srcset="">
            <p><?php echo sec($row['name']); ?></p>
          </a>
        </div>
        <hr style="margin-top: 1rem; margin-bottom: 1rem;">
        <?php } ?>
      </div>

      <div class="recom">
        <div class="title">
          <p> زۆرترین بکارهاتى </p>
        </div>
        <?php
            $query = mysqli_query($db , "SELECT * FROM `category` ORDER BY RAND() limit 3");
            while($row = mysqli_fetch_assoc($query)){?>
        <div class="recommended">
          <a href="view.php?post=<?php echo sec($row['id']); ?>">
            <img src="img/<?php echo sec($row['image']);?>">
            <p><?php echo sec($row['name']); ?></p>
          </a>
        </div>
        <hr style="margin-top: 1rem; margin-bottom: 1rem;">
        <?php } ?>
      </div>
      </div>