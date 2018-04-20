<?php

$usuario = $_POST['login'];
$senha = $_POST['senha'];

if ($usuario == "asd" AND $senha == "wasd"){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('Location:index.php');
}

else {header('Location: index.php');}