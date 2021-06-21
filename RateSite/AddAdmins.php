<?php
$row=0;
echo "<a href='index.php'>Go to main page</a><br>";
include("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    $con=new mysqli("localhost","root","","login");
    $query="Select * from users Where user_name='$username' and password='$password' and admin='adminadmin';";
    $result=mysqli_query($con,$query);
    if($result)
    {

        $row=mysqli_num_rows($result);
      
    }
    if($row==0)
    {
        echo "You must be admin to enter";
    }else
    {
        
        $uName=$_POST['username1'];
        $pass=$_POST['password1'];
        $id=random_num(20);
        $query="insert into users(user_id,user_name,password,admin) values('$id','$uName','$pass','admin')";
        mysqli_query($con,$query);
        header("Location:AddAdmins.php");
    }
}


       echo '
         <form method="post">
    <input placeholder="Your Username" type="text" name="username"><br>
    <input placeholder="Your Password" type="password" name="password"><br>
    <input placeholder="new account username" type="text" name="username1"><br>
     <input placeholder="new account password" type="password" name="password1"><br>
       <input type="submit" value="Insert">
    </form>
       '; 
    


?>