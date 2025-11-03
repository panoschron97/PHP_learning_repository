<?php

/*if($_SERVER["REQUEST_METHOD"] == "GET")
{
$username = $_GET["username"];
$password = $_GET["password"];
$status = $_GET["status"];

echo "<br>{$username}";
echo "<br>{$password}";
echo "<br>{$status}";
}*/

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$usernameErr = $username = "";
$passwordErr = $password = "";
$emailErr = $email = "";

if(empty($_POST["username"]))
{
$usernameErr = "<br>Username is required!";
echo $usernameErr;
}
else
{
$username = htmlspecialchars(trim($_POST["username"]));

if(strlen($username) > 10)
{
$usernameErr = "<br>Username has bigger length than it must!";
echo $usernameErr;    
}
else
{
$username = htmlspecialchars(trim($_POST["username"]));
//$status = htmlspecialchars(trim($_POST["status"]));   
}
}

if(empty($_POST["password"]))
{
$passwordErr = "<br>Password is required!";
echo $passwordErr;
}
else
{
$password = htmlspecialchars(trim($_POST["password"]));

if(strlen($password) > 10)
{
$passwordErr = "<br>Password has bigger length than it must!";
echo $passwordErr;    
}
else
{
$password = htmlspecialchars(trim($_POST["password"]));
//$status = htmlspecialchars(trim($_POST["status"]));   
}
}

if(empty($_POST["email"]))
{
$emailErr = "<br>Email is required!";
echo $emailErr;
}
else
{
$email = htmlspecialchars(trim($_POST["email"]));

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$emailErr = "<br>You pressed an invalid email!";
echo $emailErr;    
}
else
{
$email = htmlspecialchars(trim($_POST["email"]));
//$status = htmlspecialchars(trim($_POST["status"]));   
}
}

if(!empty($username) && strlen($username) <= 10 && !empty($password) && strlen($password) <= 10 && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
{
echo "<br>Form submitted successfully!<br>";
echo "<br>Username: {$username}";
echo "<br>Password: {$password}";
echo "<br>Email: {$email}";
//echo "<br>{$status}";
}
else
{
echo "<br><br>Please fill in all the fields!";    
}
}

?>