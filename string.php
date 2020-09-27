<?php
$text = <<<TEXT
wsb - Wyższa
szkoła
bankowa 
TEXT;

echo $text,'<hr>';
echo nl2br($text);

echo strtolower($text),'<br>';
echo strtoupper($text),'<br>';

$text1 = 'anna Tomasz krystian';
echo ucfirst($text1),'<br>';
echo ucwords($text1),'<br>';

$name = 'jAnUsz';
$name = ucwords(strtolower($name));
echo $name,'<hr>';

$lorem = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.;
LOREM;

echo $lorem,'<hr>';
$col = wordwrap($lorem, 40, '<br>'); // podział  tekstu, <hr> rozdziela liniami
echo $col,'<hr>';

// usuwanie białych znaków
$name = 'Kasia';
$name1 = '  Kasia ';

//echo $name, $name1;
echo strlen($name),'<br>'; //5 znaków
echo strlen($name1),'<br>'; //8 znaków

echo strlen(ltrim($name1)),'<br>'; //usuwanie białych znaków po lewej - 6 znaków
echo strlen(rtrim($name1)),'<br>'; //usuwanie białych znaków po prawej - 7 znaków
echo strlen(trim($name1)),'<br>'; //usuwanie białych znaków po obu stronach - 5 znaków

$name1 = trim($name1);
echo strlen($name1);



?>