<?php 

    include_once "php/banco.php";

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Cadastro - Venda de Softwares Online</title>

    <!-- STYLE-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/d_usuarios.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">


    <!-- ICONES-->
    <link rel="shortcut icon" href="img/logotipo2.png" type="image/x-icon" />

</head>
<body>
    <div class="bodyElement">
        
    </div>

    <main>
        <form id="login-form" class="login-form" action="processa.php" method="POST" enctype="multipart/form-data">
            <div style="display:flex;align-items: center;justify-content: center;">
                <div id="perfil">
                    <div class="foto-content">
                        <img src="icon/p.png" alt="Foto de Perfil">
                    </div>
                    <div class="foto">
                        <label for="file-preview-js" id="file-preview"><i class="fa fa-plus"></i></label>
                        <input type="file" id="file-preview-js" name="foto" placeholder="foto de perfll"  onchange="loaderFile(event)">
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
            </div> 
            <div class="form-control">
                <input type="text" name="nome" required>
                <label for="nome">Nome</label>
                <span></span>
            </div>
            <div class="form-control">
                <input type="password" name="senha" required>
                <label for="senha">Senha</label>
                <span></span>
            </div>
            <div class="form-control">
                <input type="tel" name="telefone" required>
                <label for="telefone">Telefone</label>
                <span></span>
            </div>
            <div class="form-control">
                <input type="email" name="email" required>
                <label for="email">E-mail</label>
                <span></span>
            </div>
            <div class="select-">
                <select id="pais" required>
                    <option selected disabled>País</option>
                    <option disabled></option>

                    <?php 
                        // SELECT ALL COUNTRY
                        $request = $conexao->prepare("SELECT *FROM PAIS");
                        $request->execute();

                        foreach($request->fetchAll() as $obj) {
                    ?>
                        <option value="<?php echo($obj['codPais']) ?>"><?php echo($obj['pais']) ?></option>
                    <?php } ?>
                </select>
    
                <select id="provincia" required>
                    <option selected disabled>Provincia</option>
                    <option disabled></option>
                    
                    <?php 
                        // SELECT ALL PROVINCE
                        $request = $conexao->prepare("SELECT *FROM PROVINCIA");
                        $request->execute();

                        foreach($request->fetchAll() as $obj) {
                    ?>
                        <option value="<?php echo($obj['codProv']) ?>"><?php echo($obj['provincia']) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-control">
                <select name="municipio" id="municipio" required>
                   <option selected>Municipio</option>
                   <?php 
                        // SELECT ALL CITIES
                        $request = $conexao->prepare("SELECT *FROM MUNICIPIOS");
                        $request->execute();

                        foreach($request->fetchAll() as $obj) {
                   ?>
                    <option value="<?php echo($obj['codMuni']) ?>"><?php echo($obj['municipio']) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="btn-">
                <button type="submit" name="salvar" class="submit-btn">Enviar</button>
                <button type="submit" class="submit-btn">Cancelar</button>
           </div>
    
           <div class="span">
                <span>Já tenho uma conta! <a href="login.php">Login</a></span>
           </div>
               
        </form>
    </main>

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

    <script>

        const inputs = document.querySelectorAll('.form-control input');
        const labels = document.querySelectorAll('.form-control label');

        labels.forEach(label => {
            label.innerHTML = label.innerText
            .split('')
            .map((letter, idx) =>`<span style="transition-delay: ${idx + 50}ms">${letter}</span>`)
            .join('');
        })

    </script>

</body>
</html>