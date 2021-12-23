<?php
session_start();
include_once("conexao.php");
$pesquisar = mysqli_real_escape_string($conn, $_POST['pesquisar']);
$resultado_pesquisa="SELECT name FROM produtos WHERE name like '%$pesquisar%'";
$resultado = mysqli_query($conn, $resultado_pesquisa);
$row = mysqli_num_rows($resultado);
if($row != 0){
    $_SESSION['name'] = $pesquisar;
    header('location: index.php?page=produtos2'); 
    exit();
    }




?>
