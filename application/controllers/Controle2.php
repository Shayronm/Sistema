<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle2 extends CI_Controller 
{
	
	public function index($index = NULL)
	{
		$data['titulo'] = 'Bugs Interprise';
		$data['conteudo'] = 'Conteudo';
		$data['contato'] = 'Contato';	
 		$data['rodape'] = 'Todos os direitos estão reservados';
		
		$this->load->view('layout/topo', $data);
		$this->load->view('site/conteudo');
		$this->load->view('layout/rodape');
	}

	public function pagina($pagina=NULL)
	{
		//parâmetros
		$data['titulo'] = 'Bugs Interprise';
		$data['conteudo'] = 'Conteudo';
		$data['contato'] = 'Contato';	
 		$data['rodape'] = 'Todos os direitos estão reservados';


		$this->load->view('layout/topo', $data);

		if($pagina == 'contato')
		{
			$this->load->view('site/contato');	
		}elseif ($pagina == NULL) {
			$this->load->view('site/conteudo');
		}
			$this->load->view('layout/rodape');
		
	}
}


