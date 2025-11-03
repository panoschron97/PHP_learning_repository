<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple forms</title>
</head>
<body>
    <h2>Forms</h2>
    <!--
    &lt;script&gt;&lt;/script&gt;
    <script></script>-->

    <form action="process.php" method="post"> <!--method="get"-->
    <input name="username" type="text" placeholder="Enter username">
    <br><br>
    <input name="password" type="text" placeholder="Enter password">
    <br><br>
    <input name="email" type="text" placeholder="Enter email">
    <br><br>
    <!--<input name="status" type="text" placeholder="Enter status">
    <br><br>-->
    <input type="submit" value = "Submit">
    </form>
    <br><br>
    <form action="search.php" method="get"> <!--method="get"-->
    Search : <input name="search" type="text" placeholder="Searching...">
    <input type="submit" value = "Search">
    </form>
</body>
</html>