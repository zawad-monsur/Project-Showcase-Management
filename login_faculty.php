<?php

session_start();

include("dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $faculty_id = $_POST['faculty_id'];
    $faculty_password = $_POST['faculty_password'];

    if (!empty($faculty_id) && !empty($faculty_password)) {

        //read from database
        $query = "SELECT * from faculty where faculty_id = '$faculty_id' limit 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['faculty_password'] === $faculty_password) {

                    $_SESSION['faculty_id'] = $user_data['faculty_id'];
                    header("Location: faculty_dashboard.php");
                    die;
                }
            }
        } else echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}
