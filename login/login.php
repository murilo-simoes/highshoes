<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
    <?php include("../crud/conexao.php");
    session_start();
    if(isset($_SESSION['email']) and ($_SESSION['email'])== 'admin@demo.com.br'){
        header("location: ../crud/admin.php");
    }elseif(isset($_SESSION['email'])){
        header("location: ../crud/welcome.php");
    }
    ?>
    

    

        <meta charset="UTF-8">
      <link rel="shortcut icon" href="../img/logo1.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/styleLG.css">
        <script type="text/javascript" src="js/myscript.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="../js/jquery.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script>
            $().ready(function(){
                //comentários do formulário quando enviado;
                $("#commentForm").validate();
    
                // valida o formulário no momento do envio
                $("#signinForm").validate({
                  rules: {
                    password: {
                            required: true,
                            minlength: 5
                        },
                        email: {
                            required: true,
                            email: true
                        },
                  },
                  messages: {
                    password:{
                            required: "Por favor, escolha uma senha",
                            minlength: "A senha necessita ter pelo menos 5 caracteres"
                        },    
                        email: "Por favor, entre com um email válido",
                        required: "Por favor, insira um email"
                  }
                });
              });
                </script>
    

        <title>Login</title>
    </head>

    <body>
      <?php
    
    if(isset($_SESSION['mensagem'])):?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        ?>
        </div>
        <?php endif?>
        <form class="form" method="POST" action="../crud/loginUsuario.php" id="signinForm" name="signin">
            <div class="card">
                <div class="card-top">
                    <img src="../img/loginim.png" width="300px" height="100px">
                    <h2>Login</h2>
                    <p>Ja é cliente aqui? ta esperando o que pra se conectar conosco?</p>
                </div>
                <div class="card-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
                </div>
                <button id="signin "name="signin">Entrar</button>
            
            </div>
            Ou<a href="cadastro.php">Cadastre-se</a>
        </form>
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
    </body>
</html>