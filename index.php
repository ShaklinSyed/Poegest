<?php

include_once "lib.php";

echo <<<_END
<!Doctype html>
<html>
	<head>
		<title>$appname</title>
		<link rel="stylesheet" href="style/style.css" />
	</head>

	<body>
		<h1 class="title">Poegest</h1>
		<form class="title">
			<input type="text" /><br />
			<input type="button" value= "search" />
		</form>
	</body>
</html>
_END;
?>


