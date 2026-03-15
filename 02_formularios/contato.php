<?php
/**
 * ======================================================================
 * ARQUIVO    : 02_formularios/contato.php    (versão com validação e redirect)
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 04 — PHP para Web: Formulários, GET e POST
 * Autor      : Felipe Moraes Bandeira
 * Conceitos  : $_SERVER, REQUEST_METHOD, trim(), empty(),
 * strlen(), array de erros, separação lógica/visual, header(), PRG
 * ======================================================================
 */

// — VARIÁVEIS DO TEMPLATE ———————————————————————————————————————————
$nome           = "Felipe Moraes Bandeira";
$pagina_atual   = "contato";
$caminho_raiz   = "../";
$titulo_pagina  = "Contato";

// — ESTADO INICIAL ——————————————————————————————————————————————————
$nome_visitante = '';
$mensagem       = '';
$erros          = [];   // array vazio = nenhum erro ainda

// — PROCESSAR SOMENTE SE VEIO POST ——————————————————————————————————
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // trim() remove espaços das bordas
    $nome_visitante = trim($_POST['nome_visitante'] ?? '');
    $mensagem       = trim($_POST['mensagem']       ?? '');

    // — VALIDAÇÕES ——————————————————————————————————————————————————————
    if (empty($nome_visitante)) {
        $erros[] = 'O campo Nome é obrigatório.';
    }

    if (empty($mensagem)) {
        $erros[] = 'O campo Mensagem é obrigatório.';
    } elseif (strlen($mensagem) < 10) {
        $erros[] = 'A mensagem deve ter pelo menos 10 caracteres.';
    }

    // — REDIRECIONAR SE NÃO HÁ ERROS ————————————————————————————————————
    // header() instrui o navegador a ir para outra URL.
    // OBRIGATÓRIO: chamado ANTES de qualquer saída HTML.
    // urlencode() codifica o nome para uso seguro na URL
    //    (ex: "Ana Lima" vira "Ana+Lima")
    // exit encerra o PHP imediatamente — sem exit, o código
    //    abaixo continuaria executando mesmo após o redirect.
    if (empty($erros)) {
        header('Location: obrigado.php?nome=' . urlencode($nome_visitante));
        exit;
    }
}
?>

<?php include '../includes/cabecalho.php'; ?>

<div class="container">
    <h1 class="titulo-secao">📬 Formulário de Contato</h1>

    <?php if (!empty($erros)): ?>
        <div class="alerta-erro">
            <h3>🚫 Corrija os erros:</h3>
            <?php foreach ($erros as $erro): ?>
                <p style="margin: 4px 0;">✗ <?php echo htmlspecialchars($erro); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form class="form-container" action="contato.php" method="POST">
        
        <label>Seu nome:</label>
        <input type="text" name="nome_visitante" value="<?php echo htmlspecialchars($nome_visitante); ?>">

        <label>Sua mensagem:</label>
        <textarea name="mensagem" rows="4"><?php echo htmlspecialchars($mensagem); ?></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

<?php include '../includes/rodape.php'; ?>