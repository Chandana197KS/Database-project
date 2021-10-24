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
		
$p_id=$_POST['pid'];
$pname=$_POST['pname'];
$skill=$_POST['skill'];
$jersey_number=$_POST['jersey_number'];
	
		 $sql = "INSERT INTO `player`(`player_id`, `pname`, `skill`, `jersey_number`) VALUES ('$p_id','$pname','$skill','$jersey_number')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert ('Data added successfully');
				window.location.href='player.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='player1.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>