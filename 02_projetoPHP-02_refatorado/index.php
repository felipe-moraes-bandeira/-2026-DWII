<?php
/**
 * ========================================================================
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal - versão refatorada
 * Arquivo    : index.php   (homepage do portfólio)
 * Autor      : [Felipe Moraes Bandeira]
 * Data       : [30/04/2026]
 * ========================================================================
 */

if (session_status() === PHP_SESSION_NONE) session_start();

$pagina_atual  = 'inicio';
$titulo_pagina = 'Portfólio | DWII 2026';
$caminho_raiz  = './';


$nome      = 'Felipe Moraes Bandeira';
$descricao = 'Estudante de Técnico em Informática no IFPR, '
           . 'apaixonado por desenvolvimento web e tecnologia.';
$email     = '20241ctb0100074@estudantes.ifpr.edu.br';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/includes/cabecalho.php'; ?>
</head>
<body>
  <main>
    <section class="apresentacao">

        <div class="foto-perfil">
            <!-- As quebras de linha que afetavam o .png e as tags foram consertadas -->
            <img src="<?php echo $caminho_raiz; ?>includes/imgs/felipe.jpg"
                 alt="Foto de <?php echo htmlspecialchars($nome); ?>"
                 class="foto-perfil">
        </div>

        <div class="texto-container">
            <h2>Olá, eu sou <?php echo htmlspecialchars($nome); ?>! 👋</h2>

            <p><?php echo htmlspecialchars($descricao); ?></p>

            <div class="info-cards">
                <div class="info-card">
                    <span class="card-icon">🎓</span>
                    <span class="card-texto">Técnico em Informática — IFPR CRPG</span>
                </div>
                <div class="info-card">
                    <span class="card-icon">💻</span>
                    <span class="card-texto">Desenvolvimento Web II — 2026</span>
                </div>
                <div class="info-card">
                    <span class="card-icon">📧</span>
                    <span class="card-texto"><?php echo htmlspecialchars($email); ?></span>
                </div>
            </div>
        </div>

    </section>
  </main>

<?php include __DIR__ . '/includes/rodape.php'; ?>
</body>
</html>