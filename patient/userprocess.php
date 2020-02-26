<?php
	$email = $_POST['username'];
	$password = $_POST['password'];
	
	$email = stripcslashes($email);
	$password = stripcslashes($password);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("doctors");
	
	$result = mysql_query("select * from registerform where email='$email' and password='$password'")
	or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['email'] == $email && $row['password']==$password){
		echo "login Success!!! Welcome</br>" .$row['email'];
		header('location:index.php');
	} else {
		echo "Failed to login!";
	}
	?>
	