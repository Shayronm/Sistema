
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
           <h1 class="h2"><?php echo $titulo ?></h1>
           <hr class="linha">
           
    <section class="conteudo">
           	
        <table class="table table-bordered table-striped">
		<thead>
    			<tr>
    			  <th scope="col">Data de Cadastro</th>
			      <th scope="col">ID</th>
			      <th scope="col">Nome do Livro</th>
			      <th scope="col">Autor</th>
			      <th scope="col">Preço</th>
			      
    			</tr>
  		</thead>  

  			<tbody>

    			<tr>

    				<td><?php echo formatoDataBr($info->data_cadastro) ?></td>
  					<td><?php echo $info->id ?></td>
  					<td><?php echo $info->nome_livro ?></td>
  					<td><?php echo $info->autor_livro ?></td>
  					<td><?php echo formatoMoeda($info->preco) ?></td>
  					
  				</tr>

			</tbody>
		</table>
    </section>
</main>

