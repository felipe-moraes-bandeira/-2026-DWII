<?php
/**
 * Disciplina : Desenvolvimento Web II (DWII)
 * Aula       : 07 — CRUD: Create e Read
 * Arquivo    : 05_crud/index.php
 * Autor      : [Felipe Moraes Bandeira]
 * Data       : [02/04/2026]
 * Descrição  : Lista todos os projetos cadastrados no banco (Read)
 */

require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();

require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();
$stmt = $pdo->query('SELECT * FROM projetos ORDER BY criado_em DESC');
$projetos = $stmt->fetchAll();

$cadastroOk = isset($_GET['cadastro']) && $_GET['cadastro'] === 'ok';
$editadoOk  = isset($_GET['editado'])  && $_GET['editado'] === 'ok';
$excluidoOk = isset($_GET['excluido']) && $_GET['excluido'] === 'ok';
$erroMsg    = isset($_GET['erro'])     ? $_GET['erro'] : '';

$titulo_pagina = 'Meus Projetos — Portfólio';
$caminho_raiz = '../';
$pagina_atual = '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>

<div class="container">

    <div class="header-acoes">
        <h1 class="titulo-secao">📂 Meus Projetos</h1>
        <a href="cadastrar.php" class="btn-primario">➕ Novo Projeto</a>
    </div>

    <?php if ($cadastroOk): ?>
        <div class="alerta-sucesso">
            <p>✅ Projeto cadastrado com sucesso!</p>
        </div>
    <?php endif; ?>

    <?php if (empty($projetos)): ?>
        <div class="card estado-vazio">
            <p class="icone">📭</p>
            <p class="texto">Nenhum projeto cadastrado ainda.</p>
            <a href="cadastrar.php" class="btn-primario">➕ Cadastrar o primeiro projeto</a>
        </div>
    <?php else: ?>
        <div class="grid-projetos">
            <?php foreach ($projetos as $projeto): ?>
                <div class="card card-projeto">
                    <h3><?php echo htmlspecialchars($projeto['nome']); ?></h3>

                    <p class="descricao">
                        <?php echo htmlspecialchars($projeto['descricao']); ?>
                    </p>
                    
                    <p class="meta">
                        🛠 <?php echo htmlspecialchars($projeto['tecnologias']); ?>
                    </p>

                    <p class="meta">
                        📅 <?php echo htmlspecialchars($projeto['ano']); ?>
                    </p>

                    <?php if ($projeto['link_github']): ?>
                        <a href="<?php echo htmlspecialchars($projeto['link_github']); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn-secundario">🔗 Ver no GitHub</a>
                    <?php endif; ?>

                    <div class="projeto-acoes">
                        <a href="editar.php?id=<?php echo (int) $projeto['id']; ?>" class="btn-secundario">🖋️ Editar</a>
                        <a href="excluir.php?id=<?php echo (int) $projeto['id']; ?>" class="btn-perigo">🗑️ Excluir</a> 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <p class="contador-projetos">
            <?php echo count($projetos); ?> projeto(s) cadastrado(s)
        </p>
    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>