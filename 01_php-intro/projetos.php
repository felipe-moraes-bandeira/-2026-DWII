<?php 
$pagina_atual = "projetos";
?>

<?php include("includes/cabecalho.php"); ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Projetos</title>

<style>

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f0f2f5;
}

.projetos {
    width: 90%;
    max-width: 1100px;
    margin: 40px auto;
}

.projetos h2 {
    font-size: 28px;
    margin: 40px 0 20px 0;
    border-left: 6px solid #0077ff;
    padding-left: 10px;
    color: #222;
}

.card-projeto {
    display: flex;
    align-items: center;
    background-color: white;
    border-radius: 15px;
    margin-bottom: 25px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.card-projeto:hover {
    transform: translateY(-5px);
}

.card-projeto img {
    width: 250px;
    height: 180px;
    object-fit: cover;
}

.info {
    padding: 20px;
}

.info h3 {
    margin-top: 0;
    margin-bottom: 10px;
    color: #333;
}

.info p {
    color: #555;
    line-height: 1.6;
}

/* RESPONSIVO */
@media (max-width: 768px) {
    .card-projeto {
        flex-direction: column;
    }

    .card-projeto img {
        width: 100%;
        height: 200px;
    }
}

</style>
</head>

<body>

<section class="projetos">

    <h2>Sites de Projetos HTML/CSS</h2>

    <div class="card-projeto">
      
        <div class="info">
            <h3>Cadastro e Lista de Música</h3>
            <p>Projeto em DW I com HTML, CSS, PHP e banco de dados SQL.</p>
        </div>
    </div>

    <div class="card-projeto">
     
        <div class="info">
            <h3>Sistema de Benefício para Idosos</h3>
            <p>Projeto em DW I: Foi usado HTML, CSS, PHP e banco de dados SQL.</p>
        </div>
    </div>

    <div class="card-projeto">
      
        <div class="info">
            <h3>Tabela de Rally (WRC)</h3>
            <p>Projeto pessoal, um site que tem uma tabela de pontos da (WRC) +- autulizado: foi usado HTML, CSS e JavaScript.</p>
        </div>
    </div>

    <h2>Tabela de Vendas em Python</h2>

    <div class="card-projeto">
      
        <div class="info">
            <h3>Sistema de Vendas</h3>
            <p>Projeto de Programação Orientada a Objetos no 2º ano com o professor Jailton.</p>
        </div>
    </div>

</section>

</body>
</html>