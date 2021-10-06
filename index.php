<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="servidor-cadastro.php?pagina=1">
        <div>Numero de linhas</div>
        <input type="number" name="linhas" value="linhas" >
        <br>

        <div>Numero de colunas</div>
        <input type="number" name="colunas" value="colunas">
        <br>

        <div>Numero de linhas por pagina</div>
        <input type="number" name="numero" value="numero">
        <br>

        <input type="submit" name="salvar" value="Salvar">
    </form>
</body>
</html>