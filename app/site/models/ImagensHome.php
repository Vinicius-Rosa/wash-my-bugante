<?php
	namespace Site\models;
	
	if(!defined('URL')){
		header("location: /");
		exit();
	}

	class ImagensHome{

		private $tabela = "imagens";
		private $result;
	
		public function listar(){
	
			$listar = new \Site\models\helper\ModelsRead();
	
			$listar->exeReadEspecifico("SELECT tab.id, tab.nome, tab.imagem
							  FROM {$this->tabela} tab 
							  ORDER BY tab.id ASC");
			$this->result['imagensHome'] = $listar->getResult();
			return $this->result['imagensHome'];
		}
	}