<!-- 01_php-intro/sobre.php -->
<?php

$nome = "[Felipe Moraes Bandeira]";
$pagina_atual = "sobre";
$pagina_atual = "sobre";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

    <?php include 'includes/cabecalho.php'; ?>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
        <h1 style="color: #3b579d;">👤 Sobre mim</h1>

        <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de Técnico em Informática no IFPR de Ponta Grossa.</p>

        <p>Meu nome é Felipe, tenho 17 anos e sou estudante do curso Técnico em Informática. Possuo grande interesse pela indústria automotiva, área na qual concentro meus principais objetivos profissionais.

Tenho como meta ingressar no curso de Engenharia Mecânica, buscando aprofundar meus conhecimentos técnicos e científicos para atuar no desenvolvimento e fabricação de motores.

Meu maior interesse no mercado está voltado à engenharia e produção de motores, especialmente aqueles do Grupo Volkswagen e também motores de fabricantes americanos (EUA), que são referências em desempenho, tecnologia e inovação no setor automotivo.
        </p>

        <a href="index.php"
           style="color: #3b579d; font-weight: bold;">
           ← Voltar ao início
        </a>
    </div>

    <?php include 'includes/rodape.php'; ?>

</body>
</html>