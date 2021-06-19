
<style>

  
    img
    {
         width: 100px;
        height: 100px;
    }

</style>
<?php

include("creator.php");

function FindFolder()
{
    $dir="schools";
    $dirs=scandir($dir);
    $size=count($dirs);
 $dirNames=array();
    $name;
    
    for($i=0;$i<$size;$i++){
  $currName=$dirs[$i];
       
       for($j=0;$j<strlen($currName);$j++)
       {
          if($currName[$j]==".")
          {
             $name="";
              continue 2;
              
          } else
          {
               $name.=$currName[$j];
          }
           
       }
      
       array_push($dirNames,$name);
       
       $name="";
    }
 return $dirNames;
}
function FindAndUse(){
    $currDesc=0;
    $LastLoop=false;
    $sizeDesc=count(description());
    $descDirectory="";
    $descDirectory="";
       $DescIndex=0;
    $PhotoIndex=0;
    $firstDesc=true;
    $dirs=FindFolder();
    $dirSize=count($dirs);
    $fullPath=array();
        $types=array();
  
    for($z=0;$z<$dirSize;$z++){
         
        $dir="";
$dir    = "schools/$dirs[$z]";

$files1 = scandir($dir);
    $size=count($files1);
   

 
   for($i=0;$i<$size;$i++)
   {
      
       
       if($files1[$i]=="logo.png"or$files1[$i]=="logo.jpg"){
       array_push($types,$files1[$i]);
           array_push($fullPath,$dir."/".$files1[$i]);
       }
     
     
   }
    }
    $sizer=count($fullPath);
   
   $FolderPath;
    $currPath="";
    $curr=0;
   
  
    for($i=0;$i<strlen($fullPath[0]);$i++)
    {
        $tem=$fullPath[0];
             if($curr!=2)
            {
                $currPath.=$tem[$i];
            }
            if($tem[$i]=='/')
            {
                $curr++;
            }
    }
    for($i=0;$i<$sizer;$i++)
    { 
          
        
        $FolderPath="";
    $Lines=0;
        for($j=0;$j<strlen($fullPath[$i]);$j++)
        {
            $temp=$fullPath[$i];
             if($Lines!=2)
            {
                $FolderPath.=$temp[$j];
            }
            if($temp[$j]=='/')
            {
                $Lines++;
            }
           
        }
       
        if($currPath==$FolderPath){
            addContent($currPath);
               $lin=0;
             $SchoolName="";
            for($k=0;$k<strlen($currPath);$k++)
            {
             
                if($currPath[$k]=="/")
                {
                    $lin++;
                }
                if($lin==1 and $currPath[$k]!="/")
                {
                  $SchoolName.=$currPath[$k];  
                }
            }
           echo "<a href='$currPath"."content.php'>$SchoolName</a>";
        echo "<br><img src='$fullPath[$i]'>";
            
            $PhotoIndex++;
        }else
        {
         $PhotoIndex++;
            $descDirectory="";
            $descSize1=count(description());
            $dirLines=0;
            if($DescIndex<$descSize1){
            
                for($y1=0;$y1<strlen(description()[$DescIndex]);$y1++)
                {
                    $currDescription=description()[$DescIndex];
                    if($currDescription[$y1]=="/")
                    {
                        $dirLines++;
                    }
                    if($dirLines<2)
                    {
                        $descDirectory.=$currDescription[$y1];
                    }
                }
                
            }
        
            echo "<br>";
       $descDirectory.="/";
        
               if($currDesc<$sizeDesc and $currPath==$descDirectory){
                echo "<p>".file_get_contents(description()[$currDesc])."</p>";
            $currDesc++;
                   $DescIndex++;
            }
        
             $currPath=$FolderPath;
            addContent($currPath);
               $lin=0;
             $SchoolName="";
            for($k=0;$k<strlen($currPath);$k++)
            {
             
                if($currPath[$k]=="/")
                {
                    $lin++;
                }
                if($lin==1 and $currPath[$k]!="/")
                {
                  $SchoolName.=$currPath[$k];  
                }
            }
            
              echo "<a href='$currPath"."content.php'>$SchoolName</a>";
            echo "<br><img src='$fullPath[$i]'>";
          
            
        
        }
    $FullPathSize=count($fullPath);
        $lastElement=count(description())-1;
    
        if($PhotoIndex==$FullPathSize)
        {
        
            $LastLoop=true;
          
        }
       if($LastLoop)
       {
           
          $descDirectory="";
            $descSize1=count(description());
            $dirLines=0;
           $lastElement=count(description())-1;
           
            
                for($y1=0;$y1<strlen(description()[$lastElement]);$y1++)
                {
                    $currDescription=description()[$lastElement];
                    if($currDescription[$y1]=="/")
                    {
                        $dirLines++;
                    }
                    if($dirLines<2)
                    {
                        $descDirectory.=$currDescription[$y1];
                    }
                }
               
            
        
       }
        $descDirectory.="/";

          if($PhotoIndex==$FullPathSize and $currPath==$descDirectory)
      {
         
                echo "<br><p>".file_get_contents(description()[$lastElement])."</p>";
           
            
          
      }
      
     
       
    
        }
  
    
   
}

function description(){
    $dirs=FindFolder();
    $dirSize=count($dirs);
    $fullPath=array();
        $types=array();
    $allDescriptions=array();
    
    for($z=0;$z<$dirSize;$z++){
        $dir="";
$dir    = "schools/$dirs[$z]";

$files1 = scandir($dir);
    $size=count($files1);
    

 
   for($i=0;$i<$size;$i++)
   {
       $currName=$files1[$i];
       
       
       if($currName=="description.txt"){
       array_push($types,$files1[$i]);
           array_push($fullPath,$dir."/".$files1[$i]);
       }
       
     
   }
    }
  
    return $fullPath;
}
    ?>
