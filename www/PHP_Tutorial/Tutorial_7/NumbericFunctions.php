<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	// Using a function library
	function decimal($floNum) {
		$decNum = round($floNum, 2);
		return $decNum;	
	}
	function multiply($floNum) {
		$floNum *= 3.12;
		echo "<p>$floNum</p>";
		$decNum = decimal($floNum);
		echo "<p>$decNum</p>";
	}
?>
</body>
</html>