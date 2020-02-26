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

	$sql="INSERT INTO appointmentform(doctor_name, patient_name, blood_group, gender, age, address, contact_number)
	VALUES('$_POST[doctor_name]', '$_POST[patient_name]', '$_POST[blood_group]', '$_POST[gender]', '$_POST[age]', '$_POST[address]',  '$_POST[contact_number]')";	
	$result=mysql_query($sql,$conn);
	if(!$result)
		{
			die('Could not get data : '.mysql_error());
		}
	else
		echo "Appointment succesfully\n";
		header('location:index.php');
	mysql_close($conn);	
?>
   
		
	 
















