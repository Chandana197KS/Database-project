<!DOCTYPE html>
<html>
<head>
<title> Retrieve data</title>
<style>
    body {
      background-image: url(http://localhost/project/IMG-20191129-WA0004.jpg) ;  
       background-position:100% 85%;
     background-repeat: no-repeat; 
     background-attachment: fixed;
     background-size: cover;
    position: relative;
}
b,h1{ text-decoration: none;
  color: #ffffff;
}
</style>
</head>
<fieldset>
  
  
    <legend>UPDATE/DELETE</legend>
	
	<center>
<table border=1>

<form id="DataForm" action="update_deleteteam.php" method="post"></form>


<?php
include_once 'database.php';
session_start();
echo "<form method='POST' action=''>";
/*check the number of records to move from last to first record*/
$countQuery="SELECT count(*) as cnt FROM team";
$result=mysqli_query($conn,$countQuery);
$count = mysqli_fetch_array($result);
$no_of_records=$count["cnt"];

if(isset($_POST['next']))
	{
		$a=($_POST['a']+1)%$no_of_records;
		
	}
if(isset($_POST['prev']))
	{
		if($_POST['a']==0)
		{
			$a=$no_of_records-1;
		}
		else
				$a=$_POST['a']-1;
	}
if(!isset($a))
	{
		$a=0;
	}


$sql1="SELECT * FROM team LIMIT 1 OFFSET $a";
$result=mysqli_query($conn,$sql1);
if(!$result){
	echo("There was an error with inserting into the table." . mysqli_error($conn));
	exit();
	}
		$i=0;
while($row = mysqli_fetch_array($result)) {

?>
<tr><td><font color=white><b>Team_name</td><td><input type="text" name="tname" value="<?php echo $row["tname"];?>" form="DataForm"/></td></tr>
<tr><td><font color=white><b>Team_Cups</td><td><input type="text" name="cups" value="<?php echo $row["cups"]; ?>" form="DataForm"/></td></tr>
<tr><td><font color=white><b>Team_id</td><td><input type="text" name="t_id" value="<?php echo $row["t_id"];?>" form="DataForm"/></td></tr>
<tr><td><font color=white><b>Members</td><td><input type="text" name="members" value="<?php echo $row["members"];?>" form="DataForm"/></td></tr>
<tr><td><font color=white><b>Team_score</td><td><input type="text" name="score" value="<?php echo $row["score"];?>" form="DataForm"/></td></tr>
<tr><td><font color=white><b>Coach_id</td><td><input type="text" name="c_id" value="<?php echo $row["c_id"];?>" form="DataForm"/></td></tr>

<?php
}
?>

<?php

echo "<input type='hidden' value='$a' name='a'>";
echo "<tr><td></td><td><input type='submit' name='next' value='next'> ";
echo "<input type='submit' name='prev' value='prev'></td></tr> ";
?>
<tr><td></td><td><input type="submit" name="update" value="Update" form="DataForm"/>
<input type="submit" name="delete" value="Delete" form="DataForm"/></td></tr>
</table>


<center>
<a href="homepage.html"><font color=white>BACK</a>
</center>

</center>
</fieldset>
</body>
</html>