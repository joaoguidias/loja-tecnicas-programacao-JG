<?php
class Categorias{
    public function __construct(private int $id_categoria, private string $descricao){

    }
    public function getId(){
        return $this->id_categoria;
    }
    public function setId(int $id_categoria){
        $this->categoria = $categoria;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao(){
        $this->descricao = $descricao ;
    }
}