<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//Example 7
$strFirstname = "Wendy";
$strSurname = "Jamison";
$strFullname = $strFirstname . $strSurname;
echo "<p>$strFirstname joined with $strSurname is: $strFullname</p>";
$strFullname =  $strFirstname . " " . $strSurname;
echo "<p>$strFirstname joined with $strSurname with a space is: $strFullname</p>";

$strFullname = $strFirstname;
$strFullname .= " ";
$strFullname .= $strSurname;
echo "$strFirstname joined with $strSurname with a space is: $strFullname";
?>
</body>
</html>