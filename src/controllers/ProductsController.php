<?php

class ProductsController{
    //renderiza a pagina
    static function showIndexPage(){
        
        //cria o objeto ProductDAO
        $productDAO = new ProductDAO();
        //chama a function findAll
        $produtos = $productDAO->findAll();

        return view('pages/products/index.php',[
            'produtos' => $produtos
        ]);
    }

    //renderiza a pagina
    static function showCreatePage(){
        
        //cria o objeto attributeDAO
        $AttributeDAO = new AttributeDAO();
        //traz a function findAll
        $attribute = $AttributeDAO->findAll();
        
        return view('pages/products/create.php',[
            'attribute' => $attribute
        ]);
    }

    /**
     * Cria um novo produto
     *
     * @return void
     */
    static function createProduct(){
        $attributeOptionDAO = new AttributeOptionDAO();

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
    static function showEditPage(string $id){

        //cria o objeto do banco
        $productDAO = new ProductDAO();
        //traz as info do banco a partir do $id
        $product = $productDAO->findByID($id);

        //cria o objeto attributeDAO
        $attributeDAO = new AttributeDAO();
        //traz a function findAll
        $attribute = $attributeDAO->findAll();

        return view('pages/products/edit.php',[
            'attribute' => $attribute,
            'product' => $product
        ]);
    }

    //Atualiza um registro no banco
    static function editProduct($id){
        $attributeOptionDAO = new AttributeOptionDAO();

        //Cria um novo objeto do tipo product
        $productDAO = new ProductDAO();
        //cria um objeto do tipo product
        $product = $productDAO->findByID($id);

        //Pega as informações enviadas via formulario POST e atualiza no objeto pedido
        $product->price = $_POST['price'];
        $product->name  = $_POST['name'];
        $product->created_at  = $_POST['created_at'];

        // Percorre cada um dos attribute option ids enviado pelo formulario
        foreach ($_POST['attribute_option_ids'] as $attribute_option_id) {

            // Carrega a entidade do banco de dados pelo id passado
            $attribute_option = $attributeOptionDAO->findById($attribute_option_id);

            // Adiciona o attribute option no product
            $product->addAttributeOption($attribute_option);
        }

        //Salvar o objeto no banco
        $productDAO->edit($product);

        //Redirect
        redirect('/produtos');
    }

    //deleta um registro
    static function deleteProduct($id){
        //cria a instancia
        $productDAO = new ProductDAO();

        $productDAO->delete($id);

        //Redirect
        redirect('/produtos');
    }
}