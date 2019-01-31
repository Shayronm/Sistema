<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livros_model extends CI_Model 
{

	public function listarLivros()
	{

		$query = $this->db->get('livros');

		return $query->result();




	}

	public function pegarPorId($id=NULL)
	{

		if($id)
		{

			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get('livros');
			return $query->row();

		}

	}
	
}