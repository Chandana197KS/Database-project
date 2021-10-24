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
		
$s_name=$_POST['sname'];
$s_id=$_POST['sid'];
$sponser_amt=$_POST['samt'];
	
		 $sql = "INSERT INTO `sponser`(`s_name`, `s_id`, `sponser_amt`) VALUES ('$s_name','$s_id','$sponser_amt')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('Data added successfully');
				window.location.href='sponser.html';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Data adding failed');
				window.location.href='sponser.php';
				</script>";			
		}
	
	
	
	
	
	
	
	

}
?>