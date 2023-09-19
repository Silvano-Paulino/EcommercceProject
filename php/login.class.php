<?php 

    class Usuario
    {
        public function login($email, $senha)
        {
            global $conexao;

            $sql = "SELECT *FROM usuario WHERE email = :email AND senha = :senha";
            $sql = $conexao->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();


            if($sql->rowCount() > 0)
            {
                $dados = $sql->fetch();

                $_SESSION['foto']   = $dados['foto'];
                $_SESSION['nome']   = $dados['nome'];
                $_SESSION['email']  = $dados['email'];

                return true;

            }
            else
            {
                return false;
            }
        }
    }

?>