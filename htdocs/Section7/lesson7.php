<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<br>OK!<br>";
    echo "<br>----------<br>";
    $number1 = 20;
    $number2 = 20;
    if($number1 < $number2)
    { 
     echo "<br>greater than (inside if)";
    }
    else if($number1 > $number2)
    {
        echo "<br>less than (inside else if)";
    }
    else
    {
    echo "<br>equal (inside else)";
    }
    echo "<br><br>----------<br>";
    $x = "2";
    $y = 2;
    $u = "3";
    $i = 3;
    if ($x === $y)
    {
    echo "<br>IT IS (inside if)";
    }
   else if($x == $y)
    {
    echo "<br>IT IS (inside else if)";
    }
    else
    {
    echo "<br>IT IS NOT";
    }
    if((integer)$u !== $i)
    {
    echo "<br>IT IS NOT (inside if)";
    }
    else
    {
    echo "<br>IT IS (inside else)";
    }
    $age = 18;
    $canvote = true;
    $haspermission = false;
    $ismember = false;
    $status = ($age >= 18) ? $canvote : !$canvote;
    echo "<br>Person can vote? -> " . var_export($status, true);
    if($age >=18 && $canvote)
    {
    echo "<br>You can enter!";
    }
    else
    {
    echo "<br>You can't enter!";    
    }
    if($age >= 18 || $haspermission)
    {
      echo "<br>You have access!";  
    }
    else
    {
      echo "<br>You haven't access!";   
    }
    if($age >= 19 || $haspermission)
    {
      echo "<br>You have access!";  
    }
    else
    {
      echo "<br>You haven't access!";   
    }
    if(!$ismember)
    {
       echo "<br>You have to sign up!";   
    }
    else
    {
        echo "<br>You haven't to sign up!";  
    }
    if($age >= 18 && ($ismember || $haspermission))
    {
      echo "<br>You have access!";  
    }
    else
    {
      echo "<br>You haven't access!";   
    }
    echo "<br><br>----------<br>";
    $isadmin = false;
    $status_print = ($isadmin) ? "He is admin!" : "He isn't admin!";
    echo "<br>Status : " . $status_print;
    echo ($isadmin) ? "<br>Welcome admin!" : "<br>Access denied!";
    $isloggedin = true;
    $message_print = ($isloggedin) ? "Welcome back!" : "Please login!";
    echo "<br>Status : {$message_print}";
    $message_print2 = ($age >= 18) ? "Adult!" : "Minor";
    echo "<br>Status : {$message_print2}";
    echo "<br><br>----------<br>";
    $username = $_GET["username"] ?? "GUEST";
    echo "<br>Username : " . $username;
    $user = ["name" => "Panagiotis Chronopoulos"];
    $age = $user["age"] ?? "Unknown";
    echo "<br>Name = {$user["name"]}";
    echo "<br>Age = {$age}";
    echo "<br><br>----------<br>";
    $day = "wednesday";
    $message = "Today is ";
    $weather = array("sunny", "clear", "cloudy");
    switch($day)
    {
    case "monday" : echo "<br>{$message} {$day} and the weather is {$weather[0]}!";break;
    case "tuesday" : echo "<br>{$message} {$day} and the weather is {$weather[1]}!";break;
    case "wednesday" : echo "<br>{$message} {$day} and the weather is {$weather[2]}!";break;
    case "thursday" : echo "<br>{$message} {$day} and the weather is {$weather[1]}!";break;
    case "friday" : echo "<br>{$message} {$day} and the weather is {$weather[2]}!";break;
    case "saturday" : echo "<br>{$message} {$day} and the weather is {$weather[0]}!"; break;
    case "sunday" : echo "<br>{$message} {$day} and the weather is {$weather[2]}!";break;
    default : echo "<br>Day with name {$day} doesn't exist!";
    }
    ?>
    <br><br>----------<br><br>
    <span>HELLO</span>
    <br>
    <span>HELLO</span>
</body>
</html>