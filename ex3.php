<?php 
$a=rand(1,100);
$b=1;
while ($b <= 20) {
	$tab=$a*$b;
	echo "<br>";
	echo $a." x " .$b. " = ".$tab;
	$b++;
}
 ?>