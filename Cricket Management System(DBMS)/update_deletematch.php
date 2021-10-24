<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$m_id=$_POST['mid'];
$m_date=$_POST['mdate'];
$m_venue=$_POST['mvenue'];
$m_time=$_POST['mtime'];
$innings=$_POST['innings'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `match` SET `m_date`='".$m_date."',`m_venue`='".$m_venue."',`m_time`='".$m_time."',`innings`=".$innings." WHERE `m_id`=".$m_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `match` WHERE `m_id`=".$m_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrievematch.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>