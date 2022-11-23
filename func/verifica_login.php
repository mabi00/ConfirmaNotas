<?php
include('../conexao/conexao.php');

$login = $_POST["login"];
$senha = $_POST["senha"];

if (
	strcmp($login, "eduarda") == 0
	|| strcmp($login, "uep") == 0
) {
	$cst_login = sqlsrv_query($conn, "	SELECT Login AS USUARIO, NOME FROM ZUsuarios
	WHERE	login = '{$login}'
	AND senha = '{$senha}'
");
	while ($result_login = sqlsrv_fetch_array($cst_login, SQLSRV_FETCH_ASSOC)) {
		if (isset($result_login['USUARIO'])) {
			//SE A SESSAO NAO EXISTIR, INICIA UMA
			if (!isset($_SESSION)) session_start();

			//salva os dados encontrados na sessao
			$_SESSION['USUARIO'] = $result_login['USUARIO'];
			$_SESSION['NOME'] = $result_login['NOME'];

			echo "<script>location.href=('../index.php'); </script>";
		}
	}

	$info = "Usuario ou senha Incorreto";
	echo "<script>location.href=('../login.php?info=$info'); </script>";
} else {
	$info = "Usuario sem permissão";
	echo "<script>location.href=('../login.php?info=$info'); </script>";
}
