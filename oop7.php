<?php
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$a=$_POST['number1'];
	$b=$_POST['number2'];
	$c=$_POST['number3'];
	class all{
		public function cal($a, $b, $c){
			$y=$a+$b+$c;
			$z=$y/3;
			return $z;
		}
		public function gen($name, $gender){
			if($gender==male){
				return "Mr ".$name;
			}else{
				return "Mst ".$name;
			}
		}
	}
	
	$m=new all;
	$n=$m->cal($a, $b, $c);
	$i=$m->gen($name, $gender);
	echo $i;
	echo " Your average number is ".$n;
	
	

?>
<html>
	<form method="post" action="64class.php">
		Name: 
			<input type="text" name="name" /><br/>
		Gender:<br/>
			<input type="radio" name="gender" value="male" />Male<br/>
			<input type="radio" name="gender" value="female" />Female<br/>
		Type your number:<br/>
			<input type="number" name="number1" />
			<input type="number" name="number2" />
			<input type="number" name="number3" />
			<input type="submit" />

	</form>

</html>