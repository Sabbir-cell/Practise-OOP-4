<?php
	$a=array(
		array("com"=>"sabbir","rac"=>"jahid"),
		array("power"=>"alif","macanical"=>"rahim"),
		array("civil"=>"jamil","eee"=>"kaiser")
		);
	$f=$_POST['m'];
	$r=0;

	foreach ($a as $key => $value) {
		foreach ($value as $x => $y) {
			if ($f==$y) {
				$r=$y;
				$u=$x;
			}
		}
}
	if ($r==0) {
		echo $f." not found";
	}else{
		echo $f."is a ".$u." student";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="m">
	<input type="submit">	
	</form>

</body>
</html>