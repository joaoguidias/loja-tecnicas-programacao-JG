<?php 
    require_once "produto.class.php";
    require_once "produto2.class.php";
    require_once "produto3.class.php";
    require_once "fornecedor.class.php";
    
    $produto1 = new Produto();
    $produto2 = new Produto2("caneta",1.0);
    $produto3 = new Produto2(preco:25.0, nome:"Caderno");
    $produto4 = new Produto3("Livro", 50);
    $fornecedor1 = new Fornecedor("Lince Distribuidora de Bebidas", "111.111.111-11", "(14)98230-5613", "lince@gmail.com");
    $fornecedor2 = new Fornecedor("Lince Distribuidora de Bebidas", "111.111.111-11", "(14)98230-5613", "lince@gmail.com");


    //atribuindo valores para os atributos da classe produto
    $produto1->nome = "Lápis";
    $produto1->preco = 0.50;

    //mostrar dados que estão no objeto 

    echo "Objeto - Produto1 - {$produto1->nome}<br>";
    $produto2->Exibir();
    $produto1->Exibir();
    $produto4->Exibir();

    $produto4->setNome("Urso");
    $preco= 60;
    $produto4->setPreco($preco);
    echo "<br> Nome do produto:{$produto4->getNome()} - valor do produto: R$ {$produto4->getPreco()} <br> <hr> ";
    echo "<h1>Fornecedores</h1>";

    echo "Fornecedor: {$fornecedor->getRazao()} | Cnpj "
    



    /*
    echo "<pre>";
        var_dump($produto2);
    echo"</pre>";
    echo "<pre>";
        var_dump($produto3);
    echo"</pre>";
    */

?>