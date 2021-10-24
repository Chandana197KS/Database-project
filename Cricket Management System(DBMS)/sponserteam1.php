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
		
$s_id=$_POST['sid'];
$t_id=$_POST['tid'];
	
		 $sql = "INSERT INTO `sponser_team`(`s_id`, `t_id`) VALUES ('$s_id','$t_id')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='sponserteam.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='sponserteam.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>