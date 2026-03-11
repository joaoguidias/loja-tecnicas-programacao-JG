<?php
    class Fornecedor{
        public function __construct(private string $razao_social, private string $cnpj, private string $celular, private string $email){

        }

        public function Exibir(){
            echo "Razão Social: {$this->razao_social} | CNPJ:{$this->cnpj} | CELULAR: {$this->celular} | E-MAIL:{$this->email} <br>";
        }

        public function getRazao(){
            return $this->razao_social;
        }
        public function getCnpj(){
            return $this->cnpj;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function getEmail(){
            return $this->email;
        }
    }



?>