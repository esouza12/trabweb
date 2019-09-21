<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=AlunoProfessor", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}
	require_once '../modelo/Professor.php';
	$professor = new Professor();
	$professor->setNome($_POST['nome']);
	$professor->setIdade($_POST['idade']);
	$professor->setCpf($_POST['cpf']);
	$professor->setSiape($_POST['siape']);
	
	try {
		$sql = "INSERT INTO  (nome, idade,cpf,ra,siape) VALUES 
			('" . $professor->getNome() . "', '" . $professor->getIdade() . "','" . $professor->getCpf() . "','" . $professor->getRa() . "','" . $professor->getSiape() . "' )";
		$pdo->exec($sql);
		echo "<p>Inserido com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}
	
?>