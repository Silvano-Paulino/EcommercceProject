<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pedidos - Venda de Softwares Online</title>

    <!-- STYLE-->
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/contacto.css">
    
    <!-- RESPONSIVIDADE -->
    <link rel="stylesheet" href="../css/responsividade.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="../img/logotipo2.png" type="image/x-icon" />

</head>
<body>
    <div id="preloader">

    </div>

    <section id="header-2">
        <ul class="nav-1">
            <li><i class="fa fa-envelope"></i>kutucasoft@gmail.com</li>
            <li><a href="tel:948054897"><i class="fa fa-phone"></i> +244 922-293-777 </a>| <a href="tel:948054897">945-054-897</a></li>
        </ul>
        <ul class="nav-2">
            <li><a href="pedidos.php"><i class="fa fa-newspaper-o"></i>Pedidos</a></li>
            <li style="display: none;"><a href="sms.php"><i class="fa fa-envelope"></i>Mensagens</a></li>
            <li><a href="login.php"><i class="fa fa-user"></i>  Login</a></li>
            <li><a href="cadastro.php"><i class="fa fa-users"></i> Cadastro</a></li>
        </ul>

        <div id="user" class="toggle fa fa-user"></div>
    </section>

    <section id="header">
        <div class="logo">
            <a href=""><img src="img/logotipo2.png" alt=""></i> </a>
        </div>
    
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li style="display: none;"><a href="blog.php">Blog</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li style="display: none;" ><a href="dashboard-1.php">Minha Conta</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i> </a></li>
                <a href="#" id="close"><img src="icon/fecha.png" alt=""></a>
            </ul>

            <div id="mobile">
                <a href=""><img src="icon/pastaC.png" alt="" class="icone"></a>    
                <i><img src="icon/menu.png" alt="" id="bar" class="bar-1" ></i>     
            </div>
        </div>
    </section>

    <section class="sms-header">

        <h2>#Qual o seu pedido?</h2>
        <p>Estamos aberto a pedidos, diz-nos qual o seu!</p>

    </section>

    <section id="form-details">
        <form id="pedido" class="formulario">
            <span>Deixa um pedido</span>
            <h2>Faça já o seu pedido</h2>
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="E-mail">
            <textarea name="mensagem" cols="30" rows="10" placeholder="Mensagem"></textarea>
            <button class="normal" onclick="generic_requi('pedido', 'usuario', 'add')">Enviar</button>
        </form>

        <div class="img-form" >
            <img src="img/men.png" alt="">
            <p>A ksoft é uma empresa que está no mercado a bastante tempo, somos conhecidos pelos nossos imensos serviços de qualidade realizados. Por isso velamos pelo seu bem, desta, forma para caso de dúvidas ou reclamação deixa uma mensagem!</p>
        </div>
    </section>

    <section id="newslastteler" class="section-p1 section-m1">
            <div class="newstext">
                    <h4>Assinar na nossa Newsletter</h4>
                    <p>Receba actualizações e-mail da nossa loja e <span>ofertas especiais.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="E-mail">
                <button class="normal">Enviar</button>
            </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <div class="lo-2">
                <img src="img/logotipo2.png" alt="" class="logo-footer">
            </div>
           
            <h4>Contacto</h4>

            <p><strong>Localização: </strong>Angola, Luanda, Bairro Benfica</p>
            <p><strong>Telefone: </strong>(+244) 928 644 655 / 935 328 128</p>
            <p><strong>Horário: </strong>08:00 - 16:00, Manhã - Tarde</p>

            <div class="follow">
                <h4>Siga-nos</h4>
                <div class="icones">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-whatsapp"></i>
                    <i class="fa fa-youtube-play"></i>
                </div>
            </div>
        </div>
        <div class="col">
             <h4>Sobre</h4>
             <a href="sobre.html">Sobre Nós</a>
             <a href="#">Informação de Entrega</a>
             <a href="#">Política de Privacidade</a>
             <a href="#">Termos & Condições</a>
             <a href="#">Contacta-nos</a>
        </div>
        <div class="col">
            <h4>Minha conta</h4>
            <a href="#">Cadastro</a>
            <a href="#">Ver Carrinho</a>
            <a href="#">Ver meu pedido</a>
            <a href="#">Ajuda</a>
       </div>
       <div class="col install">
            <h4>Instalar App</h4>
            <p>Apartir da App Store ou Google Play</p>
            <div class="row">
                <img src="img/app.jpg" alt="">
                <img src="img/play.jpg" alt="">
            </div>
            <p>Portais de Pagamento Seguro</p>
            <img src="img/pagamento.jpg" alt="">
       </div>
       <div class="copyright">
            <p> &copy; Ksoft - Todos os Direitos Reservados - 2022</p>
       </div>
    </footer>

    <script src="js/axios.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>
</body>
</html>