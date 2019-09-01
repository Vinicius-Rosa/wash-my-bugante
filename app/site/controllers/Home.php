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
			
			// CHAMADA DO MODELS VÍDEO
			$listarVideo = new \Site\Models\Video();
			$this->dados['video'] = $listarVideo->listar();
			
			// CHAMADA DO MODELS NOTÍCIAS
			$listarNoticia = new \Site\Models\Noticia();
			$this->dados['noticias'] = $listarNoticia->listar();
			
			$carregarView = new \Config\ConfigView("home/index", $this->dados);
			$carregarView->renderizar();
		}
	}