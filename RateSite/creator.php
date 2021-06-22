<?php
function addContent($directory)
{
    $file=fopen($directory."/content.php","w");
    $file1=fopen($directory."/insertion.php","w");
   $file2=fopen($directory."/addComment.php","w");
   $content=file_get_contents("content.txt");
    $content1=file_get_contents("insertion.txt");
    $content2=file_get_contents("addComment.txt");
    fwrite($file,$content);
     fwrite($file1,$content1);
    fwrite($file2,$content2);
}
?>