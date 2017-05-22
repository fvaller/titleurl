<?php
require 'vendor/autoload.php';

if(isset($_POST) && $_POST){

	$slug = new \Slug\Slugifier();

	$slug->setTransliterate(true); //para usar acentos

	$title = $_POST['title'];

	$url = $slug->slugify($title);	
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TitleforURL</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<div class="container">
				<h1 class="text-center">Title for URL</h1>
				<p>Conversor de Titulos para URL</p>
				<ul>
				    <li>Usando composer</li>
				    <li>Usando <a href="https://packagist.org/packages/kevinlebrun/slug.php" target="_blank" title="">kevinlebrun/slug.php</a></li>				    
				</ul>

				<form action="" method="POST" class="form-inline" role="form">

					<div class="form-group">
						<label class="sr-only" for="">Title</label>
						<input type="text" name="title" class="form-control" size="100" value="" placeholder="Title" autofocus="true">
					</div>

					
					<button type="submit" class="btn btn-primary">Convert</button>
				</form>

				<hr>
				<h5>Resultado:</h5>
				<div class="alert alert-info">
					<?php if(isset($url))echo $url; ?>
				</div>				
				

			</div>

			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="Hello World"></script>
		</body>
		</html>