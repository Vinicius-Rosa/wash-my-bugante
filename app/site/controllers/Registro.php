<?php
	namespace Site\controllers;
	
	if(!defined('URL')){
		header("location: /");
		exit();
	};

	
	Class Registro{
		private $dados;
	
		public function index(){
			echo "<br/>Carregando o controller da página Registro";
			$carregarView = new \Config\ConfigView("registro/index", $this->dados);
			$carregarView->renderizar();

			exit();
		}
	}