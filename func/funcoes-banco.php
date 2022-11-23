<?php

function listaNotas($conn)
{
  $CST_NF_FISCAL = ("    
                    SELECT	
                    TNFEENTRADA.CODCFO
                    , FCFO.NOMEFANTASIA
                    , (SELECT DISTINCT VALORTOTALDOCUMENTO FROM ZFISNOTAS WHERE ZFISNOTAS.CHAVEACESSO = TNFEENTRADA.CHAVEACESSO) AS VALORTOTALDOCUMENTO
                    , TNFEENTRADA.NUMERO
                    , CONVERT(VARCHAR,TNFEENTRADA.DATAEMISSAO,103) AS DATAEMISSAO
                    , DATEDIFF(DAY, TNFEENTRADA.DATAEMISSAO, GETDATE()) DIASATRASO
                    , TNFEENTRADA.CHAVEACESSO
                    , CASE WHEN TNFEENTRADA.TIPOXML = 1 THEN 'NF-e' ELSE 'CT-e' END TIPOXML
                    , CONVERT(VARCHAR,ZDATANFE.DATACHEGADA,103) DATACHEGADA
                    , CONVERT(VARCHAR,ZDATANFE.DATAENTREGA,103) DATAENTREGA
                    , CONVERT(VARCHAR,ZDATANFE.DATACONFIRMACAO,103) DATACONFIRMACAO
                    , ZDATANFE.USUARIOCONFIRMACAO
                    FROM	TNFEENTRADA 
                    LEFT JOIN FCFO ON TNFEENTRADA.CODCFO = FCFO.CODCFO  
                    LEFT JOIN ZDATANFE ON TNFEENTRADA.CHAVEACESSO = ZDATANFE.CHAVEACESSO
                    WHERE	TNFEENTRADA.CODCOLIGADA = 1
                    AND TNFEENTRADA.CODCFO IS NOT NULL
                    AND TNFEENTRADA.IDMOV IS NULL
                    AND TNFEENTRADA.TIPOXML = 1
                ");
  $stmt = sqlsrv_query($conn, $CST_NF_FISCAL);
  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
  }
  while ($exibe = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo
    "<tr>" .
      "<td>" . $exibe['NUMERO'] . "</td>" .
      "<td>" . $exibe['DATAEMISSAO'] . "</td>" .
      "<th>" . $exibe['CODCFO'] . " - " . utf8_encode($exibe['NOMEFANTASIA']) . "</th>" .
      "<td>" . $exibe['VALORTOTALDOCUMENTO'] . "</td>" .
      "<td>" . $exibe['DIASATRASO'] . "</td>" .
      "<td>" . $exibe['CHAVEACESSO'] . "</td>" .
      "<td>" . $exibe['DATACHEGADA'] . "</td>" .
      "<td>" . $exibe['DATAENTREGA'] . "</td>" .
      "<td>" . $exibe['DATACONFIRMACAO'] . "</td>" .
      "<td>" . $exibe['USUARIOCONFIRMACAO'] . "</td>" .
      '<td>
          <form action="confirma-recebimento.php?CHAVEACESSO=' . $exibe['CHAVEACESSO'] . '" method="post">' .
      '<button class="btn btn-danger">Confirmar Recebimento</button>' .
      '</form>' .
      ' </td>' .
      '</tr>';
  }
}

function confirmaNotas($conn, $chaveAcesso)
{
  $nome = $_SESSION['NOME'];
  $query = "
    UPDATE ZDATANFE SET USUARIOCONFIRMACAO = '{$nome}', DATACONFIRMACAO = GETDATE() WHERE CHAVEACESSO = '{$chaveAcesso}';
  ";
  return sqlsrv_query($conn, $query);
}
