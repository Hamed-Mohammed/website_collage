<?php
require 'class/usercont.php';

$id = $_GET['id'];
$blog = new usercont();
$data = $blog->selectRow($id);
?>
    <h1>Are You Sure to Delete This user?</h1>

<?php foreach ($data as $item): ?>
    <form action="post/delete.php?id=<?= $id ?>" method="post" style="background-color: cadetblue;padding: 20px">
        <input type="text" value="<?= $item['emp_name'] ?>"  size="40" name="username" required><br><br>

        <input type="text" value="<?= $item['num_idenf'] ?>"  size="40" name="ident"><br><br>
        <img src="../images/emp_images/<?php echo $item['emp_image']; ?>" alt="image not found" width="200" height="200" alt="">

        <br><br>
        <input type="submit" value="delete">
    </form>
<?php endforeach; ?>