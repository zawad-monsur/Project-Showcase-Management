
<?php
session_start();

require_once('dbcon.php');



if(isset($_POST['upload']))
 {
    // $notice =mysqli_real_escape_string($con,$_POST['notice']);
    $notice = $_POST['notice'];
    $course =mysqli_real_escape_string($con,$_POST['course']);
    $date =mysqli_real_escape_string($con,$_POST['date']);
     

    // $query = "INSERT INTO notice (notice,course,date) VALUES ('$notice','$course','$date',)";
    $sql = "INSERT INTO `notice` ( `notice`, `course`, `date`) VALUES ( '$notice', '$course', '$date')";

    $query_run = mysqli_query($con,$sql);
    if($query_run){
   

    $_SESSION['message'] = "Notice upload successfully";

          header("Location:create-notice.php");
          exit(0);
    }
    else{
        $_SESSION['message'] = "Notice Not Upload successfully";

        header("Location: create-notice.php");
        exit(0);
    }

 }

?>

<!-- edit notice -->
<?php
 
if(isset($_POST['update_notice'])){

$notice_id=mysqli_real_escape_string($con,$_POST['notice_id']);
$notice =mysqli_real_escape_string($con,$_POST['notice']);
$course =mysqli_real_escape_string($con,$_POST['course']);
$date =mysqli_real_escape_string($con,$_POST['date']);
 


$query = "UPDATE  notice SET notice='$notice', course='$course', date='$date',  
WHERE id='$notice_id'";
$query_run =mysqli_query($con,$query);

if($query_run){
    $_SESSION['message'] = "student Update successfully";

    header("Location:index.php");
    exit(0);

}else{
    $_SESSION['message'] = "student NOT Update successfully";

    header("Location:index.php");
    exit(0);

}

}
?>