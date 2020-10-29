<?php 

while (true) {
	$num=rand(1,100);
	$soma=$soma+$num;
	if ($soma>=1000) {
		break;
	}
	echo "<br>";
	echo "SOMA ".$soma;
			}
 ?>