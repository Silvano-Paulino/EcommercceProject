<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" href="../css/dashboard-1.css">
    <link rel="stylesheet" href="../css/d_pedidos.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- ICONES-->
    <link rel="shortcut icon" href="../img/logotipo2.png" type="image/x-icon" />

    <title>Dashboard - Venda de Softwares Online</title>

    <style>
        .modalizando-content thead td:nth-child(3) {
            text-align: left;
        }
        
    </style>
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
                    <img src="icon/fecha.png" alt="" class="maluco">
                </div>
            </div>
            <div class="sidebar">
                <a href="dashboard-1.php">
                    <i class="fa fa-home"></i>
                    <h3>Home</h3>
                </a>
                <a href="d_minhaLoja.php">
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
                <a href="d_pedidos.php" class="active">
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

        <!------------END OF ASIDE------------->

        <main >
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="form-search">
                <input type="search" name="" id="" placeholder="Pesquisar...">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </div>
            
            <div class="recent-orders">
                <h2>Pedidos recentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Mensagen</th>
                            <th>Data de pedido</th>
                            <th>Estado</th>                            
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($obj['nome_usuario']) ?></td>
                            <td><?php echo($obj['pedido_pedidos']) ?></td>
                            <td><?php echo($obj['datPedido_pedidos']) ?></td>  

                            <td>
                                <select name="estado" id="estado">
                                    <option value="<?php echo($obj['cod']) ?>"><?php echo($obj['estado']) ?></option>
                                </select>
                            
                            </td>
                            <td class="primary" onclick="abertoModal('modalizando')">Detalhes</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div id="modalizando" class="modalizando">
                <div class="modalizando-container">
                    <div class="modalizando-content">
                        <table>
                            <thead>
                                <td><b>Nome</b></td>
                                <td><b>Data do Pedido</b></td>
                                <td><b>Pedido</b></td>
                            </thead>
                            <tbody>
                               <tr>
                                <tr>
                                    <td><?php echo($obj['nome_usuario']) ?></td>
                                    <td><?php echo($obj['datPedido_pedidos']) ?></td>  
                                    <td><?php echo($obj['pedido_pedidos']) ?></td>
                               </tr>
                            </tbody>
                        </table>

                        <div class="Fechar">
                            <button onclick="fechadoModal('modalizando')">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!------------END OF INSIGHTS-->
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
                        <p><b>Silvano</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/user/sil.jpg" alt="">
                    </div>
                </div>
            </div>
            
            <!--------END OF RECENT UPDATES---------->
            
        </div>
    </div>

    <script>
        
        function abertoModal(elementado) {
            let modol = document.getElementById(elementado);

            if(typeof modol == 'undefined' || modol == null) 
                return;

                document.body.style.overflow = 'hidden';
                modol.style.display = 'block';
            
        }

        function fechadoModal(elementado) {
            let modol = document.getElementById(elementado);

            if(typeof modol == 'undefined' || modol == null) 
                return;
                document.body.style.overflow = 'visible';
                modol.style.display = 'none';
            
        }
    </script>

    <script src="js/menuDrop.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/scriprtDash.js"></script>
</body>
</html>