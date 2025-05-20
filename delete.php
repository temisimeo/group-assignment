<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM talents WHERE id = $id";
    if (mysqli_query($con, $sql)) {
        header("Location: student_talent.php"); 
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "There was an error.";
}
?>