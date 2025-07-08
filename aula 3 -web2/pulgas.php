// variável que armazena o número de pulgas
// usada para controlar o número de pulgas ao longo do script
$pulgas = 2; // Começa com 2 pulgas (1 casal)

// variável que armazena o dia atual
// controlar o número de dias
$dia = 1; // Dia 1

// while continua enquanto a condição for verdadeira
// A condição é que o número de pulgas deve ser maior que 0.

while ($pulgas > 0) {
// Calcula o número de casais de pulgas
// A função floor() é usada para obter o maior número INTEIRO

$casais = floor($pulgas / 2); // Número de casais (usando apenas o inteiro)

// Calcula novas pulgas 
// 1 casal= 6 novas pulgas por dia.
// simula o crescimento da população de pulgas.
$novasPulgas = $casais * 6; // Pulgas novas geradas

// população total de pulgas somando as novas pulgas
// aumento da população ao longo do tempo.
$pulgas += $novasPulgas; // Atualiza população

// Verifica se é dia de fugas (a cada 3 dias)
// A condição $dia % 3 == 0 é usada para verificar se o dia atual é múltiplo de 3.
// Se for, então é dia de fugas.
if ($dia % 3 == 0) {
// Remove 2 pulgas da população
// Isso simula a saída de pulgas do ambiente a cada 3 dias.
$pulgas -= 2; // Remove 2 pulgas nesses dias
}

//  eficácia do antipulgas para o dia atual
// função pow() é usada para calcular a potência de um número.
// Nesse caso, a eficácia do antipulgas aumenta exponencialmente com o tempo.
$antipulgas = pow(4, $dia - 1); // Calcula a eficácia do antipulgas

// aplica o antipulgas, removendo as pulgas calculadas da população
// simula a ação do antipulgas em reduzir a população de pulgas.
$pulgas -= $antipulgas; // Aplica o antipulgas

// Garante que a população não seja negativa após a aplicação do antipulgas
// A função max() é usada para garantir que o valor de $pulgas seja não negativo.
// Isso é necessário porque a população não pode ser negativa.
$pulgas = max($pulgas, 0); // Garante que a população não seja negativa

// Avança para o próximo dia
// A variável $dia é incrementada em 1 para refletir o passar do tempo.
$dia++; // Incremento do dia
}

// Exibe o resultado final, mostrando quantos dias foram necessários para que PHP fique livre das pulgas
//($dia - 1) é usada porque o while incrementa após o último dia necessário.
//poderia ser print ("PHP estara livre depois de " . $dia . " dias!");
echo "PHP estará livre após " . ($dia - 1) . " dias!";