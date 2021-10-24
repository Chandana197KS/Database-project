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
		
$cap_id=$_POST['capid'];
$cap_name=$_POST['capname'];
$t_id=$_POST['tid'];
	
		 $sql = "INSERT INTO `captain`(`cap_id`, `cap_name`, `t_id`) VALUES ('$cap_id','$cap_name','$t_id')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='captain.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='loginpage.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>