<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <?php include('../crud/conexao.php');?>
        <?php include('../crud/loginCadastro.php');?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <link rel="shortcut icon" href="../img/logo1.ico">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/styleLG.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <title>Cadastro</title>
        <script src="../js/jquery.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script>
            $().ready(function(){
                //comentários do formulário quando enviado;
                $("#commentForm").validate();
    
                // valida o formulário no momento do envio
                $("#signupForm").validate({
                    rules: {
                        username: {
                            required: true,
                            minlength : 5
                        },
                        numero_telefone:{
                            required: true,
                            minlength: 9
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        cpassword: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        }, 
                        email: {
                            required: true,
                            email: true
                        },
                    },     
                    messages: {
                        username: {
                            required: "Por favor, escolha um nome de usuário",
                            minlength: "O nome de usuário necessita ter pelo menos 5 caracteres"
                        },
                        password:{
                            required: "Por favor, escolha uma senha",
                            minlength: "A senha necessita ter pelo menos 5 caracteres"
                        },
                        numero_telefone:{
                            required: "Por favor, insira seu telefone",
                            minlength:"O telefone necessita de pelo menos 9 caracteres"
                        },
                        cpassword: {
                            required: "Por favor, confirme sua senha",
                            minlength: "A senha necessita ter pelo menos 5 caracteres",
                            equalTo: "Por favor, entre com a mesma senha já informada"
                        },
                        email: "Por favor, entre com um email válido",
                        required: "Por favor, insira um email"
    
                    }
                });
            });
            </script>
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
        <form id="signupForm" name="signup" class="form" method="POST" action="">
            <div class="card">
                <div class="card-top">
                    <img src="../img/loginim.png" width="300px" height="100px">
                    <h2>Cadastre-se</h2>
                    <p>Ta esperando o que pra se conectar conosco?</p>
                </div>
                <div class="card-group">
                   
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="username"  name="username" placeholder="Digite seu Nome de Usuário" value="<?php echo $_POST["username"]; ?>" required>
                    <label for="telefone">Telefone</label>
                    <input type="number"  id="numero_telefone" name="numero_telefone" placeholder="Digite seu Telefone" value="<?php echo $_POST["numero_telefone"]; ?>"required>
                    <label for="email">Email</label>
                    <input type="email" id="email"  name="email" placeholder="Digite seu email" value="<?php echo $_POST["email"]; ?>" required>
                    <label for="senha">Senha</label>
                    <input type="password" id="password"  name="password" placeholder="Digite sua senha" required>
                    <label for="cpassword">Confirme sua senha</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirme sua senha"  required>
              
                </div>
              <button class="btn" name="signup">Entrar</button>
            </div>
            Ja tem uma conta? Faça<a href="login.php">Login</a>
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