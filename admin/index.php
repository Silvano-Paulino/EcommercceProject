<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" href="../css/dashboard-1.css">
    
    <!-- FONTS -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="../img/logotipo2.png" type="image/x-icon" />

    <title>Dashboard - Vendas de softwares online</title>
</head>
<body>

    <div class="container">
        <!------------ START OF ASIDE ------------->
        <aside>
            <div class="top">
                <div class="logo">
                    <h2><span class="danger">K</span>UTUCA<span class="danger">SOFT</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <img src="../icon/fecha.png" alt="" class="maluco">
                </div>
            </div>
            <div class="sidebar">
                <a href="index.php" class="active">
                    <i class="fa fa-home"></i>
                    <h3>Home</h3>
                </a>
                <a href="loja.php">
                    <i class="fa fa-shopping-bag"></i>
                    <h3>Minha Loja</h3>
                </a>
                <div class="dropdown">
                    <a onclick="myFunction()">
                        <i class="fa fa-product-hunt"></i>
                        Produtos
                    </a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="produtos.php">Cadastrar Produtos</a>
                        <a href="categoria.php">Categorias</a>
                        <a href="preco.php">Preco</a>
                        <a href="promo.php">Promoção</a>
                    </div>
                </div>
                <a href="d_pedidos.php">
                    <i class="fa fa-newspaper-o"></i>
                    <h3>Pedidos</h3>
                </a>
                <a href="mensagens.php">
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
                        <a href="administradores.php">Administradores</a>
                        <a href="clientes.php">Clientes</a>
                        <a href="pais.php">Pais</a>
                        <a href="provincia.php">Provincia</a>
                        <a href="municipios.php">Municipio</a>
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
        <!------------END OF ASIDE------------->

        <!------------ START OF MAIN ------------->
        <main >
            <h1 class="no-print">Dashboard</h1>
            <h1 class="only-print">Relatório do Dashboard</h1>
            <div class="no-print">
                <div class="date">
                    <input type="date">
                </div>
            </div>
            <div class="no-print">
                <div class="form-search">
                    <input type="search" name="" id="" placeholder="Pesquisar...">
                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="insights" >
                <div class="sales">
                    <i class="fa fa-home"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Vendas</h3>
                            <h1>25,33</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="30" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Últimas 24 horas</small>
                </div>
                <!---------END OF SALES------------->
                <div class="expense">
                    <i class="fa fa-home"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Clientes</h3>
                            <h1>12,23</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Últimas 24 horas</small>
                </div>
                <!---------END OF SALES------------->
                <div class="income">
                    <i class="fa fa-home"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Renda Total</h3>
                            <h1>29,56kz</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>33%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Últimas 24 horas</small>
                </div>
                <!---------END OF SALES------------->
            </div>

            <div class="recent-orders">
                <h2>Pedidos Recentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Mensagem</th>
                            <th>Data Pedido</th>
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($obj['nome_usuario']) ?></td>
                            <td><?php echo($obj['pedido_pedidos']) ?></td>
                            <td><?php echo($obj['datPedido_pedidos']) ?></td>
                            <td class="primary" onclick="window.location.href=''">Detalhes</td>
                        </tr>
                    </tbody>
                </table>
                <div class="no-print">
                    <a href="d_pedidos.php">Mostrar todos</a>
                </div>
            </div>
        </main>
        <!-- END OF MAIN -->

        <div class="right">      
            <div class="top">
                <button id="menu-btn">
                    <i><img src="../icon/menu.png" alt=""></i>
                </button>
               <div class="no-print">
                    <div class="theme-toggler">
                        <i class="active"><img src="icon/sun.png" alt="" class="diminui"></i>
                        <i><img src="icon/moon_symbol_24px.png" alt="" class="diminui"></i>
                    </div>
               </div>
                <div class="profile">
                    <div class="info">
                        <p><b>Silvano</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../img/user/sil.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="recent-updates no-print">
                <h2>Administradores</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                        <img src="Back-End/<?php echo($obj['foto_usuario']) ?>">
                        </div>
                        <div class="message">
                            <p><b><?php echo($obj['nome_usuario']) ?></b> Tenha fé em ti próprio pois tu és capaz!</p>
                            <small class="text-muted">2 Minutos Atrás</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--------END OF RECENT UPDATES---------->
            <div class="sales-amalytics">
                <h2>Vendas</h2>
                <div class="item online">
                    <div class="icon">
                        <i><img src="icon/add_shopping_cart_16px.png" alt="" class="diminui-1"></i>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>PEDIDOS ON-LINE</h3>
                            <small class="text-muted">Últimas 24 horas</small>
                        </div>
                        <h2 class="sussecss">+39%</h2>
                        <h3>3849</h3>
                    </div>
                </div>
                
                <div class="item coustomers">
                    <div class="icon">
                        <i><img src="../icon/customer_32px.png" alt="" class="diminui-1"></i>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NOVOS CLIENTES</h3>
                            <small class="text-muted">Últimas 24 horas</small>
                        </div>
                        <h2 class="sussecss">+25%</h2>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="no-print">
                    <div class="item add-product" onclick="window.location.href='c_produto.php';" style="cursor: pointer;">
                        <div>
                            <i><img src="icon/plus_math_16px.png" alt="" class="diminui-1"></i>
                            <h3>Adicionar Produto</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../js/menuDrop.js"></script>
    <script src="../js/axios.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/scriprtDash.js"></script>
    
</body>
</html>