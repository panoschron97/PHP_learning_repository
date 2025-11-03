<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading multiple files!</title>
</head>
<body>
    <?php echo "<br>Ok!<br>"; echo "<br>----------<br>"; ?>
    <h2>Uploading multiple files!</h2>
    <form action="upload-2.php" method="POST" enctype="multipart/form-data">
    Select files to upload:
    <br><br>
    <input type="file" name="files[]" multiple><br><br>
    <input type="submit" value="Uploading files">
    </form>
</body>
</html>