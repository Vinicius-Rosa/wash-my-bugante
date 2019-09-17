<?php
	namespace Config;
	
	class ConfigView{
		
		private $nome;
		private $dados;
		
		public function __construct($nome, array $dados = null){
			$this->nome = (string) $nome;
			$this->dados = $dados;
			//var_dump($this->dados);
		}
		
		public function renderizar(){
			if(file_exists("app/site/views/{$this->nome}.php")){
				include_once('app/site/views/includes/header.php');
				include_once('app/site/views/includes/menu.php');
				include_once("app/site/views/{$this->nome}.php");
				include_once('app/site/views/includes/footer.php');
				//echo $this->nome;
			}else{
				echo "Erro ao carregar a página: {$this->nome}";
			}
		}
		
		public function renderizar2(){
			if(file_exists("app/site/views/{$this->nome}.php")){
				include_once('app/site/views/includes/header.php');
				include_once("app/site/views/{$this->nome}.php");
				include_once('app/site/views/includes/footer.php');
				//echo $this->nome;
			}else{
				echo "Erro ao carregar a página: {$this->nome}";
			}
		}

		public function renderizar3(){
			if(file_exists("app/site/views/{$this->nome}.php")){
				include_once('app/site/views/includes/includesLavador/head.php');
				include_once('app/site/views/includes/includesLavador/asidemenu.php');
				include_once('app/site/views/includes/includesLavador/navbar.php');
				include_once("app/site/views/{$this->nome}.php");
				include_once('app/site/views/includes/includesLavador/footer.php');
			}else{
				echo "Erro ao carregar a página: {$this->nome}";
			}
		}
	}