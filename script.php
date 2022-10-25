<?php
session_start();
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$distancia = $_POST['distancia'];
$modalidade = $_POST['modalidade'];

	if(empty($nome))
	{
		$_SESSION['erro']="campo nome está vazio";
		header(string:'location: index.php');
		return;
	}
	else if(is_numeric($nome))
	{
		$_SESSION['erro']="Campo nome foi preenchido com números";
		header(string:'location: index.php');
		return;
	}
	else echo "Nome da/o Atetla: ". $nome . "</br>";

	if (empty($idade)) 
	{
		$_SESSION['erro']="O campo idade está vazio";
		header(string:'location: index.php');
		return;
	}
	else if(!is_numeric($idade)) 
	{
		$_SESSION['erro']="O campo idade foi preenchido com outros caracteres não numéricos";
		header(string:'location: index.php');
		return;
	}
	else
	$_SESSION['erro']="Idade da/o atetla: ". $idade . "</br>"; 
	if($sexo === 'feminino')
	{
		$_SESSION['sucesso']="Sexo da atetla é feminino <br/>";
	}
	else
	 {
		$_SESSION['sucesso']="Sexo do atetla é masculino <br/>";
	}
	if($distancia === "1")
	{
		$_SESSION['sucesso']="A distância selecionada é de 1 KM <br/>";
	}
	else 
	{
		$_SESSION['sucesso']="A distância escolhida é de 3 KM <br/>";
	}
	if($modalidade === 'convencional')
	{
		$_SESSION['sucesso']="A modalidade escolhida é: Convencional <br/>";
	}
	elseif ($modalidade === 'on')
	{
		$_SESSION['sucesso']="A modalidade escolhida é: Óculos e Nadadeira (ON) <br/>";
	}
	else
	{
		$_SESSION['sucesso']="A modalidade escolhida é: Máscara, Respirador e Nadadeira (MRN) <br/>"
	}
?>
