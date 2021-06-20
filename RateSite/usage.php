
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
function Filter()
{
    echo "<form method='get'>
<select name='city'>
<option value='null'>not choosen</option>
<option value='Varna'>Varna</option>
<option value='Plovdiv'>Plovdiv</option>
<option value='Sofia'>Sofia</option>
<option value='Burgas'>Burgas</option>
</select><br>
<select name='kind'>
<option value='null'>not choosen</option>
<option value='Sou'>Sou</option>
<option value='professional'>professional</option>
</select>
<br>
<input type='submit'>
 </form>
";
  
}
function getParameters()
{
        $filterFiles=array();
    $dirs=FindFolder();
    for($i=0;$i<count($dirs);$i++)
    {
        $dir="schools/$dirs[$i]";
        $file=scandir($dir);
    
       for($j=0;$j<count($file);$j++)
       {
           if($file[$j]=="filter.txt")
           {
               
           array_push($filterFiles,$dir."/".$file[$j]);
           }
        
       }
        
    }
    return $filterFiles;
}
function FindAndUse(){
    Filter();
    $cities=array();
    $Kind=array();
    
      if($_SERVER['REQUEST_METHOD']=="GET" and isset($_GET['city']) or isset($_GET['kind'])){
          $city=$_GET['city'];
          $kind=$_GET['kind'];
          $current="";
          $dots=0;
          $line=0;
            
            for($i=0;$i<count(getParameters());$i++)
    {
        $Key="";
        $Value="";
        $type="";
               
        $current=file_get_contents(getParameters()[$i]);
            
                for($j=0;$j<strlen($current);$j++){
                    
                if($current[$j]==":")
                {
                    $dots++;
                }
                   if($current[$j]=="-")
                   {
                       $line++;
                   } 
                if($dots==0 and $line==0)
                {
                    $type.=$current[$j];
                   
                }
                    if($dots==0 and $line==1 && $current[$j]!="-" )
                {
                    $Key.=$current[$j];
                }
                if($dots==1 and $line==1 and $current[$j]!=":" and $current[$j]!=";")
                {
                        $Value.=$current[$j];
                }
            
                if($current[$j]==";")
                {
                   
                    if( $Value==$city and $type=="city"){
                    $cities[]=$Key;
                      
                    }
                    if($Value==$kind and $type=="kind")
                    {
                        
                        $Kind[]=$Key;
                          
                    }
                    $Value="";
                    $type="";
                    $Key="";
                  $dots=0;
                 $line=0;
                 
                }
                }
    }
    
 if(count($cities)==0 &&$city!="null")
 {
     $cities[]="null";
 }
    if(count($Kind)==0 &&$kind!="null")
 {
     $Kind[]="null";
 }
        
      
  
        
    }

if(count($cities)==0 and count($Kind)==0) {
$dirs=FindFolder();
    for($i=0;$i<count($dirs);$i++)
    {
        $dir="schools/$dirs[$i]";
        addContent($dir);
        $name=$dirs[$i];
         $content="$dir/content.php";
        $description="$dir/description.txt";
        $logo="$dir/logo.png";
      echo "<a href='$content'>$name</a><br>";
             if(file_exists($logo)){
             echo "<img src='$logo'><br>";
             }else
             {
               echo "<img src='$dir/logo.jpg'><br>";  
             }
             if(file_exists($description)){
             echo file_get_contents($description)."<br>";
             }
    }
    
  

}
    else
    {
         $dirs=FindFolder();
        $KindSize=count($Kind);
        $CitySize=count($cities);
        $found=false;
        if($KindSize==0)
        {
            $Kind=$cities;
        }
        else if($CitySize==0)
        {
            $cities=$Kind;
        }
    for($i=0;$i<count($dirs);$i++)
    {
          
        $dir="schools/$dirs[$i]";
        $content="$dir/content.php";
       $name=$dirs[$i];
        $SchoolName="";
        $logo=$dir."/logo.png";
      
        $description=$dir."/description.txt";
     for($j=0;$j<count($cities);$j++)
     {
       for($z=0;$z<count($Kind);$z++){
         if($cities[$j]==$name and $Kind[$z]==$name )
         {
          $found=true;
             echo "<a href='$content'>$name</a><br>";
             if(file_exists($logo)){
             echo "<img src='$logo'>";
             }else
             {
               echo "<img src='$dir/logo.jpg'><br>";  
             }
             if(file_exists($description)){
             echo file_get_contents($description)."<br>";
             }
             }
         
     }
     }
    }
        if($found==false)
        {
            echo "Not Found";
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


