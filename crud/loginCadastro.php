<?php 
    session_start();
    include("conexao.php");
    error_reporting(0);
if (isset($_SESSION['id'])) {
  header("Location: ../index.php");
}

if (isset($_POST["signup"])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $numero_telefone = mysqli_real_escape_string($conn, $_POST['numero_telefone']);
  $password = mysqli_real_escape_string($conn, ($_POST['password']));
  $cpassword = mysqli_real_escape_string($conn, ($_POST['cpassword']));
  $token = md5(rand());
  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM cadastro WHERE email='$email'"));
  $check_username = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM cadastro WHERE username='$username'"));
  $check_numero = mysqli_num_rows(mysqli_query($conn, "SELECT numero_telefone FROM cadastro WHERE numero_telefone='$numero_telefone'"));
 if ($check_email > 0) {
    $_SESSION['mensagem'] = "Email já cadastrado!";
    $_SESSION['msg_type'] = "danger";

  } elseif($check_username > 0){
 $_SESSION['mensagem'] = "Username já cadastrado!";
    $_SESSION['msg_type'] = "danger";
 
 }elseif($check_numero > 0){
 $_SESSION['mensagem'] = "Número de telefone já cadastrado!";
    $_SESSION['msg_type'] = "danger";
 }else{
    $sql = "INSERT INTO cadastro (username, numero_telefone ,email, senha) VALUES ('$username', $numero_telefone, '$email', '$password')";
    $result = mysqli_query($conn, $sql); 
    $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
    $_SESSION['msg_type'] = "success";
	header("location:login.php");
  	exit();
}
}


?>