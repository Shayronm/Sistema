<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller 
{

	public function __construct()
	{

		parent::__construct();

		//carregar o model
		$this->load->model('livros_model', 'livros');

		//carregar o helper funcoes_helper
		$this->load->helper('funcoes_helper', 'funcoes');

	}

	public function index()
	{
		//parâmetros
		$dados['titulo'] = 'Wise';

		//carrega as views
		$this->load->view('layout/topo', $dados);
		$this->load->view('site/conteudo');
		$this->load->view('layout/rodape');
	}

	public function livros()
	{
		//parâmetros
		$dados['titulo'] = 'Lista de Livros';

		//carrega dados do banco de dados
		$dados['livros'] = $this->livros->listarLivros();
		
		//testando a $query
		/*
		echo '<pre>';
			print_r($query);
		echo '</pre>';
		*/
		
		//carregar as views
		$this->load->view('layout/topo', $dados);
		$this->load->view('livros/listalivros');
		$this->load->view('layout/rodape');
		
	}

	public function info($id=NULL)
	{

		if($id == NULL)
		{
			echo 'Você precisa passar uma id válida';
		}else{

			$query = $this->livros->pegarPorId($id);

		if($query)
		{
			$data['titulo'] = $query->nome_livro;
			$data['info'] = $query;

			$this->load->view('layout/topo', $data);
			$this->load->view('livros/info');
			$this->load->view('layout/rodape');

		}else{

			echo 'Você precisa passar uma id válida';
			
		}
	    }
	}
}	