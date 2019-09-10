<?php

if (!defined('URL')){
    header("location: /");
    exit();
}

//var_dump($this->dados['noticias']);
//exit;

//echo "<br />View HOME <br />";
//var_dump($this->dados['carousel']);?>

    <!-- MAIN -->
    <div class="intro-section" id="home-section">
    <?php
        $bg = "";
        foreach ($this->dados['imagensHome'] as $imagensHome) {
        extract($imagensHome);

        if($id == 1){
          $bg = $imagem;
        }
      }
      ?>
      <div class="slide-1" style="background-image: url(<?=URL. 'assets/img/' .$bg?>);" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Seja um membro desta comunidade!</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="<?= URL ?>registro/index"
                      onclick="document.getElementById('id01').style.display='block'"
                      class="btn btn-primary py-3 px-5 btn-pill">Registre-se</a></p>
                  </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Login</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <a href="./PerfilLavador/index.html"><input type="submit" class="btn btn-primary btn-pill" value="Login"></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Como Funciona</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non
              aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!
            </p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
          <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
            extract($imagensHome);

            if($id == 3){
              $cfimg = $imagem;
            }
          }
          ?>
            <img src= "<?=URL. 'assets/img/'.$cfimg ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Sem tempo para lavar seu possante?</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus
              fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
            extract($imagensHome);

            if($id == 4){
              $cfimg = $imagem;
            }
          }
          ?>
            <img src="<?=URL. 'assets/img/' .$cfimg?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Lavando mundo a fora!</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus
              fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
          <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
            extract($imagensHome);

            if($id == 5){
              $cfimg = $imagem;
            }
          }
          ?>
            <img src="<?=URL. 'assets/img/' .$cfimg?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Aderido pelos melhores profissionais</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus
              fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="teachers-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Apoiadores</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque!
              Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam,
              illum sed veniam!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
            <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
            extract($imagensHome);

            if($id == 6){
              $person = $imagem;
            }
          }
          ?>
              <img src="<?=URL. 'assets/img/' .$person ?>" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Hinova Mais</h3>
                <p class="position">Lava-Jato</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto
                  tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
            <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
              extract($imagensHome);
            if($id == 7){
              $person = $imagem;
              }
            }
            ?>
              <img src="<?=URL. 'assets/img/' .$person?>" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">KSB Car Wash</h3>
                <p class="position">Lava-Jato</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto
                  tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
            <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
              extract($imagensHome);
            if($id == 8){
              $person = $imagem;
              }
            }
            ?>
              <img src="<?=URL. 'assets/img/' .$person?>" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Cambona</h3>
                <p class="position">Lava-Jato</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto
                  tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        $bg = "";
        foreach ($this->dados['imagensHome'] as $imagensHome) {
        extract($imagensHome);

        if($id == 12){
          $bg = $imagem;
        }
      }
      ?>
    <div class="site-section bg-image overlay" style="background-image: url(<?=URL. 'assets/img/' .$bg ?>)">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
          <?php
            foreach ($this->dados['imagensHome'] as $imagensHome) {
            extract($imagensHome);

            if($id == 9){
              $person = $imagem;
            }
          }
          ?>
            <img src="<?=URL. 'assets/img/' .$person?>" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jerome Jensen</h3>
            <blockquote>
              <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius
                necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit
                molestias! Rem reprehenderit assumenda &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section pb-0" id="aboutus-section">
      <div class="future-blobs">
        <div class="blob_2">
          <?php
              foreach ($this->dados['imagensHome'] as $imagensHome) {
              extract($imagensHome);

              if($id == 11){
                $blob = $imagem;
              }
            }
            ?>
          <img src="<?=URL. 'assets/img/'.$blob?>" alt="Image">
        </div>
        <div class="blob_1">
          <img src="<?=URL. 'assets/img/'.$blob?>" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Sobre Nós</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 rounded bg-white why-choose-us-box">
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">22,931 Yearly Graduates</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">150 Universities Worldwide</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Top Professionals in The World</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Expand Your Knowledge</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Best Online Teaching Assistant Courses</h3>
                </div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Best Teachers</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
          <?php
              foreach ($this->dados['imagensHome'] as $imagensHome) {
              extract($imagensHome);

              if($id == 10){
                $person = $imagem;
              }
            }
            ?>
            <img src="<?=URL. 'assets/img/' .$person?>" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-3">Contate-nos!</h2>
            <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam
              temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Cargo">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Escreva aqui sua mensagem :)"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Enviar Mensagem">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- /MAIN -->
