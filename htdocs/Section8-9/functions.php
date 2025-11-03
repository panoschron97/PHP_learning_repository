<?php

function greet1()
{
    echo "<br>Hello, welcome to PHP!";
}

function greet2($name)
{
    echo "<br>Hello, {$name} welcome to PHP!";
}

function addition1($number1, $number2)
{

    echo "<br>Total number : " . $number1 + $number2;
}

function addition2($number1, $number2)
{
   
   return $number1 + $number2; 
}

function calculaterectanglearea1($length, $width)
{
    echo "<br>Area = " . $length * $width;
}

function calculaterectanglearea2($length, $width)
{
    return $length * $width;
}

function calculaterectanglearea3($length, $width)
{
    $area = $length * $width;

    return $area;
}

function seeifnumberisevenoruneven($number)
{
    /*if($number % 2 == 0)
    {
        echo "<br>The number is even!";
    }
    else
    {
        echo "<br>The number is uneven!";
    }*/
    /*$status = ($number % 2 == 0) ? "<br>The number is even!" : "<br>The number is uneven!";

    return $status;*/
    $status1 = ($number % 2 == 0) ? true : false;
    
    return $status1;

}

function greetuserwithtime($name, $greeting = "Good morning")
{
    echo "<br>{$greeting} {$name}!";
}

?>
