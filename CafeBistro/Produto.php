<?php
class Produto {


    private string $nome;

    private string $tipo;

    private string $descricao;

    private string $imagem;

    private float $preco;

    public function __construct( $nome, $tipo, $descricao, $imagem, $preco)
    {

        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }

    public function get_id(){
        return $this->id;
    }
    public function get_nome(){
        return $this->nome;
    }
    public function get_tipo(){
        return $this->tipo;
    }
    public function get_descricao(){
        return $this->descricao;
    }
    public function get_imagem(){
        return $this->imagem;
    }
    public function get_preco(){
        return $this->preco;
    }
}
?>