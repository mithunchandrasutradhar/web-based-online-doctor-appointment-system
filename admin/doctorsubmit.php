 <?php
	$host='localhost';
	$user='root';
	$pass='';
	$conn=mysql_connect($host,$user,$pass);
	if(!$conn)
		{
			die('Could not connect : '.mysql_error());
		}
	mysql_select_db('doctors');

	$sql="INSERT INTO doctorregisterform(name, place, day, time, designation, email, password)
	VALUES('$_POST[name]', '$_POST[place]', '$_POST[day]', '$_POST[time]','$_POST[designation]','$_POST[email]','$_POST[password]')";	
	$result=mysql_query($sql,$conn);
	if(!$result)
		{
			die('Could not get data : '.mysql_error());
		}
	else
		echo "Registration succesfully\n";
		header('location:home.php');
	mysql_close($conn);	
?>
   