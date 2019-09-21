<html>
	<head>
		<title>cadastro Aluno</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<?php include("../layout/cabecalho.html"); ?>
			<div class="row">
				<?php include("../layout/menu.html") ?>
				<div class="col-md-9">
					<form action="../repositorio/SalvarAluno.php"method="POST">

						<label>RA: </label><input class="form-control" type="text" onblur="saidaCPF();" name="RA" id="RAID"/><br>	

						<label>Nome: </label><input class="form-control" type="text" onblur="saidaNome();" name="nome" id="nomeID"/>

						<label>Idade: </label><input class="form-control" type="text" name="idade" id="idadeID" onblur="verificaIdade();"/>
						<p id="msgIdade"></p>

						<label>CPF: </label><input class="form-control" type="text" onblur="saidaCPF();" name="CPF" id="CPFID"/><br>
							<p>Sexo:</p>
							<div class="form-check"> 
							     <label Sexo: class="form-check-label">
								     <input type="radio" class="form-check-input" name="optradio">Feminino
							    </label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="optradio">Masculino
								</label>
							</div>
					
					<input class="btn btn-primary" type="submit" value="Salvar" />
					<input class="btn btn-primary" type="submit" name="Exibir" value="exibir" />
					<input class="btn btn-primary" type="submit" value="Editar">
					<input class="btn btn-primary" type="submit" value="Remover">  
					</form>

				</div>
			</div>
			<?php include("../layout/rodape.html"); ?>
		</div>	
	</body>
</html>