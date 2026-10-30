<?php
// Configurações de cabeçalho para APIs REST
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Fuso horário (ajuste para a sua região se necessário)
date_default_timezone_set('America/Sao_Paulo');

// Recebe os dados em formato JSON
$jsonRecebido = file_get_contents('php://input');
$dados = json_decode($jsonRecebido, true);

if ($dados && isset($dados['acao'])) {
    $horario = date('d/m/Y H:i:s');
    $acao = htmlspecialchars(trim($dados['acao']));
    $detalhes = isset($dados['detalhes']) ? htmlspecialchars(trim($dados['detalhes'])) : 'Nenhum';

    // Formata o log
    $linha = "[$horario] | $acao -> $detalhes" . PHP_EOL;

    // Salva ou adiciona no respostas.txt
    file_put_contents('respostas.txt', $linha, FILE_APPEND | LOCK_EX);

    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode(['sucesso' => false, 'erro' => 'Dados inválidos']);
}
?>
