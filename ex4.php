<?php 
$a=rand(1,100);
$b=rand(1,100);
$c=rand(1,100);
echo "A ".$a. " B ".$b. " C ".$c;
echo "<br>";

if ($a > $b && $a >$c) {
	echo $a." Maior que ".$b. " e ".$c;
}
elseif ($b > $c && $b > $a) {
	echo $b." Maior que ".$c. " e ".$a;
}
elseif ($c > $a && $c > $b) {
	echo $c." Maior que ".$a. " e ".$b;
}
 ?>