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
		
$tname=$_POST[ 'tname' ];
$cups=$_POST[ 'cups' ];
$t_id=$_POST[ 't_id' ];
$members=$_POST[ 'members' ];
$score=$_POST[ 'score' ];
$c_id=$_POST[ 'c_id' ];
	
		 $sql = "INSERT INTO `team`(`tname`, `cups`, `t_id`, `members`, `score`,  `c_id`) VALUES ('$tname','$cups','$t_id','$members','$score','$c_id')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='team.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='team1.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>