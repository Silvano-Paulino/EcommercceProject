<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS-->
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/login.css">

        <!-- FONTS -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- ICONES-->
        <link rel="shortcut icon" href="img/logotipo2.png" type="image/x-icon" /> 

        <title> Login - Venda de Softwares Online</title>

    </head>
    <body>

        <main>
            <!-- FORMULÁRIO DE LOGIN -->
            <form class="login-form" method="POST" id="form_login" action="processa.php">
                <div class="form-control">
                    <input type="email" name="email" required>
                    <label for="email">E-mail</label>
                    <span></span>
                </div>

                <div class="form-control">
                    <input type="password" name="senha" required>
                    <label for="password">Senha</label>
                    <span></span>
                </div>

                <div class="botoes">
                    <button class="submit-btn" name="btn_login">Entrar</button>
                    <div class="esqueceu">
                        <div class="senhas-esqueceu">
                            <input type="checkbox"><span>Remember me</span>
                            <a href="#" class="forgot">Esqueceu sua senha?</a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn" onclick="window.location.href='cadastro.php'">Cadastra-se aqui</button>
            </form>
        </main>
        
       
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