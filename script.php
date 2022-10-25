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
		echo "A distância escolhida é de 3 KM <br/>";
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
		echo "A modalidade escolhida é: Máscara, Respirador e Nadadeira (MRN) <br/>"
	}
?>