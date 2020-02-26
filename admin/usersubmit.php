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

	$sql="INSERT INTO registerform(name, blood_group, gender, age, address, contact_number, email, password)
	VALUES('$_POST[name]', '$_POST[blood_group]', '$_POST[gender]', '$_POST[age]', '$_POST[address]',  '$_POST[contact_number]','$_POST[email]', '$_POST[password]')";	
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
   
		
	 
















