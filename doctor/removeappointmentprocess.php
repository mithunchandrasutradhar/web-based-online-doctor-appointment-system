<?php
					mysql_connect('localhost','root','');
					mysql_select_db('doctors');
					
					$sql="DELETE FROM appointmentform WHERE ID='$_GET[ID]'";
					$records=mysql_query($sql);
					if(mysql_query($sql))
						header("refresh:1; url=viewappointment.php");
					else
						echo "Not Deleted";
					
					?>