<?php
session_start();

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "<br>Ok!";

    $username = "panos";
    $password = "secret";

    $inputusername = $_POST["username"];
    $inputpassword = $_POST["password"];
     
    //echo "<br>Name = {$_POST["username"]}";
    //echo "<br>Password = {$_POST["password"]}";

    if($inputusername === $username && $inputpassword === $password)
    {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $inputusername;

        header("Location: admin.php");
        exit();
    }
    else
    {
        $message = "Invalid username or password!";
        //echo $message;
    }

}
else
{
    echo "<br>Not ok!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
     <h2>Login page</h2>
     <?php if($message): ?>
     <p style="color:red;"><?php echo $message; ?></p>
     <?php endif; ?>
    <form method="POST">
    <label for="username">Username:</label>
    <input id="username" type="text" name="username"><br><br>
    <label for="password">Password:</label>
    <input id="password" type="password" name="password"><br><br>
    <input type="submit" value="Login">
     </form>
</body>
</html>