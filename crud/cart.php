<?php
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
      
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
          		header('location:index.php?page=cart');
          exit();
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}
// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}
// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}
// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {  
  header('Location: index.php?page=placeorder');
    exit;
}
// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM produtos WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
?>
<?=template_header('Cart')?>
<html>
<link href="../css/carrinho.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/lingua.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Carrinho de Compra</title>
  
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

          <body class="display:flex;">
<div class="container" style="position:relative;">
<div class="row">
    <div align="center" class="col-lg-12">
<div class="cart">
    <h1>Carrinho de Compra</h1>
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Produto</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Você não tem produtos adicionados no seu carrinho de compra.</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="../img/<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Remover</a>
                    </td>
                    <td class="price">R$<?=$product['price']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">R$<?=$product['price'] * $products_in_cart[$product['id']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
                </div>
                </div>
                </div>
        <div style="display: flex; justify-content: flex-end"class="subtotal">
            <span class="text">Subtotal &nbsp</span>
            <span class="price">R$<?=$subtotal?></span>
        </div>
        <div style=" display:flex; justify-content: flex-end; margin-top:20px; margin-bottom:20px;"class="buttons">
            <input type="submit" style="padding: 12px 20px;
	border: 0;
	background: #00de00;
	color: #ffffff;
	font-size: 14px;
	font-weight: bold;
	cursor: pointer;
    margin-right:5px;
	border-radius: 5px;" value="Alterar" name="update">
            <input type="submit" style="padding: 12px 20px;
	border: 0;
	background: #00de00;
	color: #ffffff;
	font-size: 14px;
	font-weight: bold;
	cursor: pointer;
	border-radius: 5px;" value="Finalizar compra" name="placeorder">
        </div>

    </form>

</div>
<footer id="rodape" class=" text-center text-white">
           
            <div class="text-center p-3" style="background-color: rgba(70, 70, 70, 0.2);">
              © 2021 Copyright: High Shoes 
            </div>
</footer>
<div id="Vli"  vw class="enabled">
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