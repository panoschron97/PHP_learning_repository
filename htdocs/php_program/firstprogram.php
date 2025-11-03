<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Panos";
    $number = 28;
    $list = array("Panos" => 28, "Nikos" => 30, "Alexis" => 40);
    $listofnames = array("Panos", "Nikos", "Alexis");
    echo "<br>" . "Hello World!" . "<br>";
    echo "<br>" . "Great weather today {$name} has today!" . "<br>";
    echo "<br>" . "I'm {$number} years old!" . "<br>";
    foreach($list as $element => $secondelement)
    {
       
    echo "<br>{$element} is {$secondelement} years old!";    
  
    }
    echo "<br>";
    $values = array_values($list);
    for($i = 0; $i <= count($values) - 1; $i++)
    {
     echo "<br>{$listofnames[$i]} is {$values[$i]} years old!";  
    }
    ?>
</body>
</html>