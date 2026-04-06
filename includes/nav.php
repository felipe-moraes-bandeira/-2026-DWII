<?php
/**
 * ==========================================================
 * ARQUIVO    : includes/nav.php
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 04 — PHP para Web: Formulários, GET e POST
 * Autor      : [Felipe Moraes Bandeira]
 * Conceitos  : Menu dinâmico, operador ternário, $caminho_raiz
 * ==========================================================
 *
 * Mesmo padrão do nav.php da Aula 03, com duas melhorias:
 *   1. Links montados via $caminho_raiz — funciona de qualquer pasta
 *   2. Classe CSS "ativo" em vez de style inline — CSS externo controla
 *
 * Variáveis esperadas:
 *   $pagina_atual — string: identifica qual item destacar no menu
 *   $caminho_raiz — string: caminho relativo até a raiz
 */

// Valores padrão: evita erro se a página esquecer de declarar
if (!isset($pagina_atual)) $pagina_atual = "";
if (!isset($caminho_raiz)) $caminho_raiz = "../";

/**
 * menu_class() — retorna 'class="ativo"' se o item corresponde
 * à página atual, ou '' caso contrário.
 *
 * Substitui os quatro operadores ternários repetidos da Aula 03
 * por uma função reutilizável — menos código, mesma lógica.
 */
function menu_class($item, $atual) {
    return ($item === $atual) ? 'class="ativo"' : '';
}
?>

<!-- nav usa a classe CSS definida em style.css - sem style inline  -->
 <nav>
<!-- links para o portifolio - Aula 03 -->
 <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php"
    <?php echo menu_class("inicio", $pagina_atual); ?>>
    🏠 Inicio
</a>
<a href="<?php echo $caminho_raiz; ?>01_php-intro/sobre.php"
    <?php echo menu_class("sobre", $pagina_atual); ?>>
    👤 sobre
</a>
<a href="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php"
    <?php echo menu_class("projetos", $pagina_atual); ?>>
    🔧 projetos
</a>

<a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php"
    <?php echo menu_class("contato", $pagina_atual); ?>>
    📫Contato 
</a>

<a href="<?php echo $caminho_raiz; ?>03_pdo/index.php"
    <?php echo menu_class("catalogo", $pagina_atual); ?>>
    🗄️Catalogo
</a>
<a href="<?php echo $caminho_raiz; ?>04_sessoes/login.php"
    <?php echo menu_class("login", $pagina_atual); ?>>
    🔐Login
</a>
<a href="<?php echo $caminho_raiz; ?>04_sessoes/painel.php"
    <?php echo menu_class("painel", $pagina_atual); ?>>
    📊painel
</a>


<a href="<?php echo $caminho_raiz; ?>05_crud/cadastrar.php"
    <?php echo menu_class("cadastrar", $pagina_atual); ?>>
    ✒️cadastrar
</a>
<a href="<?php echo $caminho_raiz; ?>05_crud/index.php"
    <?php echo menu_class("lisda de projetos", $pagina_atual); ?>>
    🧾listagem
</a>
</nav>