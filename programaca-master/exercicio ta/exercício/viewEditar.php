<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="controladorCategoria.php?rota=update&id=<?php echo $_GET['id']; ?>">
        <input name="nome" placeholder="Nome Categoria" type="text">
        <input name="desc" placeholder="Descriçao Categoria" type="text">
        <input type="submit" value="Enviar">
    </form>




</body>
</html>