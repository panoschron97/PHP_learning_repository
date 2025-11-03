<?php

//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if($_FILES["file"]["error"] === 0)
    {
    //echo "<br>Ok!";
    $uploaddirectory = "uploads/";
    $filename = basename($_FILES["file"]["name"]);
    $targetfile = $uploaddirectory . $filename;

    $filesize = $_FILES["file"]["size"];
    $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowedtypes = ["jpg", "gif", "png", "jpeg"];

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
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfile))
    {
        echo "<br>The file {$filename} has been uploaded!";
        echo "<br>File size = {$filesize}";
        echo "<br>File type = {$filetype}";
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
    switch($_FILES["file"]["error"])
    {
        case UPLOAD_ERR_INI_SIZE:
        $uploaderrinisize = "<br>The uploaded file exceeds the maximum size allowed by the server!";
        echo $uploaderrinisize;
        break;
        default : 
        $unusualerror = "<br>Unusual error!";
        echo $unusualerror;
    }
}
}
?>