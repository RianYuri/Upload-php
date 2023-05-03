<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000000000000000">
        <input type="file" name="arquivo[]" multiple="multiple">
        <input name="enviar" type="submit" value="enviar">
    </form>
    <hr>
    <?php 
    $path = "arquivos/";
    $diretorio = dir($path);
    ?>

    <table border="1">
        <tr>
            <td>Arquivo</td>
            <td>Ação</td>
        </tr>
        <?php
        while($arquivo = $diretorio -> read()){

        ?>
        <tr>
            <td><a href="<?php echo $path.$arquivo ?>"><?php echo $arquivo ?></a></td>
            <td><a href="deletar.php?deletarArquivo=<?php echo $arquivo ?>">Excluir</a></td>

        </tr>
        <?php }
        $diretorio->close() ?>

</table>


</hr>

    
</body>
</html>