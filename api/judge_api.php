<?php
    error_reporting(0);
    ini_set('display_errors', 0);
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
              <th>Marks</th> 
              <th></th> 
               

                   
		</tr>
        
        <?php
        while($rows=mysqli_fetch_array($rs)) 
    {

            $project_id = $rows['project_id'];
		?>
        <tr> 
		<td><?php echo $rows['project_title']; ?></td> 
        <td><?php echo $rows['description']; ?></td> 
        <td><?php echo $rows['category'];  ?></td>
        <td><?php echo $rows['marks'];  ?></td>
        <td>
        <form name = "confirm" action="evaluation.php" method="post">
                    <input type="hidden" name="project_id" value="<?php echo $rows['project_id']; ?>">
                    
                    
                <input type="submit" formtarget="_blank" class="btn btn-primary" name = "submit" value="Evaluation">
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
      
	