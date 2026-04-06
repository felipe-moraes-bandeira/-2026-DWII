<?php 
/** * Disciplina : Desenvolvimento Web II (DWII)
 * Aula       : 06 - Autenticação com sessões e controle de acesso
 * Arquivo    : 04_sessoes/painel.php
 * Autor      : Felipe Moraes Bandeira
 */

require_once __DIR__ . '/includes/auth.php';
requer_login();
$titulo_pagina = 'Painel - Área Restrita';
$caminho_raiz  = '../';
$pagina_atual  = '';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__  . '/../includes/cabecalho.php';?>
</head>
<body>
    <div class="bemVindo">
        <h3>Seja bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?></h3>
    </div>

    <div class="container">

        <div class="alerta-sucesso">
            <h3>✅ Você está autenticado!</h3>
            <p><strong>Usuário:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
            <p><strong>Login realizado em:</strong> <?php echo htmlspecialchars($_SESSION['logado_em'] ?? '-'); ?></p>
        </div>

        <div class="card">
            <h3>📊 Painel de controle</h3>
            <p style="margin-bottom: 20px;">Este conteúdo só é visível para usuários autenticados.</p>
            <a href="../05_crud/index.php" class="btn-primario">
                📂 Gerenciar projetos
            </a>
        </div>

        <div class="logout-container">
            <a href="logout.php" class="btn-perigo">🚪 Sair</a>
        </div>

    </div>

    <?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>