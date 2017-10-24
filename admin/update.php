<?php
require 'class/usercont.php';
$id = (int)$_GET['id'];
$blog = new usercont();
$data = $blog->selectRow($id);
?>
    <br><br><br>
    <h1 style="text-align: center">Are You Sure to update This user?</h1>

<?php foreach ($data as $item): ?>
    <form action="post/update.php?id=<?= $id ?>" method="post" style="text-align: center; padding: 20px" enctype="multipart/form-data">
       <label style="text-align: left">Name<br></label>
        <input type="text" value="<?= $item['emp_name'] ?>"  size="40" name="username" required><br><br>
        Password<br>
        <input type="text" value="<?= $item['password'] ?>"  size="40" name="password"><br><br>
        Career Title<br>
        <input type="text" value="<?= $item['career_title'] ?>"  size="40" name="career_title"><br><br>
        Salary<br>
        <input type="text" value="<?= $item['salary'] ?>"  size="40" name="salary"><br><br>
        Brith<br>
        <input type="text" value="<?= $item['brith'] ?>"  size="40" name="brith"><br><br>
        Identification Number<br>
        <input type="text" value="<?= $item['num_idenf'] ?>"  size="40" name="ident"><br><br>
        Access to edit<br>
        <input type="text" value="<?= $item['control'] ?>"  size="40" name="access"><br><br>
        <img src="../images/emp_images/<?php echo $item['emp_image']; ?>" alt="image not found" width="200" height="200" alt="">

        <br><br>

        <input type="file" size="40" name="image"><br><br>

        <input type="submit" value="update">
    </form>

<?php

endforeach; ?>