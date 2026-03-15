<?php
/**
 * ======================================================================
 * ARQUIVO    : 01_php-intro/projetos.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 03 — Arquitetura Web e Introdução ao PHP
 * Autor      : Felipe Moraes Bandeira
 * ======================================================================
 */

$nome           = "Felipe Moraes Bandeira";
$pagina_atual   = "projetos";     // define o item ativo no menu
$caminho_raiz   = "../";          // sobe um nível até 2026-DWII/
$titulo_pagina  = "Meus Projetos — {$nome}";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
    </head>
<body>

    <main class="conteudo-projetos">
        <section class="lista-projetos">
            <h2>Meus Projetos</h2>
            <p>Abaixo estão alguns dos principais trabalhos que desenvolvi aplicando os conhecimentos de <strong>HTML, CSS, JavaScript e PHP</strong>:</p>

            <article class="projeto">
                <h3>Cadastro de Músicas</h3>
                <p>Sistema web voltado para o gerenciamento e registro de um acervo musical. A interface foi construída com HTML/CSS, usando JavaScript para interatividade no front-end e PHP para o processamento dos dados.</p>
            </article>

            <article class="projeto">
                <h3>Cadastro de Benefício para Idosos</h3>
                <p>Plataforma com foco em acessibilidade para facilitar o registro de idosos em programas de assistência. O formulário conta com validações em JavaScript e gerenciamento seguro das informações via back-end em PHP.</p>
            </article>

            <article class="projeto">
                <h3>Classificação e Pontuação da WRC</h3>
                <p>Site dinâmico desenvolvido para exibir o ranking atualizado dos pilotos do World Rally Championship. Utiliza a lógica do PHP para organizar a tabela de pontos e CSS/JS para uma apresentação visual limpa e interativa.</p>
            </article>
        </section>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>