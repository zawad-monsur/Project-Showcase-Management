<!DOCTYPE html>
<html>

<head>
    <title>Project Showcase</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/logo_uiu.jpg" class="brand_logo" alt="UIU">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-1">
                    <p class="h3">Signup as,</p>
                </div>
                <form action="signup_faculty.php">
                    <div class="d-flex justify-content-center mt-1 login_container">
                        <button type="submit" name="button" id="login" class="btn login_btn">Faculty</button>
                    </div>
                </form>

                <form action="signup_student.php">
                    <div class="d-flex justify-content-center mt-1 login_container">
                        <button type="submit" name="button" id="login" class="btn login_btn">Student</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>