<?php 
/*Calcule a média final das notas de 3 provas, de modo a obter a situação do aluno, de acordo
com os seguintes critérios:(Obs. As notas estão armazenadas em variáveis)*/ 
//a
$media=2;
if ($media >=9.5 && $media <=20) {
	echo "O aluno <p style='color:#00ff00'>aprovado</p>";
}
elseif ($media >=8 && $media <=9.5) {
	echo "O aluno <p style='color:#00ffff'>Recuperação</p>";
}
elseif ($media <=8 && $media >=0) {
	echo "O aluno <p style='color:#ff0000'>Reprovado</p>";
}


?>