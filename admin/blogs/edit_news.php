<?php
session_start();
require '../class/Blogs.php';
if(isset($_SESSION['login'])) {
    $id = $_SESSION['login'];
    $ser = new Blogs();
    $data = $ser->select();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>-mypage-</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../../css/style.css">


    </head>
    <body>
    <section class="ff"  data-next="yes"> <!-- header-->
        <div>
            <a href="../../index.html"><div class="k">home</div></a>
            <a href="../../news.php"><div class="k">News</div></a>
            <a href="../../about.php"><div class="k">About</div></a>
            <a href="../info.php"><div class="k">Information</div></a>
            <a href="../logout.php"><div class="k">logout</div></a>

        </div>

    </section>
    <br><br><br><br>
    <div style="text-align: center">
       <a href="addblog.php"><h2><button class="button2">Add new Blog</button></h2></a>
    </div>
    <!-- END header-->
    <?php foreach ($data as $item): ?>
        <section>
            <div class="container">
                <br><br>
                <div>
                    <br><br><br>
                    <div>
                        <div ><h2><?php echo $item['title_news']; ?></h2>
                        </div>
                        <hr>
                        <ul>
                            <li><img src="../../images/news_img/<?php echo $item['pic_for_news']; ?>" alt="image not found" width="200" height="200"></li>
                            <li>Identification Number : <?php echo $item['id_news']; ?></li>
                        </ul>
                    </div>
                    <div>
                        <div><h2>Contect</h2>
                        </div>
                        <hr>

                            <p><?php echo $item['text_news']; ?></p>


                    </div>
                    <center><a href="updateblog.php?id=<?= $item['id_news'] ?>">Update</a>
                        <a href="deleteblog.php?id=<?= $item['id_news'] ?>">Delete</a></center>
                </div>
                <hr>
            </div>

        </section>



        <?php
    endforeach;
    ?>


    </body>
    </html>

    <?php
}


?>