<?php 
    require_once "produtos.class.php";
    require_once "fornecedor.class.php";
    require_once "usuarios.class.php";
    require_once "categorias.class.php";
    require_once "vendas.class.php";
    require_once "itens.class.php";
    
    //CRIANDO OBJETO USUARIO DA CLASSE USUARIOS 
    $usuario1 = new Usuarios(1, "Joao", "joao@gmail.com", "1234", "usuario");


    echo "<h1>Usuário:</h1>";
    echo "<br>ID do usuário: {$usuario1->getIdUsuario()}";
    echo "<br>Nome: {$usuario1->getNome()}";
    echo "<br>Email: {$usuario1->getEmail()}";
    echo "<br>Senha: {$usuario1->getSenha()}";
    echo "<br>Perfil: {$usuario1->getPerfil()}";

    //CRIANDO OBJETO FORNECEDOR1 DA CLASSES FORNECEDORES 
    $fornecedor1 = new Fornecedores(1,"Lince Distribuidora de Bebidas LTDA","11.111.111/111-00", "(14)123435-324", "lince@gmail.com");
    echo "<br><h1>Fornecedores:</h1>";
    echo "<br>ID do fornecedor: {$fornecedor1->getId()}";
    echo "<br>Razão Social: {$fornecedor1->getRazao()}";
    echo "<br>Celular: {$fornecedor1->getCelular()}";
    echo "<br>Email: {$fornecedor1->getEmail()}";

    //CRIANDO OBJETO PRODUTO DA CLASSE PRODUTOS
    $produto1 = new Produtos(1, 'Numark MIXTRACK PRO FX', "Controladora DJ profissional", 1, 2000.00);
    echo "<br><h1>Produtos:</h1>";
    echo "<br>ID do produto: {$produto1->getId()}";
    echo "<br>Nome: {$produto1->getNome()}";
    echo "<br>Descrição: {$produto1->getDescricao()}";
    echo "<br>Quantidade estoque: {$produto1->getEstoque()}";
    echo "<br>Valor unit: R$ {$produto1->getPreco()}";

    //CRIANDO CATEGORIA
    $brinquedo = new Categorias(1, "Brinquedos");
    echo "<br><h1>Categorias:</h1>";
    echo "<br>ID do categoria: {$brinquedo->getId()}";
    echo "<br>Nome: {$brinquedo->getDescricao()}";

    //CRIANDO 1 VENDA 
    $venda1 = new Vendas(1, "18/03/2026");
    echo "<br><h1>Vendas:</h1>";
    echo "<br>ID da venda: {$venda1->getId()}";
    echo "<br>Data da venda: {$venda1->getData()}";

    //CRIANDO 1 ITEM 
    $item1 = new Itens(1, "Pc gamer", 1, 3000.00);
    echo "<br><h1>Itens:</h1>";
    echo "<br>ID do item: {$item1->getId()}";
    echo "<br>Quantidade: {$item1->getQnt()}";
    echo "<br>Preco Unitario: R$ {$item1->getPreco()}";




    

    



    /*
    echo "<pre>";
        var_dump($produto2);
    echo"</pre>";
    echo "<pre>";
        var_dump($produto3);
    echo"</pre>";
    */

?>