<?php
	function intel($x,$y,$z)
	{
		$a=($x+$y+$z)/3;
		return $a;
	}	
$x=$_POST["f"];
$y=$_POST["g"];
$z=$_POST["h"];

echo intel ($x,$y,$z);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="f">
	<input type="text" name="g">
	<input type="text" name="h">
	<input type="submit">
		


	</form>

</body>
</html>