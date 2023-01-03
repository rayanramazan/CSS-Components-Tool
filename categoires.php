<?php include'include/nav.php'; ?>
<section>
    <div class="grid">
      <div class="right">

        <div class="card">
            <div class="title">
             <p>جۆرێن دیزاینێ</p>
            </div>
          </div>
        <?php 
        $query = mysqli_query($db , "SELECT * FROM `categories`");

        while($row = mysqli_fetch_assoc($query)){?>

        <div class="card">
          <div class="title">
           <a href="category.php?label=<?php echo sec($row['categories']); ?>"><p><?php echo sec($row['name']); ?></p></a>
          </div>
          <div class="box">
            <p><?php echo sec($row['description']); ?></p>
          </div>
        </div>
        <?php } ?>          
      </div>
      <?php include'include/news.php'; ?>
    </div>
  </section>
  <?php include'include/footer.php'; ?>