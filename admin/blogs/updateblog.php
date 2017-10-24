<?php
require '../class/Blogs.php';
$id = (int)$_GET['id'];
$blog = new Blogs();
$data = $blog->selectRow($id);
?>
    <h1 style="text-align: center">Are You Sure to update This news?</h1>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../../css/stylelog.css">
    </head>
    <body>

    </body>
    </html>
<?php foreach ($data as $item): ?>
    <div id="wrapper">
    <div id="login" class="animate form">
    <form action="post/update_blog.php?id=<?= $id ?>" method="post" autocomplete="on" enctype="multipart/form-data">

        <h1>Log in</h1>
        <p>
            <label for="username" class="uname">Title of News </label>
            <input id="username" name="title_news" required="required" type="text"
                   value="<?php echo $item['title_news']; ?>"/>
        </p>
        <p>
            <label for="textarea" class="uname">Text News</label>
            <textarea name="text_news" id="" cols="60" rows="50"><?php echo $item['text_news']; ?></textarea>
        </p>

        <p>
            <label for="username" class="uname">Access of News </label>
            <input id="username" name="access" required="required" type="text"
                   value="<?php echo $item['access_to_control']; ?>"/>
        </p>
        <br>
        <img src="../../images/news_img/<?php echo $item['pic_for_news']; ?>" alt="image not found" width="200" height="200" alt="">
        <br><br>
        <p>
            <label for="username" class="uname">Add picture of News</label>
            <input id="username" name="image" required="required" type="file"
                   value="<?php echo $item['pic_for_news']; ?>"/>
        </p>

        <input type="submit" value="update">
    </form>

<?php

endforeach; ?>