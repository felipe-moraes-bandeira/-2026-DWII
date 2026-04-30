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
<html lang="pt-BR">
<head>
    <?php include 'includes/cab_pdo.php'; ?>
</head>
<body>
    <div class="container">
        
       

        <h1 class="titulo-secao">🗄️ Catálogo de Tecnologias</h1>
        
        <p class="contador-tecnologias">
            <?php echo count($tecnologias); ?> tecnologia(s) cadastrada(s)
        </p>

        <?php foreach ($tecnologias as $tec): ?>
            <div class="card">
                <div class="card-header-tec">
                    <h3><?php echo htmlspecialchars($tec['nome']); ?></h3>
                    <span class="badge-categoria">
                        <?php echo htmlspecialchars($tec['categoria']); ?>
                    </span>
                </div>
                
                <p><?php echo htmlspecialchars($tec['descricao']); ?></p>
            
                <a href="/03_pdo/detalhe.php?id=<?php echo $tec['id']; ?>" class="link-detalhes">
                    Ver detalhes ➔
                </a>
            </div>
        <?php endforeach; ?>
        
    </div>

    <?php include 'includes/rod_pdo.php'; ?>
</body>
</html>