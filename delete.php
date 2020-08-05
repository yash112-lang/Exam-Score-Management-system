<?php
    require("connection.php");
    $sql = "DELETE FROM student WHERE id=".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    $delete = true; 
    header("location:score_card.php?delete=$delete");
?>