<?php

session_start();

include("dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "ok";
    //something was posted
    $judge_id = $_POST['id'];
    $judge_password = $_POST['password'];

    if (!empty($judge_id) && !empty($judge_password)) {

        //read from database
        $query = "SELECT * from judge where judge_id = '$judge_id' limit 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $judge_password) {

                    $_SESSION['judge_category'] = $user_data['category'];
                    header("Location: Projects_view_judge.php");
                    die;
                }
            }
        } else echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}