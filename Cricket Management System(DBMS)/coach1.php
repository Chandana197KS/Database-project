<?php
$servername='localhost';
$username='root';
$password='';
$dbname='cricket';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else
{
	echo "connected to db";
		
$c_name=$_POST['cname'];
$c_experience=$_POST['cexp'];
$c_type=$_POST['ctype'];
$c_description=$_POST['cdesc'];
$c_id=$_POST['cid'];
	
		 $sql = "INSERT INTO `coach`(`c_name`, `c_experience`, `c_type`, `c_description`, `c_id`) VALUES ('$c_name','$c_experience','$c_type','$c_description','$c_id')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='coach.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='coach1.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>