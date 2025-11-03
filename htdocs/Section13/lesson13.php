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
    $filename = "data.txt";
    if(file_exists($filename))
    {
    echo "<br>File exists!";
    }
    else
    {
    echo "<br>File doesn't exists!";
    }
    $file = fopen($filename, "r");
    echo "<br>";
    var_dump($file);
    if($file)
    {
    $content = fread($file, filesize($filename));
    echo "<br><br>" . nl2br($content);  
    echo "<br><br>" . $content;  
    fclose($file);
    }
    else
    {
    echo "<br>Unable to open file!";
    }
    $content = file_get_contents("data.txt");
    echo "<br><br>" . nl2br($content);
    echo "<br><br>" . $content; 
    echo "<br><br>----------<br>";
    $file = fopen($filename, "a");//w
    if($file)
    {
    fwrite($file, "Hello i'm a new paragraph!\n");
    fclose($file);  
    echo "<br>File written successfully!"; 
    }
    else
    {
    echo "<br>Unable to write in file!";    
    }
    $content = file_get_contents("data.txt");
    echo "<br><br>" . nl2br($content);
    echo "<br><br>" . $content;
    echo "<br><br>----------<br>";
    date_default_timezone_set('Europe/Athens');
    $file = "data.txt";
    if(file_exists($filename))
    {
    echo "<br>File size = " . filesize($filename) . " bytes!";
    echo "<br>Last modified = " . date("F d Y H:i:s.", fileatime($filename)) . "!";
    }
    else
    {
    echo "<br>File doesn't exists!";    
    }
    if(is_readable($filename))
    {
    echo "<br>It's readable!";
    }
    else
    {
    echo "<br>It isn't readable!";    
    }
    if(is_writable($filename))
    {
    echo "<br>It's writeable!";    
    }
    else
    {
    echo "<br>It isn't writeable!";    
    }
    echo "<br><br>----------<br>";
    $oldname = "data.txt";
    $newname = "newdata.txt";
    if(file_exists($oldname))
    {
    rename($oldname, $newname);
    echo "<br>File renamed from {$oldname} to {$newname}!";    
    }
    else
    {
    echo "<br>File not found!";
    }
    if(file_exists($newname))
    {
    unlink($newname);
    echo "<br>File removed!";    
    }
    else
    {
    echo "<br>File not found!";
    }
    echo "<br><br>----------<br>";
    $directory = "uploads";
    if(!file_exists($directory))
    {
    mkdir($directory, 0777, true);
    echo "<br>Directory created!";
    }
    else
    {
    echo "<br>Directory already exists!";
    }
    if(is_dir($directory))
    {
    $files = scandir($directory);
    foreach($files as $file)
    {
    if($file !== "." && $file !== "..")
    {
    echo "<br>File = {$file}";
    }    
    }    
    }
    echo "<br><br>----------";
    ?>
</body>
</html>