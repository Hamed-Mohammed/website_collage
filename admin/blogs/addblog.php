<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add user</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylelog.css" />
</head>
<body>

<section>
    <div id="container_demo">


        <div id="wrapper">
            <div id="login" class="animate form">
                <form action="post/addnew_blog.php" method="post" autocomplete="on" enctype="multipart/form-data">

                    <h1>Log in</h1>
                    <p>
                        <label for="username" class="uname">Title of News </label>
                        <input id="username" name="title_news" required="required" type="text"
                               placeholder=" "/>
                    </p>

                    <p>
                        <label for="textarea" class="uname">Text News</label>
                        <textarea name="text_news" id="" cols="60" rows="50"></textarea>
                    </p>

                    <p>
                        <label for="username" class="uname">Access of News </label>
                        <input id="username" name="access" required="required" type="text"
                               placeholder=" "/>
                    </p>

                    <p>
                        <label for="username" class="uname">Add picture of News</label>
                        <input id="username" name="image" required="required" type="file"
                               placeholder="username "/>
                    </p>
                    <p class="login button">
                        <input type="submit" value="add"/>
                    </p>
                    <p class="change_link">


                    </p>
                </form>
            </div>


        </div>
    </div>
</section>


</body>
</html>