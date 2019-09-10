<?php
	namespace Site\controllers;
	
	if(!defined('URL')){
		header("location: /");
		exit();
	}
	
	class Home{
		private $dados;
		
		public function index(){
			
			// CHAMADA DO MODELS CAROUSEL
			$listarCarousel = new \Site\Models\Carousel();
			$this->dados['carousel'] = $listarCarousel->listar();
			
			// CHAMADA DO MODELS SERVIÇOS
			$listarServico = new \Site\Models\Servico();
			$this->dados['servicos'] = $listarServico->listar();
			
			// CHAMADA DO MODELS IMAGENS
			$listarImagensHome = new \Site\Models\ImagensHome();
			$this->dados['imagensHome'] = $listarImagensHome->listar();
			
			// CHAMADA DO MODELS NOTÍCIAS
			$listarNoticia = new \Site\Models\Noticia();
			$this->dados['noticias'] = $listarNoticia->listar();
			
			$carregarView = new \Config\ConfigView("home/index", $this->dados);
			$carregarView->renderizar();
		}
	}