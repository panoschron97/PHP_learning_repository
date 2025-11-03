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
    $fruits = ["Apple", "Banana", "Orange"];
    echo "<br>Fruit : {$fruits[0]}";
    $fruits[3] = "Mango";
    $fruits[] = "Peach";
    echo "<br>";
    for($i = 0; $i < count($fruits); $i++)
    {
    echo "<br>Fruit = {$fruits[$i]}";
    }
    echo "<br><br>----------<br>";
    $person = ["Name" => "Panos", "Age" => 28, "City" => "Athens"];
    echo "<br>Person = {$person["Name"]}
    <br>Age = {$person["Age"]}
    <br>City = {$person["City"]}";
    $person["Country"] = "Greece";
    echo "<br>Country = {$person["Country"]}";
    $person["Studied"] = "Computer science";
    echo "<br>Studied = {$person["Studied"]}";
    echo "<br>";
    foreach($person as $key => $value)
    {
     echo "<br>{$key} = {$value}";
    }
    echo "<br><br>----------<br>";
    $products = [
    ["Name" => "Laptop", "Price" => 1000, "Stock" => 5],
    ["Name" => "Mouse", "Price" => 20, "Stock" => 20],
    ["Name" => "Keyboard", "Price" => 40, "Stock" => 30]
    ];
    echo "<br>Name = {$products[0]["Name"]}";
    echo "<br>Price = {$products[0]["Price"]}";
    echo "<br>Stock = {$products[0]["Stock"]}";
    echo "<br>-----";
    for($i = 0; $i < count($products); $i++)
    {
    if($i == count($products) - 1)
    {
    echo "<br>Name = {$products[$i]["Name"]}";
    echo "<br>Price = {$products[$i]["Price"]}";
    echo "<br>Stock = {$products[$i]["Stock"]}";
    }
    else
    {
    echo "<br>Name = {$products[$i]["Name"]}";
    echo "<br>Price = {$products[$i]["Price"]}";
    echo "<br>Stock = {$products[$i]["Stock"]}";
    echo "<br>";
    }
    }
    echo "<br>-----";
    $q = 0;
    foreach($products as $product)
    {
    if($q == count($products) - 1)
    {
    echo "<br>Name = {$product["Name"]}";
    echo "<br>Price = {$product["Price"]}";
    echo "<br>Stock = {$product["Stock"]}";
    }
    else
    {
    echo "<br>Name = {$product["Name"]}";
    echo "<br>Price = {$product["Price"]}";
    echo "<br>Stock = {$product["Stock"]}";
    echo "<br>";
    }
    $q++;
    }
    echo "<br><br>----------<br>";
    function calculatetotalpricewithstock($products)
    {
    $total = 0;
    foreach($products as $product)
    {
    echo "<br>Product: {$product["Name"]}";
    $total = $product["Price"] * $product["Stock"];  
    echo "<br>Total: {$total}$<br>";  
    }    
    }
    calculatetotalpricewithstock($products);
    echo "-----";
    function calculatetotalprice($products)
    {
    $total = 0;
    foreach($products as $product)
    {
    $total += $product["Price"];
    //$total = $total + $product["Price"];
    }    
    return $total;
    }
    $totalprice = calculatetotalprice($products);
    echo "<br>Total price = {$totalprice}";
    echo "<br><br>----------<br>";
    $app = "PHP CMS";
    function example()
    {
    echo "<br>{$GLOBALS["app"]}";    
    }
    example();
    //$name = $_GET["name"];
    //$age = $_GET["age"];
    //$status = $_GET["status"];
    //echo "<br>Name = " . $name;
    //echo "<br>Age = " . $age;
    //echo "<br>Status = " . $status;
    //http://localhost:8080/Section10/lesson10.php?name=panos&age=28&status=single
    echo "<br>{$_SERVER["HTTP_HOST"]}";
    echo "<br>{$_SERVER["SERVER_NAME"]}";
    echo "<br>{$_SERVER["PHP_SELF"]}";
    echo "<br>{$_SERVER["HTTP_USER_AGENT"]}";
    echo "<br><br>----------<br>";
    echo "<br>" . abs(-10);
    echo "<br>" . round(3.567);
    echo "<br>" . round(3.567, 2);
    echo "<br>" . ceil(4.2);
    echo "<br>" . floor(4.2);
    $numbers = [10, 20, 30, 50];
    echo "<br>" . max($numbers);
    echo "<br>" . min($numbers);
    echo "<br>" . pow(3, 2) . ", " . pow(2, 3);
    echo "<br>" . sqrt(25);
    echo "<br>" . rand(0, 100);
    echo "<br><br>----------<br>";
    $str = "Hello, World!";
    echo "<br>" . strlen($str);
    echo "<br>" . strtoupper($str);
    echo "<br>" . strtolower($str);
    $pos = strpos($str, "World");
    if($pos !== false)
    {
    echo "<br>" . $pos;    
    }
    else
    {
    echo "<br>Not found!";    
    }
    $new_str = str_replace("World", "Student", $str);
    echo "<br>{$new_str}";
    echo "<br><br>----------<br>";
    echo "<br>" . count($fruits) . ", " . sizeof($fruits);
    echo "<br>";
    print_r($fruits);
    array_push($fruits, "Cherry", "Pear");
    echo "<br>";
    print_r($fruits);
    array_pop($fruits);
    echo "<br>";
    print_r($fruits);
    $vegies = ["Carrot", "Plantain", "Lettuce"];
    $merged = array_merge($fruits, $vegies);
    echo "<br>";
    print_r($merged);
    if(in_array("Banana", $merged))
    {
    echo "<br>Banana exists inside the array!";
    }
    else
    {
    echo "<br>Banana doesn't exists inside the array!";    
    }
    $numbers_in_array = [1, 3, 5, 8, 0, 7, 2, 4, 6];
    sort($numbers_in_array);
    echo "<br>";
    print_r($numbers_in_array);
    $person = ["Name" => "Panos Chronopoulos", "Age" => 28, "City" => "Athens"];
    ksort($person);
    echo "<br>";
    print_r($person);
    $sliced = array_slice($merged, 1, 2);
    echo "<br>";
    print_r($sliced);
    echo "<br><br>----------";
    ?>
</body>
</html>