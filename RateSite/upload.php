<?php
$dir="";
if(isset($_POST["submit"])) {
    $schoolName=$_POST['schoolName'];
    $dir="schools/".$schoolName;
    $location=$_POST['Location'];
    $kind=$_POST['Kind'];
    $filter=$dir."/filter.txt";
    $description=$_POST['description'];
    $descFile=$dir."/description.txt";
    if(empty($schoolName)||empty($location)||empty($kind)||empty($description))
    {
        echo "<script>alert('Check all options');</script>";
       echo "<script>window.location.replace('AddSchool.php');</script>";
        die();
    }else if($_FILES["fileToUpload"]["size"]<=0)
{
       echo "<script>alert('Upload picture');</script>";
       echo "<script>window.location.replace('AddSchool.php');</script>";
        die();
}
  if(is_dir($dir)==false){
    
mkdir($dir);
      $con=new mysqli("localhost","root","","login");
 $query="Insert into schools(name,city,SchoolType,sub1,sub2,sub3,sub4,sub5) values('$schoolName','$location','$kind','0,0,0,0,0,','0,0,0,0,0,','0,0,0,0,0,','0,0,0,0,0,','0,0,0,0,0,')";
    mysqli_query($con,$query);
$descDir=fopen($descFile,"w");
     
      fwrite($descDir,$description);
      
}else
  {
      
      echo "The school already exists";
      return;
  }
}
$target_dir = $dir."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
   
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    
    $uploadOk = 1;
  }else
  {
      echo "Only images are allowed";
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png"  ) {
  echo "Sorry, only JPG, PNG  files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if($imageFileType=="png"){
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir."logo.png")) {
    echo "The school has been uploaded.";
  } else {
    echo "Sorry, there was an error.";
  }
}else
    {
       if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir."logo.jpg")) {
    echo "The school has been uploaded.";
  } else {
    echo "Sorry, there was an error.";
  }   
    }
}
    
?>