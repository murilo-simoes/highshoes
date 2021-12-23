<?php
// session_start inicia a sessão
session_start();
include_once("conexao.php");
// as variáveis email e password recebem os dados digitados na página anterior
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conn, $_POST['sobrenome']);
$data = mysqli_real_escape_string($conn, $_POST['data']);
$numero = mysqli_real_escape_string($conn, $_POST['numero']);


// A variavel $result pega as varias $email e $senha, faz uma
//pesquisa na tabela de cadastro
$result="SELECT id FROM cadastro WHERE email ='$email' AND senha = '$password'";

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */
$resultado = mysqli_query($conn, $result);
$row = mysqli_num_rows($resultado);
if($row == 1){
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['id'] = $id;
$_SESSION['nome'] = $nome;
$_SESSION['sobrenome'] = $sobrenome;
$_SESSION['data'] = $data;
$_SESSION['numero'] = $numero;
  $_SESSION['mensagem'] = "Login realizado com sucesso!";
  $_SESSION['msg_type'] = "success";
header('location: welcome.php'); 
exit();
}else{
  $_SESSION['mensagem'] = "Credenciais incorretas, não foi possivel realizar o login!";
    $_SESSION['msg_type'] = "danger";
  header('location: ../login/login.php'); 
  exit();
}


?>