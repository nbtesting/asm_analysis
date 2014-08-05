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
				}
				}
			else{
				echo "<p>Please enter a search query</p>";
			}
		}?>
	</body>
	</p>
</html>
