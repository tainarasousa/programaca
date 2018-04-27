<?php
require_once "ProdutoCrud.php";
require_once "Produto.php";
$crud = new ProdutoCrud();
$listaProd = $crud->getProdutos();


/*
if ($_GET['linha'] == "link") {

        $nome = $_GET['nome'];

        echo "$nome \n";
    }

    elseif ($_GET['linha'] == "post") {

        $busca = $_POST['BUSCA'];

        echo "A Busca pelo termo $busca não encontrou produtos \n";
    }

*/
?>

<html>

    <body>
            <?php foreach($listaProd as $produto){ ?>
            <div class = "produto">

                <div class = "nomeProduto">      <?= $produto->getNome() ?> </div>
                <div class = "descProduto">      <?= $produto->getDesc() ?> </div>
                <div class = "categoriaProduto"> <?= $produto->getFoto() ?> </div>
                <div class = "precoProduto">     <?= $produto->getPreco() ?> </div>
                
            <?php } ?>
            </div>
    </body>

</html>
