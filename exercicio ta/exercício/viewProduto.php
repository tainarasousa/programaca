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

<?php require_once 'nav.php'?>

<table border ="1">
    <tr>
        <th>Nome Produto</th>
        <th>Descricao Produto</th>
        <th>Preco Produto</th>
        <th></th>
        <th></th>
    </tr>

    <?php $ress= $prodCrud->getProdutos();
    foreach ($ress as $r):{?>
        <tr>
            <td><a href="controladorProduto.php?rota=unicornio&id=<?php echo $r->getId(); ?>" ><?php echo $r->getNome();?></a></td>
            <td><?php echo $r->getDesc();?></td>
            <td><?php echo $r->getPreco();?></td>
            <td><a href="controladorProduto.php?rota=editar&id=<?php echo $r->getId();?>"><button>Editar</button></a></td>
            <td><a href="controladorProduto.php?rota=excluir&id="><?php echo $r->getId(); ?><button>Excluir</button></a></td>

        </tr>
    <?php } endforeach; ?>

    <tr><td><a href="controladorProduto.php?rota=cadastrar"><button>Cadastrar Produto</button></a> </td></tr>


</table>

<a href="index.php"><button>Voltar</button></a>


<?php require_once 'footer.php'?>

</body>
</html>
