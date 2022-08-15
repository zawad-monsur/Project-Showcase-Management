<!DOCTYPE html>
<html>

<head>
    <title>Project Showcase</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>


    <?php
    session_start();

    include("dbconnect.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //something was posted
        $student_id = $_POST['student_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($name) && !empty($email) && !empty($student_id) && !empty($password)) {

            //save to database
            //echo $name . " " . $password;
            $query = "insert into student (student_id,name, email, password) values ('$student_id','$name', '$email', '$password')";

            mysqli_query($conn, $query);

            header("Location: login.php");
            die;
        } else {
            echo "Please enter some valid information!";
        }
    }
    ?>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="signup_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/logo_uiu.jpg" class="brand_logo" alt="UIU">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="signup_student.php" method="POST">

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <p class="h4">Signing up as Student</p>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="student_id" id="student_id" class="form-control  input_user" placeholder="Student ID" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-append">

                            </div>
                            <input type="text" name="name" id="name" class="form-control  input_user" placeholder="Student name" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-append">

                            </div>
                            <input type="email" name="email" id="email" class="form-control  input_user" placeholder="Student email" required>
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">

                            </div>
                            <input type="password" name="password" id="password" class="form-control input_pass" placeholder="Enter password" required>
                        </div>
                </div>
                <div class="d-flex justify-content-center mt-3 container">
                    <button onclick="myFunction()" type="submit" name="button" class="btn btn">Sign Up</button>
                </div>
                </form>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Already have an account? <a href="login.php" class="ml-2">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            alert("Student Registered Successfully!");
        }
    </script>

</body>

</html>