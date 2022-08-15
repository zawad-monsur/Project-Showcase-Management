<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="navbar.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>show project</title>
</head>
<body>
    <?php 
     

     session_start();

     include_once 'dbconnect.php';
     $sql = "SELECT p.*,g.group_name,g.group_category FROM projects AS p JOIN groups AS g on (p.group_id=g.group_id) WHERE faculty_id = 1 GROUP BY p.project_id";
    ?>
     <table align="center" style="width:90%; line-height:200%;"> 
	<tr> 
		<th colspan="6"><h2>Projects</h2></th> 
		</tr> 
			  <th>Project Title </th> 
              <th>Description</th> 
              <th>Category </th>
              <th></th> 
               

                   
		</tr> 
        
       
		
		<?php
            $rs = $conn-> query($sql); 
            
         while($rows=mysqli_fetch_array($rs)) 
		{ 
            $project_id = $rows['project_id'];
		?>
        <tr> 
		<td><?php echo $rows['project_title']; echo $rows['project_id'] ?></td> 
        <td><?php echo $rows['description']; ?></td> 
        <td><?php echo $rows['category'];  ?></td> 
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Group Details
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h2><?php echo $rows['project_title']; ?></h2>
                                <h2>Group Name : <?php echo $rows['group_name']; ?></h2>
                                <h4>Group members:</h4>

                                    <?php
                                
                                $sql1 = "SELECT * FROM projects AS p JOIN groups AS g on (p.group_id=g.group_id) JOIN student AS s ON (g.student_id=s.student_id)  WHERE project_id = $project_id";
                                $rs1 = $conn-> query($sql1); 
                                
                                while($rows_modal=mysqli_fetch_array($rs1)) 
                                { 
                                    ?>
                                     <?php echo $rows_modal['student_id']; ?> <?php echo $rows_modal['name']; ?> <br>


                                <?php
                                }?>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div></td>
        <td>
                <form name = "confirm" action="project_details.php" method="post">
                    <input type="hidden" name="project_id" value="<?php echo $rows['project_id']; ?>">
                    
                    
                <input type="submit" class="btn btn-primary" name = "submit" value="Show Project details">
            </td>
        </tr>
        
        
    <?php
        }?>
    </table>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>