<?php
// operatory bitowe xD
// and &, or |, not ~, xor ^, <<, >>

$x = 0b1010;
$x = $x << 2; // 101000(2) => 40(10)
$x = $x >> 1; // 10100(2) => 20(10)
echo "$x<br>";

// porównanie === <=>

$x = 1;
$y = 1.0;

if ($x == $y) {
	echo '$x jest równa $y<br>';
}else {
	echo '$x nie jest równa $y<br>';
}

if ($x === $y) {
	echo '$x jest identyczna $y<br>';
}else {
	echo '$x nie jest identyczna $y<br>';
}

echo gettype($x),'<br>'; //integer
echo gettype($y),'<hr>'; //double

$x = 1; 
$y = 2;

echo $x<=>$y; //porównanie zmiennych
echo '<hr>';

$x = 2;
$x = $x++; //2 
echo $x;
$y = $x++;
echo $y; //2 
echo $x; //3
echo "<hr>";

// operatory rzutowania
// bool, int, float, string, array, object, unset

$x = '123abc45';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (int)$x;
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<hr>';

$x = '0';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (bool)$x; 
echo "$x<br>"; //false dla 0, true dla reszty
echo 'Typ danych $x: ',gettype($x),'<hr>';

$x = '10';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (float)$x; 
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<hr>';

$x = '0';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (unset)$x; 
echo "$x<br>"; 
echo 'Typ danych $x: ',gettype($x),'<hr>';

// rozmiar typu integer
echo PHP_INT_SIZE,'<hr>';

// kontrola typu zmiennych 
// is_int(), is_float(), is_numeric(), is_bool(), is_null()
$x = 1;
echo is_int($x);
echo '<hr>';

// operator ignorowania błędów @
$w;
echo @gettype($w);
echo '<hr>';

// stała predefiniowana
echo PHP_VERSION,'<br>';
$ver = PHP_VERSION;
if ($ver >= 7.4) {
	echo 'Nowa wersja php<hr>';
}else {
	echo 'Stara wersja php<hr>';
}

// stałe - nazwy z dużych liter
define('NAME', 'Janusz', true); // jak tu jest true, to potem można z małej litery wywoływać
echo name;















?>
