<?php
$total = 0;
$percentage = 0;
// $category = "";

require("connection.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){


$name = $_POST['name'];
$roll = $_POST['roll'];
$english = $_POST['english'];
$hindi = $_POST['hindi'];
$math = $_POST['math'];
$marathi = $_POST['marathi'];
$science = $_POST['science'];
$social_studies = $_POST['social_studies'];
$iexam = $_GET['exam'];
$exam = $iexam;
$id = $_POST['id'];
$total = $english+$hindi+$math+$marathi+$science+$social_studies;
if($exam == " unit_test_1" or $exam == " unit_test_2" or $exam == " unit_test_3" or $exam == " unit_test_4"){

  $percentage = ($total/120)*100;
}
elseif($exam == " semester_1" or $exam == " semester_2"){

  $percentage = ($total/600)*100;
}
if($percentage>80){
  $category = "Ranker";
  }
  elseif($percentage>40){
  $category = "Achiever";
  }
  elseif($percentage>33){
  $category = "Defaulter";
  }
  else{
      $category = "Fail";
  }
  if($exam == " unit_test_1"){
    $ucategory = "utcategory_1";
  }
  elseif($exam == " unit_test_2"){
    $ucategory = "utcategory_2";
  }
  elseif($exam == " unit_test_3"){
    $ucategory = "utcategory_3";
  }
  elseif($exam == " unit_test_4"){
    $ucategory = "utcategory_4";
  }
  elseif($exam == " semester_1"){
    $ucategory = "scategory_1";
  }
  elseif($exam == " semester_2"){
    $ucategory = "scategory_2";
  }
$sql = "INSERT INTO $iexam (`id`, `name`, `roll`, `english`, `hindi`, `math`, `marathi`, `science`, `social_studies`, `percentage`) VALUES ('$id', '$name', '$roll', '$english', '$hindi', '$math', '$marathi', '$science', '$social_studies', '$percentage')" ;
$result = mysqli_query($conn, $sql);
$s = "UPDATE student set $ucategory='$category' WHERE id='$id'";
$r = mysqli_query($conn, $s);
if($result){
  $record = true;
  header("location:marks.php?msg=$record");
  echo $category;
}
else{
  $_not_record = true;
  header("location:marks.php?msgnr=$not_record");
}
}
?>