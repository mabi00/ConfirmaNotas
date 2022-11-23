<?php
include("conexao/conexao.php");
include("func/funcoes-banco.php");

// A SESSÃO PRECISA SER INICIADA A CADA PAGINA DIFERENTE
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['USUARIO'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: login.php");
  exit;
}

include("cabecalho.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fiscal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap-4.3.1/css/jquery-ui.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap-4.3.1/fontawesome-free-5.10.1-web/css/all.css">
</head>

<body>

  <div class="container">
    <br>
    <h1>Notas Fiscais - Confirmar Notas Pendentes.</h1>


    <?php
    if (array_key_exists("recebido", $_POST) && $_POST["recebido"] == "true") {
    ?>
      <div class="alert alert-success" role="alert">
        <p>Nota Recebida com sucesso!</p>
      </div>
    <?php
    }
    ?>


    <?php
    if (isset($_GET['info'])) {
      echo "  <div class=\"alert alert-" . $_GET['color'] . " alert-dismissible fade show\" role=\"alert\">
                      <strong>" . $_GET['info'] . "</strong> 
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>";
    }
    ?>
    <hr>
    <table class="table table-hover display" id="table-data">
      <thead>
        <tr>
          <th scope="col">Número</th>
          <th scope="col">Data Emissão</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Valor</th>
          <th scope="col">Dias de Atraso</th>
          <th scope="col">Chave de Acesso</th>
          <th scope="col">Data de Chegada</th>
          <th scope="col">Data de Entrega</th>
          <th scope="col">Data Confirmação</th>
          <th scope="col">Usuário Confirmação</th>
          <th scope="col">Confirma Recebimento</th>
        </tr>
      </thead>
      <tbody>
        <?php $listaNota = listaNotas($conn); ?>
      </tbody>
    </table>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Tabela Dinamica -->
  <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/DataTables/datatables.min.css" />
  <script type="text/javascript" src="bootstrap-4.3.1/DataTables/datatables.min.js"></script>
  <!-- mascara -->
  <script type="text/javascript" src="bootstrap-4.3.1/jQuery-Mask-Plugin-master/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>

  <script>
    $(document).ready(function() {

      $('#formdata').mask('00/00/0000');

      $('#table-data').DataTable({
        order: [
          [3, 'desc']
        ],
        lengthMenu: [
          [50, 100, 200, -1],
          [50, 100, 200, "All"]
        ],
        language: {
          "sEmptyTable": "Nenhum registro encontrado",
          "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
          "sInfoFiltered": "(Filtrados de _MAX_ registros)",
          "sInfoPostFix": "",
          "sInfoThousands": ".",
          "sLengthMenu": "_MENU_ resultados por página",
          "sLoadingRecords": "Carregando...",
          "sProcessing": "Processando...",
          "sZeroRecords": "Nenhum registro encontrado",
          "sSearch": "Pesquisar",
          "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
          },
          "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
          },
          "select": {
            "rows": {
              "_": "Selecionado %d linhas",
              "0": "Nenhuma linha selecionada",
              "1": "Selecionado 1 linha"
            }
          }
        }

      });
    });

    function lancardata(fornecedor, notafiscal, chavedeacesso, coligada, evento) {
      alert(fornecedor);
      document.getElementById('formfornecedor').value = fornecedor;
      document.getElementById('formnotafiscal').value = notafiscal;
      document.getElementById('formchavedeacesso').value = chavedeacesso;
      document.getElementById('formcoligada').value = coligada;
      document.getElementById("formmodalcadastrodedatas").action = "func/cst_notas_confirm_chegada.php?evento=" + evento;

    }
  </script>
</body>

</html>