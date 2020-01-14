<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício 6, 7, 8 - L4 </title> 
</head> 

<body> 
    <h1> Ex.6, 7, 8: Outros tópicos </h1>

				
				<?php
					 $nome = "Maria das Graças";
						$idade = 51;
						$temCursoSuperior = true;
						$saldoBancario = 10000.78;
						$deposito = 2000;
						$depositoOcta = 012; // sistema de numeração - octal - base 8(como binário)
						$depositoHexa = 0xF; // sistema de numeração - hexadecimal - base 16
						
						//operação matemática sobre o saldo bancário
						$saldoFinal = $saldoBancario + $deposito *($depositoOcta / $depositoHexa);
						// operação mistrura tipos de sistemas de numeração
						// O PHP converte os valores para decimal, faz as operações e armazena em decimal na variável;
						
						//alternando o eco com aspas e apóstrofos
						
						echo "<p> Resultado do processo dos dados: <br>
						Nome do usuário = $nome <br>
						Idade = $idade <br>
						Saldo bancário final = R$$saldoFinal </p> <br>
						Tem curso superior? $temCursoSuperior";
						
						echo '<p> Valor final do saldo bancário, após os depósitos, utilizando echo com apóstrofo: <br>
						Saldo bancário final = R$$saldoFinal </p>';
						//observar que com apostrofo não há interpolação da variável
						
				?>
				
</body> 
</html> 













