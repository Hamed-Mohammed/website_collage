<?php
require 'admin/class/Blogs.php';
    $blog = new Blogs();
    $data = $blog->select();

require 'parts/header.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/master.css">


</head>
<body>
<?php foreach ($data as $item): ?>
<div class="about-colorbg newssty ">

    <h2 class="tm-section-title tm-red-text"><?php echo $item['title_news']; ?></h2>
    <p><?php echo $item['text_news']; ?></p>
    <p><img src="images/news_img/<?php echo $item['pic_for_news']; ?>" alt="" width="500px" height="300px">
    </p>
    <hr>
</div>

    <?php
endforeach;
?>
</body>
</html>
