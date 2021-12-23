<?php 
  if(!isset($_SESSION['email'])){
    $_SESSION['mensagem'] = "Faça login para continuar a compra.";
    $_SESSION['msg_type'] = "danger";
    header("location: ../login/login.php");
    exit();
}
?>

<link href="../css/pagamento.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/pagamento.js"></script>
<body>
<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Pagamento</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment" required>
          Pagar esse produto com cartão de crédito.
        </div>
      </label>
 
      <label for="paypal" class="method paypal" >
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment" required>
          Pagar esse produto com PayPal.
        </div>
      </label>
    </div>
 
    <div class="input-fields" required>
      <div class="column-1">
        <label for="cardholder">Nome</label>
        <input type="text" id="cardholder" required/>
 
        <div class="small-inputs" required>
          <div>
            <label for="date">Data de validade</label>
            <input type="text" id="date" required/>
          </div>
 
          <div>
            <label for="verification" required>CVV</label>
            <input type="password" id="verification" required/>
          </div>
        </div>
 
      </div>
      <div class="column-2" required>
        <label for="cardnumber">Número do cartão</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">CVV é um código de segurança que está presente em todos os cartões de crédito.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    <a href="index.php?page=cart"><button class="btn back-btn">Voltar</button></a>
    <a href="index.php?page=finalizado"><button class="btn next-btn">Finalizar Compra</button></a>
  </div>
</div>
</body>
