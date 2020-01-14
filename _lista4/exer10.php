<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício 10 - L4 </title> 
</head> 

<body> 
    <h1> Ex.10: Formulário com PHP</h1>
				
				<?php
					 
						//fazendo o PHP receber os dados do formulário e salvar em variável
						$x = $_POST["numero1"];
						
						//recebe os dados do formulário e salva em constante
						//define ("nome da CONSTANTE", origem do dado)
						define("Y", $_POST["numero2"]);
						define("Z", $_POST["numero3"]);
						
						// conta solicitada:
						
						$expressao = (($x-5)*Y) - Z;
						
						echo " Valor da variável x = $x <br>
													Valor da constante Y = ", Y, "<br>
													Valor da constante Z = ", Z, "<br>
						<p> O valor da expressão \"((\$x - 5) * Y - Z\" é igual a $expressao. </p> ";
				
				// a contrabarra => caracter de escape
				
				?>
				
</body> 
</html> 













