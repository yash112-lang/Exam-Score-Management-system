<?php
require 'connection.php';
$id=$_GET['id'];

$sql="select * from student where id='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $roll=$row['roll'];
        $name=$row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $standard = $row['standard'];
        $gender = $row['gender'];
      }
}else{
    echo '0 results';
}
$msg='';

?>

<!doctype html>
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

<form action="update.php" method="POST">
  <h2>Update</h2>
        <div class="container mt-4" id="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required value="<?php echo $name; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value = "<?php echo $email; ?>"name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" id="phone" value = "<?php echo $phone; ?>" placeholder="eg. 1234567890" name="phone" required>
            </div>
            <div class="form-group">
                <label for="roll">Roll Number</label>
                <input type="text" class="form-control" id="roll" name="roll" value = "<?php echo $roll; ?>" placeholder="eg. 0905...." required>
            </div>
            <div class="form-group required">
                <label for="standard" class="col-sm-2 control-label">Standard</label>
                <div class="col-sm-10">
                    <select name="standard" class="form-control col-md-4" id="standard" required="required" value="<?php echo $standard;?>">
                        <option selected value="<?php echo $standard;?>"><?php echo $standard;?></option>
                        <option value="1st">1</option>
                        <option value="2nd">2</option>
                        <option value="3rd">3</option>
                        <option value="4th">4</option>
                        <option value="5th">5</option>
                        <option value="6th">6</option>
                        <option value="7th">7</option>
                        <option value="8th">8</option>
                        <option value="9th">9</option>
                        <option value="10th">10</option>
                    </select>
                </div>
            </div>
            
            
            <div class="form-group required">
                <label for="gender" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <input  class="form-check-label ml-2" type="radio" name="gender" value="Male" required="required"
                    <?php
                    if($gender=='Male'){
                      echo 'checked';
                    }
                    ?>>Male 
                    
                    <input class="form-check-label ml-2" type="radio" name="gender" value="Female" required="required"
                    <?php
                    if($gender=='Female'){
                      echo 'checked';
                    } 
                    ?>>Female
                    <input class="form-check-label ml-2" type="radio" name="gender" value="Other" required="required"                    
                    <?php
                    if($gender=='Other'){
                      echo 'checked';
                    } 
                    ?>>Other
                </div>
            </div>
        
    <button type="submit" class="btn btn-primary mt-4">Update</button>
</div>
</div>
<input type='hidden' name='id' value='<?php echo $id?>'>

    </form>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>