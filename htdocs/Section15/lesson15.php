<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and cookies!</title>
</head>
<body>
    <?php
    echo "<br>Ok!<br>";
    echo "<br>----------<br>";
    setcookie("username", "panoschron", time() + 3600);//create cookies
    if(isset($_COOKIE["username"]))
    {
    echo "<br>Hello " . $_COOKIE["username"] . "!";//read cookies
    }
    else
    {
    echo "<br>Hello guest!";
    }
    require "set.php";
    if(isset($_COOKIE["user_id"]))
    {
    echo "<br>Hello " . $_COOKIE["user_id"] . "!";//read cookies  
    }
    else
    {
    echo "<br>Hello guest!";
    }
    echo "<br><br>----------<br>";
    require "delete.php";//delete cookies
    echo "<br><br>----------";
    ?>
</body>
</html>