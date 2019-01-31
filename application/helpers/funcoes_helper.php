<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	function formatoDataBr($data=NULL)
	{
		if($data)
		{
			//separa a data em 3 partes
			$data_funcao = explode("-", $data);

			/*

			Ano $data_funcao[0]
			Mês $data_funcao[1]
			Dia $data_funcao[2]

			*/

			//retorna a data no formato brasileiro
			return $data_final  = $data_funcao[2] .'/'. $data_funcao[1] .'/'. $data_funcao[0];
		} 
	}

	function formatoMoeda($valor=NULL)
	{

		if($valor)
		{
			return 'R$ '.number_format($valor, 2, ',', '.');
		}

	}


