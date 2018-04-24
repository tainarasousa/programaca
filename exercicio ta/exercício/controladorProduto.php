<?php

require_once 'Produto.php';
require_once 'ProdutoCrud.php';

if ($_GET['rota'] == 'update'){
    $p = new ProdutoCrud();
    $p->updateProduto($_GET['id'], $_POST['nome'], $_POST['']);
}

if ($_GET['rota'] == 'editar' AND isset($_GET['id'])){
    header('Location: formProd.php?id='.$_GET['id']);
}

if ($_GET['rota'] == 'excluir' AND isset($_GET['id'])){

}

if ($_GET['rota'] == 'cadastrar'){

}

if($_GET['rota'] == 'exibir'){
    header ('location: viewProduto.php');
}

if($_GET['rota'] == 'unicornio' AND isset($_GET['id'])){
    header ('location: show.php?id='.$_GET['id']);
}