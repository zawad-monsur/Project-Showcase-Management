<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
</head>
<body>
    <?php
    session_start();

    include_once 'dbconnect.php';
    $project_id = $_POST['project_id'];
    $sql = "SELECT * FROM updates WHERE project_id = $project_id";
    $rs = $conn-> query($sql); ?>
    <table align="center" style="width:90%; line-height:200%;"> 
	<tr> 
		<th colspan="6"><h2>Projects</h2></th> 
		</tr> 
			  <th>Update no </th> 
              <th>Description</th> 
              <th>Feedback </th>
              <th>Status</th>
              <th>Add comment/feedback</th> 
              <th>Change status</th> 
            </tr>
      <?php      
    while($rows=mysqli_fetch_array($rs)) 
	{?> 
    <tr> 
        <td><?php echo $rows['update_no']; ?></td> 
        <td><?php echo $rows['description']; ?></td> 
        <td><?php echo $rows['feedback']; ?></td> 
        <td><?php echo $rows['status']; ?></td> 
        <td>
                <form name = "comment_update" action="" method="post">
                    <input type="textfield" name="project_id" >
                    
                    
                <input type="submit" class="btn btn-primary" name = "submit_comment" value="Update comment">
            </td>
        <td>
        <form name="update_status" action="" method="post">
                        <select name="status_update" class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="accepted">Accept</option>
                            <option value="declined">Decline</option>

                        </select>
                        <div class="text-center my-4">
                         <input type="submit" value="update_status"> </div>
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