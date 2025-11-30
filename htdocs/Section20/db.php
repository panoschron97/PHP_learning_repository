<?php

$connection = mysqli_connect("localhost", "root", "27031997", "sql_injection");

if($connection)
{
    echo "----------";
    echo "<br><br>Connected!";
}
else
{
    echo "<br>Error : " . mysqli_connect_error();
}

?>