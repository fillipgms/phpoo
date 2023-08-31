<?php

class ProdutoRepositorio {
    private $conn;

    function __construct($conn){
        $this->conn = $conn;
    }
    
    public function cadastrar(Produto $produto) {
        $sql = "INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES 
            (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssd",
                        $produto->get_tipo(),
                        $produto->get_nome(),
                        $produto->get_descricao(),
                        $produto->get_imagem(),
                        $produto->get_preco()
                        );
        
        $stmt->execute();
        $stmt->close();
    }
    
}
?>