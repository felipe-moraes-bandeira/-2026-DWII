<?php
// Ligar exibição de erros (APENAS PARA TESTES - ajuda a descobrir o erro da tela branca)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Variáveis usadas pelo cabeçalho global (título da aba e menu ativo)
$titulo_pagina = "Catálogo de Tecnologias";
$pagina_atual  = "catalogo";

// Incluir a conexão PDO — os caminhos estão corretos com base na sua pasta
require_once 'includes/conexao.php';

// Buscar todos os registros — query() para SELECTs sem parâmetros
$stmt = $pdo->query('SELECT * FROM tecnologias ORDER BY nome ASC');
$tecnologias = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'includes/cab_pdo.php'; ?>
</head>
<body>
    <br>
🗄️
<h3>Aula 05</h3>
<h4>Catálogo de Tecnologias com PDO</h4>
<p>Conexão com banco de dados MariaDB usando PDO, laços de repetição e prevenção contra XSS.</p>
🔑 PDO, MariaDB, foreach, htmlspecialchars
<br>
<a href="03_pdo/index.php" style="color: blue;">Abrir →</a>
    <div class="container">
        <h1 class="titulo-secao">🗄️ Catálogo de Tecnologias</h1>
        <p style="color: #6b7280; margin-bottom: 20px;">
            <?php echo count($tecnologias); ?> tecnologia(s) cadastrada(s)
        </p>

        <?php foreach ($tecnologias as $tec): ?>
            <div class="card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h3><?php echo htmlspecialchars($tec['nome']); ?></h3>
                    <span style="background: #e8edf5; color: #3b579d; padding: 3px 10px; border-radius: 20px; font-size: 13px;">
                        <?php echo htmlspecialchars($tec['categoria']); ?>
                    </span>
                </div>
                <p><?php echo htmlspecialchars($tec['descricao']); ?></p>
            
                <a href="/03_pdo/detalhe.php?id=<?php echo $tec['id']; ?>"
                   style="color: #3b579d; font-size: 14px; font-weight: bold; display: inline-block; margin-top: 10px;">
                   Ver detalhes ->
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php include 'includes/rod_pdo.php'; ?>
</body>
</html>