<h1> Novo Veículo<h1>
	<form action="?page=salvar" method="POST">
		<input type= "hidden" name="acao" value= "cadastrar">
        <div class="mb-3">
           <label>Nome</label>
           <input type="text" name="nome" class="form-control">
         </div>	
          <div class="mb-3">
           <label>Marca</label>
           <input type="text" name="marca" class="form-control">
         </div>	
          <div class="mb-3">
           <label>Ano</label>
           <input type="text" name="ano" class="form-control">
         </div>	
          <div class="mb-3">
           <label>Valor de Venda</label>
           <input type="text" name="valor de venda" class="form-control">
         </div>
         <div class="mb-3">
         	<button type="submit" class="btn btn-primary">Salvar</button>

         </div>	
 
	</form>