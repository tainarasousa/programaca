<?php

require_once 'Produto.php';
require_once 'ProdutoCrud.php';

if ($_GET['rota'] == 'update'){
    $p = new ProdutoCrud();
    $p->updateProduto($_GET['id'], $_POST['nome'], $_POST['desc'],$_POST['preco'], $_POST['idCat']);
    header('location: controladorProduto.php?rota=exibir');
}

if ($_GET['rota'] == 'editar' AND isset($_GET['id'])){
    header('Location: formProd.php?id='.$_GET['id']);
}

if ($_GET['rota'] == 'excluir' AND isset($_GET['id'])){
    $p = new ProdutoCrud();
    $p->deleteProduto($_GET['id']);
    header('location: controladorProduto.php?rota=exibir');
}

if ($_GET['rota'] == 'inserir'){
    $p = new Produto(null, $_POST['nome'], $_POST['desc'], $_POST['preco'], $_POST['idCat']);
    $c = new ProdutoCrud();
    $c->insertProduto($p);
    header('location: controladorProduto.php?rota=exibir');
}

if ($_GET['rota'] == 'cadastrar'){
    header('location: cadProd.php');
}

if($_GET['rota'] == 'exibir'){
    header ('location: viewProduto.php');
}

if($_GET['rota'] == 'unicornio' AND isset($_GET['id'])){
    header ('location: show.php?id='.$_GET['id']);
}