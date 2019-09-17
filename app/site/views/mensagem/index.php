<?php

if (!defined('URL')){
    header("location: /");
    exit();
}
?>
<!-- Main Content -->
<div id="content">

<!-- End of Topbar -->

<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Notificações</h1>
  <p class="mb-4"> Aqui estarão todas as suas notificações do sistema e de lavagens.</p>


  <!-- Begin Notify-->
  <div class="p-5 bg-white rounded shadow mb-5">
      <!-- Rounded tabs -->
      <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
        <li class="nav-item flex-sm-fill">
          <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Lavagens</a>
        </li>
        <li class="nav-item flex-sm-fill">
          <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Sistema</a>
        </li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
          <h6>Alguns lavadores aceitaram seu pedido. Escolha um para realizar a lavagem :)</h6><br>
  
                  <table class="table  table-sm">
                    <thead class="table-info">
                      <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Endereço</th>
                        <th>Tipo de Lavagem</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check" onchange="confirmar()">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </td>
                        <td>Maria Pontes</td>
                        <td>10 de Julho, 2019</td>
                        <td>Rua das Flores</td>
                        <td>AW</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check" onchange="confirmar()">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </td>
                        <td>João da Silva</td>
                        <td>09 de Julho, 2019</td>
                        <td>Baiminas</td>
                        <td>HW</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check" onchange="confirmar()">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </td>
                        <td>Felipe Alves</td>
                        <td>09 de Julho, 2019</td>
                        <td>Manuel Domingos Monteiro</td>
                        <td>HW</td>
                      </tr>
  
                      <tr>
                        <td>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check" onchange="confirmar()">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </td>
                        <td>Saulo Batista</td>
                        <td>24 de Junho, 2019</td>
                        <td>Augusto Rusche</td>
                        <td>AW</td>
                      </tr>
  
                      <tr>
                        <td>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check" onchange="confirmar()">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </td>
                        <td>Thiago Santana</td>
                        <td>23 Junho, 2019</td>
                        <td>Vila Rica</td>
                        <td>HW</td>
                      </tr>
  
                      <tr>
                        <td>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check" onchange="confirmar()">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </td>
                        <td>Silvana Fernandes</td>
                        <td>01 de Junho, 2019</td>
                        <td>Rua Antônio Comti</td>
                        <td>HW</td>
                      </tr>
                    </tbody>
                  </table>
        </div>
        <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
          <h6>Você tem algumas notificações!</h6><br>
          <div class="row justify-content-center">
            <div class="aleatoria">
                      <div class="row mb-3 border-bottom-info text-center" style="padding: 5px; cursor: pointer">
                            <div class="icon-circle bg-primary" style="margin-right: 20px">
                              <i class="fas fa-file-alt text-white"></i></div>
                      <div style="margin-top: 8px">As novas diretrizes estão disponíveis para download!</div>
            </div>
            <div class="aleatoria">
                <div class="row mb-3 border-bottom-info text-center" style="padding: 5px; cursor: pointer">
                      <div class="icon-circle bg-success" style="margin-right: 20px">
                        <i class="fas fa-donate text-white"></i></div>
                <div style="margin-top: 8px">R$90,29 foram depositados na sua conta!</div>
            </div>

            <div class="aleatoria">
                <div class="row mb-3 border-bottom-info text-center" style="padding: 5px; cursor: pointer">
                      <div class="icon-circle bg-warning" style="margin-right: 20px">
                        <i class="fas fa-exclamation-triangle text-white"></i></div>
                <div style="margin-top: 8px">Alerta de Irregularidade: Percebemos que seu perfil está incompleto.</div>
            </div>
                      
          </div>
        </div>
        </div>
      </div>
      <!-- End rounded tabs -->
    </div>

  
</div>
      
        <!-- End of Main Content -->

        