<?php include'include/nav.php';?>
<section>
        <div class="logo">
            <img src="img/1.png" alt="" srcset="">
        </div>
        <div class="upload">
        <div class="box-upload">
            
            <form action="include/post.php" method="POST">
                <div class="head">
                    <p>زێدەکرنا بابەتى</p>
                </div>
                <input name="name" type="text" placeholder="ناڤێ بابەتى">
                <select name="categories" id="" style="width: 90%;
                margin: 10px;
                height: 48px;
                padding: 4px;
                border: none;
                background: rgba(0,0,0,0.30);
                color: #fff;
                border-radius: 6px;
                text-align: center;
                font-size: 1rem;
                outline: none;">
                    <option value="">جۆرێ دیزاینێ</option>   
                    <option  value="navigation">navigation</option>
                    <option  value="form">form</option>
                    <option  value="card">card</option>
                    <option  value="button">button</option>
                    <option  value="javascript">javascript</option>
                    <option  value="website">website</option>
                    <option  value="footer">footer</option>
                </select>
                <input name="make" type="text" placeholder="درووستکرن">
                <input name="date" type="date">
                <input name="image" type="text" placeholder="وێنە">
                <input name="link" type="text" placeholder="لینک">
                <textarea name="short-description" placeholder="کورتیا بابەتى" rows="2" cols="58"></textarea>
                <textarea name="long-description" placeholder="درێژیا بابەتى" rows="4" cols="58"></textarea>
                <button name="add">ADD</button>
            </form>
        </div>
    </div>
    </section>
    <?php include'include/footer.php';?>