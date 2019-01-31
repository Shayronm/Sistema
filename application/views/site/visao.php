<!DOCTYPE html>
<html>
	<head>

		<title>Cadastro de Cliente</title>
			<style type="text/css">
			.fundo
			{
				background: #f5f5f5;
			}
			.grupo_form
			{
				margin-left: 500px;
				margin-top: 50px;
				font-weight: bolder;
				color: gray;
			}
			.campo_atributo
			{
				border-style: groove;
				border-radius: 4px;
				border: 1px solid #bbb;
				width: 300px;
				height: 30px;
				background: #fff;
				text-shadow: 0px 1px 0px #fff;
				box-shadow: 0px 1px 5px #d1cfd1;
				-moz-box-shadow: 0px 1px 5px d1cfd1;
				-webkit-box-shadow: 0px 1px 5px d1cfd1;
				border-radius: 10px 10px 10px 10px;
				-moz-border-radius: 10px 10px 10px 10px;
				-webkit-border-radius: 10px 10px 10px 10px;
			}
			.grupo_titulo
			{
				margin-top: 200px;
				margin-left: 520px;	
			}
			.titulo
			{
				margin-left: 55px;
				color: gray;
			}
			.titulo2
			{
				color: gray;
			}
			hr
			{
				border: 1px solid #c5c5c5;
				margin-top: 50px;
			}
			</style>
	</head>
	<body class="fundo">
			<div class="grupo_titulo">
				<h1 class="titulo"> Cadastro </h1><br>
				<h4 class="titulo2"> Por favor, preencha os campos abaixo </h4>
			</div>
			<hr>
			<form>
				<div class="grupo_form">	
					<label>Nome</label><br><br><input class="campo_atributo" type="text" name="nome" placeholder="Digite seu nome"><br><br>
					<label>Email</label><br><br><input class="campo_atributo" type="text" name="email" placeholder="Digite seu email">
				<div>
			</form>
	</body>
</html>