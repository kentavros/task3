<?php
include ('libs/config.php');
include ('libs/function.php');


$objFile = new FileModifier('libs/fileText');
echo $objFile->getFilePath();
echo "<br />";

echo $str = $objFile->readFileStr(1);
echo "<br />";

echo $objFile->readFileSymbol(3,4);

include('templates/tmp.php');

?>