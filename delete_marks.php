<?php
$exam = $_GET['exam'];
$delete_marks = false;
$alert = false;
require("connection.php");

if($exam == "unit_test_1"){
    $ucategory = "utcategory_1";
  }
  elseif($exam == "unit_test_2"){
    $ucategory = "utcategory_2";
  }
  elseif($exam == "unit_test_3"){
    $ucategory = "utcategory_3";
  }
  elseif($exam == "unit_test_4"){
    $ucategory = "utcategory_4";
  }
  elseif($exam == "semester_1"){
    $ucategory = "scategory_1";
  }
  elseif($exam == "semester_2"){
    $ucategory = "scategory_2";
  }
  
$s = "SELECT * FROM $exam where id=".$_GET["id"];
$r = mysqli_query($conn, $s);
$sq = "UPDATE student set $ucategory='' WHERE id=".$_GET["id"];
$re = mysqli_query($conn, $sq);
if(mysqli_num_rows($r) == 1){
    $sql = "DELETE FROM $exam WHERE id=".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    if($result){
        $delete_marks = true; 
        header("location:marks.php?delete_marks=$delete_marks");
    }
}
else{
    $alert = true;
    header("location:marks.php?alert=$alert");

}


?>