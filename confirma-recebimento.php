<?php
include("cabecalho.php");
include("conexao/conexao.php");
include("func/funcoes-banco.php");

$chaveAcesso = $_GET['CHAVEACESSO'];
confirmaNotas($conn, $chaveAcesso);
header("location: lista-notas.php?recebido=true");
die();
