<?php
    class Produto3{
        public function __construct(private string $nome , private float $preco){

        }
        public function Exibir(){
            echo "Nome:$this->nome - Valor:R$$this->preco";
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }
        public function setPreco(float $preco){
            $this->preco = $preco;
        }


    }


?>