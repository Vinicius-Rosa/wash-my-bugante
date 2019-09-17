<?php
	namespace Site\controllers;
	
	if(!defined('URL')){
		header("location: /");
		exit();
	};

	
	Class Mensagem{
		private $dados;
	
		public function index(){
			//echo "<br/>Carregando o controller da página Registro";

			// CHAMADA DO MODELS IMAGENS
			//$listarImagensHome = new \Site\Models\ImagensHome();
			//$this->dados['imagensHome'] = $listarImagensHome->listar();

			$carregarView = new \Config\ConfigView("mensagem/index", $this->dados);
			$carregarView->renderizar3();
		}
	}