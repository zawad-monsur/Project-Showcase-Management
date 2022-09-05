<?php
session_start();

?>
<!doctype html>
<html lang="en">
<?php
 
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Notice</title>
</head>

<body>

    <div class="container mt-5">
    <?php include('messege.php'); ?>
         
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Notice Upload
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                     
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label for="">Notice</label>
                                <input type="text" name="notice" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Course Name</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Date</label>
                                <input type="text" name="date" class="form-control">
                            </div>

                             
                            <div class="mb-3">
                                <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                            </div>





                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>