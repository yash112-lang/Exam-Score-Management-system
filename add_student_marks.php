<?php
require 'connection.php';
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

<?php
$run = false;
$sql = "SELECT * FROM $exam where id='$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    if($row['id'] == $id){
        $run = true;
        
        echo '<!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
            <title>Edit Student Details</title>
          </head>
          <body>
          <?php
                require("navbar.php");
                
            ?>
        
        <form action="add_marks.php?exam= '. " $exam"  .'  " method="POST">
            <div class="container mt-4" id="container">
                <center><h2>Details Of Student</h2></center>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required value=" '.   "$name"   .'    " readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value = " '.   "$email"   .'    "name="email" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll Number</label>
                        <input type="text" class="form-control" id="roll" name="roll" value = " '.   "$roll"   .'    " placeholder="eg. 0905...." required readonly>
                    </div>
                   
                   
                    
                    
                <center><h2>Marks Of Student</h2></center>
                <div class="form-row mt-4">
            <div class="col">
            <label for="English">English</label>
              <input class="form-control" placeholder="English marks" id="English" name="english"  value=" ' .    "$row[english]"     .'   " readonly>
            </div>
            <div class="col">
            <label for="Hindi">Hindi</label>
              <input class="form-control" placeholder="Hindi Marks" id="Hindi" name="hindi" value=" '.   "$row[hindi]"   .'    " readonly>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
            <label for="Marathi">Marathi</label>
              <input class="form-control" placeholder="marathi Marks" id="Marathi" name="marathi"value=" ' .    "$row[marathi]"     .'   " readonly>
            </div>
            <div class="col">
            <label for="Math">Math</label>
              <input class="form-control" placeholder="Math Marks" id="Math" name="math" value=" ' .    "$row[math]"     .'   " readonly>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
            <label for="science">Science</label>
              <input class="form-control" placeholder="Science Marks" id="Science" name="science" value=" ' .    "$row[science]"     .'   " readonly>
            </div>
            <div class="col">
            <label for="social_studies">social_studies</label>
              <input class="form-control" placeholder="Social Studies Marks" id="social_studies" name="social_studies" value=" ' .    "$row[social_studies]"     .'   " readonly>
            </div>
          </div>';
        
    }
}
if(!$run) {

  if($exam == "unit_test_1" or $exam == "unit_test_2" or $exam == "unit_test_3" or $exam == "unit_test_4"){
    $max_marks = 20;
  }
  elseif($exam == "semester_1" or $exam == "semester_2"){
    $max_marks = 100;
  }
    echo '<!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <title>Edit Student Details</title>
      </head>
      <body>
      <?php
            require("navbar.php");
            
        ?>
    
    <form action="add_marks.php?exam= '.$exam.'" method="POST">
        <div class="container mt-4" id="container">
            <center><h2>Details Of Student</h2></center>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value=" '.   "$name"   .'    " readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value = " '.   "$email"   .'    "name="email" required readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="roll">Roll Number</label>
                    <input type="text" class="form-control" id="roll" name="roll" value = " '.   "$roll"   .'    " placeholder="eg. 0905...." required readonly>
                </div>
               
               
                
                
            <center><h2>Marks Of Student</h2></center>
            <div class="form-row mt-4">
        <div class="col">
        <label for="English">English</label>
          <input class="form-control" placeholder="English marks" id="English" name="english" type="number" required max="'.$max_marks.'" min="0">
        </div>
        <div class="col">
        <label for="Hindi">Hindi</label>
          <input class="form-control" placeholder="Hindi Marks" id="Hindi" name="hindi" type="number" required  max="'.$max_marks.'" min="0">
        </div>
      </div>
      <div class="form-row mt-4">
        <div class="col">
        <label for="Marathi">Marathi</label>
          <input class="form-control" placeholder="marathi Marks" id="Marathi" name="marathi" type="number" required max="'.$max_marks.'" min="0">
        </div>
        <div class="col">
        <label for="Math">Math</label>
          <input class="form-control" placeholder="Math Marks" id="Math" name="math" type="number" required  max="'.$max_marks.'" min="0">
        </div>
      </div>
      <div class="form-row mt-4">
        <div class="col">
        <label for="science">Science</label>
          <input class="form-control" placeholder="Science Marks" id="Science" name="science" type="number" required max="'.$max_marks.'" min="0">
        </div>
        <div class="col">
        <label for="social_studies">social_studies</label>
          <input class="form-control" placeholder="Social Studies Marks" id="social_studies" name="social_studies" type="number" required max="'.$max_marks.'" min="0">
        </div>
      </div>
      <button type="submit" class="btn btn-primary mt-4 mb-4">Add Marks</button>
</div>
</div>
'
;
}


?>
<input type='hidden' name='id' value='<?php echo $id?>'>


</form>
    
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
    
    
    
    
      </body>
    </html>



