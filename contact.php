<?php include'include/nav.php'; ?>
<section>
    <div class="grid">
      <div class="right">
        <div class="card">
          <div class="title">
            <a href="">
              <p>دەربارەى ماڵپەرى</p>
            </a>
          </div>
          <div class="box">
            <p>گەر تە ڤیا پرۆژێ خۆ دروستبکەى باشترین شێواز جانترین دیزاین ,  یان
              هەر پرسیارەک یان کارەک تە هەبوو ڤان خانا پر بکە و زیترین دەم دێ بەرسڤا تە دەم , یان توو شێى ڕیکا ئەکاونتێن من پەیوەندیێ بکەی 
            </p>

            <?php
            $error = "";
            if(isset($_POST['send'])){
              $name = sec($_POST['names']);
              $email = sec($_POST['email']);
              $subject = sec($_POST['subject']);
              $msg = sec($_POST['msg']);

              if(strlen($name) > 30)
                $error = "ناڤ زێدەتر ژ ٣٠ پیتا چێنابیت";            
              else if(strlen($subject) > 30)
                $error = "ناڤێ بابەتى زێدەتر ژ ٣٠ پیتا چێنابیت";
              else if(empty($name) || empty($email) || empty($subject) || empty($msg)){
              $error = "هەمى خانان پر بکە";
              }
              else{
                $sql = "INSERT INTO `contact` (`name`,`email`,`subject`,`msg`) 
                          VALUES('$name','$email','$subject','$msg')";
                $query = mysqli_query($db,$sql);
                if($query){ 
                  header("Location: contact.php?success");
                }  
              }   
            }
                ?>      
            <p id="msg-error" style="color: tomato;"><?php echo sec($error); ?></p>
            <form action="contact.php" method="POST">
              <div class="form-control">
              <label for="">ناڤ</label>
              <input type="text" name="names">
              </div>

              <div class="form-control">
              <label for=""> ناڤونیشانێ ئەلێکترۆنی </label>
              <input type="email" name="email">
              </div>

              <div class="form-control">
              <label for="">بابەت</label>
              <input type="text" name="subject">
              </div>
              <div class="form-control">
              <label for="">پەیاما تە</label>
              <textarea  rows="6" cols="30" name="msg"></textarea>
               </div>

              <button type="submit" name="send">فرێکرن</button>
              
            </form>
              <p id="contact">پەیوەندیێ ڤانا من بکە</p>
              <div class="myaccount">
                <a class="insta" href="https://www.instagram.com/rayan._.ramazan/">ئینستگرام</a>
                <a class="fb" href="https://www.facebook.com/rayan.kordesh.5/">فەیس بۆک</a>
                <a class="tg" href="">تیلیگرام</a>
              </div>
          </div>
        </div>
      </div>
      <?php include'include/news.php'; ?>
    </div>
  </section>
  <?php include'include/footer.php'; ?>