<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add user</title>
    <link rel="stylesheet" type="text/css" href="../css/stylelog.css" />
</head>
<body>

<section>
    <div id="container_demo">


        <div id="wrapper">
            <div id="login" class="animate form">
                <form action="post/add.php" method="post" autocomplete="on" enctype="multipart/form-data">

                    <h1>Log in</h1>
                    <p>
                        <label for="username" class="uname">User name </label>
                        <input id="username" name="username" required="required" type="text"
                               placeholder="username "/>
                    </p>
                    <p>
                        <label for="password" class="youpasswd">Password </label>
                        <input id="password" name="password" required="required" type="password"
                               placeholder="eg. X8df!90EO"/>
                    </p>
                    <p>
                        <label for="username" class="uname">Identification Number </label>
                        <input id="username" name="ident_num" required="required" type="text"
                               placeholder=" "/>
                    </p>
                    <p>
                        <label for="username" class="uname">Brith</label>
                        <input id="username" name="brith" required="required" type="text"
                               placeholder=" "/>
                    </p>

                    <p>
                        <label for="username" class="uname">Career title</label>
                        <input id="username" name="career_title" required="required" type="text"
                               placeholder=" "/>
                    </p>
                    <p>
                        <label for="username" class="uname">Access to edit</label>
                        <input id="access" name="access" required="required" type="text"
                               placeholder=" "/>
                    </p>

                    <p>
                        <label for="username" class="uname">Salary</label>
                        <input id="username" name="salary" required="required" type="text"
                               placeholder=" "/>
                    </p>
                    <p>
                        <label for="username" class="uname">Image </label>
                        <input id="username" name="image" required="required" type="file"
                               placeholder=" "/>
                    </p>

                    <p class="login button">
                        <input type="submit" value="Add"/>
                    </p>

                </form>
            </div>


        </div>
    </div>
</section>


</body>
</html>