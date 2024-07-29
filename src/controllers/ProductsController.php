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

    /**
     * Cria um novo produto
     *
     * @return void
     */
    static function createProduct(){
        $attributeOptionDAO = new AtributtesOptionsDAO();

        //cria um novo objeto do tipo produto
        $product = new Product();
        
        // Preenche os campos do produto
        $product->price = $_POST['price'];
        $product->name  = $_POST['name'];

        // Percorre cada um dos attribute option ids enviado pelo formulario
        foreach ($_POST['attribute_option_ids'] as $attribute_option_id) {

            // Carrega a entidade do banco de dados pelo id passado
            $attribute_option = $attributeOptionDAO->findById($attribute_option_id);

            // Adiciona o attribute option no product
            $product->addAttributeOption($attribute_option);
        }

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