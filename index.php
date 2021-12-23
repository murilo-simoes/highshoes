<!DOCTYPE html>

<html lang="pt-br">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
     <link rel="shortcut icon" href="img/logo1.ico">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		  <link rel="stylesheet" type="text/css" href="css/estilo.css">
            <link rel="stylesheet" type="text/css" href="css/lingua.css">
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		  <script type="text/javascript" src="js/myscript.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <title>High Shoes</title>
      

    </head>

    <body>

       <!--Nav-bar Menu-->
        <nav id="Ctz" class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php"><img id="Home" style="margin-top:1px;" src="img/logo1.png" alt="icon" width="53" height="53"></a>
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
                      <a class="dropdown-item" href="crud/index.php">Masculino</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="crud/index.php">Feminino</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sobre Nós
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="NossaHistoria/NossaHistoria.html">Nossa História</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ajude nos a ajudar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="Imperdivel/imperdivel.html">Imperdível</a>
                    </div>
                  </li>
               
              </ul>
              <div id="google_translate_element" class="boxTradutor"></div>

    <!-- Aqui adiciona um idioma --> 
	<div class= "dropdown">
	<button class="dropbtn">
	<a href="javascript:trocarIdioma('pt')"><img alt="portugues" src="img/br.png"></a>
	</button>
	<div class="dropdown-content">
    <a href="javascript:trocarIdioma('en')"><img alt="ingles" src="img/en.png"></a> 
	</div>
	</div>
              <form action="crud/pesquisa.php" method="POST" class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-secondary" type="submit"><img id="PQ" src="img/pesquisa.png" alt="icon" width="24" height="24"></button>
                <div class="alt"><input id="inpu" name="pesquisar" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search"></div>
              </form>
              <a id="Log" href="login/login.php"><button id="Log" class="btn btn-outline-secondary img-fluid" type="submit"> <img id="Log" src="img/login.png" alt="icon" width="24" height="24"></button></a>
              <a href="crud/index.php?page=cart"><button id="Logas"  class="btn btn-outline-secondary img-fluid" type="submit"> <img id="Bag" src="img/bag.png" alt="icon" width="24" height="24"></button></a>
              

            </div>
          </nav>
        <!--Banner-->
		
		<div class="animation-area">
          
			<ul class="box-area">
				<li><img src="img/jordan2.png" class="img-fluid"></li>
				<li><img src="img/newBalance.png" class="img-fluid"></li>
				<li><img src="img/converse2.png" class="img-fluid"></li>
				<li><img src="img/jordan2.png" class="img-fluid"></li>
				<li><img src="img/nikeS.png" class="img-fluid"></li>
				<li><img src="img/adidas.png" class="img-fluid"></li>
				<li><img src="img/converse2.png" class="img-fluid"></li>
				<li><img src="img/jordan2.png" class="img-fluid"></li>
				<li><img src="img/newBalance.png" class="img-fluid"></li>
				<li><img src="img/converse2.png" class="img-fluid"></li>					
				<li><img src="img/jordan2.png" class="img-fluid"></li>
				<li><img src="img/nikeS.png" class="img-fluid"></li>
				<li><img src="img/newBalance.png" class="img-fluid"></li>
				<li><img src="img/jordan2.png" class="img-fluid"></li>
				<li><img src="img/newBalance.png" class="img-fluid"></li>
				<li><img src="img/converse2.png" class="img-fluid"></li>
				<li><img src="img/nikeS.png" class="img-fluid"></li>
			</ul>
				
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4" class="active"></li>
            </ol>
            <div id="lolo" class="carousel-inner">
              <div align = "center" class="carousel-item active">
                <div class="loli img-fluid"><img align="center" id="lola" class="img-fluid" src="img/bannerDF.png" width="100%" alt="First slide"></div>
			        </div>
              <div align = "center" class="carousel-item">
            <div class="loli img-fluid"><a href="crud/index.php?page=product&id=99"><img align="center" id="lola" class="img-fluid" src="img/bannerbob.jpg" width="100%" alt="First slide"></a></div>
			        </div>
              <div align = "center" class="carousel-item">
                <div class="loli img-fluid"><a href="crud/index.php?page=product&id=46"><img align="center" id="lola" class="img-fluid" src="img/bannerSpace.jpg" width="100%" alt="First slide"></a><</div>
			        </div>
              <div align = "center" class="carousel-item">
                <div class="loli img-fluid"><a href="crud/index.php"><img align="center" id="lola" class="img-fluid" src="img/giannis.jpg" width="100%" alt="First slide"></a></div>
			        </div>
              <div align = "center" class="carousel-item">
                <div class="loli img-fluid"><a href="crud/index.php?page=product&id=99"><img align="center" id="lola" class="img-fluid" src="img/bannerbob.jpg" width="100%" alt="First slide"></a></div>
			        </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		  </div>
		
        <!--Corpo-->
        
          <!--SUB-->
        <div id="card10" class="card-group img-fluid">
            <div id="help" class="container" align="center">
              <div class="row">
                <div id="produtos" class="col-sm">
                  <a style="text-decoration:none;
color:black;"href="crud/index.php"><img id="card1" src="img/product.png" alt="product" class="img-fluid" width="29" height="29">Confira nossos produtos!</a>
                </div>
              </div>
            </div>
        </div>

        <h5 id="h5b">Adicionados recentemente</h5>

          <div id="SUBE" class="card-group">
            <div id="sub" class="container" align="center">
              <div class="row"> 
                  <div class="col align-self-start">
                    <div class="zoom">
                     <a href="crud/index.php?page=product&id=27"><img src="img/banner2.jpg" class="um" alt="banner2" ></a>
                    </div>
                  <a style="text-decoration:none;
color:black;" href="crud/index.php?page=product&id=27"><h5 id="h5Nikett">NIKE X TRAVIS SCOTT SB DUNK LOW "CACTUS JACK" SPECIAL BOX</h5></a>
                  </div>
                  <div class="col align-self-start">
                    <div class="zoom">
                       <a href="crud/index.php?page=product&id=47"> <img src="img/banner4Sub.png" class="dois" alt="banner4Sub"></a>
                    </div>
                        <a style="text-decoration:none;
color:black;" href="crud/index.php?page=product&id=47"><h5 id="h5JJ">AIR JORDAN 1 MID "CHICAGO"</h5></a>
                  </div>
                  <div id="tres" class="col align-self-start">
                    <div class="zoom">
                    <a href="crud/index.php?page=product&id=48"><img src="img/bannerSub3.png" class="tres" alt="bannerSub3"></a>
                    </div>
                   <a style="text-decoration:none;
color:black;" href="crud/index.php?page=product&id=48"><h5 id="h5AIR">NIKE AIR VAPOR MAX EVO MASCULINO</h5></a>
                  </div>
                </div>
            </div>
          </div>
		  
        <!--Fim sub-->

        <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=11942986698" target="_blank">
          <i class="fa fa-whatsapp"></i>
        </a>
        
        <div class="card">
          <h1 id="PQ" align="center">Por qual marca você procura?</h1>
          <h6 class="conhecer" align="center">Conheça também o que você calça</h6>
          <div class="card-group">
            <div class="card">
              <div class="zoom"><img class="card-img-top" src="img/swoosh.png" alt="Imagem de capa do card"></div>
              <div class="card-body">
                <h5 id="h5preto" class="card-title">Nike</h5>
                <p class="card-text">Nike, Inc. é uma empresa estadunidense de calçados, roupas, e acessórios fundada em 1972 por Bill Bowerman e Phillip Knight. A sua sede fica em Beaverton, no estado de Oregon, nos Estados Unidos.</p>
              </div>
            </div>
            <div class="card">
              <div class="zoom"><img class="card-img-top" src="img/adidass.png" alt="Imagem de capa do card"></div>
              <div class="card-body">
                <h5 id="h5preto" class="card-title">Adidas</h5>
                <p class="card-text">Adidas é uma empresa fundada na Alemanha. A empresa tem o nome de seu fundador, Adolf Dassler, também conhecido pelo apelido de Adi, que começou a produzir sapatilhas nos anos 1920, junto a seu irmão Rudolf Dassler, em Herzogenaurach, próximo de Nuremberg.</p>
              </div>
            </div>
            <div class="card">
              <div class="zoom"><img class="card-img-top" src="img/jorge.png" alt="Imagem de capa do card"></div>
              <div class="card-body">
                <h5 id="h5preto" class="card-title">Jordan</h5>
                <p class="card-text">Após 1 ano de contrato da Nike com Michael Jordan e por pedido da marca o designer Peeter Moore criou o modelo Air Jordan 1. O tênis era personalizado e atendia às exigências do que Jordan gostava em um tênis: ele queria um modelo que encaixasse no formato do seu pé com facilidade.</p>
              </div>
            </div>
            <div class="card">
             <div class="zoom"><img class="card-img-top" src="img/newBalance.png" alt="Imagem de capa do card"></div>
              <div class="card-body">
                <h5 id="h5preto" class="card-title">New balance</h5>
                <p class="card-text">New Balance Athletic Shoe, Inc. é uma empresa com sede em Boston, Estados Unidos, que produz calçados e vestuário desportivos. Foi fundada em 1906 sob o nome New Balance Arch Support Company.</p>
              </div>
            </div>
            <div class="card">
              <div class="zoom"><img class="card-img-top" src="img/converselogo.png" alt="Imagem de capa do card"></div>
              <div class="card-body">
                <h5 id="h5preto" class="card-title">Converse</h5>
                <p class="card-text">CONVERSE Inc., mais conhecida simplesmente por Converse, é uma empresa de calçados estadunidense que fabrica sapatos desde o início do século XX. Fundada em 1908, e com sede em Boston, Massachusetts, ela é uma subsidiária integral da Nike desde 2003. É especialmente famosa pela fabricação dos calçados All Star. </p>
              </div>
            </div>
          </div>
        </div>

        <h2 id="h2b">Promoções</h2>

        <div id="othercard" class="card mb-3">
          <h1 class="h1" align="center">Ajude a nos ajudar</h1>
          <div class="card-body">
            <h5 id="promotion" class="card-title">O ANO TODO</h5>
            <p id="text1" class="card-text">Para nos ajudar a te ajudar, na troca de um calçado usado você ganha desconto para compra na nossa loja em qualquer par de tênis.</p>
            <a id="botaopromotion" href="Imperdivel/imperdivel.html" class="btn btn">Confira</a>
          </div>
        </div>

        <div id="othercard2" class="card mb-3">
          <h1 id="h1rd" class="h1" align="center">Imperdivel</h1>
          <div class="card-body">
            <h5 id="promotion" class="card-title">Corra que é por pouco tempo</h5>
            <p id="text1" class="card-text">Nós siga nas redes rociais para ganhar super descontos garantidos .</p>
            <a id="botaopromotion" href="Imperdivel/imperdivel.html" class="btn btn">Confira</a>
          </div>
        </div>
		
        <section class="varias" align="center">
			<div class="container">
				<div class="row">
					<div class="col-lx-12">
						<div id="carrossel" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
							<li data-target="#carrossel" data-slide-to="0" class="active"></li>
							<li data-target="#carrossel" data-slide-to="1"></li>
							<li data-target="#carrossel" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=97"><img src="img/img1.jpg"  alt="1" class="img-fluid"/></a>
               <h5 id="">YEEZY BOOST 350 V2 "ZEBRA"</h5>
									</div>
									
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=29"><img src="img/img2.jpg"  alt="2" class="img-fluid"/></a>
                 <h5 id="">NIKE SB BEN & JERRY'S</h5>
									</div>
									
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=98"><img src="img/img3.jpg"  alt="3" class="img-fluid"/></a>
                  <h5 id="">LEBRON SOLDIER 12 XII PRETO VERMELHO</h5>
									</div>
									
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=14"><img src="img/img4.jpg" alt="4" class="img-fluid"/></a>
                 <h5 id="">YEEZY BOOST 700 WAVE RUNNER</h5>
									</div>
								</div>
							</div>	
							
							<div class="carousel-item">
								<div class="row">
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=46"><img src="img/img5.jpg"  alt="5" class="img-fluid"/></a>
                 <h5 id="">NIKE LEBRON 17 MONSTARS</h5>
									</div>
									
									<div class="col-lg-3">
                  <a href="ccrud/index.php?page=product&id=99"><img src="img/img6.jpg"  alt="6" class="img-fluid"/></a>
                 <h5 id="">KYRIE 5 SPONGEBOB SQUAREPANTS PINEAPLLE HOUSE</h5>
									</div>
									
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=74"><img src="img/img7.jpg"  alt="7" class="img-fluid"/></a>
                 <h5 id="">CHUCK TAYLOR ALL STAR CX HI</h5>
									</div>
									
									<div class="col-lg-3">
                  <a href="crud/index.php?page=product&id=48"><img src="img/img8.jpg"  alt="8" class="img-fluid"/></a>
										<h5 id="">NEW BALANCE X JADEN SMITH "Vision Racer Wavy Baby Blue"	</h5>
									</div>
								</div>
							</div>	
							
							
						  
						</div>
						</div>
					</div>
				</div>
			</section>

      <div class="botaun">
      <a href="crud/index.php"><button id="butao" type="button" class="btn btn-lg">Confira nossos produtos</button></a>
      </div>

        <div class="card">
          <div class="card-body">
            <h5 id="historie" class="card-title">Nossa historia</h5>
            <p class="card-text">A high shoes ©company é uma iniciativa de estudantes que visam entrar no mercado de trabalho, dando um ponta pé com essa nova e promissora loja.</p>
            <a id="botaopromotion" href="NossaHistoria/NossaHistoria.html" class="btn btn">Nos conheça melhor</a>
          </div>
          <img class="card-img-bottom" src="img/bannerhistory.png" alt="Card image cap">
        </div>
         <!--Roda Pé-->
        
         <footer id="rodape" class=" text-center text-white">
          <div class="container p-4 pb-0">

            <h1 class="contato">
              Entre em contato conosco
            </h1>
            <h5><a href="">WhatsApp</a></h5>

          <h1 class="contato">Formas de pamentos</h1>
          
          <img src="img/visa.png" alt="visa">
          <img src="img/mastercard.png" alt="mastercard">
          <img src="img/elo.png" alt="elo">
          <img src="img/american.png" alt="american">
          <img src="img/hipercard.png" alt="hipercard">
          <img src="img/club.png" alt="club">
          <img src="img/aelo.png" alt="aelo">

          <h1 class="contato">Nos siga nas redes socias</h1>
          
            <section class="mb-4">
            
              <a class="btn btn-outline-secondary btn-floating m-1" href="https://www.facebook.com/High-Shoes-100165789177996"role="button"><img src="img/face.png" alt="face" class="img-fluid"></a>
        
              <a class="btn btn-outline-secondary btn-floating m-1" href="https://twitter.com/HighShoex?t=oA_guMl3ZgQSfDUlGA0gVw&s=09" role="button"><img src="img/TT.png" alt="TT" class="img-fluid"></a>
        
        
              <a class="btn btn-outline-secondary btn-floating m-1" href="https://www.instagram.com/highshoex/" role="button"><img src="img/iconfinder_social_media_applications_3-instagram_4102579.png" alt="instagram" class="img-fluid"></a>
            
            </section>
          </div>

          <div class="text-center p-3" style="background-color: rgba(70, 70, 70, 0.2);">
            © 2021 Copyright: High Shoes 
          </div>
        </footer>

        <!--Script-->
        <!--Vlibras-->
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
          <script type="text/javascript" src="js/lingua.js"></script>
          </body>

</html>