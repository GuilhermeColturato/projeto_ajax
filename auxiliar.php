<?php
	$tag_select = "<select name='cidades' id='cidades'><option value='0'></option>";
	
		include("conexao.php");
		
		$id_estado = $_POST["id_estado"];
		
		$SQL = "SELECT * FROM cidades WHERE id_estado = $id_estado";
		
		$resultado = mysqli_query($conexao, $SQL);
		
		while( ($registro = mysqli_fetch_array($resultado)) != null){
			$tag_select .= "<option value='".$registro[0]."'>".utf8_encode($registro[1])."</option>";
		}
	
	$tag_select .= "</select>";
	echo $tag_select;
?>