$(document).ready(function() {
	
	$('#estados').change(function () {
		var id_estado = $('#estados').val();
		
		$.post("auxiliar.php", 
			{"id_estado": id_estado},
			
			function(dados, situacao) {
				if(situacao == "success"){
					$('#cidades').html(dados);
				}
			}
		);
	});
});