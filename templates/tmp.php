<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title>Task 3 _ File read_write</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 3</a>
        </div>
    </div>
</nav>
<div class="container center-block ">
    <div class="starter-template text-center">
        <?php if (isset($objFile)){ ?>
        <h1>Preview file</h1>
        <p><?=$objFile->getFileByRow();?></p>

        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info" style="width: 200px">Action</th>
                <th class="text-center alert-info">Result</th>
            </tr>
            <tr>
                <td>Method of line access (reading) #3
                </td>
                <td><?=$objFile->readFileStr(3); ?></td>
            </tr>
            <tr>
                <td>Method print by line</td>
                <td><?php foreach ($objFile->printStr() as $v) {echo $v;}?></td>
                <!--ELSE print$count = count(file($objFile->getFilePath()));
                for($i=0; $i<$count; $i++){echo nl2br($objFile->readFileStr($i));} -->
            </tr>
            <tr>
                <td>Method by symbol access (read): line#3, Symbol#3</td>
                <td><?=$objFile->readFileSymbol(3,3);?></td>

            </tr>
            <tr>
                <td>Method print by Symbol</td>
                <td><?php foreach ($objFile->printStrSymbol() as $v){echo $v;} ?></td>
                <!--ELSE print for($i=0; $i<$count; $i++)
                    {
                        $count2 = strlen($objFile->readFileStr($i));
                        for($n=0; $n<$count2; $n++)
                        {
                            echo nl2br($objFile->readFileSymbol($i, $n));
                        }
                    }-->
            </tr>
            <tr>
                <td>Method to replace line#1 the enter:
                    "An interesting task!!!"</td>
                <td><?=$objFile->strReplace(1, "An interesting task!!!");?></td>
            </tr>
            <tr>
                <td>Method print by line</td>
                <td><?php foreach ($objFile->printStr() as $v) {echo $v;}?></td>
            </tr>
            <tr>
                <td>A method that replaces character in a string:
                Line#3, symbol#0 replace at "О"</td>
                <td><?=$objFile->symbolReplace(3, 0, 'O');?></td>
            </tr>
            <tr>
                <td>Method print by Symbol</td>
                <td><?php foreach ($objFile->printStrSymbol() as $v){echo $v;} ?></td>
            </tr>
            <tr>
                <td>Save file vethod</td>
                <td>$objFile->saveFile($file)</td>
            </tr>
        </table>
        <?php } ?>
    </div>

<div>

</div>







<!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>