<!--
Disciplina : Desenvolvimento Web II (DWII)
Aula       : 03 - php intro
Autor      : Felipe Moraes Bandeira
Data       : 02/03/2026

-->
<?php
$pagina_atual = "inicio";
$nome = "Felipe Moraes Bandeira";
$profissao = "Estudante de tecnologia";
$curso = "Técnico em Informática - IFPR";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfólio - <?php echo $nome; ?></title>
</head>
<body>

<nav>
   <?php include 'includes/cabecalho.php'; ?>
</nav>

<div class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
</div>

<div class="container">
    <h2>Bem-vindo ao meu portfólio</h2>
    <p>Esta página foi gerada pelo PHP em:</p>
    <strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong>
</div>

<footer>
    <?php include 'includes/rodape.php'; ?>
</footer>

</body>
</html>