<?php
/**
 * ======================================================================
 * ARQUIVO    : 01_php-intro/index.php    (exemplo — aplique o padrão)
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 03 — Arquitetura Web e Introdução ao PHP
 * Autor      : Felipe Moraes Bandeira
 * ======================================================================
 */

$nome           = "Felipe Moraes Bandeira";
$pagina_atual   = "inicio";       // define o item ativo no menu
$caminho_raiz   = "../";          // sobe um nível até 2026-DWII/
$titulo_pagina  = "Portfólio — {$nome}";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
    </head>
<body>

    <main class="conteudo-principal">
        <section class="apresentacao">
            <h1>Bem-vindo ao meu Portfólio!</h1>
            <p>Olá! Meu nome é <strong><?php echo $nome; ?></strong> e este espaço foi criado para documentar minha jornada na disciplina de Desenvolvimento Web II (2026-DWII).</p>
            
            <h2>Sobre o Repositório</h2>
            <p>Este portfólio serve como um catálogo central para todas as atividades, exercícios práticos e projetos desenvolvidos ao longo das aulas. O objetivo é aplicar os conceitos teóricos na prática, construindo uma base sólida em programação web back-end e arquitetura de sites.</p>
            
            <h2>Tecnologias Utilizadas</h2>
            <p>Neste projeto, estou aplicando os conceitos de modularização e desenvolvimento dinâmico utilizando as seguintes linguagens:</p>
            <ul>
                <li><strong>PHP:</strong> Responsável pela lógica de servidor, variáveis dinâmicas e modularização do site (como a separação do cabeçalho e rodapé).</li>
                <li><strong>HTML:</strong> Utilizado para a marcação e estruturação semântica de todo o conteúdo das páginas.</li>
                <li><strong>CSS:</strong> Encarregado da estilização visual, garantindo que o portfólio tenha um design limpo e organizado.</li>
            </ul>
        </section>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>