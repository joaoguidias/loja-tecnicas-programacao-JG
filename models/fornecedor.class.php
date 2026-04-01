<?php
    class Fornecedores{
        public function __construct(private int $id_fornecedor,private string $razao_social, private string $cnpj, private string $celular, private string $email){

        }

        function getId(){
            return $this->id_fornecedor;
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
        public function setRazao(){
            $this->razao_social = $razao_social;
        }
        public function setCnpj(){
            $this->cnpj = $cnpj;
        }
        public function setCelular(){
            $this->celular = $celular;
        }
        public function setEmail(){
            $this->email = $email;
        }
        public function setId(){
            $this->id_fornecedor = $id_fornecedor;
        }

    }



?>