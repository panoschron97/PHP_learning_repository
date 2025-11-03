<?php

setcookie("user_id", "1", time() + (86400 * 7), "/", "localhost"/*"panoschron.com"*/, true, true);

echo "<br>set.php file!";

?>