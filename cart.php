
<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Shopping de softwares - Ksoft</title>

    <!-- STYLE-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/contacto.css">
    
    <!-- RESPONSIVIDADE -->
    <link rel="stylesheet" href="css/responsividade.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="img/logotipo2.png" type="image/x-icon" />

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
                <li id="lg-bag"><a href="cart.php" class="active"><i class="fa fa-shopping-cart"></i> </a></li>
                <a href="#" id="close"><img src="icon/fecha.png" alt=""></a>
            </ul>

            <div id="mobile">
                <a href=""><img src="icon/pastaC.png" alt="" class="icone"></a>    
                <i><img src="icon/menu.png" alt="" id="bar" class="bar-1" ></i>     
            </div>
        </div>
    </section>
    
    <section id="page-header" class="about-header">
        <h2>#Carrinho</h2>
        <p>Adiciona o código do seu Coupon & GANHE desconto de 30%!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remover</td>
                    <td>Imagem</td>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Preço</td>
                    <td>Subtotal</td>
                </tr>
            </thead>

            <tbody>
                <?php 
                    
                    if(!empty($_SESSION['shopping_cart'])){

                        $total = 0;
                        foreach ($_SESSION['shopping_cart'] as $keys => $values){
                ?>
                            <tr>
                                <td><a href="#"><i class="fa fa-times-circle"></i></a></td>
                                <td><img src="admin/upload/<?php echo $values['item_capa'] ?>" alt=""></td>
                                <td><?php echo $values['item_name'] ?></td>
                                <td><?php echo $values['item_quantity'] ?></td>
                                <td><?php echo number_format($values['item_preco'], 2, ',', '.')." Kz" ?></td>
                                <td><?php echo number_format(($values['item_quantity'] * $values['item_preco']), 2, ',', '.')." Kz"?></td>
                            </tr>
                        <?php 
                            $total = $total + ($values['item_quantity'] * $values['item_preco']);
                        }
                     
                     ?>
                   
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Aplicar Coupon</h3>
            <div>
                <input type="text" placeholder="Coloque o seu Coupon">
                <button class="normal">Aplicar</button>
            </div>
        </div> 

        <div id="subtotal">
            <h3>Total do Carrinho</h3>
            <table>
                <tr>
                    <td>Subtotal do Carrinho</td>
                    <td><?php echo number_format($total, 2, ',', '.')." Kz" ?></td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong><?php echo number_format($total, 2, ',', '.')." Kz" ?></strong></td>
                </tr>
            </table>

            <button class="normal">Prossiga para autenticar</button>
        </div>   
        <?php  }?> 
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
    <script src="js/app.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/script.js"></script>
</body>
</html>