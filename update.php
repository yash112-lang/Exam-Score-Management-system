<?php
$update = false;
require('connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];    
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $roll = $_POST["roll"];
    $standard = $_POST["standard"];
    $id = $_POST["id"]; 

  $sql = "UPDATE student set name='$name',email='$email',phone='$phone',gender='$gender',roll='$roll',standard='$standard' WHERE id='$id'";
  $msg='';
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
    header("location:score_card.php?update=$update");
    
  }
  else{
        
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry </strong>for your inconvienience. We are loking towards your problem.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    
  }
}
?>
