<?php
include 'conexao.php';

// The amounts of products to show on each page
$num_products_on_each_page = 20;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE name like '%$_SESSION[name]%' ORDER BY marca DESC LIMIT ?,?");
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
$total_products = $pdo->query("SELECT * FROM produtos WHERE name like '%$_SESSION[name]%'")->rowCount();
?>
<?=template_header('Cart')?>
<html lang="pt-br">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../css/carrinho.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/lingua.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  
<title>Produtos</title>
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
      
<div class="container">

    <h1 style="display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;">Produtos</h1>
    <p id="produtosp"><?=$total_products?> Produtos</p>
    <div class="row">
    <?php foreach ($products as $product): ?>
    <div align="center" class="col-lg-3">
            <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <div class="zoom">
						<img src="../img/<?=$product['img']?>" alt="<?=$product['name']?>" class="img-fluid" width="200px" />
						</div>
						<h4 id="um"><?=$product['name']?></h4></a>
						<p id="um">R$<?=$product['price']?></p>

    </div>
    
    
    <?php endforeach; ?>

    <div class="products content-wrapper">        
    <div style="text-align: right;
          padding-bottom: 40px; "class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>" style="display: inline-block;
          text-decoration: none;
          margin-left: 5px;
          padding: 12px 20px;
          border: 0;
          background: #00de00;
          color: #FFFFFF;
          font-size: 14px;
          font-weight: bold;
          border-radius: 5px;">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>" style="display: inline-block;
          text-decoration: none;
          margin-left: 5px;
          padding: 12px 20px;
          border: 0;
          background: #00de00;
          color: #FFFFFF;
          font-size: 14px;
          margin-right:10px;
          font-weight: bold;
          border-radius: 5px;">Next</a>
        <?php endif; ?>
        </div>
    </div>
  </div>
</div>

</div>
</nav>
<footer id="rodape" class=" text-center text-white">
            
            <div class="text-center p-3" style="background-color: rgba(70, 70, 70, 0.2);">
              © 2021 Copyright: High Shoes 
            </div>
          </footer>
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
</div>

