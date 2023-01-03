<?php include'include/nav.php'; ?>
<section>
    <div class="grid">
      <div class="right">
        <?php
        if(isset($_GET['page'])){
          $page = sec($_GET['page']);
        }
        else{
          $page = 1;
        }

        $num_per_page = 8;
        $page = (float)$page;
        $start_from = ($page-1)*8;

        $query = mysqli_query($db, "SELECT * FROM `category` WHERE `categories` = 'javascript' LIMIT $start_from,$num_per_page");
        while($row = mysqli_fetch_assoc($query)){?>
        <div class="card">
          <div class="title">
           <a href="view.php?post=<?php echo sec($row['id']); ?>"><p><?php echo sec($row['name']);?></p></a>
          </div>
          <div class="box">
            <a href="view.php?post=<?php echo sec($row['id']); ?>">
            <img src="img/<?php echo sec($row['image']);?>" alt="" srcset="">
            <p>
              <?php echo sec($row['short-description']); ?>
            </p>
          </a>
          <p class="by">
               <a href="https://www.facebook.com/rayan.kordesh.5/"><?php echo sec($row['user']); ?></a>
                : هاتیە درووستکرن ژلایێ  
            
              </p>
            <p class="date">
              بەروار  : 
              <?php echo sec($row['date']); ?>
            
            </p>
          </div>
        </div>
        <hr style="margin-bottom: 4rem;"> 
        <?php } ?>
      </div>
      <?php include'include/news.php'; ?>
    </div>
    <?php
            $pr_query = "select * from category where categories = 'javascript'";
            $pr_result = mysqli_query($db,$pr_query);
            $total_record = mysqli_num_rows($pr_result);

            $total_page = ceil($total_record/$num_per_page);


            if($page>1){
                echo " <div style='display: flex; align-item: center; justify-content: center;'>
                <a href='javascript.php?page=".($page-1)."' style='margin: 10px; color: #FFF; border: none; background: #75F; padding: 4px; border-radius: 5px;'>پێشتر</a>
                <div>
                ";
            }
            for($i=1;$i<$total_page;$i++){
                echo "
                <div style='display: flex; align-item: center; justify-content: center;'>
                <a href='javascript.php?page=".$i."' style='margin: 10px; color: #FFF; border: none; background: #75F; padding: 4px; border-radius: 5px;'>".$i."</a>
                <div>
                ";
            }

            if($i>$page){
                echo " <div style='display: flex; align-item: center; justify-content: center;'>
                <a href='javascript.php?page=".($page+1)."' style='margin: 10px; color: #FFF; border: none; background: #75F; padding: 4px; border-radius: 5px;'>دیڤدا</a>
                </div>
                ";
            }
        ?>
  </section>
  <?php include'include/footer.php'; ?>