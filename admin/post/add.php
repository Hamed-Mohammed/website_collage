<?php
require '../connection.php';
require '../class/usercont.php';


$usname=strip_tags($_POST['username']);
$passw=strip_tags($_POST['password']);
$brith=strip_tags($_POST['brith']);
$career_title=strip_tags($_POST['career_title']);
$salary=strip_tags($_POST['salary']);
$ident_num=strip_tags($_POST['ident_num']);
$access=strip_tags($_POST['access']);


$usname=mysqli_real_escape_string($con,$usname);
$passw=mysqli_real_escape_string($con,$passw);
$brith=mysqli_real_escape_string($con,$brith);
$career_title=mysqli_real_escape_string($con,$career_title);
$salary=mysqli_real_escape_string($con,$salary);
$ident_num=mysqli_real_escape_string($con,$ident_num);
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
    $target_dir = "../../images/emp_images/";

    $our_file_name = "$usname" . rand();
    $the_full_path_to_the_file = $target_dir . $our_file_name . '.' . $imageFileType;
    #مسار الكامل للفايل
    #uploads/sag_3324324.png

    move_uploaded_file($_FILES["image"]["tmp_name"], $the_full_path_to_the_file);
    #نقل الصورة من ادخال الى فايل

    $imgg = $our_file_name . '.' . $imageFileType;
}

$user = new usercont();

$check = $user->add($ident_num,$usname,$passw,$career_title,$brith,$imgg,$salary,$access);

if ($check == 1)
    header('location:../empinfo.php');
else
    echo 'ERROR!!!';







/*$sql = "INSERT INTO users (num_idenf,username,password,career_title,brith,emp_image,salary,sex) VALUES ('$ident_num','$usname','$passw','$career_title','$brith','$imgg','$salary','$sex')";

if (mysqli_query($con,$sql))
    header('location:../empinfo.php');
else
    echo 'ERROR!!';*/