<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o valor enviado pelo formulário
    $pais = $_POST['cidade'];

    // Defina os fusos horários para cada país
    switch ($pais) {
        case 'Sao Paulo':
            $timezone = new DateTimeZone('America/Sao_Paulo');
            break;
        case 'New York':
            $timezone = new DateTimeZone('America/New_York');
            break;
        case 'London':
            $timezone = new DateTimeZone('Europe/London');
            break;
        // Adicione outros países conforme necessário
        default:
            $timezone = new DateTimeZone('UTC'); // Fallback para UTC se o país não for reconhecido
            break;
    }

    // Obtém a data e hora atuais no fuso horário escolhido
    $agora = new DateTime('now', $timezone);
    $horarioLocal = $agora->format('H:i:s');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Horário Local</title>
</head>
<body>
    <h1>Resultado - Horário Local</h1>

    <?php if (isset($horarioLocal)): ?>
        <p>O horário local em <?= $pais ?> é: <?= $horarioLocal ?></p>
    <?php else: ?>
        <p>Nenhum país selecionado.</p>
    <?php endif; ?>

    <p><a href="index.html">Voltar</a></p>
</body>
</html>