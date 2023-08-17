<?php
    class Usuario{
        private $con;
        public $nome;
        public $email;
        public $senha;

        function __construct($con) {
            $this->con = $con;
        }

        function set_nome($nome){
            $this->nome = $nome;
        }
        function set_email($email){
            $this->email = $email;
        }
        function set_senha($senha){
            $this->senha = $senha;
        }

        function get_nome(){
            return $this->nome;
        }
        function get_email(){
            return $this->email;
        }
        function get_senha(){
            return $this->senha;
        }

        function cadastrar($nome, $email, $senha) {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";

            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("sss", $nome, $email, $senha);

            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>