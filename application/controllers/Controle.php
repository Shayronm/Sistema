<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller 
{
	public function index($fun=NULL)
	{
		if($fun == NULL)
		{
			echo 'Dê um valor ao parâmetro';
		}else if($fun == 0)
		{
			$this-> listar();
		}else if($fun == 1)
		{
			$this-> adicionar();
		}else if($fun == 2)
		{
			$this-> alterar();
		}else if($fun == 3)
		{
			$this->visualizar();
		}else if($fun == 4)
		{
			$this->alterar();
		}
		
	}

	private function listar()
	{
		echo 'listar';
	}

	private function adicionar()
	{
		echo 'adicionar';
	}

	private function alterar()
	{
		echo 'alterar';
	}

	private function visualizar()
	{
		echo 'visualizar';
	}
}	