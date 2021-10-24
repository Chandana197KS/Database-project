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
$m_date=$_POST['mdate'];
$m_venue=$_POST['mvenue'];
$m_time=$_POST['mtime'];
$innings=$_POST['innings'];
	
		 $sql = "INSERT INTO `match`(`m_id`, `m_date`, `m_venue`, `m_time`, `innings`) VALUES ('$m_id','$m_date','$m_venue','$m_time','$innings')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='match.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='match1.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>