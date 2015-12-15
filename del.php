<?php
  include("db.php");  

	$reg =$_REQUEST['reg'];
	
	
	// sending query
	mysql_query("DELETE FROM students WHERE reg = '$reg'")
	or die(mysql_error());  	
	
	echo" Delete Successful!! </br> <a href='view_reg.php'>Go back to the main page</a> ";
?>