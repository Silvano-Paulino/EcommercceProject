<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" href="../css/dashboard-1.css">
    <link rel="stylesheet" href="../css/d_usuarios.css">
    

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
                <input type="search" name="" id="" placeholder="Pesquisar...">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </div>
            
            <div id="tab" style="display: none;">
                <div class="tab_1">
                    Admin
                </div>
                <div class="tab_2">
                    Cliente
                </div>
            </div>

            <div id="geral_1">
                <h2>Registrar administrador</h2>

                <div id="content-">
                    <div id="Admin">
                        <div id="perfil">
                            <div class="foto-content">
                                <img src="icon/p.png" alt="Foto de Perfil">
                            </div>
                           
                            <div class="foto">
                                <label for="file-preview-js" id="file-preview"><i class="fa fa-plus"></i></label>
                                <input type="file" id="file-preview-js" name="foto" placeholder="foto de perfll" accept="image/*" onchange="loaderFile(event)">
                            </div>
                            <div id="new">
                                <div class="close-js close-css">
                                   <i class="fa fa-close"></i>
                                </div>
                            </div>
                            <div class="editar-content">
                                <span>
                                    <i>Editar</i>
                                </span>
                            </div>
                        </div>    
                        <form >
                            <div class="f_conteudo">
                                <input type="text"  name="nome" placeholder="Nome">
                            </div>
                            <div class="f_conteudo">
                                <input type="password" name="senha" placeholder="Senha">
                            </div>
                            <div class="f_conteudo">
                                <input type="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="f_conteudo">
                                <input type="tel" name="telefone" placeholder="Telefone">
                            </div>
                            <div class="f_conteudo">
                                
                                    <select id="pais" required>
                                        <option selected disabled>País</option>
                                        <option value="<?php echo($obj['cod']) ?>"><?php echo($obj['pais']) ?></option>                            
                                    </select>
                            </div>
                               

                            <div class="f_conteudo">
                            <select id="provincia" required>
                                <option selected disabled>Provincia</option>
                                <option value="<?php echo($obj['cod_provincia']) ?>"><?php echo($obj['provincia_provincia']) ?></option>
                            </select>
                            </div>
        
                            <div class="f_conteudo">
                                <select name="municipio" id="municipio" required>
                                    <option selected disabled>Municipio</option>
                                        <option value="<?php echo($obj['cod_municipios']) ?>"><?php echo($obj['municipio_municipios']) ?></option>
                                </select>
                            </div>
        
                            <div class="f_conteudo">
                                <select name="nivel" id="nivel" required>
                                    <option value="nivel" selected disabled>Nível</option>
                                        <option value="<?php echo($obj['cod']) ?>"><?php echo($obj['nivel']) ?></option>
                                </select>
                            </div>
    
                        </form>
                    </div>
                    <div id="but">
                        <div><button onclick="generic_requi('Admin','usuario','add', null, 'foto', 'file-preview-js')">Enviar</button></div>
                        <div><button>Cancelar</button></div>
                    </div>
                </div>
            </div>

            <div id="titu">
                <h2>Administradores registrados</h2>
            </div>
            <div id="geral_2">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Senha</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Foto</th>
                            <th>Acções</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><?php echo ($obj['nome_usuario'])?></td>
                            <td><?php echo ($obj['senha_usuario'])?></td>
                            <td><?php echo ($obj['email_usuario'])?></td>
                            <td><?php echo ($obj['telefone_usuario'])?></td>
                            <td style="display: flex; align-items: center; justify-content: center;"><img src="Back-End/<?php echo($obj['foto_usuario']) ?>"></td>
                            <td><a><i class="fa fa-eye"></i></a> <a><i class="fa fa-edit"></i></a> <a><i class="fa fa-times-circle" onclick="generic_requi('geral_2', 'usuario', 'Delete', <?php echo($obj['cod']) ?>)"></i></i></a></td>
                        </tr>
                    </tbody>
                </table>    
            </div>
            
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
        </div>
    </div>

    <script> 
        var btnClose = document.querySelector('.close-js');
        var outPut = document.getElementById('new');
        
        var loaderFile = function(event) {

            var reader = new FileReader();

            reader.onload = function() {
                outPut.style.display = 'block';
                btnClose.style.display = "block";
                outPut.style.backgroundImage = "url("+reader.result+")";
            }

            reader.readAsDataURL(event.target.files[0]);
        }


        var editar = document.querySelector('.editar-content');
        var buttonFile = document.getElementById('file-preview');

        editar.addEventListener('click', function() {
            buttonFile.click();
        })

        btnClose.addEventListener('click', function() {
            btnClose.style.display= "none";
            outPut.style.backgroundImage="url('')";
        })

    </script>

    <script src="js/axios.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/menuDrop.js"></script>
    <script src="js/scriprtDash.js"></script>
</body>
</html>