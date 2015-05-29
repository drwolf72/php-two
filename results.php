<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<?php

$ftemp= $_POST["inputf"];

$ctemp = "32";
$conv = "5/9";

$celsius = ($ftemp - 32) * (5/9);

echo "<h2> based on your value of  " .  $ftemp  .  "  the ceslius value is  " .   $celsius   .  "</h2>";



?>



</body>
</html>