<?php
    $room_no = $_GET['room_no'];
    include_once 'dbconnect.php';
    $sql = "SELECT p.*,g.group_name,g.group_category FROM projects AS p JOIN groups AS g on (p.group_id=g.group_id) WHERE category = 'Software Lab' AND p.room_number = $room_no GROUP BY p.project_id";
    $rs = $conn-> query($sql);
    
    
        
       
		
		
    if(mysqli_num_rows($rs) > 0){?>

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

    <?php
}
else{
    echo"<h1> No data found! Please enter room number properly";
}
?>
      
	