<?php

if(isset($_POST['b1']))
{
$idea=$_POST['idea'];
$features=$_POST['features'];
$outlook=$_POST['outlook'];
$implementation=$_POST['implementation'];
$team_work=$_POST['team_work'];

$sum = $idea+$features+$outlook+$implementation+$team_work;
$average = $sum/5;

echo "avg = $average";
}

?>

<html>
<head>

</head>

<body>
<form action="evaluation_form.php" method="post">
Project Idea : <input type="int" name="idea"/>
</br>
Features : <input type="int" name="features"/>
</br>
Project Outlook : <input type="int" name="outlook"/>
<br/>
Implementation : <input type="int" name="implementation"/>
<br/>
Team work : <input type="int" name="team_work"/>
<br/>


<input type="submit" value="Sum" name="b1"/>

</form>
</body>

</html>