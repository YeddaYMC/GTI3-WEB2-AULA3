<!DOCTYPE html>
<html>
<head>
	<title>Preparo da Poção Mágica</title>
</head>
<body>
	<?php
    	// Declaração das variáveis para os ingredientes
    	$aguaMagica = 10; // Quantidade de Água Mágica
    	$poCristal = 5; // Quantidade de Pó de Cristal
    	$essenciaFogo = 18; // Quantidade de Essência do Fogo
    	$sementeTerra = 7; // Quantidade de Semente da Terra

    	// Verifica as condições para o preparo da poção
    	if ($aguaMagica >= 2 * $poCristal &&
        	$essenciaFogo > $aguaMagica + $poCristal &&
        	$essenciaFogo <= 20 &&
        	$sementeTerra > 5 &&
        	$sementeTerra < $essenciaFogo) {
        	echo "<p>A poção foi criada com sucesso!</p>";
    	} else {
        	echo "<p>A poção não foi criada. Verifique as quantidades dos ingredientes.</p>";
    	}
	?>
</body>
</html>
