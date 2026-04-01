<?php
    require_once "Models/Conexao.class.php";
    require_once "Models/CategoriaDAO.class.php";
    class CategoriaController
    {
        public function listar()
        {
            //buscar os dados para poder apresenar na view 
            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->buscarTodas();
            echo "<pre>";
            var_dump($retorno);
            echo "</pre>";
            //apresentá-los 
            require_once "Views/listar_categorias.php";
        }

    }

?>