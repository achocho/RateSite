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
   <link rel="stylesheet" type="text/css" href="style_home.css">
   
    <header>
     <div class="wrapper">
        <h1>Test</h1>
        <nav>
           <ul>           
             <a href="logout.php" style="text-decoration: none;">Log out</a>
           </ul>
      </nav>
     </div>
   </header>

   <div id="pic/slide-01.jpg" class="imgHome">
    <div class="wrapper1">
        <h2><strong>Kyr</strong><br/></h2>
        <a href="#" class="button-1" style="text-decoration: none;">Read more</a>
    </div>
   </div>
    
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
    </body>
</html>
