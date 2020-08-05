

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Student Details</title>
  </head>
  <body>
    
  <?php
require("navbar.php");
require("connection.php");
$sql = "SELECT * FROM student WHERE id=".$_GET["id"];
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    // echo "<center><h1>Welcome ". $row['roll'] . "</h1></center>";
    // echo "<br>";
    echo '<div class="card text-center">
    <div class="card-header">
      Student Details
    </div>
    <div class="card-body">
      <h2 class="card-title">Welcome '. $row["roll"] .'</h2>
      <p class="card-text">Name Of Student :- '.$row["name"] .'</p>
      <p class="card-text">Email Of Student :- '.$row["email"] .'</p>
      <p class="card-text">Contact Number :- '.$row["phone"] .'</p>
      <p class="card-text">Roll Number :- '.$row["roll"] .'</p>
      <p class="card-text">Standard Of Student :- '.$row["standard"] .'</p>
      <p class="card-text">Gender :- '.$row["gender"] .'</p>
      <a href="edit.php?id='. $row["id"] .'" class="btn btn-primary">Edit Details</a>
    </div>
    <div class="card-footer text-muted">
      Last Updated on '. $row["date"] .'
    </div>
  </div>';



}

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>