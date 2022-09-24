<?php
	$a = readline("Digite um número: ");
	$b = readline("Digite outro número: ");
	$c = readline("Digite mais um número: ");

	# 1º Ordem
	if ($a >= $b && $b >= $c) {
		echo "$a $b $c";
	} 
	# 2º Ordem
	else if ($a >= $c && $c >= $b) {
		echo "$a $c $b";
	}
	# 3º Ordem
	else if ($b >= $a && $a >= $c) {
		echo "$b $a $c";
	}
	# 4º Ordem
	else if ($b >= $c && $c >= $a) {
		echo "$b $c $a";
	}
	# 5º Ordem
	else if ($c >= $a && $a >= $b) {
		echo "$c $a $b";
	}
	# 6º Ordem
	else if ($c >= $b && $b >= $a) {
		echo "$c $b $a";
	}


?>