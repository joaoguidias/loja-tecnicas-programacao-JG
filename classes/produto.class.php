<?php 
    class Produto{
        public string $nome ="";
        public float $preco = 0.00;
        
        public function Exibir(){
            echo "Nome: $this->nome - Valor:R$$this->preco<br>";
        }

    }
    


?>