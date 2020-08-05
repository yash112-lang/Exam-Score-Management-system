<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <title>Student Details</title>
</head>

<body>

    <?php
    
$delete = false;
    require("connection.php");
    require("navbar.php");
    if(isset($_GET['update'])){
        
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success ! </strong>We had successfully updated your fields.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    
}
if(isset($_GET['delete'])){
        
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success ! </strong>We had successfully deleted your fields.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';

}



    ?>
    <form action="score_card.php" method="POST">
        <div class="container mt-4" id="container">
            <?php
            echo '<h2><div class="form-group">
<label for="inputstandard">Select Standard</label>
<select id="inputstandard" class="form-control" name="standard">
<option selected value=None>None</option>
<option value="1st">1st</option>
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
</div></h2>';
            ?>
            <button type="submit" class="btn btn-primary mb-4">Search</button>
    </form>
    <center>
        <h2><?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $standard = $_POST['standard'];
                if ($standard == "None") {
                    echo "Please Select a Standard";
                } else {
                    echo "Students of class " . $standard;
                }
            } else {
                echo "Please select a standard";
            } ?></h2>
    </center>

    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Roll No.</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sno = 1;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $standard = $_POST['standard'];
                $sql = "SELECT * FROM student WHERE standard = '$standard'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <?php
                   echo "<tr>
                        <td>". $sno ."</td>";
                        $sno+=1;
                        ?>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['roll'] ?></td>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-primary mr-4">Edit</button></a>      
                        <a href="show.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-success mr-4">Show</button></a>         
                        <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger">Delete</button></a>         </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

    </div>





















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>