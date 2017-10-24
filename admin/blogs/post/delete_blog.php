<?php
require '../../class/Blogs.php';

$id = $_GET['id'];



$blogd = new Blogs();

$check = $blogd->delete($id);
if ($check == 1)
    header('location:../edit_news.php');
else
    echo 'ERROR!!!';