<?php 
/** 
 * Disciplina : Desenvolvimento Web II (DWII)
 * Aula       : 06 - Autenticação com sessões e cntrole de acesso
 * Arquivo    : 04_sessoes/painel.php
 * Autor      : Felipe Moraes Bandeira
 */

require_once __DIR__ . '/includes/auth.php';
requer_login();
// No painel.php, após requer_login():
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;
// A cada F5 o contador aumenta — por quê?

$titulo_pagina = 'painel - área Restrita';
$caminho_raiz  = '../';
$pagina_atual  = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__  . '/../includes/cabecalho.php';?>
</head>
<body>
    
<div class="container">

<div class="alerta-sucesso">
    <h3>✅ Voce esta autenticado!</h3>
    <p><strong>Usuario:</strong>
<?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
<p><strong>Login realizado em:</strong>
<?php echo htmlspecialchars($_SESSION['logado_em'] ?? '-'); ?></p>
</div>

<div class="card">
    <h3>📊 painel de controle</h3>
    <p> Este conteudo so é visíveç para usuario autenticados.</p>
    <P>Nas proximas aulas este painel tera funcionalidades reais (CRUD).</P>
</div>

<p style="margin-top: 24px; text-aling: center;">
    <a href="logout.php"
        style="background: #cf1c21; color: white; padding:10px 24px;
        border-radius:6px; text-decoration: none;
        font-weight:bold;">
        🚪Sair
    </a>
</p>
</div>

<?php  require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>