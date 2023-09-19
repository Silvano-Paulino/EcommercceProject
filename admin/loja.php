<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard-1.css">
    <link rel="stylesheet" href="../css/teste.css">
    <link rel="stylesheet" href="../css/d_minhaLoja.css">
    <!-- FONTS -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="../img/logotipo2.png" type="image/x-icon" />

    <title>Dashboard - Venda de Softwares Online</title>
</head>
<body>
    <div class="container">

        <aside>
            <div class="top">
                <div class="logo">
                    <img src="" alt="">
                    <h2><span class="danger">K</span>UTUCA<span class="danger">SOFT</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <img src="../icon/fecha.png" alt="" class="maluco">
                </div>
            </div>
            <div class="sidebar">
                <a href="dashboard-1.php">
                    <i class="fa fa-home"></i>
                    <h3>Home</h3>
                </a>
                <a href="d_minhaLoja.php" class="active">
                    <i class="fa fa-shopping-bag"></i>
                    <h3>Minha Loja</h3>
                </a>
                <div class="dropdown">
                    <a onclick="myFunction()">
                        <i class="fa fa-product-hunt"></i>
                        Produtos
                    </a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="c_produto.php">Cadastrar Produtos</a>
                        <a href="categoria.php">Categorias</a>
                        <a href="preco.php">Preco</a>
                        <a href="promo.php">Promoção</a>
                    </div>
                </div>
                <a href="d_pedidos.php">
                    <i class="fa fa-newspaper-o"></i>
                    <h3>Pedidos</h3>
                </a>
                <a href="d_mensagens.php">
                    <i class="fa fa-envelope"></i>
                    <h3>Mensagens</h3>
                    <span class="message-count">24</span>
                </a>
                <div class="dropdown">
                    <a onclick="usuar()">
                        <i class="fa fa-user"></i>
                        Usuarios
                    </a>
                    <div id="proDown" class="dropdown-content">
                        <a href="d_admin.php">Administradores</a>
                        <a href="d_clientes.php">Clientes</a>
                        <a href="d_pais.php">Pais</a>
                        <a href="d_provincia.php">Provincia</a>
                        <a href="d_municipio.php">Municipio</a>
                    </div>
                </div>
                <div id="baixar">
                    <a href="index.php" style="color: var(--color-danger);">
                        <i class="fa fa-sign-out"></i>
                        <h3>Logout</h3>
                    </a>
                </div>
            </div>
        </aside>

        <div id="modalizando" class="modalizando">
            <div class="modalizando-container">
                <div class="modalizando-content">
                    <section id="prodetails" class="section-p1">
                        <div class="single-pro-image">
                            <img src="img/4.jpg" id="MainImg" alt="">
                
                            <div class="small-img-group">
                                <div class="small-img-col">
                                    <img src="img/4.jpg" class="small-img" alt="">
                
                                </div>
                
                                <div class="small-img-col">
                                    <img src="img/3.jpg" class="small-img" alt="">
                
                                </div>
                
                                <div class="small-img-col">
                                    <img src="img/4.jpg" class="small-img" alt="">
                
                                </div>
                
                                <div class="small-img-col">
                                    <img src="img/4.jpg" class="small-img" alt="">
                
                                </div>
                                
                            </div>
                        </div>
                
                        <div class="single-pro-details">
                            <h6>Home / Sistema de Facturação</h6>
                            <h4>Sistema 4F</h4>
                            <h2>2.000.000 kz</h2>
                        
                            <h4>Detalhes do Produto</h4>
                            <span>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima eos neque perspiciatis alias odit voluptatibus quo culpa quod,
                                recusandae incidunt nulla repudiandae, tempore debitis accusamus aliquid dolorum ipsum deleniti!
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Cupiditate quo, ipsum laudantium veritatis aut natus. Minus quo, odio quam exercitationem quibusdam explicabo nesciunt soluta fuga nemo placeat beatae dicta suscipit.
                            </span>
                
                        </div>
                    </section>

                    <div class="Fechar">
                        <button onclick="fechadoModal('modalizando')">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!------------END OF ASIDE------------->

        <main >
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="form-search">
                <input type="search" name="pesquisar" placeholder="Pesquisar...">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </div>
            
<!------------------------------PRODUTOS CADASTRADOS----------------->
            <h2 class="h2">Produtos cadastrado</h2>
            <div class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Imagem</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($obj['cod_produto']) ?></td>
                            <td><?php echo($obj['nome_produto']) ?></td>
                            <td><?php echo(mb_strcut($obj['descricao_produto'],0, 17). '...') ?></td>
                            <td><?php echo($obj['categoria_categorias']) ?></td>
                            <td><?php echo(number_format($obj['preco_preco'], 2, ',', '.')). ' Kz' ?></td>
                            <td><td><img src="Back-End/<?php echo($obj['capa_produto']) ?>" alt=""></td></td>
                            <td>
                               <button onclick="abertoModal('modalizando')" class="button"><i class="fa fa-eye"></i></button>
                               <button><i class="fa fa-edit"></i></button>
                               <button><i class="fa fa-times-circle"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-------------------AREA DOS PRODUTOS VENDIDOS-------------------------->
            <h2 class="h2">Produtos vendidos</h2>
            <div class="table-section">
                
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data de venda</th>
                            <th>Quantidade</th>
                            <th>Preço de vnda</th>
                            <th>Imagem</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($obj['cod_venda']) ?></td>
                            <td><?php echo($obj['nome_usuario']) ?></td>
                            <td><?php echo($obj['datVenda_venda']) ?></td>
                            <td><?php echo($obj['quantidade_venda']) ?></td>
                            <td><?php echo(number_format($obj['precoVenda_venda'], 2, ',', '.')). ' Kz' ?></td>
                            <td><img src="Back-End/<?php echo($obj['capa_produto']) ?>" alt=""></td>
                            <td>
                               <button onclick="abertoModal('modalizando')" class="button"><i class="fa fa-times-circle"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-------------------FIM DA AERA DOS PRODUTOS VENDIDOS------------------->
        </main>

        <!--END OF MAIN-->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i><img src="icon/menu.png" alt=""></i>
                </button>
                <div class="theme-toggler">
                    <i class="active"><img src="icon/sun.png" alt="" class="diminui"></i>
                    <i><img src="icon/moon_symbol_24px.png" alt="" class="diminui"></i>
                </div>
                <div class="profile">
                    <div class="info">
                        <p><b>Bruno</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/user/br.jpg" alt="">
                    </div>
                </div>
            </div>
            
            <!--------END OF RECENT UPDATES---------->
            
        </div>
    </div>
    <script>
        


        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = () => {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = () => {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = () => {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = () => {
            MainImg.src = smallimg[3].src;
        }
    </script>
  
    <script src="js/menuDrop.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/scriprtDash.js"></script>
</body>
</html>