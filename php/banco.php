<?php
    // CONEXAO COM O BANCO DE DADOS
    global $conexao;

    try {
        $conexao = new PDO("mysql:host=localhost;dbname=projecto_final", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {
        echo "ERRO: ".$e->getMessage();
    }
    
    

?>    