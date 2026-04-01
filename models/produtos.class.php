<?php
    class Produtos{
        public function __construct(private int $id_produto,private string $nome ,private string $descricao,private int $estoque, private float $preco){

        }
        public function getId(){
            return $this->id_produto;
        }
        public function setIdUsuario(int $id_produto){
            $this->id_produto = $id_produto;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            $this->nome = $nome ;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao(){
            $this->descricao = $descricao;
        }
        public function getEstoque(){
            return $this->estoque;
        }
        public function setEstoque(){
            $this->estoque = $estoque;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setPreco(){
            $this->preco = $preco;
        }


    }


?>