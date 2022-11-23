<?php


// A SESSÃO PRECISA SER INICIADA A CADA PAGINA DIFERENTE
if(!isset($_SESSION)) session_start();
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: login.php"); exit;



?>