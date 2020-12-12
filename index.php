<?php
	include("conexao.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Projeto Ajax</title>
		<script src= "jquery-3.5.1.js"></script>
		<script src= "arquivo_externo.js"></script>
	</head>
	
	<body>
		<form action="" method="POST">
		
			<label>Nome:</label>
			<input type="text" name="nome"/><br>
			
			<label>Estado:</label>
			<select name="estados">
			
			<?php
				$SQL = "SELECT * FROM estados";
				$resultado = mysqli_query($conexao, $SQL);
				
				while( ($tupla = mysqli_fetch_array($resultado)) != null){
						echo "<option value='".$tupla[0]."'>".utf8_encode($tupla[1])."</option>";
				}
				mysqli_close($conexao);
			?>
			
			</select><br>
			
			<label>Cidades:</label>
			<div id="cidades">
			<select name="cidades"></select>
			</div><br>
			
			<input type="submit" value="Salvar">
		</form>
	</body>

</html>