<?php
/**
 * Disciplina : Desenvolvimento Web II
 * Arquivo    : painel.php
 * Descrição  : Área restrita - exige login via includes/auth.php.
 */

require_once __DIR__ . '/includes/auth.php';
requer_login();

$pagina_atual = 'painel';
$titulo_pagina = 'pagina - Portifolio';
$caminho_raiz = './';

require_once __DIR__ . '/includes/cabecalho.php';
?>

<main style="max-widht: 900px; margin: 40px auto; padding: 0 20px;">
<h1>Painal</h1>
<P> Ola, <strong><?= htmlspecialchars(usuario_atual()) ?></strong>! 
Voce está em uma Área restrita.</P>

<p>em breve, esta pagina listará seus projetos para edição (a ser implementado na <strong> Aula 13 - refatoração Parte V </strong>).</p>
<p><a href="logout.php">Sair</a></p>
</main>
<?php require_once __DIR__ . '/includes/rodape.php';?>
