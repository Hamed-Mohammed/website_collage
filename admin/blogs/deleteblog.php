<?php
require '../class/Blogs.php';
$id = (int)$_GET['id'];
$blog = new Blogs();
$data = $blog->selectRow($id);
?>
    <h1>Are You Sure to Delete This Service?</h1>

<?php foreach ($data as $item): ?>
    <form action="post/delete_blog.php?id=<?= $id ?>" method="post" style="background-color: cadetblue;padding: 20px">
        <h2><?= $item['title_news'] ?></h2>
        <h3><?= $item['text_news'] ?></h3>

        <input type="submit" value="delete">
    </form>
<?php endforeach; ?>