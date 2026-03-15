<?php
/**
 * ==========================================================
 *ARQUIVO    : index.php {raiz do repositorio 2026-DWII}
 *Disciplina : Desenvolvimento Web II {2026-DWII}
 *Aula       : 04 ~ php para Web: Formularios, GET e POST
 *Autor      : {Felipe Moraes Bandeira}
 *Conceitos  : ponto de entrada, array associativo, forech,
 *             date(), htmlspecialachars()
 *
 * 
 * ==========================================================
 * 
 * Hub de navegação ~ exibindo quando o servidor sobre na raiz:
 *  php -S localhost:8000
 * 
 * por estar fora das subpasta, este arquivo nao usa os 
 * includes compartilhados {cabecalho.php, nav.php, rodape.php}.
 * cabeçalho, nav e rodapé são definidos inline aqui.
 *  
 */
//-- VARIAVEIS DE CONTEUDO ----------------------------
$nome      = "Felipe moraes bandeira";
$subtitulo = "Repositorio 2026 - Deselvolvimento Web II";

//--- CATALOGO DE AULAS --------------------------------
//Array associativo: cada aula é um bloco [...] com suas chaves.
// Para adicionar novas aulas: copie aulas: copie um bloco e adite os valores.
$aulas = [
    [
        "numero"    =>"00",
        "nome"      =>"Apresentação Pessoal",
    "descricao"     =>"pagia estatica com htmle css - foto de pertil e layout responsivo.",
    "link"          =>"00_apresentacao/index.html",
    "icone"         =>"👨‍💻",
    "cor"           =>"#6b7280",
    "conceitos"     =>"HTML semantico, CSS Flexbox, reponsividade",        
    ],
[
    "numero"        =>"03",
    "nome"          =>"portifolio Dinamico com PHP",
    "descricao"     =>"Mini-site de portifolio com variaveis, includes e menu dinamico.",
    "link"          =>"01_php-intro/index.php",
    "icone"         =>"📖",
    "cor"           =>"#3b579d",
    "conceitos"     =>"Variaveis, echo, include, foreach, operador ternario",
],
[
    "numero"        =>"04",
    "nome"          =>"Formulario de contato",
    "descricao"     =>"Formulario com validaçao no servidor, proteção XSS e padrão PRG.",
    "link"          =>"02_formularios/contato.php",
    "icone"         =>"📫",
    "cor"           =>"#3ba34d",
    "conceitos"     =>'$_POST, validação, htmlspecialchars(), header() + exit',
],

    ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subtitulo); ?></title>
</head>
<body>
    <!--
        index.php está na RAIZ (2026-DWII).
        A pasta includes/ também está na raiz — mesmo nível.
        Por isso o caminho é direto: "includes/style.css"

        (sem "./" — esse prefixo só aparece nas subpastas).

        Esse <link> faz o navegador carregar o style.css como
        arquivo separado — sem nenhum CSS embutido aqui.
    -->
    <link rel="stylesheet" href="includes/style.css">

</head>
<body>

<!-- CABEÇALHO — mesmo padrão visual das demais páginas -->
<header>
    <h1><?php echo htmlspecialchars($nome); ?> 👨‍🏫</h1>
    <p><?php echo htmlspecialchars($subtitulo); ?></p>
</header>

<div class="container">
    <!-- INSTRUÇÃO DE USO --- exibida logo ao abrir o repositório -->
     <div class="box-info" style="margin-top: 0;">
        <h3>▶️ Como executar este reposiorio</h3>
        <p style="font-size: 14px; color: #374151;">
          Suba o sevidor PHP na <strong>raiz</strong> para acessar todas as aulas:
        </p>
        <div style="backgroud: #010000; color: #a8e6a3; padding: 10px 16px; style="boder-radius: 6px; margin-top: 10px; font-family: 'Courier New', monospace; font-size: 13px; line-height: 1.8;">
        cd ~/workspaces/2026-DWII<br>php -S localhost:8000
      </div>
      <p style="font-size: 13px; color: #6b7280; margin-top: 8px;">
        Esta pagina  é o hub de navegação. Use os botões  abaixo para acessar cada projeto.
</P>
</div>

<!-- LISTAGEM DAS AULAS ---  foreach percorre o array $aulas -->
 <h2 class="secao">📁 Projetos por Aula</h2>

 <?php foreach ($aulas as $aula): ?>

    <!--
    border-left-color dinâmica: cada aula tem sua cor definida no array.
    Isso evita criar uma classe CSS diferente para cada card.
-->
<div class="card-aula"
     style="border-left-color: <?php echo $aula['cor']; ?>;">

    <div class="icone"><?php echo $aula['icone']; ?></div>

    <div class="conteudo">

        <span class="badge">Aula <?php echo htmlspecialchars($aula['numero']); ?>
        </span>

        <h3 style="color: <?php echo $aula['cor']; ?>;">
            <?php echo htmlspecialchars($aula['nome']); ?>
        </h3>

        <p><?php echo htmlspecialchars($aula['descricao']); ?></p>

        <span class="conceitos">
            🔑 <?php echo htmlspecialchars($aula['conceitos']); ?>
        </span>
        <br>

        <a href="<?php echo htmlspecialchars($aula['link']); ?>"
           class="btn"
           style="background: <?php echo $aula['cor']; ?>;">
            Abrir →
        </a>

    </div>

</div>
<?php endforeach; ?>
<!-- TIMESTAMP --- demonsta date() - igual ao index.php do portifolio   -->
 <p style="text-align: right; font-size: 13px; color: #9ca3af; margin-top: 8px;">
    ⏱️Gerado em: <?php echo date("d/m/Y \à\s H:i:s"); ?>  
</p>
 </div>

 <!-- RODAPÉ --- mesmo padrao visual do rodape.php das subpasta -->
  <footer>
    <?php echo htmlspecialchars($nome); ?>
    &copy; <?php echo date("Y"); ?>
    | Desenvolvido com PHP | IFPR - Ponta Grossa
 </footer>
</body>
</html>