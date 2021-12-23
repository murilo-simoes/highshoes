<?php

session_start();

if (!isset($_SESSION["id"])) {
    header("Location: ../index.php");
}

include ('conexao.php');



if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
    $sobrenome = mysqli_real_escape_string($conn, $_POST["sobrenome"]);
    $data = mysqli_real_escape_string($conn, $_POST["data"]);
    $numero = mysqli_real_escape_string($conn, $_POST["numero"]);
    $rua = mysqli_real_escape_string($conn, $_POST["rua"]);
    $numero_casa = mysqli_real_escape_string($conn, $_POST["numero_casa"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    if ($password === $confirm_password) {
        $photo_name = $_FILES["photo"]["name"];
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = $photo_name;

        if ($photo_size > 2242880) {
            $_SESSION['mensagem'] = "Essa imagem é muito grande para aplicar.";
    $_SESSION['msg_type'] = "danger";
        } else {
            $sql = "UPDATE cadastro SET username='$username', nome='$nome', sobrenome='$sobrenome', data_nascimento='$data', numero_telefone='$numero', rua='$rua', numero_casa='$numero_casa', senha='$password', photo='$photo_new_name' WHERE email='{$_SESSION["email"]}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                 $_SESSION['mensagem'] = "Perfil alterado com sucesso!";
    $_SESSION['msg_type'] = "success";
                move_uploaded_file($photo_tmp_name, "../img/" . $photo_new_name);
            } else {
                 $_SESSION['mensagem'] = "O perfil não pode ser alterado!";
    $_SESSION['msg_type'] = "danger";
                echo  $conn->error;
            }
        }
    } else {
        $_SESSION['mensagem'] = "As senhas não coincidem, tente novamente.";
    $_SESSION['msg_type'] = "danger";
    }
}

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/lingua.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
      <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
		  <script type="text/javascript" src="../js/myscript.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Perfil</title>
</head>
<body class="profile-page">

<nav id="Ctz" class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="../index.php"><img id="Home" style="margin-top:1px;" src="../img/logo1.png" alt="icon" width="53" height="53"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul id="menu" class="navbar-nav mr-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.php">Masculino</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="index.php">Feminino</a>
                    </div>
                  </li>
                  </li>
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sobre Nós
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../NossaHistoria/NossaHistoria.html">Nossa História</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ajude nos a ajudar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../Imperdivel/imperdivel.html">Imperdível</a>
                    </div>
                  </li>
              </ul>
  <div id="google_translate_element" class="boxTradutor"></div>
    <!-- Aqui adiciona um idioma --> 
	<div class= "dropdown">
	<button class="dropbtn">
	<a href="javascript:trocarIdioma('pt')"><img alt="portugues" src="../img/br.png"></a>
	</button>
	<div class="dropdown-content">
    <a href="javascript:trocarIdioma('en')"><img alt="ingles" src="../img/en.png"></a> 
	</div>
	</div>
              <form action="pesquisa.php" method="POST" class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-secondary" type="submit"><img id="PQ" src="../img/pesquisa.png" alt="icon" width="24" height="24"></button>
                <div class="alt"><input id="inpu" name="pesquisar" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search"></div>
              </form>
              <a id="Log" href="../login/login.php"><button id="Log" class="btn btn-outline-secondary img-fluid" type="submit"> <img id="Log" src="../img/login.png" alt="icon" width="24" height="24"></button></a>
              <a href="index.php?page=cart"><button id="Logas"  class="btn btn-outline-secondary img-fluid" type="submit"> <img id="Bag" src="../img/bag.png" alt="icon" width="24" height="24"></button></a>
              
             
            </div>
          </nav>
  <?php
    
    if(isset($_SESSION['mensagem'])):?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        ?>
        </div>
        <?php endif?>
    <div style=" display: block;
        width: auto;
        border: 2px solid #00de00;
        margin-top:10px;
        border-radius:10px;" class="wrapper">
        <h2 style="text-align: center; margin-top:15px; margin-bottom:20px;" >Meu perfil</h2>
        <style>
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
}

            </style>
            <div class="container">
                
                <div style=" display: block;" >
                <form  action="" method="POST" enctype="multipart/form-data">
            <?php 
            
            $sql = "SELECT * FROM cadastro WHERE email='{$_SESSION["email"]}'";
            $resultado = mysqli_query($conn, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            
            <div align="center" class="col-lg-12">
            <img src="../img/<?php echo $row["photo"]; ?>"  class="img-fluid" width="200px;" style="margin-bottom:10px;" height="auto" alt="">
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; " for="username">Username</label>
                <input type="text"   id="username" name="username" placeholder="Nome de Usuário" value="<?php echo $row['username']; ?>"required >
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; margin-top:10px;" for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Primeiro nome" value="<?php echo $row['nome']; ?>" >
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold;  margin-top:10px;" for="sobrenome">Sobrenome</label>
                <input type="text"   id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="<?php echo $row['sobrenome']; ?>"  >
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold;  margin-top:10px;" for="data_nascimento">Data de Nascimento</label>
                <input type="date"   id="data" name="data" placeholder="Data de nascimento" value="<?php echo $row['data_nascimento']; ?>" >
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; margin-top:10px; " for="numero_telefone">Número de telefone</label>
                <input type="number"   id="numero" name="numero" placeholder="Número de telefone" value="<?php echo $row['numero_telefone']; ?>" required>
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; " for="rua">Rua</label>
                <input type="text" maxlength="50" style="width:200px;"  id="rua" name="rua" placeholder="Rua" value="<?php echo $row['rua']; ?>" required >
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; " for="numero_casa">Número da Residência </label>
                <input type="number"  maxlength="5" style="width:200px;"  id="numero_casa" name="numero_casa" placeholder="Número da residência" value="<?php echo $row['numero_casa']; ?>" required >
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold;  margin-top:10px;" for="email">Email</label>
                <input type="email"  id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" disabled required>
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; margin-top:10px; " for="senha">Senha</label>
                <input type="text"   id="password" name="password" placeholder="Senha" value="<?php echo $row['senha']; ?>" required>
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
            <label style="font-weight: bold; margin-top:10px; " for="cpassword">Confirmação da senha</label>
                <input type="text"   id="confirm_password" name="confirm_password" placeholder="Confirmação da senha" value="<?php echo $row['senha']; ?>" required>
            </div>
            </div>
            <div align="center" class="col-lg-12">
            <div class="inputBox">
                <label style="font-weight: bold;  margin-top:10px;" for="photo">Foto de Perfil</label>
                <input type="file" accept="image/*" id="files" style="display:none;" name="photo" >
                <label for="files" style="color:#027702;">Clique aqui para colocar uma imagem de perfil.</label>
              
            </div> 
            </div>
  				<?php
                }
            }
  				?>
                  
            <div>
                <button style="background-color:#00de00; margin-top:10px; margin-left:40%;"type="submit" name="submit" class="btn">Alterar Perfil</button>
            </div>
           
        </form>
        <a href="logout.php"><button style="background-color:#00de00; margin-top:5px;  margin-left:40%; margin-bottom:17px;" type="submit" name="submit" class="btn">Deslogar</button></a>
        </div>
        </div>
        
        <div>
        
    </div>
    </div>
        </div>
    <div id="Vli" vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
              <div class="vw-plugin-top-wrapper"></div>
            </div>
          </div>
           <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
          <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
          </script>
           <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          <script type="text/javascript" src="../js/lingua.js"></script>

</body>
</html>
