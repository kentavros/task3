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
        <p><?=FileByRow('libs/examplefileText');?></p>

        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info" style="width: 400px">Action</th>
                <th class="text-center alert-info">Result</th>
            </tr>
            <tr>
                <td>Method of line access (reading) #3
                </td>
                <td><?=$objFile->readFileStr(3); ?></td>
            </tr>
            <tr>
                <td>Method by symbol access (read): line#3, Symbol#3</td>
                <td><?=$objFile->readFileSymbol(3,3);?></td>
            </tr>
            <tr>
                <td>Method to replace line#1 the enter:
                    "An interesting task!!!"</td>
                <td><?=$objFile->readFileStr(1)?></td>
            </tr>
            <tr>
                <td>A method that replaces character in a string:
                Line#4, symbol#5 replace at "О"</td>
                <td><?=$objFile->readFileSymbol(4, 5) ?></td>
            </tr>
        </table>
            <h2>Edit file</h2>
            <?=$objFile->getFileByRow();?>
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