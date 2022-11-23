<?php
/*Nome do servidor*/
$serverName = "death-star";
/*Nome do Banco de dados Usuario e Senha*/
$connectionInfo = array("Database" => "DIGITAL", "UID" => "mabiobanco", "PWD" => "mabio123");
/*Nome dado ao evento pra fazer a conexao*/
$conn = sqlsrv_connect($serverName, $connectionInfo);
/*Teste da conexao se falso retorne erro se verdadeiro retorne mesagem*/
if ($conn == false) {
	echo "ERRO NA CONEXAO ---------";
	die(print_r(sqlsrv_errors(), true));
}
