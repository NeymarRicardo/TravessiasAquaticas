<?php
	session_start();
?>

<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$distancia = $_POST['distancia'];
$modalidade = $_POST['modalidade'];

	if(empty($nome))
	{
		$_SESSION['erro']="campo nome está vazio";
		header("location: index.php");
		return;
	}
	else if(is_numeric($nome))
	{
		$_SESSION['erro']="Campo nome foi preenchido com números";
		header("location: index.php");
		return;
	}
	else echo "Nome da/o Atetla: ". $nome . "</br>";

	if (empty($idade)) 
	{
		$_SESSION['erro']="O campo idade está vazio";
		header("location: index.php");
		return;
	}
	else if(!is_numeric($idade)) 
	{
		$_SESSION['erro']="O campo idade foi preenchido com outros caracteres não numéricos";
		header("location: index.php");
		return;
	}
	else
	echo "Idade da/o atetla: ". $idade . "</br>"; 
	if($sexo === 'feminino')
	{
		echo "Sexo da atetla é feminino <br/>";
	}
	else
	 {
		echo "Sexo do atetla é masculino <br/>";
	}
	if($distancia === "1")
	{
		echo "A distância selecionada é de 1 KM <br/>";
	}
	else 
	{
		echo ="A distância escolhida é de 3 KM <br/>";
	}
	if($modalidade === 'convencional')
	{
		echo "A modalidade escolhida é: Convencional <br/>";
	}
	elseif ($modalidade === 'on')
	{
		echo "A modalidade escolhida é: Óculos e Nadadeira (ON) <br/>";
	}
	else
	{
		echo "A modalidade escolhida é: Máscara, Respirador e Nadadeira (MRN) <br/>";
	}
?>
