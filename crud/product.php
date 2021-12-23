<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('O produto não existe!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('O produto não existe!');
}
?>
<?=template_header('Cart')?>

<link href="../css/carrinho.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		  <script type="text/javascript" src="../js/myscript.js" defer></script>
      	<link rel="stylesheet" type="text/css" href="../css/lingua.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title><?=$product['name']?></title>
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
<link href="../css/carrinho.css" rel="stylesheet" type="text/css">
<div class="container">
		<div class="row">
			<div align="center" class="col-lg-6">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
					</ol>
					<div id="tenis" class="carousel-inner">
					  <div align = "center" class="carousel-item active">
						<div id="box" class="img-fluid"><img align="center" id="tenisC" class="img-fluid" src="../img/<?=$product['img']?>" width="450px" alt=<?=$product['name']?>></div>
							</div>

				  </div>
				  </div>
			</div>
			
			<div align="left" class="col-lg-6">
				
				<div>
					<h1 class="text-left" id="nomePDT"><?=$product['name']?></h1>
					<a href="#"><h6 class="text-left" id="subtPDT"><?=$product['marca']?></h6></a>
				</div>
        <span style="display: block;
            font-size: 22px;
            color: #999999;" class="price">
            R$<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span style="color: #BBBBBB;
              text-decoration: line-through;
              font-size: 22px;
              padding-left: 5px;"class="rrp">R$<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
				
				<div>
					<h4 id="tamanhos" class="text-left">Tamanhos</h4> 
					
						<select style="margin-bottom:10px;"name="tamanhos">
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
						</select>
				</div>
				
			
        
        <form action="index.php?page=cart" method="post">
            <input type="number" style="width: 80px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            color: #555555;
            border-radius: 5px;" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantidade" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input style="background: #04ad04;
              border: 0;
              color: #FFFFFF;
              width: 200px;
              padding: 12px 0;
              text-transform: uppercase;
              font-size: 14px;
              font-weight: bold;
              border-radius: 5px;
              cursor: pointer;"type="submit" value="Adicionar Ao Carrinho">
        </form>
        <div style="margin-bottom:15px;"class="description">
            <?=$product['desc']?>
        </div>

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
<footer id="rodape" class=" text-center text-white">
           
            <div class="text-center p-3" style="background-color: rgba(70, 70, 70, 0.2);">
              © 2021 Copyright: High Shoes 
            </div>
</footer>