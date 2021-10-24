<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$tname=$_POST['tname'];
$cups=$_POST['cups'];
$t_id=$_POST['t_id'];
$members=$_POST['members'];
$score=$_POST['score'];
$c_id=$_POST['c_id'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `team` SET `tname`='".$tname."',`cups`='".$cups."',`members`=".$members.",`score`=".$score.",`c_id`=".$c_id." WHERE `t_id`=".$t_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `team` WHERE `t_id`=".$t_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrieveteam.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>