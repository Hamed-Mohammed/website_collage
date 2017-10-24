<?php
require 'connection.php';
session_start();
$usname=strip_tags($_POST['username']);
$passw=strip_tags($_POST['password']);
$usname=mysqli_real_escape_string($con,$usname);
$passw=mysqli_real_escape_string($con,$passw);

$sql="SELECT * FROM employees WHERE emp_name='$usname' AND password='$passw' ";

$result = mysqli_query($con,$sql);

if (!$row=mysqli_fetch_assoc($result))
{
    ?>

    <div id="fh5co-page">
        <section id="fh5co-pricing">
            <div class="container">
                <div class="row">
                    <div class="row row-bottom-padded-lg">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <form   action="login.php">
                                <h2>>_<
                                    <br><br>Oops
                                    <br><br>
                                    The Username <br>OR <br> Password error
                                </h2>
                                <input type="submit"value="Retype User Name or Password">
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
}
else
{
    $_SESSION[login]=$row['id'];;

    header('location:info.php');

}
mysqli_close($con);
?>