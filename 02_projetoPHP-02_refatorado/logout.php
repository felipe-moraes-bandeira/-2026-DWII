<?php
/**
 * Disciplina : Desenvolvimento Web II
 * Arquivo    : logout.php
 * Descrição  : Encerrar a sessão e devolve o usuario á home.
 */

require_once __DIR__ .'/includes/auth.php';

$_SESSION = [];

if (ini_get('session.use_cookies')) {
    $p = session_get_cookie_params();
    setcookie(
    session_name(), '', time() - 42000,
    $p['path'], $p['secure'], $p ['httponly']
    );
}

session_destroy();
header('location: index.php');
exit;
?>