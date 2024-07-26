<?php

class ProductsController{
    //renderiza a pagina
    static function showIndexPage(){
        return view('pages/products/index.php');
    }

    //renderiza a pagina
    static function showCreatePage(){
        
        //cria o objeto atributteDAO
        $AtributtesDAO = new AtributtesDAO();
        //traz a function findSector
        $atributtes = $AtributtesDAO->findAll();
        
        return view('pages/products/create.php',[
            'atributtes' => $atributtes
        ]);
    }

    //cria um registro no banco
    static function createProduct(){
        //cria um novo objeto do tipo produto
        $product = new Product();

        //Pega as informações enviadas via form POST e adiciona no objeto produto
        // $product->sector = $_POST['sector'];
        // $product->type = $_POST['tipo'];
        // $product->brand = $_POST['marca'];
        // $product->flavor = $_POST['sabor'];
        // $product->size = $_POST['tamanho'];
        $atributte->name = $_POST['name'];
        $product->value = $_POST['value'];

        //Cria um novo objeto do tipo ProductDAO para salvar o objeto produto no banco de dados
        $productDAO = new ProductDAO();

        //Salva o objeto no banco de dados
        $productDAO->create($product);

        //Redirect
        redirect('/produtos/create');
    }

    //renderiza a pagina
    static function showEditPage(){
        return view('pages/products/edit.php');
    }
}