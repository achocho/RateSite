<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $password1=$_POST["password1"];
    if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name)&&!empty($password1))
    {
        
        $query= "Select * from users Where user_name='$user_name' And password='$password'";
        
      $result=mysqli_query($con, $query);
        if($result){
        if($result && mysqli_num_rows($result)>0)
        {
            $query1= "Update users Set password ='$password1' where user_name ='$user_name' And password ='$password'";
            mysqli_query($con, $query1);
             header("Location: login.php");
            die;
        }
        
        }
        echo "Wrong username or password!!!";
    }else
    {
        echo "Please enter valid information";
        
    }
        
    }

?>
<html>
<head>
    <title>Change data</title>
    </head>
    <body>
        <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border:solid thin #aaa;
            width:100%;
        }
        #button{
            padding:10px;
            width:100px;
            color:white;
            background-color:lightblue;
            border:none;
            
        }
        #box{
            background-color:grey;
            margin:auto;
            width:300px;
            padding:20px;
        }
    </style>
    <div id="box">
    <form method="post">
        <div style="font-size:20px; margin:10px;color:white;">Change Password</div>
        
        <input placeholder="Username" id="text" type="text" name="user_name"><br><br>
        <input placeholder="Password" id="text" type="password" name="password"><br><br>
          <input placeholder="New Password" id="text" type="password" name="password1"><br><br>
        
        <input id="button" type="submit" value="Change"><br><br>
        
    
        </form>
    </div>
    </body>
</html>