<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$s_name=$_POST['sname'];
$s_id=$_POST['sid'];
$sponser_amt=$_POST['samt'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `sponser` SET `s_name`='".$s_name."',`sponser_amt`=".$sponser_amt." WHERE `s_id`=".$s_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `sponser` WHERE `s_id`=".$s_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrievesponser.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>