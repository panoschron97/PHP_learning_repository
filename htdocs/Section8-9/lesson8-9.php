<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //require will produce a fatal error (E_COMPILE_ERROR) and stop the script.
    //include will only produce a warning (E_WARNING) and the script will continue.
    echo "<br>OK!<br>";
    echo "<br>----------<br>";
    require "functions.php";
    greet1();
    greet2("panos");
    addition1(5, 6);
    echo "<br>Total number : " . addition2(5, 7);
    calculaterectanglearea1(10, 5);
    echo "<br>Area = " . calculaterectanglearea2(10, 6);
    echo "<br>Area = " . calculaterectanglearea3(10, 7);
    $arearectangle = calculaterectanglearea3(10, 7);
    echo "<br>Area = " . (34 + $arearectangle);
    //echo seeifnumberisevenoruneven(2);
    $number = 10;
    $status2 = (seeifnumberisevenoruneven($number) == true) ? "<br>The number -> {$number} is even!" : "<br>The number -> {$number} is uneven!";
    echo $status2;
    echo greetuserwithtime("panos");
    echo greetuserwithtime("bob", "Good evening");
    echo "<br><br>----------<br>";
    for($i = 1; $i <= 10; $i = $i + 1)
    {
    echo "<br>Number = " . $i;
    }
    echo "<br>";
    //$i--;
    for($j = $i; $j <= 20; $j++)
    {
    if($j == 20)
    {
    echo $j;
    }
    else
    {
    echo $j . ", ";    
    }    
    }
    echo "<br><br>----------<br><br>";
    $q = 1;
    $w = 10;
    while($q <= $w)
    {
    if($q == 10)
    {
    echo $q;
    }
    else
    {
    echo $q . ", ";    
    }    
    $q++;
    }
    echo "<br>";
    //$q--;
    $w = 20;
    do
    {
    if($q == 20)
    {
    echo $q;
    }
    else
    {
    echo $q . ", ";    
    }    
    $q++;
    }while($q <= $w);
    echo "<br><br>----------<br><br>";
    $numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
    $sizeofnumbers = sizeof($numbers);
    $e = 0;
    foreach($numbers as $number)
    {
    if($e == $sizeofnumbers - 1)
    {
    echo $number;
    }
    else
    {
    echo $number . ", ";    
    }     
    $e++;
    }
    echo "<br>";
    $colors = ["red", "blue", "green"];
    $sizeofcolors = sizeof($colors);
    $r = 0;
    foreach($colors as $color)
    {
    if($r == $sizeofcolors - 1)
    {
    echo $color;
    }
    else
    {
    echo $color . ", ";    
    }     
    $r++;
    }
    echo "<br>";
    $person = ["name" => "panos", "age" => 28];
    foreach($person as $name => $age)
    {
    echo $name . " = " . $age . "<br>";    
    }
    echo "<br>----------<br>";
    for($q = 1; $q <= 10; $q++)
    {
    if($q == 5)
    {
    echo "<br>The last number is : {$q} cause we used break!";
    break;    
    }    
    else
    {
    echo "<br>Number : {$q}";
    }
    }
    echo "<br>";
    for($q = 1; $q <= 10; $q++)
    {
    if($q ==  1 || $q == 3 || $q == 5 || $q == 7 || $q == 9)
    {
    continue;   
    }    
    else
    {
    echo "<br>Number : {$q}";
    }
    }
    echo "<br><br>----------";
    ?>
</body>
</html>