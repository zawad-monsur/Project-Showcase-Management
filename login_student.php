<?php
session_start();

include("dbconnect.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    if (!empty($student_id) && !empty($password)) {

        //read from database
        $query = "select * from student where student_id = '$student_id' limit 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['student_id'] = $user_data['student_id'];
                    header("Location: student_dashboard.php");
                    die;
                }
            }
        } else echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}
