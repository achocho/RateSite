<?php
include("../../../RateSite/name.php");
include("../../../RateSite/connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $comment=$_POST['test1'];
    
    $name=$username;
    $schoolName=basename(__DIR__);
    $query="Insert into comments(SchoolName,username,comment) values('$schoolName','$name','$comment')";
    mysqli_query($con,$query);
     echo "<script>";
    echo "location.reload();";
      echo "</script>";
}
?>