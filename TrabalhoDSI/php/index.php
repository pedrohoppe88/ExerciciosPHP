<!DOCTYPE html>
<html>
<head>

	<title>Trabalho DSI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script>
	</script>
	

</head>
<body>

    <div class="container">
	<h1 class="h1teste">Formulário de Ordem de Serviço - Bicho Chique PetShop</h1>
        <form method="post" action="index.php">
        <div class="row">  
            <div class="col-md-4">
            <img src="img/image.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-8">

              	<div class="form-group">
					<label for="nome">Nome do Cliente:</label>
					<input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="Digite o nome do cliente">
			</div>
		   	<div class="form-group">
					<label for="telefone">telefone:</label>
					<input type="number" class="form-control" id="telefone" name="telefone" placeholder="Digite o seu telefone ">
			</div>

                	<div class="form-group">
					<label for="Animal">Animal:</label>
					<input type="text" class="form-control" id="animal" name="Animal" placeholder="Digite o nome do animal ">
			</div>

                	<div class="form-group">
					<label for="Serviços">Serviços:</label>
					<div class="checkbox">
                    		<label><input type="checkbox" name="checkbox[]" value="Banho e Tosa">Banho e Tosa</label>
                  </div>
			<div class="checkbox">
                    <label><input type="checkbox" name="checkbox[]" value="Corte de unhas">Corte de unhas</label>
                    </div>

                    <div class="checkbox">
                    <label><input type="checkbox" name="checkbox[]" value="Corte de unhas">Corte de unhas</label>
                    </div>

                    <div class="checkbox">
                    <label><input type="checkbox" name="checkbox[]" value="Limpeza de ouvidos">Limpeza de ouvidos</label>
                    </div>

                    <div class="checkbox">
                    <label><input type="checkbox" name="checkbox[]" value="Vacinação">Vacinação</label>
                    </div>

			</div>

                <div class="form-group">
			   <label for="Data">Data:</label>
			   <input type="date" class="form-control" id="data" nome="data" placeholder="Digite o nome do animal ">
				</div>
				<div class="form-group">
					<label for="mensagem">Nome do animal:</label>
					<textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder=""></textarea>
				</div>
					<button type="submit" class="btn btn-primary" name="enviar" value="ok" id="bnt">Enviar</button>

			</form>
		</div>
	</div>
        
    </body>
</html>

<?php
	if(@$_POST['enviar'] == 'ok') {

		@$nome = $_POST['nomeCliente'];
		@$telefone = $_POST['telefone'];
		@$NomeAnimal = $_POST['Animal'];
		@$serviçoe = $_POST['checkbox'];
		@$data = $_POST['data'];  
		@$mensagem = $_POST['mensagem'];

		if(empty($nome) && empty($telefone) && empty($NomeAnimal) && empty($serviçoe) && empty($data) && empty($mensagem)) {
			echo "nenhum campo pode estar vazio";
		} else {
			
			//Tive que fazer assim porque o foreach n fucionava
			@$serviçoe = implode(", ", $serviçoe);

			echo '<div style="background-color: gray; padding: 10px; margin-top: 20px;">
				 <fieldset>
				    <legend>Valores do Input</legend>
				    <p>Nome: '.$nome.'</p>
				    <p>telefone: '.$telefone.'</p>
				    <p>NomeAnimal: '.$NomeAnimal.'</p>
				    <p>serviços: '.$serviçoe.'</p>
				    <p>Data: '.$data.'</p>
				    <p>ensagem: '.$mensagem.'</p>
				 </fieldset>
				</div>';

		}
	}

?>

