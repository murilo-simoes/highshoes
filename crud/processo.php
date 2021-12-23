<?php

session_start();

$mysqli = new mysqli('localhost', 'topzjuxz_highshoes', 'highshoes@2021', 'topzjuxz_highshoes') or die(mysqli_error($mysqli));
$update = false;
$email = '';
$senha = '';
$username = '';
$nome = '';
$sobrenome='';
$data='';
$numero='';
$id = 0;

if (isset($_POST['save'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data = $_POST['data_nascimento'];
    $numero = $_POST['numero_telefone'];

    $mysqli->query("INSERT INTO cadastro (username, nome, sobrenome, data_nascimento, numero_telefone, email, senha) VALUES('$username','$nome', '$sobrenome','$data', '$numero', '$email', '')") or
    die($mysqli->error);
    
    $_SESSION['mensagem'] = "O registro foi salvo!";
    $_SESSION['msg_type'] = "success";

    header("location: admin.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cadastro WHERE id=$id") or die($mysqli->error());

    $_SESSION['mensagem'] = "O registro foi deletado!";
    $_SESSION['msg_type'] = "danger";
    header("location: admin.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $resultado = $mysqli->query("SELECT * FROM cadastro WHERE id=$id") or die($mysqli->error());
    if (count(array($resultado)) ==1){
        $row = $resultado->fetch_array();
        $email = $row['email'];
        $username = $row['username'];
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $data = $row['data_nascimento'];
        $numero = $row['numero_telefone'];
    }
    
}

if(isset($_POST['update'])){
    $id = $_POST ['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data = $_POST['data_nascimento'];
    $numero = $_POST['numero_telefone'];

    $mysqli->query("UPDATE cadastro SET email ='$email', username='$username', nome='$nome', sobrenome='$sobrenome', data_nascimento='$data', numero_telefone='$numero'  WHERE id=$id") or die($mysqli->error());
    $_SESSION['mensagem'] = "O registro foi alterado!";
    $_SESSION['msg_type'] = "warning";
    
    header('location: admin.php');
}