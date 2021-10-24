<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$c_id=$_POST['cid'];
$c_name=$_POST['cname'];
$c_experience=$_POST['cexp'];
$c_type=$_POST['ctype'];
$c_description=$_POST['cdesc'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `coach` SET `c_name`='".$c_name."',`c_experience`=".$c_experience.",`c_type`='".$c_type."',`c_description`='''.$c_description.''' WHERE `c_id`=".$c_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `coach` WHERE `c_id`=".$c_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=retrievecoach.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>