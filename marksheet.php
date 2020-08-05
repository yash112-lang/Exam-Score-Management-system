<?php
require 'connection.php';
$sno = 1;
$id=$_GET['id'];
$exam = $_GET['exam'];

$sql="select * from student where id='$id'";
$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        $roll=$row['roll'];
        $name=$row['name'];
        $email = $row['email'];
        $standard = $row['standard'];
      }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" media="print">

    <title>Student Marksheet</title>
  </head>
  <body>
    <?php
        require("navbar.php");

?>

<div class="container mt-4" id="container">
  <button class="btn btn-lg btn-primary mb-2 float-right" id="print-btn" onclick="window.print();">Print</button>
        <center><h2>Marksheet Of <?php if($exam == "unit_test_1")
        {
            echo "1st Unit Test";
        }
        elseif($exam == "unit_test_2"){
            echo "2nd Unit Test";
        }
        elseif($exam == "unit_test_3"){
            echo "3rd Unit Test";
        }
        elseif ($exam == "unit_test_4") {
            echo "4th Unit Test";
        }
        elseif($exam == "semester_1"){
            echo "1st Semester";
        }
        elseif($exam == "semester_2"){
            echo "2nd Semester";
        }
         ?></h2></center>
        <hr>
        <h6>Student Details</h6>
        <h5 class="mt-4">Name:<i> <?php   echo $name?></i></h5>
        <h5>email: <i><?php  echo $email; ?></i></h5>
        <h5>Roll Number: <i><?php  echo $roll; ?></i></h5>
        <h5>Standard: <i><?php  echo $standard; ?></i></h5>
        <hr>
        <center><h2>Marks</h2></center>
        
        <?php
        require("connection.php");
        $sql = "SELECT * FROM $exam where id=$id";
        $result = mysqli_query($conn, $sql);
        $num =  mysqli_num_rows($result);
        if($num >0){
          while($row = mysqli_fetch_assoc($result)){
            $hindi = $row["hindi"];
            $english = $row["english"];
            $math = $row["math"];
            $marathi = $row["marathi"];
            $science = $row["science"];
            $social_studies = $row["social_studies"];
            $total = $english+$hindi+$math+$marathi+$science+$social_studies;
            if($exam == "unit_test_1" or $exam == "unit_test_2" or $exam == "unit_test_3" or $exam == "unit_test_4"){
              $exam_type = 20;
            }
            elseif($exam == "semester_1" or $exam == "semester_2"){
              $exam_type = 100;
            }
        
            echo '<table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Achieved Marks</th>
                <th scope="col">Maximum Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>';
            echo ' <th scope="row">'. $sno .'</th>
            <td>CS101</td>
            <td>English</td>
            <td>'. $row["english"] .'</td>
            <td>'. $exam_type .'</td>
          </tr>';
                $sno = $sno+1;
          echo '<th scope="row">'.$sno.'</th>
          <td>CS102</td>
          <td>Hindi</td>
          <td>'. $row["hindi"] .'</td>
          <td>'. $exam_type .'</td>
        </tr>';
                $sno = $sno+1;
          echo '<th scope="row">'.$sno.'</th>
          <td>CS103</td>
          <td>Math</td>
          <td>'. $row["math"] .'</td>
          <td>'. $exam_type .'</td>
        </tr>';
                $sno = $sno+1;
          echo '<th scope="row">'.$sno.'</th>
          <td>CS104</td>
          <td>Marathi</td>
          <td>'. $row["marathi"] .'</td>
          <td>'. $exam_type .'</td>
        </tr>';
                $sno = $sno+1;
          echo '<th scope="row">'.$sno.'</th>
          <td>CS105</td>
          <td>Science</td>
          <td>'. $row["science"] .'</td>
          <td>'. $exam_type .'</td>
        </tr>';
                $sno = $sno+1;
          echo '<th scope="row">'.$sno.'</th>
          <td>CS106</td>
          <td>Social Studies</td>
          <td>'. $row["social_studies"] .'</td>
          <td>'. $exam_type .'</td>
        </tr>';
        }


if($exam == "unit_test_1" or $exam == "unit_test_2" or $exam == "unit_test_3" or $exam == "unit_test_4"){

    $percentage = ($total/120)*100;
}
if($exam == "semester_1" or $exam == "semester_2"){

    $percentage = ($total/600)*100;
}
    
 echo '</tbody>
</table>
<hr>
<br>
<br>';

echo  ' <h4 class="total">Total Marks: <i> '.$total .'</i></h4>';
echo '<h4 class="division" style="margin-top: -30px;"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Division #';
if($percentage>=60){
    echo "1st";
}
    elseif($percentage>40){
        echo "2nd";

}
elseif($percentage>33){
    echo "3rd";

} 
else{
    echo "Fail";

}
echo '</i></h4>
<br>
';
if($percentage>=80){
  $remark = "Ranker";
}
elseif($percentage>=40){
  $remark = "Achiever";
}
elseif($percentage>=33){
  $remark = "Defaulter";
}
elseif($percentage<33){
  $remark = "Fail";
}



echo '<h4>Percentage: <i>' . $percentage .'%</i></h4></div>';
echo '<h4 class="remark" style="margin-top:-45px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remark: <i>'.  $remark .'</i></h4>';
 }
else{
  echo "<center><h2><b>No Marks available for this student.</b></h2></center>";
}
?>


        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>