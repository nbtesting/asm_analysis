<?php // index.php

// PHP isset function checks if $_POST['name'] has assigned value, else defaults to 'Not Entered'
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Not entered)";

echo <<<_END
<html>

	<head>
		<title>ASM Analysis</title>
		<link rel="stylesheet" type="text/css"  href="main.css">
	</head>
	
	<body>
		<form method="post" action="analysis.php">
		<div class="logo"> ASM Analysis <br /> </div>
			<input type="text" name="firstname" size="50" maxlength="35"/>
			<input type="submit" value="Search User"/>
		</form>
	</body>
	
</html>

_END;
?>