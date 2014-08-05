<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Search Contacts</title>title>
	</head>
	<p><body>
		<h3>Search Contacts Details</h3>
		<p>You may search either by first or last name</p>
		<form method="post" action="search.php?go" id="searchform">
			<input type="text" name="name">
			<input type="submit" name="submit" value="Search">
		</form>
		<?php
			if(isset($_POST['submit'])){
			if(isset($_GET['go'])){
			if(preg_match("^/[A-Za-z]+/", $_POST['name'])){ 
				$name=$_POST['name'];
			$db=mysql_connect ("localhost",  "root", "") or die ('I cannot connect  to the database because: ' . mysql_error());
			$mydb=mysql_select_db("NBTest");
			$sql="SELECT ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" ."%'";
			$result=mysql_query($sql);
				while($row=mysql_fetch_array($result)){
					$FirstName =$row['FirstName'];
					$LastName=$row['LastName'];
					$ID=$row['ID'];
			echo "<ul>\n";
			echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
			echo "</ul>";
			
				}
			}
			
			else{
				echo "<p>Please enter a search query</p>";
			}
			}
			}
		?>
	</body>
	</p>
</html>
