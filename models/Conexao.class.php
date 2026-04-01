<?php
    class Conexao{ 
        public function __construct(protected $db = null){
            $parametros = "mysql:host=localhost;dbname=lojajg";
            try{
                //fazer 

                $this -> db = new PDO($parametros, "root", ""); //fazendo conexao com banco de dados | primeiro passa os parametros, usuario, senha, 
            }  
            catch(PDOException $e){
                //erro no que esta fazendo 
                echo $e.getCode();//retorna codigo do erro 
                echo $e.getMessage();//retorna msg do erro
                die("Tente mais tarde! Problemas técnicos.");//mensagem generica de erro pro usuario 
            }
        }
    }
?>