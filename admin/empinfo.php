<?php
require 'headeracmin.php';
session_start();
require 'class/usercont.php';
if(isset($_SESSION['login'])) {
    $id = $_SESSION['login'];
    $blog = new usercont();
    $data = $blog->select();
    ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>-mypage-</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="../css/style.css">


</head>
<body>


        <br><br><br><br>

        <div style="text-align: center">
         <a href="adduser.php"><h2><button class="button3">Add new user</button></h2></a>
        </div>
        <!-- END #fh5co-hero-->
    <?php foreach ($data as $item): ?>
        <section>
            <div class="container">
                <br><br>


                    <br><br><br>
                    <div>
                        <div><h3>Name:<?php echo $item['emp_name']; ?></h3>

                        </div>
                        <hr><h4>
                        <ul>
                            <li>id : <?php echo $item['id']; ?></li>

                            <li>Identification Number : <?php echo $item['num_idenf']; ?></li>
                            <li>Password : <?php echo $item['password']; ?></li>
                            <li>Career title : <?php echo $item['career_title']; ?></li>
                            <li>Salary : <?php echo $item['salary']; ?></li>
                            <li>Brith : <?php echo $item['brith']; ?></li>
                            <li>Control : <?php echo $item['control']; ?></li>
                        </ul>
                        </h4>
                            </div>


                            <img src="../images/emp_images/<?php echo $item['emp_image']; ?>" alt="image not found" width="200" height="200"></li>
                <br>
                        <a href="update.php?id=<?= $item['id'] ?>">Update</a>
                        <a href="delete.php?id=<?= $item['id'] ?>">Delete</a>
                <hr>
            </div>
        </section>


    <?php
    endforeach;
    ?>
        <!-- END #fh5co-pricing -->




    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>

    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // navigation click actions
            $('.scroll-link').on('click', function(event){
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed){
            var offSet = 50;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({scrollTop:targetOffset}, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }
    </script>



</body>
</html>

    <?php
}


?>