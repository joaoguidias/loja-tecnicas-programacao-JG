<?php
    class Itens{
        public function __construct(private int $id_item, private string $nome, private int $qnt, private float $preco_unitario){

        }
        public function getId(){
            return $this->id_item;
        }
        public function setIdUsuario(int $id_item){
            $this->id_item = $id_item;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            $this->nome = $nome ;
        }
        public function getQnt(){
            return $this->qnt;
        }
        public function setQnt(int $qnt){
            $this->qnt = $qnt;
        }
        public function getPreco(){
            return $this->preco_unitario;
        }
        public function setPreco(){
            $this->preco_unitario = $preco_unitario ;
        }
    }