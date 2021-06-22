<style>
    img{
        width:100px;
        height:100px;
    }
</style>
<?php
if (!isset($_SESSION)) {
    session_start();
}

$conn = new mysqli("localhost","root","","login");
if(file_exists("logo.jpg")){
echo "<img src='logo.jpg'><br>";
}else
{
  echo "<img src='logo.png'><br>";  
}
$name=basename(__DIR__);
$found=false;
if ($result = $conn -> query("SELECT * FROM schools")) {
  while($row=$result->fetch_assoc())
  {
if($row["name"]!=$name)
{
  $found=false;
    
        
    
}else
{
    $found=true;
    break;
}
  }
}
if($found==false)
{
    
      $sql="Insert into schools(name,city,SchoolType,sub1,sub2,sub3,sub4,sub5) Values('$name','Sofia','SOU','0,0,0,0,0,','0,0,0,0,0,'
    ,'0,0,0,0,0,','0,0,0,0,0,','0,0,0,0,0,')";
    $conn->query($sql);      
}


$sub1=array();
$sub2=array();
$sub3=array();
$sub4=array();
$sub5=array();
$temp1="";
$temp2="";
$temp3="";
$temp4="";
$temp5="";
if ($result = $conn -> query("SELECT * FROM schools Where name='$name'")) {
  while($row=$result->fetch_assoc())
  {
     $temp1=$row["sub1"]; 
      $temp2=$row["sub2"]; 
      $temp3=$row["sub3"]; 
      $temp4=$row["sub4"]; 
      $temp5=$row["sub5"]; 
    
  }
}
$temp="";
for($i=0;$i<strlen($temp1);$i++)
{
  
    if($temp1[$i]!=",")
    {
        $temp.=$temp1[$i];
    }else
    {
        array_push($sub1,$temp);
         $temp="";
    }
   
     
}
for($i=0;$i<strlen($temp2);$i++)
{
  
    if($temp2[$i]!=",")
    {
        $temp.=$temp2[$i];
    }else
    {
        array_push($sub2,$temp);
         $temp="";
    }
   
     
}
for($i=0;$i<strlen($temp3);$i++)
{
  
    if($temp3[$i]!=",")
    {
        $temp.=$temp3[$i];
    }else
    {
        array_push($sub3,$temp);
         $temp="";
    }
   
     
}
for($i=0;$i<strlen($temp4);$i++)
{
  
    if($temp4[$i]!=",")
    {
        $temp.=$temp4[$i];
    }else
    {
        array_push($sub4,$temp);
         $temp="";
    }
   
     
}
for($i=0;$i<strlen($temp5);$i++)
{
  
    if($temp5[$i]!=",")
    {
        $temp.=$temp5[$i];
    }else
    {
        array_push($sub5,$temp);
         $temp="";
    }
   
     
}

for($i=0;$i<5;$i++)
{
    echo $sub1[$i]." ";
}
echo "<br>";
for($i=0;$i<5;$i++)
{
    echo $sub2[$i]." ";
}
echo "<br>";
for($i=0;$i<5;$i++)
{
    echo $sub3[$i]." ";
}
echo "<br>";
for($i=0;$i<5;$i++)
{
    echo $sub4[$i]." ";
}
echo "<br>";
for($i=0;$i<5;$i++)
{
    echo $sub5[$i]." ";
}
echo "<head>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</head>";
echo "<body>";
echo " <form method='post'>";
  $name="test";
for($i=1;$i<6;$i++){
for($j=1;$j<6;$j++)
{
    $tempName=$name.$i;
    
    echo "<input type='radio' id='$tempName' name='$tempName' value='$j'>";
}
    echo "<br>";
    
}
echo "<button id='button' type='button' name='submit' onclick='ts()' >Submit</button>";
echo "</form>";
echo "<p class=doPHP></p>";
echo "<body>";
echo "<form method='post'>";

echo"<textarea id='comment' name='comment' placeholder='Comment...'></textarea>";
echo " <button type='button' onclick='comm()'>Add Comment</button>";
echo "</form>";
?>
<html>
    <body>
    <script>
        function ts(){
         var value1 = $("input[name='test1']:checked").val();
         var value2 = $("input[name='test2']:checked").val();
         var value3 = $("input[name='test3']:checked").val();
         var value4 = $("input[name='test4']:checked").val();
         var value5 = $("input[name='test5']:checked").val();
            if(value1==null||value2==null||value3==null||value4==null||value5==null)
               {
               alert("Check all options");
                   location.reload();
                  return;
               }
$.ajax({
     url: "insertion.php",
  method: "POST",
  data: { test1: value1,test2: value2,test3: value3,test4: value4,test5: value5 }
})
  .done(function( response ) {
    $("p.doPHP").html(response);
  });
    
    }
         function comm(){
         var value1=$("textarea[name='comment']").val();
     
            if(value1=="")
               {
               alert("Enter comment");
                   location.reload();
                  return;
               }
$.ajax({
     url: "addComment.php",
  method: "POST",
  data: { test1: value1 }
})
  .done(function( response ) {
    $("p.doPHP").html(response);
  });
    
    }
        </script>
        
    </body>
</html>