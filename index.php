<!DOCTYPE html>
<html>
<head>
	<title>Sua Placa Mauricio Cirio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="http://www.jqueryrain.com/wp-content/plugins/wp-bar/wpbar.css" rel="stylesheet" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.quilljs.com/1.3.1/quill.js"></script>
</head>
<body>
	<div class="container">
		<h1>Sua Placa Mauricio Cirio</h1>
		<p>Faça sua placa</p>
	</div>

	<!-- Create the editor container -->
	<div id="editor" class="md-6">
		<p>Olá amiguinho, deixe sua mensagem para esse rico rapaz. E, aproveite para curtir seu canal.</p>
		<p><a href="https://www.youtube.com/user/ciriotv" target="_blank">CirioTV</p>
		<p><a href="https://www.youtube.com/playlist?list=PLxp7pD6wbCLFo7fQD4n_tdYeNZ7r79BQN" target="_blank">Cantadas Crônicas</p>
		<p><br></p>
	</div>

	<script>
		var quill = new Quill('#editor', {
			theme: 'snow'
		});
	</script>
</body>
</html>