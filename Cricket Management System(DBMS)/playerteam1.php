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
		
$a=$_POST['pid'];
$b=$_POST['tid'];
	
		 $sql = "INSERT INTO `player_team`(`player_id`, `t_id`) VALUES ('$a','$b')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='playerteam.html';
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