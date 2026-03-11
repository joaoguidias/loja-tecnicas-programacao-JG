<?php 
    class Produto2{
        
        public function __construct(
            public string $nome,
            public float $preco 
        ){}
        
        public function Exibir(){
            echo "Nome: $this->nome - Valor:R$$this->preco<br>";
        }

    }
    


?>