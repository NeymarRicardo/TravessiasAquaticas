<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">	
	<title>Circuito Travessias Aquáticas</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, inicial-scale=1">
</head>

<body>
	<p>ATETLA FAÇA SUA INSCRIÇÃO</p>
	<form action="script.php" method="post">
		<p>Nome da/o Atetla: <input type="text" name="nome"/></p>
		<p>Idade da/o Atetla: <input type="text" name="idade"/></p>
		<p>Sexo: <select name="sexo">
			            <option name="masculino">masculino</option>
		                <option name="feminino">feminino</option>
		         </select></p>
		<p>Distância: <select name= "distancia">
							 <option name="1">1 km</option> 
							 <option name="3">3 km</option></select></p>
		<p>Modalidade: <select name="modalidade">
							<option name="convencional">Convencional</option>
					    	<option name="on">ON (óculos e Nadadeiras)</option>
					    	<option name="mrn">MRN (Máscara, Respirador e Nadadeiras)</option>
					  </select>
		</p>
		<p><input type="submit" name="cadastrar"></p>
		

	</form>

</body>

</html>