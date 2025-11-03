<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //echo "<pre>";
    //var_dump($_FILES);
    //echo "</pre>";

    $uploaddirectory = "uploads-2/";

    if(!is_dir($uploaddirectory))
    {
        mkdir($uploaddirectory, 0777, true);
    }
    else
    {
        foreach($_FILES["files"]["name"] as $key => $filename)
        {
            //echo "<pre>";
            //var_dump($key);
            //echo "</pre>";
            //echo "<pre>";
            //var_dump($filename);
            //echo "</pre>";
            //echo "<pre>";
            //var_dump($_FILES["files"]);
            //echo "</pre>";
            //echo "<pre>";
            //var_dump($_FILES["files"]["name"]);
            //echo "</pre>";

        $filetmp = $_FILES["files"]["tmp_name"][$key];
        $filesize = $_FILES["files"]["size"][$key];
        $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $fileerror = $_FILES["files"]["error"][$key];
        $targetfile = $uploaddirectory . basename($filename);
        $allowedtypes = ["jpg", "gif", "png", "jpeg", "txt"];

        if($fileerror === UPLOAD_ERR_OK)
        {
            if($filesize > 4 * 1024 * 1024)
            {
            $filesizeerror = "<br>Your file is too large!";
            echo $filesizeerror;
            }
            else if(!in_array($filetype, $allowedtypes))
            {
            $filetypeerror = "<br>.{$filetype} type isn't allowed! - Only .jpg, .gif, .png, .jpeg types allowed!";
            echo $filetypeerror;
            } 
            else
            {
            if(move_uploaded_file($filetmp, $targetfile))
            {
            echo "<br>The file {$filename} has been uploaded!";
            echo "<br>File size = {$filesize}";
            echo "<br>File type = {$filetype}";
            echo "<br>";
            }
            else
            {
            $uploadfileerror = "<br>The file hasn't been uploaded!";
            echo $uploadfileerror;
            }
            }
            }
            else
            {
            echo "<br>File {$filename} failed to upload due to error {$fileerror}";    
            }
}
}
}
else
{
echo "<br>No files were uploaded!";    
}
?>