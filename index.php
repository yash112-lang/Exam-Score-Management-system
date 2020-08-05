<?php
require("connection.php");
?>

<?php
$msg = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $roll = $_POST['roll'];
    $standard = $_POST['standard'];
    $gender = $_POST['exampleRadios'];

$sql = "INSERT INTO `student` (`name`, `email`, `phone`, `standard`, `roll`, `gender`) VALUES ('$name', '$email', '$phone', '$standard', '$roll', '$gender')";
$result = mysqli_query($conn, $sql);
if(!$result){
    $msg =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error !</strong> We are facing some issues right now. Please try again after some time.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
else{
    $msg =  '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>Your data has been saved successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Student Record Manager</title>
</head>

<body>


    <?php
        require("navbar.php");
    ?>

    <?php
        echo $msg;
    ?>
    <!-- form -->
    
    <form action="index.php" method="POST">
        <div class="container mt-4" id="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputnumber">Phone Number</label>
                <input type="number" class="form-control" id="inputnumber" placeholder="eg. 1234567890" name="phone" required>
            </div>
            <div class="form-group">
                <label for="inputrollnumber">Roll Number</label>
                <input type="text" class="form-control" id="inputrollnumber" name="roll" placeholder="eg. 0905...." required>
            </div>
            <div class="form-group">
                <label for="inputstandard">Standard</label>
                <select id="inputstandard" class="form-control col-md-4" name="standard">
                    <option selected value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="9th">9th</option>
                    <option value="10th">10th</option>
                </select>
            </div>
            
            <div class="form-check col-md-4">
                <label for="exampleRadios">Gender</label>
                <input class="form-check-input ml-2" type="radio" name="exampleRadios" id="exampleRadios1" value="Male" checked>
        <label class="form-check-label ml-4" for="exampleRadios1">
          Male
        </label>


        <input class="form-check-input ml-2" type="radio" name="exampleRadios" id="exampleRadios2" value="Female">
        <label class="form-check-label ml-4" for="exampleRadios2">
            Female
        </label>

        <input class="form-check-input ml-2" type="radio" name="exampleRadios" id="exampleRadios3" value="Other">
        <label class="form-check-label ml-4" for="exampleRadios3">
            Other
        </label>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</div>
</div>
    </form>































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>