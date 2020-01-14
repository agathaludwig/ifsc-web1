<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício 9 - L4 </title> 
</head> 

<body> 
    <h1> Ex.9: Formulário com PHP</h1>
				
				<?php
					 //fazendo o PHP receber os dados do formulário e salvar em variáveis escalares
						
						$numero1 = $_POST["numero1"];
						$numero2 = $_POST["numero2"];
						$numero3 = $_POST["numero3"];
						
						// conta solicitada:
						
						$expressao = ($numero1 - $numero2) * $numero3;
						
						echo "<p> O valor da expressão \"(\$a - \$b) * \$c\" é igual a $expressao. </p> ";
				
				// a contrabarra => caracter de escape
				
				?>
				
</body> 
</html> 













