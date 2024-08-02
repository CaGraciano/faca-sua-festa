<?php 
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "loja_virtual";

$conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);

if(mysqli_connect_error()){
    echo "Problema com a conexão do banco de dados " . mysqli_connect_error() . '<br>'; 
} else {
    echo "Conectado com sucesso <br>";
}

$conexao->set_charset("utf8mb4");
?>