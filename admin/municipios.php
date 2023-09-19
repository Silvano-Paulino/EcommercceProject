<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS -->
    <link rel="stylesheet" href="../css/dashboard-1.css">
    <link rel="stylesheet" href="../css/d_produtos.css">
    <link rel="stylesheet" href="../css/elementar.css">

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

        <!------------END OF ASIDE------------->

        <main >
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="form-search">
                <input type="search" name="pesquisar" id="" placeholder="Pesquisar...">
                <button class="search-btn"><i class="fa fa-search"></i></button>
            </div>

            <div class="titulo-cadastrar">
                <h2>Cadastrar municipio</h2>
            </div>
            
            <section id="municipio" class="elementar">
                <div>
                    <label for="municipio">Município</label>
                    <input type="text" name="municipio">
                </div>
                <div>
                    <select name="provincia" id="provincia" required>
                        <option selected disabled>Provincia</option>
                        <option value="<?php echo($obj['cod']) ?>"><?php echo($obj['provincia_provincia']) ?></option>
                    </select>
                </div>
                <div>
                    <button onclick="generic_requi('municipio', 'municipios', 'add')">Cadastrar</button>
                </div>
            </section>

            <section id="mostrar">
                <h2>Municipios registrados</h2>
                <table>
                    <thead>
                        <th>Id</th>
                        <th>Municipio</th>
                        <th>Provincia</th>
                        <th>Acções</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($obj['cod_municipios']) ?></td>
                            <td><?php echo($obj['municipio_municipios']) ?></td>
                            <td><?php echo($obj['provincia_provincia']) ?></td>
                            <td><i class="fa fa-edit"></i> <i class="fa fa-times-circle" onclick="generic_requi('mostrar', 'municipios', 'Delete', <?php echo($obj['cod']) ?>)"></i></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main> 
        <!--END OF MAIN-->

        <div class="right reduzir-right">
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
                
        </div>
    </div>

    <script src="js/axios.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/menuDrop.js"></script>
    <script src="js/scriprtDash.js"></script>

</body>
</html>