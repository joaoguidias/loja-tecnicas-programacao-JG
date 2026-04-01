<?php 
    class Usuarios{
        public function __construct(private int $id_usuario, private string $nome, private string $email, private string $senha, private string $perfil ){

        }
        public function getIdUsuario(){
            return $this->id_usuario;
        }
        public function setIdUsuario(int $id_usuario){
            $this->id_usuario = $id_usuario;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            $this->nome = $nome ;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail(){
            $this->email = $email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha(){
            $this->senha = $senha;
        }
        public function getPerfil(){
            return $this->perfil;
        }
        public function setPerfil(){
            $this->perfil = $perfil;
        }

    }
?>