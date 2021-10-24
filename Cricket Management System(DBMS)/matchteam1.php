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
		
$m_id=$_POST['mid'];
$t_id=$_POST['tid'];
	
		 $sql = "INSERT INTO `match_team`(`m_id`, `t_id`) VALUES ('$m_id','$t_id')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='matchteam.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='matchteam1.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>