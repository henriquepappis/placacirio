function enviar(){
	// captura o texto digitado na textarea
	var textoDigitado = $('#caixa-texto').val();

	// troca o texto a ser exibido
	$('.texto').html(textoDigitado);

	//seta a visibilidade do texto
	$('.texto').show();
}

function contador() {
	var limit = 5;
	var linhas = $("textarea#caixa-texto").val().split("\n");
	var count = linhas.length;

	if (count >= limit) {
		if (event.keyCode === 10 || event.keyCode === 13)
        	event.preventDefault();
		$("textarea#caixa-texto").val(
			$("textarea#caixa-texto").val().replace(/^\s*(\n)\s*$/, '')
		);
	}
}

function salvar(){
	html2canvas($('#saveImage'), {
		onrendered: function (canvas) {
			var imagedata = canvas.toDataURL('image/png');
			var imgdata = imagedata.replace(/^data:image\/(png|jpg);base64,/, "");
			//ajax call to save image inside folder
			$.ajax({
				url: 'save_jpg.php',
				data: {
					imgdata:imgdata
				},
				type: 'post',
				success: function (response) {
					location.href = document.url+'saves/'+response;
					// $('#result').html(response);
				}
			});
		}
	})
}