<?php
	if (isset($_POST['n'])) {
	$x=array("computer"=>"47","electrical"=>"40","macinical"=>"50","civil"=>"42","power"=>"45","rac"=>"43");
	$a=$_POST["n"];
}
	foreach ($x as $b => $value) {
	
	if ($a==$b) {
			echo $value;

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="n">
	<input type="submit">
		

	</form>

</body>
</html>