<?php
session_start();
// Verifica se o usuário NÃO está logado
if(!isset($_SESSION['usuario'])) {
    header("location: login.php"); // Manda para o login
    exit();
}
?>