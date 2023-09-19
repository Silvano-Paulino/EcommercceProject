<?php 

    include_once "php/banco.php";
    session_start();
    
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ksoft - Venda de Softwares Online</title>

    <!-- STYLE-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/contacto.css">

    <!-- JS-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/jquery-3.6.0.js"></script>
    
    <!-- RESPONSIVIDADE -->
    <link rel="stylesheet" href="css/responsividade.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="img/logotipo2.png" type="image/x-icon" />

</head>
<body>
    <!--<div id="preloader">

    </div>-->

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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li style="display: none;"><a href="blog.php">Blog</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i> </a></li>
                <?php if(!empty($_SESSION['foto'])) {?><li><div class="img_user"><img src="<?php echo $_SESSION['foto'] ?>" alt=""></div></li><?php } ?>
                <a href="#" id="close"><img src="icon/fecha.png" alt=""></a>
            </ul>

            <div id="mobile">
                <a href=""><img src="icon/pastaC.png" alt="" class="icone"></a>    
                <i><img src="icon/menu.png" alt="" id="bar" class="bar-1" ></i>     
            </div>
        </div>
    </section>

    <section id="hero">
        <h4>Negócios em oferta</h4>
        <h2>Negócios de valores Super</h2>
        <h1>Em todos os Softwares</h1>
        <p>Com a possiblidade de até 30% de desconto!</p>
        <button onclick="window.location.href='shop.php';">Compra já</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fa-box">
            <img src="img\f1.png" alt="">
            <h6>Compra fácil</h6>
        </div>
        <div class="fa-box">
            <img src="img\f2.png" alt="">
            <h6>Pedido online</h6>
        </div>
        <div class="fa-box">
            <img src="img\f3.png" alt="">
            <h6>Economize dinheiro</h6>
        </div>
        <div class="fa-box">
            <img src="img\f4.png" alt="">
            <h6>Promoções</h6>
        </div>
        <div class="fa-box">
            <img src="img\f5.png" alt="">
            <h6>Venda feliz</h6>
        </div>
        <div class="fa-box">
            <img src="img\f6.png" alt="">
            <h6>F24/7Suporte</h6>
        </div>
    </section>
    
    <section id="product1" class="section-p1">
        <h2>Nossos Produtos</h2>
        <p>Escolha o melhor sistema para tua empresa!</p> 
        
        <div class="pro-container" id="produt" >
            <?php
               $request = $conexao->prepare("SELECT * FROM PRODUTO P JOIN PRECO PR ON P.PRECOFK = PR.CODPRECO JOIN CATEGORIAS C ON C.CODCATEGORIA = P.CATEGORIAFK");
               $request->execute();

               foreach($request->fetchAll() as $obj) {
            ?>
            

                <form action="php/cart.php?action=add&id=<?php echo $obj['codProduto'] ?>" method="POST" class="pro">
                    <div class="pro-img">
                        <img src="admin/<?php echo ($obj['capa']) ?>">
                    </div>
                    <div class="des">
                        <span><?php echo ($obj['categoria'])?></span>

                        <div class="pro-line">
                            <h5><?php echo ($obj['nome'])?></h5>
                            <div class="star">
                                <i><img src="icon/star_16px.png" class="star"></i>
                                <i><img src="icon/star_16px.png" class="star"></i>
                                <i><img src="icon/star_16px.png" class="star"></i>
                                <i><img src="icon/star_16px.png" class="star"></i>
                                <i><img src="icon/star_16px.png" class="star"></i>
                            </div>
                        </div>
                        <a  href="#get=<?php echo $obj['codProduto'] ?>">Info</a> 

                    
                        <input type="number" name="quantity" value="1" class="quantity">
                        <h4><?php echo (number_format($obj['preco'], 2, ',', '.'). ' kz')?></h4>
                        

                        <input type="hidden" name="name_hidden" value="<?php echo ($obj['nome'])?>">
                        <input type="hidden" name="capa_hidden" value="<?php echo ($obj['capa'])?>">
                        <input type="hidden" name="preco_hidden" value="<?php echo ($obj['preco'])?>">
                    </div>
                    <button type="submit" name="add_to_cart"><i class="add-cart cart fa fa-shopping-cart"></i></button>
                </form>
            
            <?php } ?>
        </div>
       
    </section>

    <section id="banner" class="section-m1">
        <h4>Preste Atenção Nos Servicos</h4>
        <h2>Possibilidade de Ganhar <span>30% </span> de desconto nos nossos Serviços</h2>
        <button class="normal" onclick="window.location.href='about.php'">Ler Mais</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Novos Produtos</h2>
        <p>Foram desenvolvidos novos produtos de alta qualidade!</p>
        <div class="pro-container">
            <?php
               $request = $conexao->prepare("SELECT * FROM PRODUTO P JOIN PRECO PR ON P.PRECOFK = PR.CODPRECO JOIN CATEGORIAS C ON C.CODCATEGORIA = P.CATEGORIAFK");
               $request->execute();

               foreach($request->fetchAll() as $obj) {
 
            ?>
            <a class="pro" href="sproduct.php?get=<?php echo $obj['codPro'] ?>">
                <div class="pro-img">
                <img src="admin/<?php echo($obj['capa']) ?>">
                </div>
                <div class="des">
                     <span><?php echo ($obj['categoria'])?></span>
                     <h5><?php echo ($obj['nome'])?></h5>

                     <div class="star">
                         <i><img src="icon/star_16px.png" class="star"></i>
                         <i><img src="icon/star_16px.png" class="star"></i>
                         <i><img src="icon/star_16px.png" class="star"></i>
                         <i><img src="icon/star_16px.png" class="star"></i>
                     </div>
                     <h4><?php echo (number_format($obj['preco'], 2, ',', '.'). ' kz')?></h4>
                </div>
                <button ><i class="add-cart cart fa fa-shopping-cart"></i></button>
            </a>  
            <?php } ?> 
        </div>
    </section>

    <section id="form-details"  ><!-- data-anime="top" -->
        <div class="formulario" >
            <span>Deixe uma Menssagem</span>
            <h2>Nós gostamos ouvir de você</h2>
            <input type="text" placeholder="Nome">
            <input type="text" placeholder="E-mail">
            <textarea name="mensagem"  cols="30" rows="10" placeholder="Menssagem"></textarea>
            <button class="normal">Enviar</button>
        </div>

        <div class="people" >
             <div>
                 <img src="img/user/br.jpg" alt="" class="bruno">
                 <p>
                     <span>João Bengui</span>Programador Web <br> Telefone: +244 928-644-655 
                     <br> E-mail: joaomugingabengui24@gmail.com
                 </p>
             </div>
             <div>
                 <img src="img/user/sil.jpg" alt="" class="bruno"> 
                 <p>
                     <span>Silvano Paulino</span>Programador Web <br> Telefone: +244 948-054-897
                     <br> E-mail: silvanopaulino37@gmail.com
                 </p>
             </div>
             <div>
                 <img src="img/user/w.jpg" alt="" class="bruno">
                 <p>
                     <span>Wilson Malundo</span>Programador Web <br> Telefone: +244 928-644-655 
                     <br> E-mail: wilsonmalundo@gmail.com
                 </p>
             </div>
        </div>
    </section>

    <?php 
        include_once 'footer/footer.php';
    ?>

    <script src="js/script.js"></script>
    
</body>
</html>