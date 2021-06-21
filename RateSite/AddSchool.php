<?php
echo "<a href='index.php'>Go to home page</a>";
  $row=0;
 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    $con=new mysqli("localhost","root","","login");
    $query="Select * from users Where user_name='$username' and password='$password' and admin='admin';";
    $result=mysqli_query($con,$query);
    if($result)
    {

        $row=mysqli_num_rows($result);
      
    }

    if($row>0){
echo '
 <form method="post" enctype="multipart/form-data" action="upload.php" >
         <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input placeholder="School name:" type="text" name="schoolName"><br>
    <input placeholder="Location:" type="text" name="Location"><br>
      <input placeholder="Kind:" type="text" name="Kind"><br>
        <textarea name="description" placeholder="Description:"></textarea><br>
        <input type="submit" value="Add School" name="submit" >
    </form>
';
}
}
   if($row==0)
    {
       echo '
         <form method="post">
    <input placeholder="Username" type="text" name="username">
    <input placeholder="Password" type="password" name="password">
       <input type="submit" value="Login">
    </form>
       '; 
    }
?>
<html>
<body>
 
 
    </body>
</html>