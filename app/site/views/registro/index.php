<?php

if (!defined('URL')){
    header("location: /");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WMP - Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <?php
          $bg = "";
          foreach ($this->dados['imagensHome'] as $imagensHome) {
          extract($imagensHome);

          if($id == 13){
            $bg = $imagem;
          }
        }
        ?>
          <div class="col-lg-5 d-none d-lg-block" style="background-image: url(<?=URL. 'assets/img/' .$bg ?>); background-repeat: no-repeat"></div>
          <div class="col-lg-7">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crie uma Conta!</h1>
              </div>
              <div class="p-3 bg-white rounded shadow mb-5">
                  <!-- Rounded tabs -->
                  <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
                    <li class="nav-item flex-sm-fill">
                      <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Cliente</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                      <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Lavador</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="fulano-tab" data-toggle="tab" href="#fulano" role="tab" aria-controls="fulano" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Lava-jato</a>
                      </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
                        <div class="form-group row justify-content-center">
                          <div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Sobrenome">
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputCpf" placeholder="CPF - Use apenas números">
                  </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control form-control-user" id="exampleInputTel" placeholder="Telefone">
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repetir Senha">
                  </div>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Registrar
                </a>
              </form>
            </div>
          </div>
        </div>
      <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
          <div class="row justify-content-center">
              <div class="">
                  <form class="user">
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Sobrenome">
                        </div>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" id="exampleInputCpf" placeholder="CPF - Use apenas números">
                        </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" id="exampleInputRG" placeholder="RG - Use apenas números">
                        </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <input type="number" class="form-control form-control-user" id="exampleInputTel" placeholder="Telefone">
                        </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                        </div>
                        <div class="col-sm-6">
                          <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repetir Senha">
                        </div>
                      </div>
                      <a href="login.html" class="btn btn-primary btn-user btn-block">
                        Registrar
                      </a>
                    </form>
                    </div>
          </div>
      </div>
          <div id="fulano" role="tabpanel" aria-labelledby="fulano-tab" class="tab-pane fade px-4 py-5">
              <div class="row justify-content-center">
                  <div class="">
                      <form class="user">
                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" class="form-control form-control-user" id="exampleNomeFachada" placeholder="Nome Fachada">
                            </div>
                            <div class="col-sm-6">
                              <input type="text" class="form-control form-control-user" id="exampleRazaoSocial" placeholder="Razão Social">
                            </div>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control form-control-user" id="exampleInputCnpj" placeholder="CNPJ - Use apenas números">
                            </div>
                          <div class="form-group">
                              <input type="text" class="form-control form-control-user" id="exampleInputEndereco" placeholder="Endereço">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control form-control-user" id="exampleInputTel" placeholder="Telefone">
                              </div>
                          <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                            </div>
                            <div class="col-sm-6">
                              <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repetir Senha">
                            </div>
                          </div>
                          <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Registrar
                          </a>
                        </form>
          </div>
              </div>
                  </div>
        </div>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
              </div>
              <div class="text-center">
                <a class="small" href="../index.html">Já possui uma conta? Faça login!</a>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
