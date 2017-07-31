<?php
include ('libs/config.php');
include ('libs/function.php');
$objFile = new FileModifier('libs/fileText');
$strRepLine = $objFile->strReplace(1, "An interesting task!!!");
$symRepInLine = $objFile->symbolReplace(4, 5, 'O');
include('templates/tmp.php');

?>

