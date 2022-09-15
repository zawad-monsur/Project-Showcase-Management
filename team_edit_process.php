<?php

session_start();

include("dbconnect.php");


//something was posted

$student_id = $_POST['student_id'];
$group_id = $_POST['group_id'];

$group_name = $_POST['group_name'];
$group_category = $_POST['group_category'];



$query = "UPDATE groups SET group_name = '$group_name', group_category = '$group_category' WHERE group_id = $group_id";
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully!<br />";
    die(0);
} else {
    // Display an error message if unable to update the record
    echo "Error updating record: " . $conn->error;
    die(0);
}
