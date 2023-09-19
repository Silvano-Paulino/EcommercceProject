<?php 

    session_start();

    require_once "php/banco.php";

    // CÓDIGO DO CADASTRO
    if(isset($_POST['salvar'])) {

        $nome       = $_POST['nome'];
        $senha      = md5($_POST['senha']);
        $tel        = $_POST['telefone'];
        $email      = $_POST['email'];
        $municipio  = $_POST['municipio'];
        $nivel      = "2";
        //$foto       = $_FILES['foto'];

        // CONFIGURAÇÃO DA FOTO
        $nome_foto = $foto['name'];
        $foto_permitida = ['jpg', 'png', 'jpeg'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $extensao = explode('.', $nome_foto);
        $extensao = end($extensao);

        if(in_array($extensao, $foto_permitida)) {
            // ONDE VAI SER SALVO
            $folder = "admin/upload/" .md5($nome_foto);

            // FUNÇÃO PARA MOVER AS FOTOS PARA UM DIRECTÓRIO
            move_uploaded_file($tmp_name, $folder);

            // ARMAZENANDO DADOS NUMA SESSÃO 
            $_SESSION['nome']  = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['foto']  = $folder;

            $request = $conexao->prepare("INSERT INTO usuario(codUser, nome, senha, email, telefone, foto, municipio, nivel) VALUES(DEFAULT, '$nome', '$senha', '$email', '$tel', '$folder', '$municipio', '$nivel') ");
            $conf = $request->execute();
    
            if($conf) {
                
                echo "<script>
                            alert('Uuário cadastrado com sucesso!');
                            window.location.href='index.php';
                        </script>";
    
    
            }else {
                echo "<script>
                    alert('Erro ao cadastrar. Tente mais tarde!');
                    window.location.href='cadastro.php';
                </script>";    
            }    
            
        }
    }

    // CÓDIGO DO LOGIN
    require_once "php/login.class.php";
    
    if(isset($_POST['btn_login'])) 
    {
        // CÓDIGO DE VERIFICAÇÃO DE DADOS NO FORM
        if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email'])) 
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            // INSTÂNCIA DA CLASS LOGIN
            $log = new Usuario();

            if($log->login($email, $senha) == true)
            {
                if(isset($_SESSION['email']))
                {
                    header("Location: index.php");   
                }
                else
                {
                    header("Location: login.php");    
                }
            }
            else
            {
                header("Location: login.php");
            }
        }
        else
        {
            header("Location: login.php");
        }
    
    }

?>