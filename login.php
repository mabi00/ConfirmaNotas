<?php
if (isset($_GET['info'])) {
  echo "  <div class=\"alert alert-DANGER alert-dismissible fade show\" role=\"alert\">
                  <strong>" . $_GET['info'] . "</strong> 
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>";
}
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
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="func/verifica_login.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputusuario" name="login" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputEmail">Usuario</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputsenha" name="senha" class="form-control" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Logar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

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