<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$distancia = $_POST['distancia'];
$modalidade = $_POST['modalidade'];

	if(empty($nome))
	{
		echo "Campo nome está vazio";
		return 0;
	}
	else if(is_numeric($nome))
	{
		echo "Campo nome foi preenchido com números";
		return 0;
	}
	else echo "Nome da/o Atetla: ". $nome . "</br>";

	if (empty($idade)) 
	{
		echo "O campo idade está vazio";
		return 0;
	}
	else if(!is_numeric($idade)) 
	{
		echo "O campo idade foi preenchido com outros caracteres não numéricos";
		return 0;
	}
	else
		echo "Idade da/o atetla: ". $idade . "</br>"; 
?>