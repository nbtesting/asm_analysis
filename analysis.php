<?php // analysis.php
	$name = $_POST['name'];
//posts the user input
	$db=mysql_connect ('localhost','root','') or die('I cannot connect to the database because: ' . mysql_error());
	$mydb=mysql_select_db('NBTest');
//connection
	$strSQL = "SELECT * FROM members where firstname = '$firstname'";
	$rs = mysql_query($strSQL);
		while($row = mysql_fetch_array($rs)){
			echo $row['name'];
		}
?>