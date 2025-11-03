<?php

session_start();

$_SESSION = [];

session_destroy();

header("Location: lesson16.php");
exit();

?>