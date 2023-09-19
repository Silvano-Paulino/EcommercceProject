<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS -->
    <link rel="stylesheet" href="../css/dashboard-1.css">
    <link rel="stylesheet" href="../css/d_produtos.css">

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
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </div>

            <div class="titulo-cadastrar">
                <h2>Cadastrar Produtos</h2>
            </div>

            <div  class="ver">

                <div class="form" id="cadastro">
                    <div class="alinhados cc">
                        <input type="text" id="nome" name="nome" required="Nome" placeholder="Nome">

                        <select name="preco" id="preco">
                            <option selected disabled>Preço</option>
                            <option value="<?php echo($obj['cod']) ?>"><?php echo($obj['preco']) ?></option>
                        </select>

                    </div>
                    <div class="alinhados">
                        <select name="categoria" id="categoria">
                            <option selected disabled>Categorias</option>
                            <option value="<?php echo($obj['cod']) ?>"><?php echo($obj['categoria']) ?></option>
                        </select>
                    </div>
                    <div class="alinhados">
                        <textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea>
                    </div>

                    <!-- Tab links -->
                    <div class="tab tabbutton">
                        <button class="tablinks">Foto Principal</button>
                        <button class="tablinks">Demais Fotos</button>     
                    </div>
                    
                    <!-- Tab content -->
                    <div id="London" class="tabcontent">
                        
                        <div class="alinha">
                            <label for="arquivo" id="mostrarFoto"> <i class="fa fa-upload"></i> &nbsp; Imagem do Produto</label>
                            <input type="file" id="arquivo" name="capa" class="bnvn" onchange="loaderFile(event)">
                            
                        </div>
                        <div id="prever">
                            <div class="editar-content">
                                <span>
                                    <i>Editar</i>
                                </span>
                        </div>
                            <div id="new">
                                <div class="close-preview-js close-preview" style="display: none;">x</div>
                            </div>                    
                        </div>     
                    </div>
                    
                   
                </div>

                <div id="Paris" class="tabcontent">
                        <div class="container-1" id="form_url">
                            <input type="file"  id="file-input" name="url" accept="image/png, image/jpeg" onchange="preview()" multiple >
                            <label for="file-input">
                                <i class="fa fa-upload"></i> &nbsp; Escolhe as fotos
                            </label>
                            <p id="num-of-files">No Files Chosen</p>
                            <div id="images"></div>
                        </div>
                </div>
               
                <div class="bota0-cadastrar">
                    <button class="btnCadastrar" type="submit" onclick="generic_requi('cadastro','produto','add',null,'capa','arquivo')">Cadastrar</button>
                    <button class="btnCadastrar-c">Cancelar</button>
                </div>
                
            </div>    
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
    
    <script>
        var btnClose = document.querySelector('close-preview-js');
                var loaderFile = function (event) {
                    var reader = new FileReader();
                    reader.onload = function() {      
                        var output = document.getElementById('new');
                        output.style.display="block";
                        output.style.backgroundImage="url("+reader.result+")"
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }
        
                var editarAvatar = document.querySelector(".editar-content");
                var buttonFile = document.querySelector('.bnvn');
                editarAvatar.addEventListener('click', function (){
                   buttonFile.click();
                })
    </script>

    <script src="js/menuDrop.js"></script>
    <script src="js/demaisFotos.js"></script>
    <script src="js/index.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/scriprtDash.js"></script>
</body>
</html>