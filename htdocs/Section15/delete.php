<?php

setcookie("user_id", "", time() - (86400 * 7), "/", "localhost"/*"panoschron.com"*/);

setcookie("username", "", time() - 3600);

echo "<br>delete.php file!";

?>