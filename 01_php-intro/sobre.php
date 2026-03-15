<?php
/**
 * ======================================================================
 * ARQUIVO    : 01_php-intro/sobre.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 03 — Arquitetura Web e Introdução ao PHP
 * Autor      : [Felipe Moraes Bandeira]
 * ======================================================================
 */

$nome           = "[Felipe Moraes Bandeira]";
$pagina_atual   = "sobre";        // define o item ativo no menu
$caminho_raiz   = "../";          // sobe um nível até 2026-DWII/
$titulo_pagina  = "Sobre Mim — {$nome}";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php'; ?>
    </head>
<body>
<h3> Felipe.M.Bandeira</h3> 
    Sou estudante do Instituto Federal do Paraná (IFPR) desde 2024, atualmente matriculado no curso de Informática no campus CRPG.

Possuo grande interesse na área de Engenharia Mecânica, motivado principalmente por minha experiência profissional como borracheiro, atividade que exerço há sete anos. Essa vivência prática contribuiu significativamente para o desenvolvimento de habilidades técnicas, responsabilidade e comprometimento, além de fortalecer meu interesse por processos mecânicos e soluções técnicas na área.

Busco constantemente aprimorar meus conhecimentos, integrando minha formação acadêmica à experiência profissional, com o objetivo de crescer pessoal e profissionalmente.


    <footer>
   por: felipe moraes bandeira, 3° ano - 2026
 </footer>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>