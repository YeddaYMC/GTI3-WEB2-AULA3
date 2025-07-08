<!DOCTYPE html>
<html>
<head>
	<title>Exercicio interpolar variaveis</title>
</head>
<body>
	<?php
    	// Declaração da variável para o primeiro nome do funcionário
    	// armazena o primeiro nome como uma string.
    	$primeiroNome = "João";

    	//variável para o sobrenome do funcionário
    	// armazena o sobrenome como uma string.
    	$sobrenome = "Silva";

    	// variável para o departamento 
    	
    	$departamento = "Informática";

    	// Formação do e-mail utilizando interpolação de strings
    	// A sintaxe `${variável}`  
    	// permitea interpolação de variáveis.
    	$email = "${primeiroNome}.${sobrenome}@ifpr.edu.br";

    	// Exibe o e-mail formado dentro de uma tag <p>
    	 	echo "<p>O e-mail do funcionário é: $email</p>";
	?>
</body>
</html>
