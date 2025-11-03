<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{

$search_query = htmlspecialchars(trim($_GET["search"]));

$search_query = ucfirst($search_query);

$hobbies = ["Football", "Basketball", "Volleyball"];

if(!empty($search_query) && in_array($search_query, $hobbies))
{
echo "<br>Search : " . htmlspecialchars(trim($search_query));    
}
else
{
echo "<br>Please enter a search query or this information you put it doesn't exists!";    
}

}

?>