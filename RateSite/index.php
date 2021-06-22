<?php
session_start();
include("connection.php");
include("functions.php");
include("usage.php");
$user_data=check_login($con);


?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    </head>
<body >
       <nav>
           <ul>           
             <a href="logout.php" style="text-decoration: none;">Log out</a>
           </ul>
      </nav>
    
        <h1>Main Page</h1>
   
    
    <style>
        .par
        {
       color:Orange;     
            
        }
    </style>
    
    <br>
    Hello, <?php echo $user_data['user_name'];?>
   <br>
    <br>

<?php
    FindAndUse();
  
   
?>
    <?php
    class name
    {
        function getName(){
        return $user_data['user_name'];
        }
    }
    ?>
    </body>
</html>
