<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     

     session_start();

     include_once 'dbconnect.php';
     $sql = "SELECT * FROM projects WHERE faculty_id = 1";
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
		?>
        <tr> 
		<td><?php echo $rows['project_title']; ?></td> 
        <td><?php echo $rows['description']; ?></td> 
        <td><?php echo $rows['category']; ?></td> 
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Group Details
                    </button></td>
        <td><button type="button" class="btn btn-primary">
                        Show project details
            </button></td>
        </tr>
        
        
    <?php
        }?>
    </table>
 


</body>
</html>