<?php
					mysql_connect('localhost','root','');
					mysql_select_db('doctors');
					
					$sql="DELETE FROM doctorregisterform WHERE ID='$_GET[id]'";
					$records=mysql_query($sql);
					if(mysql_query($sql))
						header("refresh:1; url=removedoc.php");
					else
						echo "Not Deleted";
					
					?>