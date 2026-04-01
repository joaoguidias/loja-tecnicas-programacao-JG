<?php
    class CategoriaDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }
        public function Inserir(){

        }
        public function Alterar(){

        }
        public function Excluir(){

        }
        public function BuscarTodas(){
            $sql = "SELECT * FROM categorias";
            try{
                
                $stm = $this->db->prepare($sql); //Prepara a query usando PDO.
                                                //$this->db é a conexão com o banco.
                                                //prepare() ajuda a evitar SQL Injection (mesmo sem parâmetros aqui, é uma boa prática).
                //executar
                $stm->execute();
                //fechar a conexao
                $this->db=null;
                return $stm->fetchAll(PDO::FETCH_OBJ);  //fetchAll() pega todos os resultados da query.
                                                        //PDO::FETCH_OBJ transforma cada linha em um objeto.
            }
            catch(PDOException $e){
                $this->db = null;
                echo $e.getCode();
                echo $e.getMessage();
                return "Problema ao buscar categorias";
                
            }
        }
        public function BuscarUma(){

        }
    }

?>