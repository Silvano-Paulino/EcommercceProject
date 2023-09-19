<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Contacto - Venda de Softwares Online</title>

    <!-- STYLE-->
    <link rel="stylesheet" href="css/estilo.css">
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
                    <li><a href="contact.php" class="active">Contacto</a></li>
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
        

        <section class="about-header">

         <h2>#Contacta-nos</h2>
         <p>Entre em contacto conosco, para mais informações!</p>

        </section>

        <section id="contact-details" class="section-p1">
           
            <div class="details">
                <span>Entra em Contacto</span>
                <h2>visite uma de nossas agências ou entre em contato conosco hoje</h2>
                <h3>Head office</h3>
                <li>
                    <i class="fa fa-map"></i>
                    <p>Angola, Luanda, Bairro Benfica</p>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <p>kutucasoft@gmail.com</p>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <p>928-644-655 | 935-328-128</p>
                </li>
                <li>
                    <i class="fa fa-clock-o"></i>
                    <p>Segunda - Sexta, 08:00 - 16:00</p>
                </li>
            </div>
            <div class="map" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63058.561813407156!2d13.15620893257684!3d-8.957390018120995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a521fe402d4b1f5%3A0x90cb5cfba3f4857d!2sBenfica%2C%20Belas!5e0!3m2!1spt-PT!2sao!4v1647784133947!5m2!1spt-PT!2sao" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

       <section id="form-details">
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