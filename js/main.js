function enviar(){
	// captura o texto digitado na textarea
	var textoDigitado = $('#caixa-texto').val();

	// troca o texto a ser exibido
	$('.texto').html(textoDigitado);	

	//seta a visibilidade do texto
	$('.texto').show();
}

function contador(val) {
	var tam = val.value.lenght;
	if (tam >= 100) {
		val.value = val.value.substring(0,100);
	}else{
		$('#qtd').text(100 - tam)
	}
}