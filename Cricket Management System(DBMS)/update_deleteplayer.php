<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$player_id=$_POST['pid'];
$pname=$_POST['pname'];
$skill=$_POST['skill'];
$jersey_number=$_POST['jersey_number'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `player` SET `pname`='".$pname."',`skill`='".$skill."',`jersey_number`=".$jersey_number." WHERE `player_id`=".$player_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `player` WHERE `player_id`=".$player_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrieveplayer.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>