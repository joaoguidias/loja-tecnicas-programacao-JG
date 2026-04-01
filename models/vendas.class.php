<?php
    class Vendas{
        public function __construct(private int $id_venda, private string $data_venda){}

        public function getId(){
            return $this->id_venda;
        }
        public function setIdUsuario(int $id_venda){
            $this->id_venda = $id_venda;
        }
        public function getData(){
            return $this->data_venda;
        }
        public function setData(){
            $this->data_venda = $data_venda ;
        }
    }
