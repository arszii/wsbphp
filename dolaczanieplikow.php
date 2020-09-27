<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>File</title>
</head>
<body>
Początek pliku
<?php
$name = 'Arkadiusz';
include '.\files\file.php'; //podajemy ścieżkę do pliku
include_once '.\files\file.php';

echo 'Require:<br>';
require '.\files\file.php';
require_once '.\files\file.php';
?>
Koniec pliku
</body>
</html>