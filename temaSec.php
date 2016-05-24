<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mehmet TÜRKER - Tema Seçme Uygulaması</title>
</head>
<body>
	<form>
		<select name="tema" id="">
					<option value="default">Default</option>
					<option value="modern">Modern</option>
					<option value="classic">Classic</option>
		</select>
		<input type="submit" value="Seç">	
	</form>
<?php
	if($_GET){
	$tema = $_GET['tema'];

	switch ($tema) {
		case 'modern':
			$tema = "modern";
			break;

		case 'classic':
			$tema = "classic";
			break;
		
		default:
			$tema = "default";
			break;
	}
	setcookie("tema", $tema, time() + (60*60*24*60));
	}
?>
</body>
</html>