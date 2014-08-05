<?php // index.php

// PHP isset function checks if $_POST['name'] has assigned value, else defaults to 'Not Entered'
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Not entered)";

echo <<<_END
<html>

	<head>
		<title>ASM Analysis</title>
	</head>
	
	<body>
		Your name is $name<br />
		<form method="post" action="formtest.php">
			Search User:
			<input type="text" name="name" size="30" maxlength="35" value="Firstname Lastname"/>
			<input type="submit" />
		</form>
	</body>
	
</html>

_END;
?>