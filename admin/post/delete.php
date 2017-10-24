<?php
require '../class/usercont.php';

$id = $_GET['id'];
$blog = new usercont();

$check = $blog->delete($id);
if ($check == 1)
    header('location:../empinfo.php');
else
    echo 'ERROR!!!';