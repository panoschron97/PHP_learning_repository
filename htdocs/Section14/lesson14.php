<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploading!</title>
</head>
<body>
    <?php
    echo "<br>OK!<br>";
    echo "<br>----------<br>";
    ?>
    <h2>Upload a file!</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type = "file" name="file">
    <br><br>
    <input type="submit" name="submit" value="Upload file">
    </form>
</body>
</html>