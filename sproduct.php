<?php 
    include_once "php/banco.php"; 

    // GET ID DO PRODUTO
    if(isset($_GET['get'])) {
        $getId = $_GET['get'];
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Softwares a venda - Ksoft</title>

    <!-- STYLE-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/shop.css">
    
    <!-- RESPONSIVIDADE -->
    <link rel="stylesheet" href="css/responsividade.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="img/logotipo2.png" type="image/x-icon"/>

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
                <li><a href="contact.html">Contacto</a></li>
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

    <section id="prodetails" class="section-p1">
        
        <div class="single-pro-image">
          <?php
            // SELECT FOTOS SECUNDÁRIAS DO PRODUTO
            $request = $conexao->prepare("SELECT *FROM PRODUTO P WHERE P.CODPRO = '$getId' LIMIT 1");
            $request->execute();

            foreach($request->fetchAll() as $obj) {
            ?>
           
                <img src="admin/<?php echo ($obj['capa']) ?>" id="MainImg">

            <?php }?>

           
            <div class="small-img-group">
                <?php
                    // SELECT FOTOS SECUNDÁRIAS DO PRODUTO
                    $request = $conexao->prepare("SELECT *FROM FOTOPRODUTO FP JOIN PRODUTO P ON FP.PRODUTO = P.CODPRO WHERE FP.PRODUTO = '$getId'");
                    $request->execute();

                    foreach($request->fetchAll() as $obj) {
                ?>
                    <div class="small-img-col">
                        <img src="admin/<?php echo ($obj['url']) ?>">
                    </div>
                <?php } ?>
            </div>
            

        </div>

        <div class="single-pro-details">
            <?php
                // SELECT DADOS DO PRODUTO
                $request = $conexao->prepare("SELECT *FROM PRODUTO P JOIN PRECO PR ON P.PRECO = PR.CODPRECO JOIN CATEGORIAS C ON C.CODCAT = P.CATEGORIA WHERE P.CODPRO = '$getId'");
                $request->execute();   
                
                foreach($request->fetchAll() as $obj) {
            ?>
            
            <h6>Home / <?php echo($obj['categoria']) ?></h6>
            <h4><?php echo($obj['nome']) ?></h4>
            <h2><?php echo (number_format($obj['preco'], 2, ',', '.'). ' kz')?></h2>

            <!--<input type="number" value="1">-->
            <button class="normal">Adicionar ao Carrinho</button>

            <h4>Detalhes do Produto</h4>
            <span>
                <?php echo($obj['descricao']) ?>
            </span>
            
            
        </div>
        <?php } ?>
    </section>

    <section id="product1" class="section-p1">
        <h2>Produtos em Destaque</h2>
        <p>Escolha o melhor sistema para tua empresa!</p>
        <div class="pro-container" id="produt" >
            <?php
               $request = $conexao->prepare("SELECT *FROM PRODUTO P JOIN PRECO PR ON P.PRECO = PR.CODPRECO JOIN CATEGORIAS C ON C.CODCAT = P.CATEGORIA LIMIT 4");
               $request->execute();

               foreach($request->fetchAll() as $obj) {
            ?>
            <a class="pro" href="sproduct.php?get=<?php echo $obj['codPro'] ?>">
                <div class="pro-img">
                <img src="admin/<?php echo ($obj['capa']) ?>">
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

    <script>

        //OBJECTO FAZER O OVER READY DAS IMAGENS
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img-col');
        
        console.log(smallimg);

        for(i = smallimg; i <= smallimg.length; i++) {
            smallimg[i].onclick = () => {
                MainImg.src = smallimg[i].src;
            }
        }
                
    </script>

    <script src="js/script.js"></script>
</body>
</html>