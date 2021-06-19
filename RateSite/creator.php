<?php
function addContent($directory)
{
    $file=fopen($directory."content.php","w");
    $file1=fopen($directory."insertion.php","w");
   $content=file_get_contents("content.txt");
    $content1=file_get_contents("insertion.txt");
    fwrite($file,$content);
     fwrite($file1,$content1);
}
?>