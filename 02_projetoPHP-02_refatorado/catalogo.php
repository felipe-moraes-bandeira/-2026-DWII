<?php
/**
 * ======================================================================
 * ARQUIVO    : catalogo.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Autor      : Felipe Moraes Bandeira
 * Data       : 09/05/2026
 * Projeto    : Portfólio Pessoal - versão refatorada
 * Descrição  : Catálogo de tecnologias cadastradas
 * ======================================================================
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$pagina_atual = 'catalogo';
$titulo_pagina = 'Catálogo de Tecnologias | Portfólio DWII';
$caminho_raiz = './';

require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();

// Busca apenas tecnologias ativas
$stmt = $pdo->query(
    "SELECT * FROM tecnologias
     WHERE status = 'ativo'
     ORDER BY nome ASC"
);

$tecnologias = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include __DIR__ . '/includes/cabecalho.php'; ?>
</head>

<body>

<div class="container">

    <!-- Cabeçalho da página -->
    <div style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        flex-wrap: wrap;
        gap: 12px;
    ">

        <h1 class="titulo-secao" style="margin: 0;">
            📚 Catálogo de Tecnologias
        </h1>

        <span style="color: #6b7280; font-size: 14px;">
            <?php echo count($tecnologias); ?> tecnologia(s)
        </span>

    </div>

    <?php if (empty($tecnologias)): ?>

        <!-- Estado vazio -->
        <div class="card" style="
            text-align: center;
            padding: 40px 20px;
            color: #6b7280;
        ">

            <p style="font-size: 40px; margin: 0 0 12px;">
                🧪
            </p>

            <p style="font-size: 16px; margin: 0;">
                Nenhuma tecnologia ativa.
            </p>

        </div>

    <?php else: ?>

        <?php foreach ($tecnologias as $tec): ?>

            <div class="card">

                <!-- Topo do card -->
                <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 8px;
                    gap: 10px;
                    flex-wrap: wrap;
                ">

                    <h3 style="margin: 0;">
                        <?php echo htmlspecialchars($tec['nome']); ?>
                    </h3>

                    <span style="
                        background: #e8edf5;
                        color: #3b579d;
                        padding: 3px 10px;
                        border-radius: 20px;
                        font-size: 13px;
                        white-space: nowrap;
                    ">
                        <?php echo htmlspecialchars($tec['categoria']); ?>
                    </span>

                </div>

                <!-- Descrição -->
                <p style="margin: 0 0 10px;">
                    <?php echo htmlspecialchars($tec['descricao']); ?>
                </p>

                <!-- Botão -->
                <a
                    href="detalhe.php?id=<?php echo (int) $tec['id']; ?>"
                    class="btn-secundario"
                >
                    Ver detalhes →
                </a>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

</div>

<?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>