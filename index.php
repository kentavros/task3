<?php
include ('libs/config.php');
include ('libs/function.php');
include('templates/tmp.php');


$objFile = new FileModifier('libs/fileText');
echo $objFile->getFilePath();

?>