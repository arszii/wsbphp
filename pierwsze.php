<!DOCTYPE html>
	<html lang="pl-PL">
	<head>
		<meta charset="utf-8">
		<title>ćwiki namber łan</title>
	</head>
	<body>
		Pierwszy plik<hr>
		<?php
		$name = 'anna';
		echo 'Imię: $name<br>';
		echo "Imię$name<br>";
		// konkatenacja
		echo 'WSB'.'<hr>';

		// składnia heredoc
		$text = <<<LABEL
		Heredoc<br>
		Imię: $name<hr>
		LABEL;

		echo $text;

		echo <<<L
		Heredoc 2
		Imię: $name
		<hr>
		L;

		// składnia nowdoc
		echo <<<'L'
		Nowdoc 2
		Imię: $name
		<hr>
		L;

		// integer
		$bin = 0b1010; //10
		$oct = 011; //9
		$hex = 0x11; //17
		echo $hex,'<hr>';

		$city = 'Poznań';
		echo "Nazwa zmiennej: \$city, wartość: $city<br>";
		
		$x = true;
		$x = false;
		echo $x;

	?>
	</body>
<html>