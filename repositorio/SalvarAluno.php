<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "root", "root123");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Aluno.php';
	$aluno = new Aluno();
	$aluno->setNome($_POST['nome']);
	$aluno->setIdade($_POST['idade']);
	try {
		$sql = "INSERT INTO aluno (nome, idade) VALUES 
			('" . $aluno->getNome() . "$nome', '" . $aluno->getIdade() . "$idade')";

		$pdo->exec($sql);
		echo "<p>Inserido com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($aluno);

	//header('Location: /paginadestino.php');
