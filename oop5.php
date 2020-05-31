<?php
	if (isset($_POST['b'])) {
		
	class abc
	{
	public	function apple($x,$y,$z)
		{
		$a=$x+$y+$z;
		$b=$a/3;
		return $b;
	}
	public function orang($gender,$name)
	{
		if ($gender==male) {
			return " Hello Mr Rahim";
		}else{
			return"Hello Ms yyyy";
		}

	}
}
}
$v = new abc;
$b=$v->apple(3,3,3);
$c=$v->orang($gender,$name);


$gender=$_POST['gender'];
$name=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	name:
	<input type="text" name="a"><br>
	gender:<br>
	<input type="radio" name="gender" value="male">male<br>
	<input type="radio" name="gender" value="female">female<br>
	type:<br>
	<input type="text" name="b">
	<input type="text" name="c">
	<input type="text" name="d">
	<input type="submit">
	<input type="reset">	


	</form>

</body>
</html>