<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>action_page</title>
</head>

<body>
	<?php
		$text="";
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$text=test_input($_POST["text"]);
		}
		function test_input($data)
		{
			$data=trim($data);
			$data=htmlspecialchars($data);
			return $data;
		}
	?>
	<?php
		echo "<p>Your text here</p>";
		echo "<br>";
		echo $text;
	?>
</body>
</html>