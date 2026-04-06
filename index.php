<?php
/**
 * ==========================================================
 * ARQUIVO    : index.php {raiz do repositorio 2026-DWII}
 * Disciplina : Desenvolvimento Web II {2026-DWII}
 * Aula       : 04 ~ php para Web: Formularios, GET e POST
 * Autor      : Felipe Moraes Bandeira
 * Conceitos  : ponto de entrada, array associativo, foreach,
 * date(), htmlspecialchars()
 * ==========================================================
 * * Hub de navegação ~ exibido quando o servidor sobe na raiz:
 * php -S 0.0.0.0:8000
 * * Por estar fora das subpastas, este arquivo não usa os 
 * includes compartilhados {cabecalho.php, nav.php, rodape.php}.
 * Cabeçalho, nav e rodapé são definidos inline aqui.
 */

//-- VARIAVEIS DE CONTEUDO ----------------------------
$nome      = "Felipe Moraes Bandeira";
$subtitulo = "Repositorio 2026 - Desenvolvimento Web II";

//--- CATALOGO DE AULAS --------------------------------
// Array associativo: cada aula é um bloco [...] com suas chaves.
$aulas = [
    [
        "numero"    => "00",
        "nome"      => "Apresentação Pessoal",
        "descricao" => "Página estática com HTML e CSS - foto de perfil e layout responsivo.",
        "link"      => "00_apresentacao/index.html",
        "icone"     => "👨‍💻",
        "cor"       => "#6b7280",
        "conceitos" => "HTML semântico, CSS Flexbox, responsividade",        
    ],
    [
        "numero"    => "03",
        "nome"      => "Portfólio Dinâmico com PHP",
        "descricao" => "Mini-site de portfólio com variáveis, includes e menu dinâmico.",
        "link"      => "01_php-intro/index.php",
        "icone"     => "📖",
        "cor"       => "#3b579d",
        "conceitos" => "Variáveis, echo, include, foreach, operador ternário",
    ],
    [
        "numero"    => "04",
        "nome"      => "Formulário de Contato",
        "descricao" => "Formulário com validação no servidor, proteção XSS e padrão PRG.",
        "link"      => "02_formularios/contato.php",
        "icone"     => "📫",
        "cor"       => "#3ba34d",
        "conceitos" => '$_POST, validação, htmlspecialchars(), header() + exit',
    ],
    [
        "numero"    => "05",
        "nome"      => "Catálogo de Tecnologias (PDO)",
        "descricao" => "Conexão com banco de dados MariaDB, consulta de dados e exibição segura.",
        "link"      => "03_pdo/index.php",
        "icone"     => "🗄️",
        "cor"       => "#ff8700", 
        "conceitos" => "PDO, MariaDB, foreach, htmlspecialchars",
    ],
    // 👇 NOVAS AULAS ADICIONADAS ABAIXO 👇
    [
        "numero"    => "06",
        "nome"      => "Autenticação com Sessões",
        "descricao" => "Sistema de login seguro, controle de acesso a áreas restritas e botão de logout.",
        "link"      => "04_sessoes/login.php",
        "icone"     => "🔒",
        "cor"       => "#cf1c21", // Vermelho
        "conceitos" => '$_SESSION, auth, controle de rotas, destroy',
    ],
    [
        "numero"    => "07 e 08",
        "nome"      => "CRUD Completo (Portfólio)",
        "descricao" => "Gerenciador de projetos completo operando direto no banco: listar, cadastrar, editar e excluir.",
        "link"      => "05_crud/index.php",
        "icone"     => "⚙️",
        "cor"       => "#8a2be2", // Roxo
        "conceitos" => "CRUD, INSERT, UPDATE, DELETE, GET/POST",
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subtitulo); ?></title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>

<header>
    <h1><?php echo htmlspecialchars($nome); ?> 👨‍🏫</h1>
    <p><?php echo htmlspecialchars($subtitulo); ?></p>
</header>

<div class="container">
    <div class="box-info" style="margin-top: 0;">
        <h3>▶️ Como executar este repositório</h3>
        <p style="font-size: 14px; color: #374151;">
            Suba o servidor PHP na <strong>raiz</strong> para acessar todas as aulas:
        </p>
        <div style="background: #010000; color: #a8e6a3; padding: 10px 16px; border-radius: 6px; margin-top: 10px; font-family: 'Courier New', monospace; font-size: 13px; line-height: 1.8;">
            cd ~/workspace<br>php -S 0.0.0.0:8000
        </div>
        <p style="font-size: 13px; color: #6b7280; margin-top: 8px;">
            Esta página é o hub de navegação. Use os botões abaixo para acessar cada projeto.
        </p>
    </div>

    <h2 class="secao">📁 Projetos por Aula</h2>

    <?php foreach ($aulas as $aula): ?>
        <div class="card-aula" style="border-left-color: <?php echo $aula['cor']; ?>;">
            <div class="icone"><?php echo $aula['icone']; ?></div>
            <div class="conteudo">
                <span class="badge" style="background: <?php echo $aula['cor']; ?>; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 12px;">
                    Aula <?php echo htmlspecialchars($aula['numero']); ?>
                </span>
                
                <h3 style="color: <?php echo $aula['cor']; ?>;">
                    <?php echo htmlspecialchars($aula['nome']); ?>
                </h3>
                
                <p><?php echo htmlspecialchars($aula['descricao']); ?></p>
                
                <span class="conceitos">
                    🔑 <?php echo htmlspecialchars($aula['conceitos']); ?>
                </span>
                <br>
                
                <a href="<?php echo htmlspecialchars($aula['link']); ?>" class="btn" style="background: <?php echo $aula['cor']; ?>; color: #fff; padding: 6px 12px; border-radius: 4px; text-decoration: none; display: inline-block; margin-top: 10px;">
                    Abrir →
                </a>
            </div>
        </div>
    <?php endforeach; ?>

    <p style="text-align: right; font-size: 13px; color: #9ca3af; margin-top: 20px;">
        ⏱️Gerado em: <?php echo date("d/m/Y \à\s H:i:s"); ?>  
    </p>
</div>

<footer style="text-align: center; margin-top: 40px; padding: 20px; color: #6b7280; font-size: 14px;">
    <?php echo htmlspecialchars($nome); ?> &copy; <?php echo date("Y"); ?>
    | Desenvolvido com PHP | IFPR - Ponta Grossa
</footer>

</body>
</html>