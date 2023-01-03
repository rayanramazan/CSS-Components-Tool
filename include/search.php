<?php
  if(isset($_GET['btn-search'])){

      $design = sec($_GET['search']);
      if($design == null){
        header("Location: index.php");
      }
      else{
    $query = mysqli_query($db , "SELECT * from `category` where `name` LIKE '%$design%'");
        if(mysqli_num_rows($query) > 0){?>

<section>
  <div class="grid">
    <div class="right">
      <?php
          while($row = mysqli_fetch_assoc($query)){?>
      <div class="card">
        <div class="title">
          <a href="view.php?post=<?php echo sec($row['id']); ?>">
            <p><?php echo sec($row['name']); ?></p>
          </a>
        </div>
        <div class="box">
          <a href="view.php?post=<?php echo sec($row['id']); ?>"><img src="img/<?php echo sec($row['image']); ?>" alt=""
              srcset="">
            <p><?php echo sec($row['short-description']); ?></p>
          </a>
        </div>
      </div>
      <hr style="margin-bottom: 4rem;">
      <?php } ?>
    </div>
    <?php include'include/news.php'; ?>
  </div>
</section>
<?php 
        }else{
          echo "
          <div class='search-error'>
          داخازیا تە ل بەر دەست نینە
          <a href='index.php'> زڤرین بۆ بەشێ سەرەکى </a>
          </div>
           <style>
              .search-error{
                  height: 80vh;
                  text-align:centre;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
                  font-size: 4rem;
              }
              .search-error a{
                font-size: 3rem;
                color: tomato;
                transition: .4s;
              }
              .search-error a:hover{
                color: rgba(255, 21, 21, 0.89);
              }
              @media only screen and (max-width: 900px){
                  .search-error{
                    font-size: 3rem;
                  }
                  .search-error a{
                    font-size: 2rem;
                  }
              }
              @media only screen and (max-width: 670px){
                  .search-error{
                    font-size: 2.5rem;
                  }
                  .search-error a{
                    font-size: 1.5rem;
                  }
                @media only screen and (max-width: 505px){
                  .search-error{
                    font-size: 2rem;
                  }
                  .search-error a{
                    font-size: 1rem;
                  }
                }
                @media only screen and (max-width: 345px){
                  .search-error{
                    font-size: 1rem;
                  }
                }

           }
           </style>
           
           ";
        }

        include'include/footer.php'; 
        exit();
    } } ?>