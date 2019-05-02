<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
<link rel="icon" sizes="192x192" href="img/alerta.png">
<title>Erro ao Acessar o Sistema...</title>
</head>
<body>
<?php
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	
	if($login == 'admin' && $pass == 'admin'){
		header("Location: sgdc.html");
	}else{
		echo"<h1 style='font-family: Aldrich, sans-serif;'>Erro ao Acessar o Sistema...</h1><img src='img/alerta.png'><a href='index.html'><h2><strong style='font-family: Aldrich, sans-serif;'>voltar..<strong><h2></a>";
	}
?>
</body>
</html>