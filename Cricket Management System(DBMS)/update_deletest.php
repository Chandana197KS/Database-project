<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$s_id=$_POST['sid'];
$t_id=$_POST['tid'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `sponser_team` SET `t_id`=".$t_id." WHERE `s_id`=".$s_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `sponser_team` WHERE `s_id`=".$s_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrievest.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>