<?php
require 'headeracmin.php';
session_start();
require 'connection.php';
require 'class/usercont.php';
if(isset($_SESSION['login'])) {

    $id = $_SESSION['login'];
    $blog = new usercont();
    $data = $blog->selectRow($id);

   /* $sql="SELECT * FROM employees WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);*/
    foreach ($data as $row):
        ?>
        <!DOCTYPE html>

        <html> <!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title><?php echo $row['emp_name']; ?>-mypage-</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/master.css">

        </head>

        <body>
        <section>
            <div class="container">
                <br><br>
                <h2 class="info-section-title tm-red-text"> <sup>hi/</sup>
                            <?php echo $row['emp_name']; ?>
                    <br>
                    <img src="../images/emp_images/<?php echo $row['emp_image']; ?>" alt="image not found" width="200" height="200">

                </h2>
                    <br><br><br>

                <h3 class="tm-section-title">Career Title:
                    <?php echo $row['career_title']; ?>
                            </h3>


                        <hr>
                <br><br>
                        Identification Number : <?php echo $row['num_idenf']; ?>
                <br><br><br>
                Birth : <?php echo $row['brith']; ?>
                <br><br><br>
                salary :<?php echo $row['salary']; ?>
                            <small>/IQD </small>

                        <hr>
<div style="text-align: center">

                    <a href="empinfo.php" class="">
                        <?php
                        if ($row['control'] =="yes") {
                            echo "<button class='button1'>control of employee content</button>";
                        }
                        ?></a>
                    <a href="blogs/edit_news.php" class="">
                        <?php
                        if ($row['control'] == "yes") {
                            echo "<button class='button2'>control of news</button>";
                        }
                        ?></a>

</div>
                    <br><br><br><br>

            </div>
        </section>

        <?php
    endforeach;
    ?>


</body>
    </html>

    <?php
}

else {
    header('location:login.php');
    mysqli_close($con);
}
?>