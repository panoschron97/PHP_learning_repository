<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<br>Hello World!<br>";
    /* // echo "<br>Comments!<br>"; */
    echo "HOLA!<br>";
    echo "<br>----------<br>";

    $fullname = $name = "Panos Chronopoulos";
    $age = 28;
    $haskids = false;
    $status = ($haskids && $age > 28) ? "true" : "false"; 
    $income = 743.50;
    $hobbies = array("Football", "Basketball", "Running");
    $sizeofarray = sizeof($hobbies);
    echo "<br>";
    var_dump($name);
    echo "<br>";
    var_dump($fullname);
    echo "<br>";
    var_dump($age);
    echo "<br>";
    var_dump($haskids);
    echo "<br>";
    var_dump($income);
    echo "<br>";
    var_dump($hobbies);
    echo "<br><br>My name is {$name} and i'm {$age} years old!<br>";
    echo "My status of having kids -> {$status}<br>"; 
    echo "My hobbies : ";
    for($i = 0; $i < $sizeofarray; $i++)
    {
    if($i == $sizeofarray - 1)
    {
     echo $hobbies[$i];
    }
    else
    {
    echo $hobbies[$i] . ", ";
    }
    }
    echo "<br>He makes {$income}$";
    echo "<br>";
    $name = "Nikos Stergiopoulos";
    $age = 29;
    $NAME = "Giwrgos Maggitis"; // case sensitive
    $Age = 30; // case sensitive
    echo "<br>";
    var_dump($name);
    echo "<br>My name is {$name} and i'm {$age} years old!<br>";
    echo "<br>----------<br>";
    echo "<br>";
    var_dump(5);
    echo "<br>";
    var_dump(5.5);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump(false);
    echo "<br>";
    var_dump([2, "Nikos", 3.5, true]);
    echo "<br>";
    var_dump(null);
    echo "<br>";
    var_dump(NULL);
    echo "<br><br>----------<br>";
    $a = (string)5;/*String*/
    $status = (is_string($a)) ? "String" : "Number";
    $b = 5.5;
    $c = "five";
    $d = false;
    $e = ["Name" => "Panos"];
    $f = NULL;
    echo "<br>Type of {$a} is {$status}!";
    $a = 5;
    $status = (is_string($a)) ? "String" : "Number";
    echo "<br>Type of {$a} is {$status}!";
    echo "<br>Name is : {$e["Name"]}!";
    $e = (object)["Name" => "Panos"];
    echo "<br>Name is : {$e -> Name}!";
    echo "<br><br>----------<br>";
    echo "<br>" . 2 + 2 . "<br>";
    echo 2 - 2 . "<br>";
    echo 2 * 2 . "<br>";
    echo 2 / 2 . "<br>";
    echo 2 % 2 . "<br>";
    echo 2 ** 2 . "<br>";
    echo 4 ** 8 . "<br>";
    echo 2 ** 4 . "<br>";
    echo 2 ** 3 . "<br>";
    echo 2 + 2 * (2 * 4) . "<br>";
    echo 3 + 3 * (3 * 4);
    echo "<br><br>----------<br>";
    define("firstname", "George");
    const lastname = "Maggos";
    echo "<br>Constant firstname = " . firstname . 
    "<br>Constant lastname = " . lastname;
    echo "<br>" . __DIR__; // magic constant
    echo "<br>" . __FILE__; // magic constant
    ?>
</body>
</html>