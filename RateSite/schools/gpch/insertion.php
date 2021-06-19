<?php
$name=basename(__DIR__);
$conn = new mysqli("localhost","root","","login");
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
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $S1=$_POST['test1'];
    $S2=$_POST['test2'];
    $S3=$_POST['test3'];
    $S4=$_POST['test4'];
    $S5=$_POST['test5'];
   
   if($S1==1)
   {
       $currRate=1+$sub1[0];
       $sql="Update schools Set sub1='$currRate,$sub1[1],$sub1[2],$sub1[3],$sub1[4],' Where name='$name'";
        $conn->query($sql);
   }
       else if($S1==2)
   {
       $currRate=1+$sub1[1];
       $sql="Update schools Set sub1='$sub1[0],$currRate,$sub1[2],$sub1[3],$sub1[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S1==3)
   {
       $currRate=1+$sub1[2];
       $sql="Update schools Set sub1='$sub1[0],$sub1[1],$currRate,$sub1[3],$sub1[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S1==4)
   {
       $currRate=1+$sub1[3];
       $sql="Update schools Set sub1='$sub1[0],$sub1[1],$sub1[2],$currRate,$sub1[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S1==5)
   {
       $currRate=1+$sub1[4];
       $sql="Update schools Set sub1='$sub1[0],$sub1[1],$sub1[2],$sub1[3],$currRate,' Where name='$name'";
        $conn->query($sql);
   }
    
       if($S2==1)
   {
       $currRate=1+$sub2[0];
       $sql="Update schools Set sub2='$currRate,$sub2[1],$sub2[2],$sub2[3],$sub2[4],' Where name='$name'";
        $conn->query($sql);
   }
       else if($S2==2)
   {
       $currRate=1+$sub2[1];
       $sql="Update schools Set sub2='$sub2[0],$currRate,$sub2[2],$sub2[3],$sub2[4],' Where name='$name'";
        $conn->query($sql);
   }
    else  if($S2==3)
   {
       $currRate=1+$sub2[2];
       $sql="Update schools Set sub2='$sub2[0],$sub2[1],$currRate,$sub2[3],$sub2[4],' Where name='$name'";
        $conn->query($sql);
   }
    else  if($S2==4)
   {
       $currRate=1+$sub2[3];
       $sql="Update schools Set sub2='$sub2[0],$sub2[1],$sub2[2],$currRate,$sub2[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S2==5)
   {
       $currRate=1+$sub2[4];
       $sql="Update schools Set sub2='$sub2[0],$sub2[1],$sub2[2],$sub2[3],$currRate,' Where name='$name'";
        $conn->query($sql);
   }
    
       if($S3==1)
   {
       $currRate=1+$sub3[0];
       $sql="Update schools Set sub3='$currRate,$sub3[1],$sub3[2],$sub3[3],$sub3[4],' Where name='$name'";
        $conn->query($sql);
   }
      else  if($S3==2)
   {
       $currRate=1+$sub3[1];
       $sql="Update schools Set sub3='$sub3[0],$currRate,$sub3[2],$sub3[3],$sub3[4],' Where name='$name'";
        $conn->query($sql);
   }
    else  if($S3==3)
   {
       $currRate=1+$sub3[2];
       $sql="Update schools Set sub3='$sub3[0],$sub3[1],$currRate,$sub3[3],$sub3[4],' Where name='$name'";
        $conn->query($sql);
   }
    else  if($S3==4)
   {
       $currRate=1+$sub3[3];
       $sql="Update schools Set sub3='$sub3[0],$sub3[1],$sub3[2],$currRate,$sub3[4],' Where name='$name'";
        $conn->query($sql);
   }
    else  if($S3==5)
   {
       $currRate=1+$sub3[4];
       $sql="Update schools Set sub3='$sub3[0],$sub3[1],$sub3[2],$sub3[3],$currRate,' Where name='$name'";
        $conn->query($sql);
   }
    
       if($S4==1)
   {
       $currRate=1+$sub4[0];
       $sql="Update schools Set sub4='$currRate,$sub4[1],$sub4[2],$sub4[3],$sub4[4],' Where name='$name'";
        $conn->query($sql);
   }
      else  if($S4==2)
   {
       $currRate=1+$sub4[1];
       $sql="Update schools Set sub4='$sub4[0],$currRate,$sub4[2],$sub4[3],$sub4[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S4==3)
   {
       $currRate=1+$sub4[2];
       $sql="Update schools Set sub4='$sub4[0],$sub4[1],$currRate,$sub4[3],$sub4[4],' Where name='$name'";
        $conn->query($sql);
   }
    else  if($S4==4)
   {
       $currRate=1+$sub4[3];
       $sql="Update schools Set sub4='$sub4[0],$sub4[1],$sub4[2],$currRate,$sub4[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S4==5)
   {
       $currRate=1+$sub4[4];
       $sql="Update schools Set sub4='$sub4[0],$sub4[1],$sub4[2],$sub4[3],$currRate,' Where name='$name'";
        $conn->query($sql);
   }
    
       if($S5==1)
   {
       $currRate=1+$sub5[0];
       $sql="Update schools Set sub5='$currRate,$sub5[1],$sub5[2],$sub5[3],$sub5[4],' Where name='$name'";
        $conn->query($sql);
   }
      else  if($S5==2)
   {
       $currRate=1+$sub5[1];
       $sql="Update schools Set sub5='$sub5[0],$currRate,$sub5[2],$sub5[3],$sub5[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S5==3)
   {
       $currRate=1+$sub5[2];
       $sql="Update schools Set sub5='$sub5[0],$sub5[1],$currRate,$sub5[3],$sub5[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S5==4)
   {
       $currRate=1+$sub5[3];
       $sql="Update schools Set sub5='$sub5[0],$sub5[1],$sub5[2],$currRate,$sub5[4],' Where name='$name'";
        $conn->query($sql);
   }
     else if($S5==5)
   {
       $currRate=1+$sub5[4];
       $sql="Update schools Set sub5='$sub5[0],$sub5[1],$sub5[2],$sub5[3],$currRate,' Where name='$name'";
        $conn->query($sql);
   }
    echo "<script>";
    echo "location.reload();";
      echo "</script>";
}
?>