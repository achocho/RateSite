<?php
include("../../../RateSite/name.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $comment=$_POST['test1'];
    
    $name=$username;
   
    $file=fopen("comments.txt","a+");
    fwrite($file,$name.":".$comment.";");
     echo "<script>";
    echo "location.reload();";
      echo "</script>";
}
?>