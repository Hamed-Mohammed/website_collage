<?php
require '../class/usercont.php';

$id = $_GET['id'];
$usname=$_POST['username'];
$passw=$_POST['password'];
$career_title=$_POST['career_title'];
$brith=$_POST['brith'];
$access=$_POST['access'];

$salary=$_POST['salary'];
$ident_num=$_POST['ident'];

/*$usname=mysqli_real_escape_string($con,$usname);
$passw=mysqli_real_escape_string($con,$passw);
$brith=mysqli_real_escape_string($con,$brith);
$sex=mysqli_real_escape_string($con,$sex);
$career_title=mysqli_real_escape_string($con,$career_title);
$salary=mysqli_real_escape_string($con,$salary);
$ident_num=mysqli_real_escape_string($con,$ident_num);*/



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

    $imgu = $our_file_name . '.' . $imageFileType;
}




$blog = new usercont();

$check = $blog->update($id,$ident_num,$usname,$passw,$brith,$access,$career_title,$salary,$imgu);


if ($check==1)
    header('location:../empinfo.php');
else
    echo 'ERROR!!!';