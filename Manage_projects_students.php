<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <?php
    session_start();

    include_once 'dbconnect.php';

    $sql1 = "SELECT p.*,g.group_name,g.group_category FROM projects AS p JOIN groups AS g on (p.group_id=g.group_id)JOIN student AS s ON(g.student_id=s.student_id) WHERE s.student_id =1";
    $rs = $conn-> query($sql1);


    
    
    
    ?>
    <h2>Your Projects</h2>
    <table align="center" style="width:90%; line-height:200%;"> 
	<tr> 
		
		</tr> 
			  <th>Project Title </th> 
              <th>Group name </th> 
              <th>Group type/ Project type </th> 
              <th>Desctiption </th>
              <th>Actions </th>  

            </tr>
      <?php      
    while($rows=mysqli_fetch_array($rs)) 
	{?> 
    <tr> 
        <td><?php echo $rows['project_title']; ?></td> 
        <td><?php echo $rows['group_name']; ?></td> 
        <td><?php echo $rows['group_category']; ?></td> 
        <td><?php echo $rows['description']; ?></td> 
        <td>
        <form name="update_status" action="api/update_status.php" method="post">
                    <input type="hidden" name="project_id" id="project_id" value="<?php echo $rows['project_id']; ?>">
                        <select name="status_update" class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="add_update">Add an update</option>
                            <option value="edit_title">Edit project title</option>
                            <option value="edit_description">Edit project Description</option>


                        </select>
                        <div class="text-center my-4">
                         <input type="submit" value="Submit"> </div>
                    </form>

            </td>
        
    </tr> 
    <?php
    }
    ?>
    
</body>
</html>
<style>
td {
  text-align: center;
}
</style>