<?php
/**
 * ======================================================================
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Projeto    : Portfólio pessoal - versão refatorada
 * Arquivo    : includes/conexao.php
 * Autor      : Felipe Moraes Bandeira
 * ======================================================================
 */

function conectar(): PDO
{
    $dns = 'mysql:host=127.0.0.1;dbname=portfolio;charset=utf8mb4';
    $usuario = 'root';
    $senha = 'dwii2026';

    try {

        return new PDO($dns, $usuario, $senha, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);

    } catch (PDOException $e) {

        die('Erro de conexão com o banco de dados.');

    }
}
?>