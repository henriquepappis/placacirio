<!DOCTYPE html>
<html>
<head>
	<title>Sua Placa Mauricio Cirio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://cdn.quilljs.com/1.3.1/quill.snow.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.quilljs.com/1.3.1/quill.js"></script>
</head>
<body>
	<div class="container">
		<h1>Sua Placa Mauricio Cirio</h1>
		<p>Faça sua placa</p>
	</div>

	<!-- Create the editor container -->
	<div id="editor">
		<p>Hello World!</p>
		<p>Some initial <strong>bold</strong> text</p>
		<p><br></p>
	</div>

	<script>
		var quill = new Quill('#editor', {
			theme: 'snow'
		});
	</script>
</body>
</html>