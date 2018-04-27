<?php
require_once "CategoriaCrud.php";


    function editar($id, $nome, $desc){
        $c = new CategoriaCrud();
        $c->updateCategoria($id, $nome, $desc);
        header('location:view.php');
    }

    function deletar($id){
        $c = new CategoriaCrud();
        $c->deleteCategoria($id);
        header('location:view.php');
    }

    function cadastrar($nome, $desc){
        $ca = new Categoria(null,$nome, $desc);
        $c = new CategoriaCrud();
        $c->insertCategoria($ca);
        header('location:view.php');
    }




    if ($_GET['rota'] == "editar"){
        header('location: viewEditar.php?id='.$_GET['id']);
    }

    if ($_GET['rota'] == "cadastrar"){
        header('location: viewCadastrar.php');
    }

    if ($_GET['rota'] == "insert"){
        cadastrar($_POST['nome'] , $_POST['desc']);
    }

    if ($_GET['rota'] == "excluir"){
        deletar($_GET['id']);
    }

    if ($_GET['rota'] == "update"){
        editar($_GET['id'], $_POST['nome'], $_POST['desc']);
    }

    if ($_GET['rota'] == "exibir"){
        header('location: view.php');
    }