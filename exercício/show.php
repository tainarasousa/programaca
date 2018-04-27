<?php session_start(); require_once "ProdutoCrud.php"; require_once "CategoriaCrud.php"; $prodCrud = new ProdutoCrud(); require_once "Produto.php"?>




<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style type="text/css">
    <!--

    #navbar ul {
        margin: 0;
        padding: 5px;
        list-style-type: none;
        text-align: center;
        background-color: #000;
    }

    #navbar ul li {
        display: inline;
    }

    #navbar ul li a {
        text-decoration: none;
        padding: .2em 1em;
        color: #fff;
        background-color: #000;
    }

    #navbar ul li a:hover {
        color: #000;
        background-color: pink;
    }

    -->
</style>

<?php require_once 'nav.php'?>

<table border ="1">
    <tr>
        <th>Nome Produto</th>
        <th>Descricao Produto</th>
        <th>Preco Produto</th>


    </tr>

    <?php $ress= $prodCrud->getProduto($_GET['id']); ?>

        <tr>
            <td><?php echo $ress->getNome();?><</td>
            <td><?php echo $ress->getDesc();?></td>
            <td><?php echo $ress->getPreco();?></td>

        </tr>



</table>

<a href="index.php"><button>Voltar</button></a>


<?php require_once 'footer.php'?>

</body>
</html>
