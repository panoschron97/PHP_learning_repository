<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "----------<br>";
    echo "<br>Ok!";
    echo "<br><br>----------";
    include "class_declaration.php";
    $date = new DateTime();
    $timezone = new DateTimeZone("America/New_York");
    $date->setTimezone($timezone);
    echo "<br><br>Location : {$date->getTimezone()->getName()}";
    $timezone = new DateTimeZone("Europe/Berlin");
    $date->setTimezone($timezone);
    echo "<br>Location : {$date->getTimezone()->getName()}";
    $example1 = new example();
    echo "<br>";
    $example1->create_object();
    $example1->set_net_salary();
    echo "{$example1->__toString()}";
    $example1 = new example("Panagiotis","Chronopoulos", 28, 1000.0);
    echo "<br>";
    $example1->create_object();
    $example1->set_net_salary();
    echo "{$example1->__toString()}";
    echo "<br><br>----------";
    $example2 = new example1("Nikos", "Nikolopoulos", 30 , 2000.0, "Greece","Athens","6970691160");
    echo "<br>";
    $example2->create_object();
    $example2->set_net_salary();
    echo "{$example2->__toString()}";
    echo "<br><br>----------";
    echo $example2::get_user_count();
    echo $example2->get_user_count();
    echo $example2->get_user_count1();
    $example3 = new example1("Giwrgos", "Nikolopoulos", 25 , 2500.0, "America","New York","69706911600");
    echo "<br>";
    echo "{$example3->__toString()}";
    echo "<br><br>----------";
    ?>
</body>
</html>