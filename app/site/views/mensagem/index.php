<?php

if (!defined('URL')){
    header("location: /");
    exit();
}
?>
<!-- Begin Page Content -->

        <!-- Begin Message Chat-->
        <div class="container"><br>
          <h3 class=" text-center">Mensagens</h3><br>
          <div class="messaging">
                <div class="inbox_msg">
                  <div class="inbox_people">
                    <div class="headind_srch">
                      <div class="recent_heading">
                        <h4>Recentes</h4>
                      </div>
                      <div class="srch_bar">
                        <div class="stylish-input-group">
                          <input type="text" class="search-bar"  placeholder="Pesquisar" >
                          <span class="input-group-addon">
                          <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                          </span> </div>
                      </div>
                    </div>
                    <div class="inbox_chat">
                      <div class="chat_list active_chat">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 14){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"><img src="<?= URL. 'assets/img/' .$imag?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>João da Silva <span class="chat_date">Hoje</span></h5>
                            <p>Bom dia. Tudo certo para a lavagem de sábado?</p>
                          </div>
                        </div>
                      </div>
                      <div class="chat_list">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 15){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"> <img src="<?=URL. 'assets/img/' .$imag ?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>Maria Pontes <span class="chat_date">Ontem</span></h5>
                            <p>Deixarei a chave com o síndico.</p>
                          </div>
                        </div>
                      </div>
                      <div class="chat_list">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 16){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"> <img src="<?= URL. 'assets/img/' .$imag?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>Felipe Alves <span class="chat_date">09 Jul</span></h5>
                            <p>Meu pai gostou muito da lavagem! Adoramos o serviço.</p>
                          </div>
                        </div>
                      </div>
                      <div class="chat_list">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 17){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"> <img src="<?=URL. 'assets/img/' .$imag?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>Saulo Batista <span class="chat_date">24 Jun</span></h5>
                            <p>Ótima lavagem, irmão. Obrigado!</p>
                          </div>
                        </div>
                      </div>
                      <div class="chat_list">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 18){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"> <img src="<?= URL. 'assets/img/' .$imag?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>Thiago Santana <span class="chat_date">24 Jun</span></h5>
                            <p>Minha mulher me avisou. Ficou muito boa a lavagem. Dei 5 estrelas!</p>
                          </div>
                        </div>
                      </div>
                      <div class="chat_list">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 19){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"> <img src="<?=URL. 'assets/img/' .$imag?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>Silvana Fernandes <span class="chat_date">01 Jun</span></h5>
                            <p><i class="fas fa-share"></i> Eu que agradeço!</p>
                          </div>
                        </div>
                      </div>
                      <div class="chat_list">
                        <div class="chat_people">
                        <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 20){
                            $imag = $imagem;
                          }
                        }
                        ?>
                          <div class="chat_img"> <img src="<?=URL. 'assets/img/' .$imag?>" alt="sunil"> </div>
                          <div class="chat_ib">
                            <h5>Sunil Rajput <span class="chat_date">29 Maio</span></h5>
                            <p><i class="fas fa-share"></i> hahaha Tudo bem!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

    <!-------------------------- Box MSG--------------------------------->
                  <div class="mesgs">
                    <div class="msg_history">
                      <div class="incoming_msg">
                      <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 14){
                            $imag = $imagem;
                          }
                        }
                        ?>
                        <div class="incoming_msg_img"> <img src="<?=URL. 'assets/img/' .$imag?>" alt="João da Silva"> </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Olá! Quanto  a lavagem?</p>
                            <span class="time_date"> 11:01    |    9 de Julho</span></div>
                        </div>
                      </div>
                      <div class="outgoing_msg">
                        <div class="sent_msg">
                          <p>Olá! A Homewash fica em 25, já a Abroadwash fica mais caro um pouco... Cerca de 35 reais.</p>
                          <span class="time_date"> 11:01    |    9 de Julho</span> </div>
                      </div>
                      <div class="incoming_msg">
                      <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 14){
                            $imag = $imagem;
                          }
                        }
                        ?>
                        <div class="incoming_msg_img"> <img src="<?=URL. 'assets/img/' .$imag?>" alt="João da Silva"> </div>                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Tudo bem. Pode ser a Homewash.</p>
                            <span class="time_date"> 15:32    |    Ontem</span></div>
                        </div>
                      </div>
                      <div class="outgoing_msg">
                        <div class="sent_msg">
                          <p>Bom dia. Tudo bem!</p>
                          <span class="time_date"> 07:12    |    Hoje</span> </div>
                      </div>
                      <div class="incoming_msg">
                      <?php
                          foreach ($this->dados['imagensHome'] as $imagensHome) {
                          extract($imagensHome);

                          if($imagensHome['id'] == 14){
                            $imag = $imagem;
                          }
                        }
                        ?>
                        <div class="incoming_msg_img"> <img src="<?=URL. 'assets/img/' .$imag?>" alt="João da Silva"> </div>                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>Bom dia. Tudo certo para a lavagem de sábado?</p>
                            <span class="time_date"> 08:01     |    Hoje</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="type_msg">
                      <div class="input_msg_write">
                        <input type="text" class="write_msg" placeholder="Enviar Mensagem" />
                        <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
        <!-- End of Message Chat-->

      </div>
      <!-- End of Main Content -->
