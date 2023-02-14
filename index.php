<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Formulário</title>
	
</head>
<body>
	<div class="alert alert-primary" role="alert">Gerrenciar Funcionários</div>
    <div class="container"> 
		<form action="crud.php" method="post">
			<img src="pocoyo.jpg" class="img-thumbnail rounded float-end img-fluid" alt="Pocoyo com a bandeira do Japão" width="200px" height="200px" style="float: right;margin-right: 40%;">
			Nome : <input type="text" name="nome"> <br><br>
			E-mail : <input type="email" name="email"> <br><br>
			CPF : <input type="text" name="CPF"> <br><br>
			Telefone : <input type="tel" name="telefone"> <br><br>
			
			<button class="btn btn-outline-primary">Cadastrar</button>
			<button class="btn btn-outline-danger">Alterar</button>
			<button class="btn btn-outline-warning">Excluir</button>
			<button class="btn btn-outline-info" >Pesquisar</button>

		</form>
		
	</div>

</body>
</html>