<?php
$update_marks = false;
$not_update_marks = false;
$total = 0;
$percentage = 0;
$ucategory = "bhjb";
require("connection.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $english = $_POST['english'];
    $hindi = $_POST['hindi'];
    $math = $_POST['math'];
    $marathi = $_POST['marathi'];
    $science = $_POST['science'];
    $social_studies = $_POST['social_studies'];
    $exam = $_GET['exam'];
    $id = $_GET['id'];
    $total = $english+$hindi+$math+$marathi+$science+$social_studies;
    $uexam = $exam;
    if($exam == "unit_test_1" or $exam == "unit_test_2" or $exam == "unit_test_3" or $exam == "unit_test_4"){

        $percentage = ($total/120)*100;
    }
    elseif($exam == "semester_1" or $exam == "semester_2"){
    
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
        // $ucategory = "bjchd";
        if($uexam == "unit_test_1"){
            $ucategory = "utcategory_1";
            echo $ucategory;
          }
          elseif($uexam == "unit_test_2"){
            $ucategory = "utcategory_2";
          }
          elseif($uexam == "unit_test_3"){
            $ucategory = "utcategory_3";
          }
          elseif($uexam == "unit_test_4"){
            $ucategory = "utcategory_4";
          }
          elseif($uexam == "semester_1"){
            $ucategory = "scategory_1";
          }
          elseif($uexam == "semester_2"){
            $ucategory = "scategory_2";
          }

    $sql = "UPDATE $exam set name='$name',roll='$roll',english='$english',hindi='$hindi',math='$math',marathi='$marathi',science='$science',social_studies='$social_studies',percentage='$percentage' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $s = "UPDATE student set $ucategory='$category' WHERE id='$id'";
    $r = mysqli_query($conn, $s);
    if($result){
        $update_marks = true;
        header("location:marks.php?update_marks=$update_marks");

    }
    else{
        
        $not_update_marks = true;
        header("location:marks.php?not_update_marks=$not_update_marks");
    
  }
}

?>