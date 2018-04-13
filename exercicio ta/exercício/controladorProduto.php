<?php


if($_GET['rota'] == 'exibir'){
    header ('location: viewProduto.php');
}

if($_GET['rota'] == 'unicornio' AND isset($_GET['id'])){
    header ('location: show.php?id='.$_GET['id']);
}