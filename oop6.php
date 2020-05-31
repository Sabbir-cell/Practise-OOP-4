<?php
	function dectet($gender,$name)
	{
		if ($gender=="male") {
			echo "Hello mr Rahim";
		}else{
			echo "Hello Ms xxxxx";
		}
	}
	$gender=$_POST["a"];
	$name=$_POST["a"];
	dectet ($gender,$name);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
	<input type="text" name="a"><br>
	<input type="radio" name="gender" value="male">male
	<input type="radio" name="gender" value="female">female<br>
	<input type="submit" >
	<input type="reset" >
		
	</form>

</body>
</html>
