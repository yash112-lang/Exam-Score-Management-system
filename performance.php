<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <title>Student Marks</title>
</head>

<body>
    <?php
    $sandesh = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success </strong>Student Marks are successfully uploaded.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    require("connection.php");
    require("navbar.php");
    if (isset($_GET['msg'])) {
        echo $sandesh;
    }
    ?>
    <?php

    $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success </strong>Student Marks are successfully updated.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    require("connection.php");
    if (isset($_GET['update_marks'])) {
        echo $message;
    }

    ?>

    <?php

    $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error </strong>We are facing some issues right now.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    require("connection.php");
    if (isset($_GET['not_update_marks'])) {
        echo $message;
    }
    ?>
    <?php

    $s = "SELECT * FROM unit_test_1 WHERE id=1";
    $res = mysqli_query($conn, $s);
    while ($row = mysqli_fetch_assoc($res)) {
        $english = $row['english'];
        $hindi = $row['hindi'];
        $math = $row['math'];
        $marathi = $row['marathi'];
        $science = $row['science'];
        $social_studies = $row['social_studies'];
        $total = $english + $hindi + $math + $marathi + $science + $social_studies;
    }


    ?>



    <?php

    $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Delete ! </strong>You data is deleted successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    require("connection.php");
    if (isset($_GET['delete_marks'])) {
        echo $message;
    }
    ?>

    <br>
    <div class="container" id="container">
        <form action="performance.php" method="POST">
            <div class=form-row>
                <div class="form-group col-md-6">
                    <label for="inputstandard">standard</label>
                    <select id="inputstandard" class="form-control" name="standard">
                        <option selected>Select Standard</option>
                        <option>1st</option>
                        <option>2nd</option>
                        <option>3rd</option>
                        <option>4th</option>
                        <option>5th</option>
                        <option>6th</option>
                        <option>7th</option>
                        <option>8th</option>
                        <option>9th</option>
                        <option>10th</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputexam">Exam Type</label>
                    <select id="inputexam" class="form-control" name="exam">
                        <option>Select Exam Type</option>
                        <option value="unit_test_1">Unit Test-1</option>
                        <option value="unit_test_2">Unit Test-2</option>
                        <option value="unit_test_3">Unit Test-3</option>
                        <option value="unit_test_4">Unit Test-4</option>
                        <option value="semester_1">Semester-1</option>
                        <option value="semester_2">Semester-2</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputexam">Category</label>
                    <select id="inputexam" class="form-control" name="category" required>
                        <option value="select">Select Category</option>
                        <option value="ranker">Ranker</option>
                        <option value="achiever">achiever</option>
                        <option value="defaulter">Defaulter</option>
                        <option value="">All category</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Search">
            </div>
    </div>



    </div>
    </form>
    <div class="container mt-4" id="container">
        <table class="table mt-4" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">roll Number</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno = 1;
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $standard = $_POST['standard'];
                    $exam = $_POST['exam'];
                    $fcategory = $_POST['category'];
                    $new_exam = "";
                    if ($exam == "unit_test_1") {
                        $new_exam = "Unit Test 1";
                    } elseif ($exam == "unit_test_2") {
                        $new_exam = "Unit Test 2";
                    } elseif ($exam == "unit_test_3") {
                        $new_exam = "Unit Test 3";
                    } elseif ($exam == "unit_test_4") {
                        $new_exam = "Unit Test 4";
                    } elseif ($exam == "semester_1") {
                        $new_exam = "Semester 1";
                    }
                    if ($exam == "semester_2") {
                        $new_exam = "Semester 2";
                    }

                    if ($exam != "Select Exam Type" and $standard != "Select Standard" and $fcategory != "select") {
                        if ($fcategory == "ranker" or $fcategory == "achiever" or $fcategory == "defaulter") {

                            if ($exam == "unit_test_1") {
                                $mcategory = "utcategory_1";
                            } elseif ($exam == "unit_test_2") {
                                $mcategory = "utcategory_2";
                            } elseif ($exam == "unit_test_3") {
                                $mcategory = "utcategory_3";
                            } elseif ($exam == "unit_test_4") {
                                $mcategory = "utcategory_4";
                            } elseif ($exam == "semester_1") {
                                $mcategory = "scategory_1";
                            }
                            if ($exam == "semester_2") {
                                $mcategory = "scategory_2";
                            }

                            

                            echo "<center><b><h2>Showing Results for $standard standard and for $new_exam and for $fcategory</h2></b></center>";
                            $sql = "SELECT * FROM student WHERE standard = '$standard' and $mcategory = '$fcategory'";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                            <td>" . $sno . "</td>";
                                $sno += 1;
                                $category = $row["$mcategory"];
                                if ($category == "") {
                                    $category = "N/A";
                                } else {
                                    $category =  $row["$mcategory"];
                                }
                                // echo $category;
                                echo '<td>' . $row["name"] . '</td>
                            <td> ' . $row["roll"] . '</td>
                            <td> ' . $category . '</td>
                            <td><a href="marksheet.php?id=' . $row["id"] . '&exam=' . $exam . '"><button type="button" class="btn btn-sm btn-success mr-4">View Performance</button></a></td>
                            </tr>';
                            }
                        }
                    
                    if ($fcategory == "") {
                        if ($exam == "unit_test_1") {
                            $mcategory = "utcategory_1";
                        } elseif ($exam == "unit_test_2") {
                            $mcategory = "utcategory_2";
                        } elseif ($exam == "unit_test_3") {
                            $mcategory = "utcategory_3";
                        } elseif ($exam == "unit_test_4") {
                            $mcategory = "utcategory_4";
                        } elseif ($exam == "semester_1") {
                            $mcategory = "scategory_1";
                        }
                        if ($exam == "semester_2") {
                            $mcategory = "scategory_2";
                        }
                        
                        if ($exam != "Select Exam Type" and $standard != "Select Standard" and $fcategory != "select") {
                            echo "<center><b><h2>Showing Results for $standard standard and for $new_exam and for All Category</h2></b></center>";
                            $sql = "SELECT * FROM student WHERE standard = '$standard'";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $a = "SELECT $mcategory from student";
                                $d = mysqli_query($conn, $a);
                                while($r = mysqli_fetch_assoc($d)){

                                }
                                echo "<tr>
                            <td>" . $sno . "</td>";
                                $sno += 1;
                                $category = $row["$mcategory"];
                                if ($category == "") {
                                    $category = "N/A";
                                } else {
                                    $category =  $row["$mcategory"];
                                }

                                echo '<td>' . $row["name"] . '</td>
                            <td> ' . $row["roll"] . '</td>
                            <td> ' . $category . '</td>
                            <td><a href="marksheet.php?id=' . $row["id"] . '&exam=' . $exam . '"><button type="button" class="btn btn-sm btn-success mr-4">View Performance</button></a></td>
                            </tr>';
                            }
                        }
                    }
                    

                } else {
                    echo "<center><b><h2>Please Select all the fields</h2></b></center>";
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