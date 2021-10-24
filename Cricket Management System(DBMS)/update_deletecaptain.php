<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$cap_id=$_POST['capid'];
$cap_name=$_POST['capname'];
$t_id=$_POST['tid'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `captain` SET `cap_name`='".$cap_name."',`t_id`=".$t_id." WHERE `cap_id`=".$cap_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `captain` WHERE `cap_id`=".$cap_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrievecaptain.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>