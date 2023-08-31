<?php
require "conexao.php";
require "Produto.php";
require "repositorio/ProdutoRepositorio.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    

    $produto = new Produto(
                        $tipo = $_POST["tipo"],
                        $nome = $_POST["nome"],
                        $descricao = $_POST["descricao"],
                        $imagem = $_POST["imagem"],
                        $preco = $_POST["preco"],
                        );

    $connect = new ProdutoRepositorio($conn);
    $connect->cadastrar($produto);
    header("Location: cadastrar-produto.php");
}
?>