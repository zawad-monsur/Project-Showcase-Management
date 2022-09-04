<?php
include_once 'dbconnect.php';

$idea=$_POST['idea'];
$features=$_POST['features'];
$outlook=$_POST['outlook'];
$implementation=$_POST['implementation'];
$team_work=$_POST['team_work'];
$project_id = $_POST['project_id'];
echo $project_id;
echo "avg = $average";

$sum = (double)$idea+(double)$features+(double)$outlook+(double)$implementation+(double)$team_work;
$average = $sum/5;
$sql = "UPDATE projects SET marks =$average WHERE project_id =$project_id";
$rs = $conn-> query($sql);
if($rs){
    echo "<script>alert('marks uploaded');</script>";
    echo "<script>window.close();</script>";
}


?>