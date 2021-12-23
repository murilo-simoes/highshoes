<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>
    <script type="text/javascript" src="../js/busca.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/busca.css">
    <title>PHP CRUD</title>
</head>
<body>
    
   
<div class="find-in-document-container">
  <input type="text" id="txt-to-find" value="" oninput="findInDocument({position: 0})"/>
  <input type="button" value="Prev" onclick="findInDocument({position: -1})"/>
  <input type="button" value="Next" onclick="findInDocument({position: 1})"/>
</div>

    <?php require_once 'processo.php';
    if(isset($_SESSION['email']) && (($_SESSION['email']) != "admin@demo.com.br")) {
        header("location: ../index.php");
    }
    ?>

    <?php
    
    if(isset($_SESSION['mensagem'])):?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        ?>
        </div>
        <?php endif?>
    <div class="container">
    <?php
        $mysqli = new mysqli('localhost', 'topzjuxz_highshoes', 'highshoes@2021', 'topzjuxz_highshoes') or die(mysqli_error($mysqli));
        $resultado = $mysqli->query("SELECT * FROM cadastro") or die($mysqli->error);
        //pre_r($resultado);
        ?>
        <a href="logout.php" id="deslogar"><button id="deslogar">Deslogar</button></a>
        <style>button#deslogar{ margin-top:20px;color:#00de00; background-color:#000000; border-color:#696969; border-style:solid; border-radius:10px; border-width:1px;}</style>
   
        <div id="tabela"class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Data de Nascimento</th>
                    <th>Número</th>
                    <th>Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
                while($row = $resultado->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php echo $row['sobrenome'];?></td>
                    <td><?php echo $row['data_nascimento'];?></td>
                    <td><?php echo $row['numero_telefone'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td>
                        <a href="admin.php?edit=<?php echo $row['id']; ?>"
                        class="btn btn-info">Editar</a>
                        <a href="processo.php?delete=<?php echo $row['id']; ?>"
                        class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
                <?php endwhile;?>
          

        </table>
        </div>
        
        <?php
        function pre_r( $array ){
            echo '<pre>';
            print_r($array);
            echo'</pre>';
        } 
    
    
    ?>



    <div class="row justify-content-center">
    <form action="processo.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    
    <div class ="form-group">
    <label>Username</label>
    <input type="username" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Insira o seu username">
    </div>
    <div class="form-group">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control" placeholder="Insira seu nome">
    </div>
    <div class="form-group">
    <label>Sobrenome</label>
    <input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>" class="form-control" placeholder="Insira seu sobrenome">
    </div>
    <div class="form-group">
    <label>Data de Nascimento</label>
    <input type="text" name="data_nascimento" value="<?php echo $data; ?>" class="form-control" placeholder="Insira sua data de nascimento">
    </div>
    <div class="form-group">
    <label>Número de telefone</label>
    <input type="text" name="numero_telefone" value="<?php echo $numero; ?>" class="form-control" placeholder="Insira sua senha">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Insira seu email">
    </div>
    <div class="form-group">
        <?php
            if($update==true):
        ?>
        <button type="submit" class="btn btn-info" name="update">Alterar</button>
        <?php else:?>
    <button type="submit" class="btn btn-primary" name="save">Salvar</button>
    <?php endif; ?>
    </div>
    </form>
    </div>
</div>
</body>
</html>