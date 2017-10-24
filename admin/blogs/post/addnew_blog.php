<?php
require '../../connection.php';
require '../../class/Blogs.php';

$title_news=strip_tags($_POST['title_news']);
$text_news=strip_tags($_POST['text_news']);
$access=strip_tags($_POST['access']);

$title_news=mysqli_real_escape_string($con,$title_news);
$text_news=mysqli_real_escape_string($con,$text_news);
$access=mysqli_real_escape_string($con,$access);

$filename = $_FILES['image']['name'];
$uploadOk = 1;
$imageFileType = pathinfo($filename, PATHINFO_EXTENSION);
$imageFileType=strtolower($imageFileType);

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    $target_dir = "../../../images/news_img/";

    $our_file_name = "$title_news" . rand();
    $the_full_path_to_the_file = $target_dir . $our_file_name . '.' . $imageFileType;
    #مسار الكامل للفايل
    #uploads/sag_3324324.png

    move_uploaded_file($_FILES["image"]["tmp_name"], $the_full_path_to_the_file);
    #نقل الصورة من ادخال الى فايل

    $imgg = $our_file_name . '.' . $imageFileType;
}



$blog = new Blogs();

$check = $blog->add($title_news,$text_news,$imgg,$access);

if ($check == 1)
    header('location:../edit_news.php');
else
    echo 'ERROR!!!';



