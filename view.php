<?php include'include/nav.php'; ?>
<section>
    <div class="grid">
        <div class="right">
            <?php 
                $post = sec($_GET['post']);
                $query = mysqli_query($db , "SELECT * FROM `category` WHERE `id` = '$post'");
                while($row = mysqli_fetch_assoc($query)){
                    $views = sec($row['views']) + 1;
                $count = "UPDATE `category` set `views` = '$views' where `id` = '$post'";
                $query_count = mysqli_query($db , $count);
                    
                    ?>
            <div class="card">
                <div class="title">
                    <a href="">
                        <p><?php echo sec($row['name']); ?></p>
                    </a>
                    <br>
                    <style>
                        #share{
                            margin-top: 1rem;
                            color: #111;
                        }
                        #share a{
                            color: #fff;
                            background: #3b5998;
                            padding: 4px;
                            border-radius: 6px;
                        }
                        .view{
                            font-size: 1rem;
                        }
                        .by{
                            margin-top: 1rem;
                            font-size: 1rem;
                        }
                        .date{
                            font-size: 1rem;
                        }
                        .fb-share-button{
                            margin: 1rem 0 0 0;
                            font-size: 1rem;
                        }
                        @media only screen and (max-width: 760px){
                            #share a{
                            padding: 2px;
                            font-size: 1rem;
                            }
                            .view{
                            font-size: 0.8rem;
                            }
                        }
                    </style>
                    <p class="view"><?php echo $views; ?> <i class="fas fa-eye"></i></p>

                    <p class="by" id="by"> هاتیە درووستکرن ژلایێ  : <a href="https://www.facebook.com/rayan.kordesh.5/"><?php echo sec($row['user']); ?></a></p>
                    <p class="date" id="date">بەروار  : <?php echo sec($row['date']); ?></p>
                    <div class="fb-share-button" id="share" data-href="https://kurdishsearch.com/" data-layout="box_count" data-size="small">
                        <a target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=https://kurdishsearch.com/" class="fb-xfbml-parse-ignore">
                       <i class="fab fa-facebook-f"></i> بەڵاڤ کرن
                        </a>
                    </div>
                </div>
                <div class="box-view">
                    <img src="img/<?php echo sec($row['image']); ?>" alt="" srcset="">
                    <a href="<?php echo sec($row['link']); ?>">داگرتن</a>
                    <a href="demo.php?id=<?php echo sec($row['id']); ?>">بینین</a>
                    <p><?php echo sec($row['long-description']); ?></p>
                </div>
                <?php } ?>
                <hr style="margin-top: 3rem; margin-bottom: 3rem;">
                <div class="also-like">
                    <?php
                        $query = mysqli_query($db , "SELECT * FROM `category` ORDER BY RAND() LIMIT 6");
                        while($row = mysqli_fetch_assoc($query)){?>
                    <div class="card-like">
                        <img src="img/<?php echo sec($row['image']); ?>" alt="" srcset="">
                        <a href="view.php?post=<?php echo sec($row['id']); ?>">
                            <p><?php echo sec($row['name']); ?></p>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php include'include/news.php'; ?>
    </div>
</section>
<?php include'include/footer.php'; ?>