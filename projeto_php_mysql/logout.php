<?php
session_start();
session_destroy(); // Destrói todas as sessões
header("location: login.php"); // Volta para o login
exit();
?>