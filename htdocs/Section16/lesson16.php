<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<br>Ok!<br>";
    echo "<br>----------<br>";
    echo "<br>Session is starting!";
    echo "<br>----->";
    session_start();
    echo "<br>Session started!";
    $_SESSION["username"] = "Panagiotis Chronopoulos";
    echo "<br><br>" . $_SESSION["username"];
    //echo "<br><br>Session is destroying!";
    //echo "<br>----->";
    //$_SESSION = [];
    //session_destroy();
    //echo "<br>Session destroyed!";
    echo "<br><br>----------<br><br>";
    ?>
    <a href="login.php">Login</a>
    <?php
    echo "<br><br>----------<br><br>";
    ?>
    <a href="about.php">About</a><br><br>
    <a href="contact.php">Contact</a>
</body>
</html>